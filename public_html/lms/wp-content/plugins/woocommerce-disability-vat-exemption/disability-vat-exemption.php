<?php
/*
Plugin Name: WooCommerce Disability VAT Exemption
Plugin URI: http://woothemes.com/woocommerce
Description: Lets charities and customers with a disability declare themselves VAT exempt. Requires tax rates for 'Zero Rate' set up. You can set up the zero rate to not apply to shipping via WooCommerce settings.
Version: 1.3.0
Author: WooThemes
Author URI: http://woothemes.com
Requires at least: 3.1
Tested up to: 3.2

	Copyright: © 2009-2011 WooThemes.
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/**
 * Required functions
 */
if ( ! function_exists( 'woothemes_queue_update' ) )
	require_once( 'woo-includes/woo-functions.php' );

/**
 * Plugin updates
 */
woothemes_queue_update( plugin_basename( __FILE__ ), '25db92962c597a8754e8a05b300c6c86', '18603' );

if ( is_woocommerce_active() ) {

	/**
	 * Localisation
	 **/
	load_plugin_textdomain( 'wc_disability_exemption', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	/**
	 * WC_Disability_VAT_Exemption class
	 **/
	if ( ! class_exists( 'WC_Disability_VAT_Exemption' ) ) {

		class WC_Disability_VAT_Exemption {

			var $checkout_message;
			var $disability_reason;
			var $disability_person_name;
			var $enable_charity_form;
			var $checkout_charity_message;
			var $charity_name;
			var $charity_registration_number;

			public function __construct() {

				$this->checkout_message         = get_option('woocommerce_disability_exemption_checkout_message');
				$this->enable_charity_form      = get_option('woocommerce_enable_charity_form');
				$this->checkout_charity_message = get_option('woocommerce_charity_exemption_checkout_message');

				// Init settings
				$this->settings = array(
					array(
						'name' 		=> __('Disability Message', 'wc_disability_exemption'),
						'desc' 		=> __('The message that appears at checkout above disability fields.', 'wc_disability_exemption'),
						'id' 		=> 'woocommerce_disability_exemption_checkout_message',
						'type' 		=> 'textarea',
						'css'		=> 'width:100%; height: 100px;'
					),
					array(
						'name' 		=> __('Show charity form?', 'wc_disability_exemption'),
						'desc' 		=> __('Enable the charity VAT exemption form?', 'wc_disability_exemption'),
						'id' 		=> 'woocommerce_enable_charity_form',
						'type' 		=> 'checkbox',
					),
					array(
						'name' 		=> __('Charity Message', 'wc_disability_exemption'),
						'desc' 		=> __('The message that appears at checkout above charity fields.', 'wc_disability_exemption'),
						'id' 		=> 'woocommerce_charity_exemption_checkout_message',
						'type' 		=> 'textarea',
						'css'		=> 'width:100%; height: 100px;'
					),
				);

				// Default options
				add_option( 'woocommerce_disability_exemption_checkout_message', __( "If you are chronically sick or have a disabling condition please fill in the fields below. Please note there are penalties for making false declarations.", 'wc_disability_exemption' ) );
				add_option( 'woocommerce_enable_charity_form', 'yes' );
				add_option( 'woocommerce_charity_exemption_checkout_message', __( "If you are a registered charity providing care or surgical treatment for persons the majority of whom are handicapped please fill in the fields below to declare VAT exemption. Please note there are penalties for making false declarations.", 'wc_disability_exemption' ) );

				// Admin
				add_action( 'woocommerce_settings_tax_options_end', array( $this, 'admin_settings' ) );
				add_action( 'woocommerce_update_options_tax', array( $this, 'save_admin_settings' ) );

				// Tax class filter
				add_filter( 'woocommerce_product_tax_class', array( $this, 'get_tax_class' ), 1, 2 );

				// Meta
				add_action( 'woocommerce_product_options_general_product_data', array( $this, 'write_panel' ) );
				add_action( 'woocommerce_process_product_meta', array( $this, 'write_panel_save' ) );

			   	// Actions/Filters
				add_action( 'woocommerce_after_order_notes', array( $this, 'exemption_field' ) );

				add_action( 'woocommerce_checkout_update_order_review', array( $this, 'ajax_update_checkout_totals' ) ); // Check during ajax update totals
				add_action( 'woocommerce_checkout_process', array( $this, 'process_checkout' ) ); // Check during checkout process

				add_action( 'woocommerce_checkout_update_order_meta', array( $this, 'update_order_meta' ) );

				// Email meta
				add_filter( 'woocommerce_email_order_meta_keys', array( $this, 'order_meta_keys' ) );
		    }

	        /*-----------------------------------------------------------------------------------*/
			/* Class Functions */
			/*-----------------------------------------------------------------------------------*/

			/**
			 * admin_settings function.
			 *
			 * @access public
			 * @return void
			 */
			public function admin_settings() {
				woocommerce_admin_fields( $this->settings );
			}

			/**
			 * save_admin_settings function.
			 *
			 * @access public
			 * @return void
			 */
			public function save_admin_settings() {
				woocommerce_update_options( $this->settings );
			}

			/**
			 * write_panel function.
			 *
			 * @access public
			 * @return void
			 */
			public function write_panel() {
		    	echo '<div class="options_group">';
		    	woocommerce_wp_checkbox( array( 'id' => 'disability_exemption', 'label' => __( 'Disability VAT exemption', 'wc_disability_exemption' ), 'description' => __( 'Enable this option if this product is VAT exempt for people with a disability.', 'wc_disability_exemption' ) ) );
		    	echo '</div>';
		    }

		    /**
		     * write_panel_save function.
		     *
		     * @access public
		     * @param mixed $post_id
		     * @return void
		     */
		    public function write_panel_save( $post_id ) {
		    	if ( isset( $_POST['disability_exemption'] ) )
		    		update_post_meta( $post_id, 'disability_exemption', 'yes' );
				else
					update_post_meta( $post_id, 'disability_exemption', 'no' );
		    }

			/**
			 * get_tax_class function.
			 *
			 * @access public
			 * @param mixed $tax_class
			 * @param mixed $product
			 * @return void
			 */
			public function get_tax_class( $tax_class, $product ) {
				if ( $this->get_session( 'has_disability' ) == '1' ) {
					$disability_exemption = get_post_meta( $product->id, 'disability_exemption', true );
					if ( $disability_exemption == 'yes' )
						$tax_class = 'Zero Rate';
				}
				if ( $this->get_session( 'is_charity' ) == '1' ) {
					$disability_exemption = get_post_meta( $product->id, 'disability_exemption', true );
					if ( $disability_exemption == 'yes' )
						$tax_class = 'Zero Rate';
				}
				return $tax_class;
			}

			/**
			 * exemption_field function.
			 *
			 * @access public
			 * @param mixed $woocommerce_checkout
			 * @return void
			 */
			public function exemption_field( $woocommerce_checkout ) {
				global $woocommerce;

				// Check cart contents for eligible items
				$eligible = false;
				foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {

					$_product = $values['data'];

					$disability_exemption = get_post_meta( $_product->id, 'disability_exemption', true );

					if ( $disability_exemption == 'yes' ) {
						$eligible = true;
						break;
					}
				}

				if ( ! $eligible )
					return;

				echo '<h3>' . __( 'VAT Exemption', 'wc_disability_exemption' ) . '</h3>';
				echo wpautop( '<small>' . wptexturize( $this->checkout_message ) . '</small>' );

				woocommerce_form_field( 'disability_reason', array(
					'type' 			=> 'text',
					'class' 		=> array( 'vat-number update_totals_on_change form-row-wide' ),
					'label' 		=> __( 'Reason for VAT exemption', 'wc_disability_exemption' ),
					'placeholder' 	=> __( '(optional) Enter a reason', 'wc_disability_exemption' ),
					));

				woocommerce_form_field( 'disability_person_name', array(
					'type' 			=> 'text',
					'class' 		=> array( 'vat-number update_totals_on_change form-row-wide' ),
					'label' 		=> __( 'Name of person to which VAT exemption applies', 'wc_disability_exemption' ),
					'placeholder' 	=> __( '(optional) If purchasing on behalf of someone else', 'wc_disability_exemption' ),
					));

				if ( $this->enable_charity_form == 'yes' ) {
					echo '<h3>' . __( 'Charity VAT Exemption', 'wc_disability_exemption' ) . '</h3>';
					echo wpautop( '<small>' . wptexturize( $this->checkout_charity_message ) . '</small>' );

					woocommerce_form_field( 'charity_name', array(
						'type' 			=> 'textarea',
						'class' 		=> array( 'update_totals_on_change form-row-wide' ),
						'label' 		=> __( 'Charity name/address', 'wc_disability_exemption' ),
						'placeholder' 	=> __( '(optional) Enter the name and address of your charity.', 'wc_disability_exemption' ),
						));

					woocommerce_form_field( 'charity_registration_number', array(
						'type' 			=> 'text',
						'class' 		=> array( 'charity-registration-number update_totals_on_change form-row-wide' ),
						'label' 		=> __( 'Charity registration number', 'wc_disability_exemption' ),
						'placeholder' 	=> __( '(optional) Registration number', 'wc_disability_exemption' ),
						));
				}
			}

			/**
			 * ajax_update_checkout_totals function.
			 *
			 * @access public
			 * @param mixed $form_data
			 * @return void
			 */
			public function ajax_update_checkout_totals( $form_data ) {
				global $woocommerce;

				parse_str( $form_data );

				if ( isset( $disability_reason ) ) {
					// Its set
					$this->disability_reason = woocommerce_clean( $disability_reason );

					if ( $this->disability_reason )
						$this->set_session( 'has_disability', 1 );
					else
						$this->unset_session( 'has_disability' );
				}

				if ( $this->disability_reason && isset( $disability_person_name ) ) {
					$this->disability_person_name = woocommerce_clean( $disability_person_name );
				}

				if ( isset( $charity_name ) && isset( $charity_registration_number ) ) {
					// Its set
					$this->charity_name = woocommerce_clean( $charity_name );
					$this->charity_registration_number = woocommerce_clean( $charity_registration_number );

					if ( $this->charity_name && $this->charity_registration_number )
						$this->set_session( 'is_charity', 1 );
					else
						$this->unset_session( 'is_charity' );
				}

			}

			/**
			 * process_checkout function.
			 *
			 * @access public
			 * @return void
			 */
			public function process_checkout() {
				global $woocommerce;

				$this->disability_reason 		= isset( $_POST['disability_reason'] ) ? woocommerce_clean( $_POST['disability_reason'] ) : '';
				$this->disability_person_name	= isset( $_POST['disability_person_name'] ) ? woocommerce_clean( $_POST['disability_person_name'] ) : '';

				if ( $this->disability_reason )
					$this->set_session( 'has_disability', 1 );
				else
					$this->unset_session( 'has_disability' );

				$this->charity_name = isset( $_POST['charity_name'] ) ? woocommerce_clean( $_POST['charity_name'] ) : '';
				$this->charity_registration_number = isset( $_POST['charity_registration_number'] ) ? woocommerce_clean( $_POST['charity_registration_number'] ) : '';

				if ( $this->charity_name && $this->charity_registration_number )
					$this->set_session( 'is_charity', 1 );
				else
					$this->unset_session( 'is_charity' );
			}

			/**
			 * update_order_meta function.
			 *
			 * @access public
			 * @param mixed $order_id
			 * @return void
			 */
			public function update_order_meta( $order_id ) {
				global $woocommerce;

				if ( $this->get_session( 'has_disability' ) == 1 && $this->disability_reason ) {
					update_post_meta( $order_id, 'VAT Exemption reason', $this->disability_reason);
					update_post_meta( $order_id, 'VAT Exemption person', $this->disability_person_name);

					$this->unset_session( 'has_disability' );
				}

				if ( $this->get_session( 'is_charity' ) == 1 && $this->charity_name && $this->charity_registration_number ) {
					update_post_meta( $order_id, 'Charity Name/Address', $this->charity_name );
					update_post_meta( $order_id, 'Charity Reg. No', $this->charity_registration_number );

					$this->unset_session( 'is_charity' );
				}

				update_post_meta( $order_id, 'Customer IP', $this->get_user_ip() );
			}

			/**
			 * order_meta_keys function.
			 *
			 * @access public
			 * @param mixed $keys
			 * @return void
			 */
			public function order_meta_keys( $keys ) {
				$keys[] = 'VAT Exemption reason';
				$keys[] = 'VAT Exemption person';
				$keys[] = 'Charity Name/Address';
				$keys[] = 'Charity Reg. No';
				$keys[] = 'Customer IP';
				return $keys;
			}

			/**
			 * get_user_ip function.
			 *
			 * @access public
			 * @return void
			 */
			public function get_user_ip() {
				return ( isset( $_SERVER['HTTP_X_FORWARD_FOR'] ) && ! empty( $_SERVER['HTTP_X_FORWARD_FOR'] ) ) ? $_SERVER['HTTP_X_FORWARD_FOR'] : $_SERVER['REMOTE_ADDR'];
			}

			/**
			 * set_session function.
			 *
			 * @access private
			 * @param mixed $name
			 * @param mixed $value
			 * @return void
			 */
			private function set_session( $name, $value ) {
				global $woocommerce;

				if ( version_compare( get_option( 'woocommerce_version', null ), '2.0', '<' ) ) {
					$_SESSION[ $name ] = $value;
				} else {
					$woocommerce->session->$name = $value;
				}
			}

			/**
			 * get_session function.
			 *
			 * @access private
			 * @param mixed $name
			 * @return void
			 */
			private function get_session( $name ) {
				global $woocommerce;

				if ( version_compare( get_option( 'woocommerce_version', null ), '2.0', '<' ) ) {
					return isset( $_SESSION[ $name ] ) ? $_SESSION[ $name ] : '';
				} else {
					return isset( $woocommerce->session->$name ) ? $woocommerce->session->$name : '';
				}
			}

			/**
			 * unset_session function.
			 *
			 * @access private
			 * @param mixed $name
			 * @return void
			 */
			private function unset_session( $name ) {
				global $woocommerce;

				if ( version_compare( get_option( 'woocommerce_version', null ), '2.0', '<' ) ) {
					unset( $_SESSION[ $name ] );
				} else {
					unset( $woocommerce->session->$name );
				}
			}

		}

		$WC_Disability_VAT_Exemption = new WC_Disability_VAT_Exemption();
	}
}