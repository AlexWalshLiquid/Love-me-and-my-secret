<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Templatemela
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,user-scalable=yes">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php templatemela_header(); ?>

<!--Display favivon -->
<?php tm_favicon(); ?>
	 
<style>
<?php templatemela_custom_css(); ?>
</style>	
<?php
if(is_rtl()):
	wp_enqueue_style('rtl', get_stylesheet_directory_uri() . '/rtl.css'); 
endif;
wp_head();
?> 
</head>
<body <?php body_class(); ?>>

<?php if ( get_option('tmoption_control_panel') == 'yes' ) do_action('tm_show_panel'); ?>

<div id="page" class="hfeed site">
<?php if ( get_header_image() ) : ?>
<div id="site-header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt=""> </a> </div>
<?php endif; ?>
<!-- Header -->
<?php templatemela_header_before(); ?>
<?php 
	$tm_page_layout = tm_page_layout(); 
	if( isset( $tm_page_layout) && !empty( $tm_page_layout ) ):
	$tm_page_layout = $tm_page_layout; 
	else:
	$tm_page_layout = '';
	endif;
?>
<?php  
if ( get_option('tmoption_header_layout') == 'style-3')  {
			get_template_part("templatemela/headers/header3");
		}
		else if ( get_option('tmoption_header_layout') == 'style-2') {
			get_template_part("templatemela/headers/header2");
		}		
		else {
			get_template_part("templatemela/headers/header1");
		}
?>
<!-- #masthead -->
<?php templatemela_header_after(); ?>
  

<?php templatemela_main_before(); ?>
<!-- Center -->
<?php 
$shop = '0';
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	if(is_shop())
		$tm_page_layout = 'wide-page';
		$shop = '1';
	endif;
?>
<div id="main" class="site-main <?php if (get_option('tmoption_show_topbar') == 'yes') echo "extra"; ?>">
<div class="main_inner">
	<!-- Start main slider -->
	<?php if (is_page_template('page-templates/home.php') ) : ?>
				<div id="revolutionslider">
					<div class="revolutionslider-inner">
						<?php if ( in_array( 'revslider/revslider.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>	
						<?php echo do_shortcode('[rev_slider '.get_option('tmoption_revslider_alias').']'); ?>
						<?php endif; ?>
					</div>
				</div>			
			<?php endif; ?>
	<!-- End main slider -->
	<?php if ( !is_page_template('page-templates/home.php')) : ?>
<div class="page-title header parallax-bg">
  <div class="page-title-inner">
    <h1 class="entry-title-main">
<?php	       
	   if($shop == '1') {
	       		if(is_shop()) :
		    		echo '';
				elseif(is_blog()):  ?>
					 <?php  echo get_the_title( get_option('page_for_posts', true));
				elseif(is_search()) : ?>
					<?php printf( esc_html__( 'Search Results for: "%s"', 'shine-fashion' ), get_search_query() ); 
				else :
				    the_title();
	        	endif; 	
	   }else {
			 if(is_blog()){  ?>
				 <?php  echo get_the_title( get_option('page_for_posts', true));
			}else if(is_search()) { ?>
				<?php printf( esc_html__( 'Search Results for: "%s"', 'shine-fashion' ), get_search_query() ); 
			}else {
				    the_title();
			}
		}  
	  ?>
    </h1>
    <?php templatemela_breadcrumbs(); ?>
  </div>
</div>
<?php endif; ?>
<?php 
if ( is_page_template('page-templates/home.php') || $tm_page_layout == 'wide-page' ) : ?>
<div class="main-content-inner-full">
<?php else: 
	if(is_archive() || is_tag() || is_404()) : ?>
		<div class="main-content">
	<?php else : ?>
		<div class="main-content-inner <?php echo esc_attr(tm_sidebar_position()); ?>">
	<?php endif; ?>
<?php endif; ?>
<?php templatemela_content_before(); ?>


