<header id="masthead" class="site-header style-2 <?php echo esc_attr(tm_sidebar_position()); ?> <?php echo esc_attr(tm_page_layout()); ?>" role="banner">
<?php if (get_option('tmoption_show_topbar') == 'yes') : ?>
    <div class="topbar-outer">
    	<div class="topbar-main">
		 <div class="topbar-left">
		 <?php if (get_option('tmoption_show_topbar_social') == 'yes') : ?>
		        <div class="res-icon"></div>
				<?php templatemela_get_topbar_social(); ?>
		  <?php endif; ?>  
		</div>
			<?php if ( has_nav_menu('header-menu') ||  in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>    
		<div class="topbar-right">
		   <div class="link-btn"><i class="fa fa-bars"></i></div>
		   <div class="header-links">
			<?php if ( has_nav_menu('header-menu') ) { ?>    
			<div class="header-menu-links">
							<?php 
							// Woo commerce Header Cart
							$tm_header_menu =array(
							'menu' => 'TM Header Navigation',
							'depth'=> 1,
							'echo' => false,
							'menu_class'      => 'header-menu', 
							'container'       => '', 
							'container_class' => '', 
							'theme_location' => 'header-menu'
							);
							echo wp_nav_menu($tm_header_menu);				    
							?>
			</div>
	 		<?php } ?> 
			<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
					<div class="header_login"><!-- Start header cart -->
						<div class="header_logout">					
							<?php
							$logout_url = '';
												
							if ( is_user_logged_in() ) {
								$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' ); 
								if ( $myaccount_page_id ) { 
								$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) ); 
								if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
								$logout_url = str_replace( 'http:', 'https:', $logout_url );
							} ?>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="account"><?php echo esc_html_e('Myaccount','shine-fashion'); ?></a>
							<a href="<?php echo esc_url($logout_url); ?>" class="logout" ><?php echo esc_html_e('Logout','shine-fashion'); ?></a>
							<?php }
							else { ?>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="login show-login-link" id="show-login-link" ><?php echo esc_html_e('Login/Register','shine-fashion'); ?></a>
							<?php } ?>   
						</div>
					</div>		
		    <?php endif; ?>	
			</div>
			<?php if (is_active_sidebar('header-search')) : ?>
			<div class="search-btn"><i class="fa fa-search"></i></div>
							<div class="header-search">
								<?php templatemela_get_widget('header-search');  ?>	
							</div>
			<?php endif; ?>	
			<?php if (get_option('tmoption_show_topbar_welcome') == 'yes') : ?>
			     <div class="welcome">
				<?php echo tm_get_site_name(); ?>
				</div>
		  <?php endif; ?>
			
			</div>
			<?php } ?>   
		</div>
	</div>
  <?php endif; ?>
  <div class="site-header-main">
    <div class="header-main">
	  <div class="header_left">
			       <?php if (get_option('tmoption_logo_image') != '') : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php tm_get_logo(); ?>
					</a>
					<?php else: ?>
					<h1 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					  <?php bloginfo( 'name' ); ?>
					  </a> </h1>
					<?php endif; ?>
					<?php if(get_option('tmoption_showsite_description') == 'yes') : ?>
					<h2 class="site-description">
					  <?php bloginfo( 'description' ); ?>
					</h2>
					<?php endif; // End tmoption_showsite_description ?>
        </div>
		<div class="header_right">
		    <div class="header_cart headercart-block">
								<?php 
									// Woo commerce Header Cart
									if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
									
									<div class="cart togg">
									<?php global $woocommerce;
									ob_start();?>						
									<div id="shopping_cart" class="shopping_cart tog" title="<?php esc_html_e('View your shopping cart', 'shine-fashion'); ?>">
									
									<a class="cart-contents" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', 'shine-fashion'); ?>"><?php echo sprintf(_n('%d Items', '%d Item', $woocommerce->cart->cart_contents_count, 'shine-fashion'), $woocommerce->cart->cart_contents_count);?><?php //echo $woocommerce->cart->get_cart_total(); ?></a>
									</div>	
									<?php global $woocommerce; ?>
									<?php templatemela_get_widget('header-widget'); ?>		
								</div>							
									<?php endif; ?>	
						</div>
				<div class="navigation-menu navigation-block ">
				  <div id="navbar" class="header-bottom navbar default">
							<nav id="site-navigation" class="navigation main-navigation" role="navigation">									
								<h3 class="menu-toggle"><?php esc_html_e( 'Menu', 'shine-fashion' ); ?></h3>
								<a class="screen-reader-text skip-link" href="#content" title="<?php esc_html_e( 'Skip to content', 'shine-fashion' ); ?>"><?php esc_html_e( 'Skip to content', 'shine-fashion' ); ?></a>	
								<div class="mega-menu">
									<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mega' ) ); ?>
								</div>
							</nav><!-- #site-navigation -->
					</div>
				</div>		
					
				
		  	</div>
	  </div>
	<?php templatemela_header_inside(); ?>	
	
    <!-- End header-main -->

  <!-- End site-main -->
	
	</div>
</header>