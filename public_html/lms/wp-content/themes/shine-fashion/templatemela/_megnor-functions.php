<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 * @author         TemplateMela
 * @version        Release: 1.0
 */
add_image_size('gallery-thumbnail', 145, 145, true);
if ( ! isset( $content_width ) )
	$content_width = 1150;
/**  Set Default options : Theme Settings  */
function tm_set_default_options()
{
	/*  Top Bar Settings  */
	if ( get_option('tmoption_header_layout') == 'style-2')  {
		add_option("tmoption_logo_image", get_stylesheet_directory_uri()."/images/megnor/logo2.png"); // set logo image	
	}
	else{
		add_option("tmoption_logo_image", get_stylesheet_directory_uri()."/images/megnor/logo.png"); // set logo image	
	}
	add_option("tmoption_logo_image_alt",'Shine'); // set logo image alt
	add_option("tmoption_showsite_description",'no'); // yes/no, control panel	 
	add_option("tmoption_contact_email",'mahesh@templatemela.com'); // yes/no, control panel
	add_option("tmoption_control_panel",'no'); // yes/no, control panel	
	add_option("tmoption_responsive",'yes'); // yes/no, responsive	
	add_option("tmoption_Socials_panel",'yes'); // yes/no, social panel
	add_option("tmoption_related_posts",'yes'); // yes/no, related posts
	add_option("tmoption_background_upload",""); // Default, texture specified image
	add_option("tmoption_texture",'body-bg.png'); // Default, extra texture image
	add_option("tmoption_back_repeat","repeat"); // background repeate
	add_option("tmoption_back_position","top+left"); // background position
	add_option("tmoption_back_attachment","scroll"); // background attachment
	add_option("tmoption_bkg_color","FFFFFF"); // background color
	add_option("tmoption_bodyfont_color","6d6d6d"); // body font color
	add_option("tmoption_bodyfont",'Open+Sans'); // Open Sans	
	add_option("tmoption_bodyfont_other",'Arial'); // Arial	
	add_option("tmoption_button_color","FFFFFF"); // button color
	add_option("tmoption_button_color_opacity","0"); // button color opacity
	add_option("tmoption_button_hover_color","FFFFFF"); // button hover color
	add_option("tmoption_button_hover_color_opacity","0"); // button hover color
	add_option("tmoption_revslider_alias",'tm_homeslider');
	
	/*  Top Bar Settings  */
	
	add_option("tmoption_show_topbar_welcome","yes"); // show top bar welcome
	add_option("tmoption_topbar_welcome_text","Welcome To "); // show top bar welcome text
	
	
	add_option("tmoption_show_topbar","yes"); // show top bar
	add_option("tmoption_topbar_bkg_color","2c2c2c"); // topbar_bkg_color			
	add_option("tmoption_topbar_text_color","9c9c9c"); // topbar_text_color
	add_option("tmoption_topbar_link_color","9c9c9c"); // topbar_link_color
	add_option("tmoption_topbar_link_hover_color","FFFFFF"); // topbar_link_hover_color
	add_option("tmoption_top_menu_bg_color","f8f8f8"); // Top menu background color
	add_option("tmoption_top_menu_opacity","1"); // Top menu background opacity
	
	add_option("tmoption_top_menu_text_color","2C2C2C"); // Top menu text color
	add_option("tmoption_top_menu_texthover_color","FF5420"); // Top menu text hover color
	
	add_option("tmoption_show_topbar_contact","Yes"); // show contact informatio
	add_option("tmoption_topbar_phone_text","Call"); // set contact text
	add_option("tmoption_topbar_phone","00-0000-000"); // set contact number
	
	add_option("tmoption_show_free_shipping_block","Yes"); // show contact informatio
	add_option("tmoption_show_free_shipping_text","FREE SHIPPING ON OVER"); // set contact text
	add_option("tmoption_show_free_shipping_price","$75"); // set contact number
	
	add_option("tmoption_custom_banner","yes"); // Show Custom Banner
	add_option("tmoption_custom_text1","Extra 20% Off on New Arrivals"); // Custom Text 1
	add_option("tmoption_custom_text2","UPTO 80% Off + EXTRA 15% Off"); // Custom Text 2
	add_option("tmoption_custom_text3","Lakme Fashion Week Winter"); // Custom Text 3	
	add_option("tmoption_custom_desc1","No Minimum Purchase Value"); // Custom Text 1
	add_option("tmoption_custom_desc2","Happy Hours Extended"); // Custom Text 2
	add_option("tmoption_custom_desc3","what's trending the session"); // Custom Text 3	
	
	add_option("tmoption_show_topbar_social","yes"); // show_topbar_social
	add_option("tmoption_topbar_twitter","#"); // topbar_twitter
	add_option("tmoption_topbar_facebook","#"); // topbar_facebook
	add_option("tmoption_topbar_google_plus","#"); // topbar_google_plus
	add_option("tmoption_topbar_linkedin","#"); // topbar_linkedin
	add_option("tmoption_topbar_youtube",""); // topbar_youtube
	add_option("tmoption_topbar_rss",""); // topbar_rss
	add_option("tmoption_topbar_pinterest",""); // topbar_pinterest
	add_option("tmoption_topbar_skype",""); // topbar_skype
	

	/*  Header Settings  */	
	
	add_option("tmoption_header_layout","style-1"); // header background repeate
	add_option("tmoption_header_back_repeat","repeat"); // header background repeate
	add_option("tmoption_header_back_position","top+left"); // header background position
	add_option("tmoption_header_back_attachment","scroll"); // header background attachment	
	add_option("tmoption_header_bkg_color","FFFFFF"); // header background color	
	add_option("tmoption_header_bkg_opacity","1"); // header background opacity	
	add_option("tmoption_navfont",'Open+Sans'); // navigation menu font
	add_option("tmoption_navfont_other",'Arial'); // navigation menu specified font
	/*  Content Settings  */
	add_option("tmoption_h1font",'Raleway'); // h1 family google font
	add_option("tmoption_h1font_other",'Arial'); // h1 family specified font
	add_option("tmoption_h1color",'2C2C2C'); // h1 family font color	 
	add_option("tmoption_h2font",'Open+Sans'); // h2 family google font
	add_option("tmoption_h2font_other",'Arial'); // h2 family specified font
	add_option("tmoption_h2color",'2C2C2C'); // h2 family font color	
	add_option("tmoption_h3font",'Raleway'); // h3 family google font
	add_option("tmoption_h3font_other",'Arial'); // h3 family specified font
	add_option("tmoption_h3color",'2C2C2C'); // h3 family font color	
	add_option("tmoption_h4font",'Raleway'); // h4 family google font
	add_option("tmoption_h4font_other",'Arial'); // h4 family specified font
	add_option("tmoption_h4color",'2C2C2C'); // h4 family font color	
	add_option("tmoption_h5font",'Raleway'); // h5 family google font
	add_option("tmoption_h5font_other",'Arial'); // h5 family specified font 
	add_option("tmoption_h5color",'2C2C2C'); // h5 family font color	
	add_option("tmoption_h6font",'Raleway'); // h6 family google font
	add_option("tmoption_h6font_other",'Arial'); // h6 family specified font 
	add_option("tmoption_h6color",'2C2C2C'); // h6 family font color	
	add_option("tmoption_link_color","6d6d6d"); // link color
	add_option("tmoption_hoverlink_color","2C2C2C"); // link hovre color
	
	/*  Footer Settings  */	
	add_option("tmoption_footerbkg_color","2C2C2C"); // footer background color
	add_option("tmoption_footerlink_color","9A9A9A"); // footer link text color
	add_option("tmoption_footerhoverlink_color","FFFFFF"); // footer link hover text color
	add_option("tmoption_footerfont",'Open+Sans'); // footer google font
	add_option("tmoption_footerfont_other",'Arial'); // footer specified font
	add_option("tmoption_footer_slog",'Templatemela.'); // copyright statement : Theme By templatemela
	add_option("tmoption_footer_link",'https://www.google.co.in'); // copyright statement : Theme By templatemela
	
	/* Shop page settings */	
	add_option("tmoption_shop_items","9"); 
	add_option("tmoption_shop_items_per_row","3"); 
	add_option("tmoption_related_items","8"); 
	add_option("tmoption_upsells_items","8"); 
	add_option("tmoption_crosssell_items","");  
	add_option("tmoption_single_sidebar","no");
	
	/* Slider settings */
	add_option("tmoption_slider_navigation","yes"); // displays slider navigation arrows
	add_option("tmoption_slider_pagination","yes"); // displays slider pagination
	add_option("tmoption_slide_animation_type","slide"); // slider pagination type image/bullet
	add_option("tmoption_slider_autoplay","yes"); // auto plays slider
	add_option("tmoption_slideshow_speed","7000"); // slider speed
	add_option("tmoption_animation_duration","600"); // slider duration
}
add_action('init', 'tm_set_default_options');

function tm_get_logo() {
	if ( get_option('tmoption_header_layout') == 'style-2')  {
			if (trim(get_option('tmoption_logo_image_alt')) != '') $logo_alt = get_option('tmoption_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
			if (trim(get_option('tmoption_logo_image')) != ''){ echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src="'.get_option('tmoption_logo_image').'" />';}
	        else{echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src=" '.get_template_directory_uri(). '/images/megnor/logo2.png">';}
	}
	else{	
			if (trim(get_option('tmoption_logo_image_alt')) != '') $logo_alt = get_option('tmoption_logo_image_alt') ; else $logo_alt = esc_attr(get_bloginfo('name', 'display' ));
			if (trim(get_option('tmoption_logo_image')) != ''){ echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src="'.get_option('tmoption_logo_image').'" />';}
			else{echo '<img alt="'.get_option('tmoption_logo_image_alt').'" src=" '.get_template_directory_uri(). '/images/megnor/logo.png">';}
	}
}
function tm_get_sort_column() {
	$sort_column=''; 
	if(trim(get_option('tmoption_navigation_type'))=='categories'){
		if( trim(get_option('tmoption_navigation_sort_column')) =='id' || trim(get_option('tmoption_navigation_sort_column'))=='menu_order')
			$sort_column = 'ID';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='name' || trim(get_option('tmoption_navigation_sort_column'))=='post_title')
			$sort_column = 'name';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='count')
			$sort_column = 'count';
	}
	elseif(trim(get_option('tmoption_navigation_type'))=='pages'){
		if(trim(get_option('tmoption_navigation_sort_column'))=='id')
			$sort_column = 'ID';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='menu_order')
			$sort_column = 'menu_order';
		elseif(trim(get_option('tmoption_navigation_sort_column'))=='post_title' || trim(get_option('tmoption_navigation_sort_column'))=='name')
			$sort_column = 'post_title';
	}
	return $sort_column;
}


function tm_get_sort_order() {
	$sort_order='';
	if(trim(get_option('tmoption_navigation_sort_order'))=='asc')
		return 'asc';
	if(trim(get_option('tmoption_navigation_sort_order'))=='desc')
		return 'desc';
	return $sort_order;
}
function tm_get_all_categories() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$categories = wp_get_post_categories( $postid );
	$cats = ', ';
	foreach($categories as $c){
		$cat = get_category( $c );	
		$cats .= $cat->name. ',';
	}
	$cats=strtolower(rtrim($cats, " ,"));
	return $cats;
}
function tm_get_all_tags() {
	global $wp_query; 
	if (isset($wp_query->post->ID)) $postid = $wp_query->post->ID; 
	$alltags = wp_get_post_tags( $postid );
	$tags = ', ';
	foreach($alltags as $tag){
		$tags .= $tag->name. ',';
	}
	$tags=strtolower(rtrim($tags, " ,"));
	return $tags;
}

//Load responsive.css file in the header
function tm_responsive()
{
if(get_option('tmoption_responsive') == 'yes'):
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/responsive.css');
endif;
}
add_action('wp_enqueue_scripts','tm_responsive');

add_action( "admin_enqueue_scripts", 'templatemela_admin_scripts');
add_action( "admin_enqueue_scripts", 'templatemela_admin_styles');
add_action( "admin_enqueue_scripts", 'templatemela_admin_metabox_script');
add_action( "admin_enqueue_scripts", 'templatemela_admin_metabox_styles');
function templatemela_admin_scripts() {
	//Scripts	
	wp_enqueue_script( 'pscript_admin', get_template_directory_uri() . '/js/megnor/admin/pscript_admin.js');
	wp_enqueue_script( 'jscolor', get_template_directory_uri() . '/js/megnor/admin/jscolor/jscolor.js');
	wp_enqueue_script( 'jquery-easytabs-min', get_template_directory_uri() . '/js/megnor/admin/jquery.easytabs.min.js');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_template_directory_uri() . '/js/megnor/admin/custom.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');	
}
function templatemela_admin_styles() { 
	//Styles
	wp_enqueue_style('tm_admin', get_template_directory_uri() . '/css/megnor/admin/tm_admin.css');
	wp_enqueue_style('tab', get_template_directory_uri() . '/css/megnor/admin/tab.css');
	wp_enqueue_style('thickbox');
}
function templatemela_admin_metabox_script() { 
	//Scripts
	wp_enqueue_script( 'tm_metabox_script', get_template_directory_uri() . '/js/megnor/admin/tm_metabox_script.js' );
}
function templatemela_admin_metabox_styles() { 
	//Styles
	wp_enqueue_style('tm_metabox_style', get_template_directory_uri() . '/css/megnor/admin/tm_metabox_style.css');
}
/*function templatemela_info_page() {
	$locale_file = get_template_directory() . "/templatemela/admin/templatemela.php";
	if (is_readable( $locale_file ))
		get_template_part('templatemela/admin/templatemela');
}*/
function templatemela_theme_settings_page() {
	$locale_file = get_template_part('templatemela/admin/theme-setting');
	if (is_readable( $locale_file ))
		get_template_part( 'templatemela/admin/theme-setting');
}
function templatemela_hook_manage_page() {
	$locale_file = get_template_part('templatemela/admin/theme-hook') ;
	if (is_readable( $locale_file ))
		get_template_part('templatemela/admin/theme-setting');
}
function templatemela_add_admin_menu_separator($position) {
  global $menu;
  $index = 0;
  foreach($menu as $offset => $section) {
    if (substr($section[2],0,9)=='separator')
      $index++;
    if ($offset>=$position) {
      $menu[$position] = array('','read',"separator{$index}",'','wp-menu-separator');
      break;
    }
  }
  ksort($menu);
}

if ( ! function_exists( 'tm_get_site_name' ) ) :
function tm_get_site_name() {
	$name='';
	$name = get_option("tmoption_topbar_welcome_text"); // show top bar welcome text
	return $name.get_bloginfo( 'name' );
}
endif;

if ( ! function_exists( 'templatemela_admin_header_style' ) ) :
	function templatemela_admin_header_style() {}
endif;
/**
 * Sets the post excerpt length to 40 characters.
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 * @return int
 */
function templatemela_excerpt_length( $length ) {
	return 200;
}
remove_filter( 'excerpt_length', 'templatemela_excerpt_length' ); 
add_filter( 'excerpt_length', 'templatemela_excerpt_length' );
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
/**
 * Returns a "Continue Reading" link for excerpts
 * @return string "Continue Reading" link
 */
function templatemela_continue_reading_link() {
	return ' <a class="read-more-link" href="'. get_permalink() . '">' . esc_html__( 'Read More', 'shine-fashion' ) . '</a>';
}
add_filter( 'excerpt_length', 'templatemela_excerpt_length' );
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and templatemela_continue_reading_link().
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 * @return string An ellipsis
 */
function templatemela_auto_excerpt_more( $more ) {
	return  '&hellip;' .templatemela_continue_reading_link();
}
add_filter( 'excerpt_more', 'templatemela_auto_excerpt_more' );
/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function templatemela_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output = '&hellip;'. templatemela_continue_reading_link();
	}
	return $output;
}
/**
 * Deprecated way to remove inline styles printed when the gallery shortcode is used.
 * This function is no longer needed or used. Use the use_default_gallery_style
 * filter instead, as seen above.
 * @deprecated Deprecated in TemplateMela for WordPress 3.1
 * @return string The gallery style filter, with the styles themselves removed.
 */
function templatemela_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
// Backwards compatibility with WordPress 3.0.
if ( version_compare( $GLOBALS['wp_version'], '3.3.2', '<' ) )
	add_filter( 'gallery_style', 'templatemela_remove_gallery_css' );
/**
 * Return the URL for the first link found in the post content.
 *
 * @since Twenty Eleven 1.0
 * @return string|bool URL or false when no link is present.
 */
function templatemela_url_grabber() {
	if ( ! preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/is', get_the_content(), $matches ) )
		return false;
	return esc_url_raw( $matches[1] );
}
function templatemela_get_widget($location = '') {
	if ( is_active_sidebar($location) ) { 
		dynamic_sidebar($location); 
	}
}
if (version_compare( $GLOBALS['wp_version'], '3.3', '>=' )) 
	get_template_part('templatemela/widgets');	
/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 * This function uses a filter (show_recent_comments_widget_style) new in WordPress 3.1
 * to remove the default style. Using TemplateMela in WordPress 3.0 will show the styles,
 * but they won't have any effect on the widget in default TemplateMela styling.
 *
 */
function templatemela_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'templatemela_remove_recent_comments_style' );
function templatemela_get_pagination($range = 4){  
	// $paged - number of the current page  
	global $paged, $wp_query, $max_page;  
	// How much pages do we have?  
	if ( !$max_page ) {  
		$max_page = $wp_query->max_num_pages;  
	}  
	// We need the pagination only if there are more than 1 page  
	if($max_page > 1){  
		if(!$paged){  
			$paged = 1;  
		}  
		// On the first page, don't put the First page link  
		if($paged != 1){  
			echo '<a class="first" href=" '. get_pagenum_link(1) .' "> << </a>';  
		}
		// To the previous page  
		previous_posts_link(' < ');
		// We need the sliding effect only if there are more pages than is the sliding range  
		if($max_page > $range){  
		 // When closer to the beginning  
			 if($paged < $range){  
			   for($i = 1; $i <= ($range + 1); $i++){  
			   	 if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
			 // When closer to the end  
			 elseif($paged >= ($max_page - ceil(($range/2)))){  
			   for($i = $max_page - $range; $i <= $max_page; $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";   
			   }  
			 }  
			 // Somewhere in the middle  
			 elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){  
			   for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){  
				  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
				 echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
			   }  
			 }  
		}  
		// Less pages than the range, no sliding effect needed  
		else{  
		 for($i = 1; $i <= $max_page; $i++){  
		  if($i==$paged){$class = "current number"; }else { $class = "number"; } 
		   echo "<a class='".$class."' href='" . get_pagenum_link($i). "'>$i</a>";  
		 }  
		}  
		// Next page  
		next_posts_link(' > ');  
		// On the last page, don't put the Last page link  
		if($paged != $max_page){  
		 echo '<a class="last" href=" '. get_pagenum_link($max_page) .' "> >> </a>';  
		}  
	}  
}  	
function templatemela_posts_next_link_attributes($html){
	$html = str_replace('<a','<a class="next-post"',$html);
	return $html;
	}
	function templatemela_posts_previous_link_attributes($html){
	$html = str_replace('<a','<a class="prev-post"',$html);
	return $html;
	}
add_filter('next_post_link','templatemela_posts_next_link_attributes',10,1);
add_filter('previous_post_link','templatemela_posts_previous_link_attributes',10,1);
function templatemela_get_first_post_images($post_ID){
	global $post, $posts;
	$first_img_src = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	if (isset($matches[1][0]))
	$first_img_src = $matches[1][0];
	if(empty($first_img_src)){ 
		return 0;
	}
	return $first_img_src;

}
function templatemela_print_images_thumb($src,$alttext, $width=200,$height=200,$align='left')
{	
	$src = mr_image_resize($src, $width, $height, true, $align, false);
	if( empty ( $src ) || $src == 'image_not_specified' ):
		$src = get_template_directory_uri()."/images/megnor/placeholder.png";
		$src = mr_image_resize($src, $width, $height, true, $align, false);
	endif;
	$return = '';
	$return .= '<img src="'.$src.'"';
	$return .= " title='$alttext' alt='$alttext' width='$width' height='$height' />";	
	echo $return;
}
function templatemela_excerpt($limit) 
{
      $excerpt = explode(' ', templatemela_strip_images(strip_tags(get_the_excerpt())), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&nbsp;.<div class="read-more"><a class="read-more-link" href="'.get_permalink().'">Read More</a></div>';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}
function templatemela_blog_post_excerpt($limit) 
{
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'&nbsp;...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
}
function templatemela_portfolio_excerpt($limit) 
{
    $contents = substr(templatemela_strip_images(strip_tags(get_the_excerpt())),0,$limit);	
	$excerpt = $contents; if (strlen($contents) >= $limit){ $excerpt .= '&hellip;'; }
  	return $excerpt;
}
if ( ! function_exists( 'tm_go_top' ) ) :
function tm_go_top(){ ?>
<div class="backtotop"><a style="display: none;" id="to_top" href="#"></a></div>
<?php } 
endif;

if ( ! function_exists( 'tm_favicon' ) ) :
function tm_favicon() {
	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
		echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri() .'/templatemela/favicon.ico" />';
	}
}
endif;
add_action( 'wp_head', 'tm_favicon' ); 
add_action( 'admin_head', 'tm_favicon' );

if ( ! function_exists( 'templatemela_strip_images' ) ) :
function templatemela_strip_images($content){	
   $content = preg_replace('/<img[^>]+./','',$content);
   return preg_replace('/<\/?a[^>]*>/','',$content);
}
endif;
/**
 * Remove inline styles printed when the gallery shortcode is used.
 * Galleries are styled by the theme in TemplateMela's style.css. This is just
 * a simple filter call that tells WordPress to not use the default styles.
 */
add_filter( 'use_default_gallery_style', '__return_false' );
// Control Panel Tags Function Includes //
get_template_part('templatemela/controlpanel/tm_control_panel'); 
get_template_part('templatemela/admin/hook-functions'); 
get_template_part('templatemela/example');  
get_template_part('mr-image-resize');
//Adds woocommerce functions if active
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	get_template_part('templatemela/woocommerce-functions');
endif;


/**
 * Enqueue Templatemela Fonts
 */
function templatemela_load_fonts() {
    $fonts_url = '';
 
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'shine-fashion' );
	
    if ( 'off' !== $open_sans  ) {
        $font_families = array();
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:400,600,700';			
        }
 		
		$query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 		
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    } 
    return esc_url_raw( $fonts_url );
}

function google_fonts() {
    wp_enqueue_style( 'google_fonts', templatemela_load_fonts(), array(), '1.0.0' );
}
add_action( 'init', 'google_fonts' );

/**
 * Enqueue Templatemela Fonts
 */

 
// Templatemela additional fonts from template  directory
if ( ! function_exists( 'templatemela_fonts' ) ) :
function templatemela_fonts() {
   wp_enqueue_style('fonts', get_template_directory_uri() . '/css/megnor/fonts/fonts.css');
}
add_action( 'init', 'templatemela_fonts' );
endif; 
// Templatemela additional fonts from template 
 
 
if ( ! function_exists( 'templatemela_load_styles' ) ) :
function templatemela_load_styles() {
	wp_enqueue_style('css_isotope', get_template_directory_uri() . '/css/isotop-port.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/megnor/custom.css');
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/megnor/owl.carousel.css');	
	wp_enqueue_style('shadowbox', get_template_directory_uri() . '/css/megnor/shadowbox.css');
	wp_enqueue_style('shortcode_style', get_template_directory_uri() . '/css/megnor/shortcode_style.css');
	wp_enqueue_style('tm-css-flexslider', get_template_directory_uri() . '/css/megnor/tm_flexslider.css');
	//Adds front end control panel css
	if(get_option('tmoption_control_panel') == 'yes'):
		wp_enqueue_style('tm_style', get_template_directory_uri() . '/css/megnor/tm-style.css');
	endif; 
	//Adds wocommerce style
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
		wp_enqueue_style('templatelema_woocommerce_css', get_template_directory_uri() . '/css/megnor/woocommerce.css');
	endif;
}
endif;
add_action('init', 'templatemela_load_styles');
/**
 * Enqueue Templatemela Scripts
 */
if ( ! function_exists( 'templatemela_load_scripts' ) ) :
function templatemela_load_scripts() {	
	wp_enqueue_script( 'jquery_jqtransform', get_template_directory_uri() . '/js/megnor/jquery.jqtransform.js', array(), '', false);
	wp_enqueue_script( 'jquery_jqtransform_script', get_template_directory_uri() . '/js/megnor/jquery.jqtransform.script.js', array(), '', false);
	wp_enqueue_script( 'jquery_custom_script', get_template_directory_uri() . '/js/megnor/jquery.custom.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_megnor', get_template_directory_uri() . '/js/megnor/megnor.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_carousel', get_template_directory_uri() . '/js/megnor/carousel.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_easypiechart', get_template_directory_uri() . '/js/megnor/jquery.easypiechart.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_custom', get_template_directory_uri() . '/js/megnor/custom.js', array(), '', false);
	wp_enqueue_script( 'jquery_owlcarousel', get_template_directory_uri() . '/js/megnor/owl.carousel.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_formalize', get_template_directory_uri() . '/js/megnor/jquery.formalize.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_respond', get_template_directory_uri() . '/js/megnor/respond.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_validate', get_template_directory_uri() . '/js/megnor/jquery.validate.js', array(), '', false);
	wp_enqueue_script( 'jquery_shadowbox', get_template_directory_uri() . '/js/megnor/shadowbox.js', array(), '', false);
	wp_enqueue_script( 'jquery_flexslider', get_template_directory_uri() . '/js/megnor/jquery.flexslider.js', array(), '', false);
	wp_enqueue_script( 'jquery_waypoints', get_template_directory_uri() . '/js/megnor/waypoints.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_megamenu', get_template_directory_uri() . '/js/megnor/jquery.megamenu.js', array(), '', false);	
	wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/js/megnor/easyResponsiveTabs.js', array(), '', false);
	wp_enqueue_script( 'jtree_min', get_template_directory_uri() . '/js/megnor/jquery.treeview.js', array(), '', false);
	wp_enqueue_script( 'jquery_scroll-min', get_template_directory_uri() . '/js/megnor/jquery.jscroll.min.js', array(), '', false);
	wp_enqueue_script( 'jquery_parallax', get_template_directory_uri() . '/js/megnor/parallex.js', array(), '', false);			
	?>
<!--[if lt IE 9]>
	<?php wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.js', array(), '', true); ?>
	<![endif]-->
<?php }
endif;
add_action( 'wp_enqueue_scripts', 'templatemela_load_scripts' );
/**
 * Enqueue Templatemela Control Panel Scripts
 */
 
if ( ! function_exists( 'templatemela_load_controlpanel_script' ) ) :
function templatemela_load_controlpanel_script() {
	if(get_option('tmoption_control_panel') == 'yes') : ?>
	<script type="text/javascript">
		var tm_theme_path = "<?php echo get_template_directory_uri() ?>";			
	</script> 
<?php
        wp_enqueue_script( 'jquery_colorpicker', get_template_directory_uri() . '/js/megnor/colorpicker/colorpicker.js', array(), '', true);
		wp_enqueue_script( 'jquery_cookie', get_template_directory_uri() . '/js/megnor/colorpicker/jquery.cookie.js', array(), '', true);
		wp_enqueue_script( 'jquery_pscript', get_template_directory_uri() . '/js/megnor/colorpicker/pscript.js', array(), '', true);	
	endif;	
}
endif;
add_action( 'wp_enqueue_scripts', 'templatemela_load_controlpanel_script' );



if ( ! function_exists( 'templatemela_breadcrumbs' ) ) :
function templatemela_breadcrumbs() { ?>
<div class="breadcrumbs">
  <?php if ( function_exists('yoast_breadcrumb') ) { ?>
  <?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
  <?php } ?>
</div>
<?php }
endif;
function templatemela_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="search-form" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . esc_html__( 'Search for:', 'shine-fashion' ) . '</label>
    <input class="search-field" type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input class="search-submit" type="submit" id="searchsubmit" value="'. esc_html__( 'Go', 'shine-fashion' ) .'" />
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'templatemela_search_form' );
if ( ! function_exists( 'templatemela_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own templatemela_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function templatemela_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
  <p>
    <?php esc_html_e( 'Pingback:', 'shine-fashion' ); ?>
    <?php comment_author_link(); ?>
    <?php edit_comment_link( esc_html__( '(Edit)', 'shine-fashion' ), '<span class="edit-link">', '</span>' ); ?>
  </p>
</li>
<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
  <div id="comment-<?php comment_ID(); ?>" class="comment-body">
    <div class="alignleft"> <?php echo get_avatar( $comment, 48 ); ?> </div>
    <div class="author-content">
      <h6><?php echo $comment->comment_author; ?></h6>
      <?php edit_comment_link( esc_html__( 'Edit', 'shine-fashion' ), ' ' ); ?>
      <div class="clearfix"></div>
      <abbr class="published" title=""><?php printf( esc_html__( '%1$s at %2$s', 'shine-fashion' ), get_comment_date(),  get_comment_time() ); ?></abbr> </div>
    <div class="comment-content">
      <?php comment_text(); ?>
      <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div>
    </div>
    <!--<div class="comment-author vcard">
			<?php //echo get_avatar( $comment, 40 ); ?>
			<?php //printf( esc_html__( '%s <span class="says">says:</span>', 'shine-fashion' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
    <?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation">
    <?php esc_html_e( 'Your comment is awaiting moderation.', 'shine-fashion' ); ?>
    </em> <br />
    <?php endif; ?>
  </div>
  <!-- #comment-##  -->
</li>
<?php
		break;
	endswitch; // end comment_type check
}
endif;
if ( ! function_exists( 'templatemela_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own templatemela_entry_meta() to override in a child theme.
 *
 * @since Templatemela 1.0
 *
 * @return void
 */
function templatemela_entry_meta() {
}
endif;
if ( ! function_exists( 'templatemela_get_topbar_contact' ) ) :
function templatemela_get_topbar_contact() {
	
	$tmoption_topbar_phone = get_option('tmoption_topbar_phone');
	$tmoption_topbar_phone_text = get_option('tmoption_topbar_phone_text');
	
	
	$output = '';
	$output .= '<div class="topbar-contact">';	
		if (!empty($tmoption_topbar_phone)) :
		$output .= '<div class="phone-content content"><span class="cal-us">'.$tmoption_topbar_phone_text.'</span><span class="contact-phone">'.$tmoption_topbar_phone.'</span></div>';							
		endif;
	$output .= '</div>';
	echo $output;
}
endif;



if ( ! function_exists( 'tmoption_show_free_shipping' ) ) :
function tmoption_show_free_shipping() {
	
	$tmoption_show_free_shipping_price = get_option('tmoption_show_free_shipping_price');
	$tmoption_show_free_shipping_text = get_option('tmoption_show_free_shipping_text');
		
	$output = '';
	$output .= '<div class="header-free-shipping-inner">';	
		if (!empty($tmoption_show_free_shipping_text) || !empty($tmoption_show_free_shipping_text) ) :
			$output .= '<span class="shipping-text">'.$tmoption_show_free_shipping_text.'</span><span class="shipping-price">'.$tmoption_show_free_shipping_price.'</span>';							
		endif;
	$output .= '</div>';
	echo $output;
}
endif;





if ( ! function_exists( 'templatemela_get_topbar_banner' ) ) :
function templatemela_get_topbar_banner() {	
	$tmoption_custom_text1 = get_option('tmoption_custom_text1');
	
	$tmoption_custom_text2 = get_option('tmoption_custom_text2');
	
	$tmoption_custom_text3 = get_option('tmoption_custom_text3');
	
	$output = '';
	$output .= '<div class="top-banner-inner container">';
	$output .= '<ul class="top-banner-container">';
		if (!empty($tmoption_custom_text1)):
		$output .= '<li class="content1 content"><div class="content-inner"><i class="fa fa-money"></i><div class="cms-title">'.$tmoption_custom_text1.'</div> </li>';	
		endif;
		if (!empty($tmoption_custom_text2)):
		$output .= '<li class="content2 content"><div class="content-inner"><i class="fa fa-rocket"></i><div class="cms-title">'.$tmoption_custom_text2.'</div> </div></li>';	
		endif;
		if (!empty($tmoption_custom_text3)):
		$output .= '<li class="content3 content"><div class="content-inner"><i class="fa fa-usd"></i><div class="cms-title">'.$tmoption_custom_text3.'</div> </li>';				
		endif;	
	$output .= '</ul>';	
	$output .= '</div>';
	echo $output;
}
endif;
if ( ! function_exists( 'templatemela_get_topbar_social' ) ) :
function templatemela_get_topbar_social() {
	$tmoption_topbar_twitter = get_option('tmoption_topbar_twitter');
	$tmoption_topbar_facebook = get_option('tmoption_topbar_facebook');
	$tmoption_topbar_google_plus = get_option('tmoption_topbar_google_plus');
	$tmoption_topbar_linkedin = get_option('tmoption_topbar_linkedin');
	$tmoption_topbar_youtube = get_option('tmoption_topbar_youtube');
	$tmoption_topbar_rss = get_option('tmoption_topbar_rss');
	$tmoption_topbar_pinterest = get_option('tmoption_topbar_pinterest');
	$tmoption_topbar_skype = get_option('tmoption_topbar_skype');
	$output = '';
	$output .= '<div class="topbar-social">';
		if (!empty($tmoption_topbar_twitter))
		$output .= '<div class="social-twitter content"><a href="'.$tmoption_topbar_twitter.'" target="_Blank"><i class="fa fa-twitter"></i></a></div>';
		if (!empty($tmoption_topbar_facebook))
		$output .= '<div class="social-facebook content"><a href="'.$tmoption_topbar_facebook.'" target="_Blank"><i class="fa fa-facebook"></i></a></div>';
		if (!empty($tmoption_topbar_google_plus))
		$output .= '<div class="social-google-plus content"><a href="'.$tmoption_topbar_google_plus.'" target="_Blank"><i class="fa fa-google-plus"></i></a></div>';
		if (!empty($tmoption_topbar_linkedin))
		$output .= '<div class="social-linkedin content"><a href="'.$tmoption_topbar_linkedin.'" target="_Blank"><i class="fa fa-linkedin"></i></a></div>';
		if (!empty($tmoption_topbar_youtube))
		$output .= '<div class="social-youtube content"><a href="'.$tmoption_topbar_youtube.'" target="_Blank"><i class="fa fa-youtube"></i></a></div>';
		if (!empty($tmoption_topbar_rss))
		$output .= '<div class="social-rss content"><a href="'.$tmoption_topbar_rss.'" target="_Blank"><i class="fa fa-rss"></i></a></div>';
		if (!empty($tmoption_topbar_pinterest))
		$output .= '<div class="social-pinterest content"><a href="'.$tmoption_topbar_pinterest.'" target="_Blank"><i class="fa fa-pinterest"></i></a></div>';
		if (!empty($tmoption_topbar_skype))
		$output .= '<div class="social-skype content"><a href="'.$tmoption_topbar_skype.'" target="_Blank"><i class="fa fa-skype"></i></a></div>';
	$output .= '</div>';
	echo $output;	
}
endif;
if ( ! function_exists( 'templatemela_sticky_post' ) ) :
function templatemela_sticky_post() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'shine-fashion' ) . '</span>';
}
endif;
if ( ! function_exists( 'templatemela_categories_links' ) ) :
function templatemela_categories_links() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( esc_html__( ', ', 'shine-fashion' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links"><i class="fa fa-folder-o"></i>' . $categories_list . '</span>';
	}
}
endif;
if ( ! function_exists( 'templatemela_tags_links' ) ) :
function templatemela_tags_links() {
	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', esc_html__( ', ', 'shine-fashion' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links"><i class="fa fa-tags"></i>' . $tag_list . '</span>';
	}
}
endif;
if ( ! function_exists( 'templatemela_author_link' ) ) :
function templatemela_author_link() {
	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><i class="fa fa-user"></i><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'shine-fashion' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;
if ( ! function_exists( 'templatemela_comments_link' ) ) :
function templatemela_comments_link() {
	//comments open
	if ( comments_open() && ! is_single() ) : ?>
<span class="comments-link"> <i class="fa fa-comment"></i>
<?php comments_popup_link( esc_html__( 'Leave a Comment', 'shine-fashion' ), esc_html__( '1 Comment', 'shine-fashion' ), esc_html__( '% Comments', 'shine-fashion' ) ); ?>
</span>
<?php endif; 
}
endif;
if ( ! function_exists( 'templatemela_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own templatemela_entry_date() to override in a child theme.
 *
 * @since Templatemela 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function templatemela_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'shine-fashion' );
	else
		$format_prefix = '%2$s';
	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( esc_html__( 'Permalink to %s', 'shine-fashion' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);
	if ( $echo )
		echo $date;
	return $date;
}
endif;
if ( ! function_exists( 'tm_post_entry_date' ) ) :
function tm_post_entry_date( ) {
	$date = get_the_date();	
	$day = get_the_date('j'); 
	$month = get_the_date('M');
	$year = get_the_date('Y'); 
	$hour = get_the_date('g'); 
	$min = get_the_date('i');  
	$time = get_the_date('A');  
	$date = '<div class="entry-date"><div class="day">'.$day.'</div><div class="month">'.$month.'</div></div>';
	echo $date;
	return $date;
}
endif;
if ( ! function_exists( 'templatemela_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Templatemela 1.0
 *
 * @return void
 */
function templatemela_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Templatemela 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'templatemela_attachment_size', array( 724, 724 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();
	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );
	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}
		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );
		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}
	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;
if ( ! function_exists( 'tm_posts_short_description' ) ) :
function tm_posts_short_description() {
	$tm_posts_short_description = get_post_meta(get_the_ID(), 'tm_posts_short_description', true);
	if(empty($tm_posts_short_description))
		$tm_posts_short_description = templatemela_excerpt(75);
	return $tm_posts_short_description;
}
endif;
if ( ! function_exists( 'tm_posts_show_thumbnail' ) ) :
function tm_posts_show_thumbnail() {
	$tm_posts_show_thumbnail = get_post_meta(get_the_ID(), 'tm_posts_show_thumbnail', true);
	if(empty($tm_posts_show_thumbnail))
		$tm_posts_show_thumbnail = '';
	return $tm_posts_show_thumbnail;
}
endif;
if ( ! function_exists( 'tm_page_layout' ) ) :
function tm_page_layout() {
	$page_layout_class = '';
	global $wp_query;	
	if (class_exists( 'WooCommerce' )) {
	if(is_shop()):
		$page_id = woocommerce_get_page_id('shop');
	else:
		$page_id = $wp_query->get_queried_object_id();
	endif;
	}else{
		$page_id = $wp_query->get_queried_object_id();
	}
	$tm_page_layout = get_post_meta($page_id, 'tm_page_layout', true);
	if(empty($tm_page_layout))
		$tm_page_layout = '';
		
	if($tm_page_layout == "box"):
		$page_layout_class = "box-page";
	elseif($tm_page_layout == "wide"):
		$page_layout_class = "wide-page";
	endif;
	return $page_layout_class;
}
endif;

if ( ! function_exists( 'tm_sidebar_position' ) ) :
function tm_sidebar_position() {
  $sidebar_class = '';
  global $wp_query;  
  if (class_exists( 'WooCommerce' )) {
  if(is_shop()):
    $page_id = woocommerce_get_page_id('shop');
  else:
    $page_id = $wp_query->get_queried_object_id();
  endif;
  }else{
    $page_id = $wp_query->get_queried_object_id();
  }
  $tm_sidebar_position = get_post_meta($page_id, 'tm_sidebar_position', true);
  if(empty($tm_sidebar_position))
    $tm_sidebar_position = '';
    
  if($tm_sidebar_position == "left"):
    $sidebar_class = "left-sidebar";
  elseif($tm_sidebar_position == "right"):
    $sidebar_class = "right-sidebar";
  elseif($tm_sidebar_position == "disabled"):
    $sidebar_class = "full-width";
  endif;
  return $sidebar_class;
}
endif;

if ( ! function_exists( 'tm_blog_box_display' ) ) :
function tm_blog_box_display() {
	$main_container = '';
	$tm_blog_box_display = get_post_meta(get_the_ID(), 'tm_blog_box_display', true);
	if(empty($tm_blog_box_display))
		$tm_blog_box_display = '';
	if($tm_blog_box_display == 'masonry'):
		$main_container = 'masonry';
	elseif($tm_blog_box_display == 'grid'):
		$main_container = 'grid';
	endif;
	return $main_container;
}
endif;
if ( ! function_exists( 'tm_blog_box_columns_class' ) ) :
function tm_blog_box_columns_class() {
	$columns_class = '';
	$tm_blog_box_columns = get_post_meta(get_the_ID(), 'tm_blog_box_columns', true);
	if(empty($tm_blog_box_columns))
		$tm_blog_box_columns = '';
	if($tm_blog_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_blog_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_blog_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'tm_blog_box_columns_number' ) ) :
function tm_blog_box_columns_number() {
	$columns_number = '';
	$tm_blog_box_columns = get_post_meta(get_the_ID(), 'tm_blog_box_columns', true);
	if(empty($tm_blog_box_columns))
		$tm_blog_box_columns = '';
	if($tm_blog_box_columns == 'two'):
		$columns_number = '2';
	elseif($tm_blog_box_columns == 'three'):
		$columns_number = '3';
	elseif($tm_blog_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'tm_blog_box_posts_per_page' ) ) :
function tm_blog_box_posts_per_page() {
	$tm_blog_box_posts_per_page = get_post_meta(get_the_ID(), 'tm_blog_box_posts_per_page', true);
	if(empty($tm_blog_box_posts_per_page))
		$tm_blog_box_posts_per_page = '';
	return $tm_blog_box_posts_per_page;
}
endif;
if ( ! function_exists( 'tm_blog_list_posts_per_page' ) ) :
function tm_blog_list_posts_per_page() {
	$tm_blog_list_posts_per_page = get_post_meta(get_the_ID(), 'tm_blog_list_posts_per_page', true);
	if(empty($tm_blog_list_posts_per_page))
		$tm_blog_list_posts_per_page = '';
	return $tm_blog_list_posts_per_page;
}
endif;
if ( ! function_exists( 'tm_blog_filter_columns_class' ) ) :
function tm_blog_filter_columns_class() {
	$columns_class = '';
	$tm_blog_filter_columns = get_post_meta(get_the_ID(), 'tm_blog_filter_columns', true);
	if(empty($tm_blog_filter_columns))
		$tm_blog_filter_columns = '';
	if($tm_blog_filter_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_blog_filter_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_blog_filter_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'tm_blog_filter_columns_number' ) ) :
function tm_blog_filter_columns_number() {
	$columns_number = '';
	$tm_blog_filter_columns = get_post_meta(get_the_ID(), 'tm_blog_filter_columns', true);
	if(empty($tm_blog_filter_columns))
		$tm_blog_filter_columns = '';
	if($tm_blog_filter_columns == 'two'):
		$columns_number = '2';
	elseif($tm_blog_filter_columns == 'three'):
		$columns_number = '3';
	elseif($tm_blog_filter_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'tm_testimonial_box_posts_per_page' ) ) :
function tm_testimonial_box_posts_per_page() {
	$tm_testimonial_box_posts_per_page = get_post_meta(get_the_ID(), 'tm_testimonial_box_posts_per_page', true);
	if(empty($tm_testimonial_box_posts_per_page))
		$tm_testimonial_box_posts_per_page = '';
	return $tm_testimonial_box_posts_per_page;
}
endif;
if ( ! function_exists( 'tm_testimonial_list_posts_per_page' ) ) :
function tm_testimonial_list_posts_per_page() {
	$tm_testimonial_list_posts_per_page = get_post_meta(get_the_ID(), 'tm_testimonial_list_posts_per_page', true);
	if(empty($tm_testimonial_list_posts_per_page))
		$tm_testimonial_list_posts_per_page = '';
	return $tm_testimonial_list_posts_per_page;
}
endif;
if ( ! function_exists( 'tm_testimonial_box_columns_class' ) ) :
function tm_testimonial_box_columns_class() {
	$columns_class = '';
	$tm_testimonial_box_columns = get_post_meta(get_the_ID(), 'tm_testimonial_box_columns', true);
	if(empty($tm_testimonial_box_columns))
		$tm_testimonial_box_columns = '';
	if($tm_testimonial_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_testimonial_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_testimonial_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	return $columns_class;
}
endif;
if ( ! function_exists( 'tm_testimonial_box_columns_number' ) ) :
function tm_testimonial_box_columns_number() {
	$columns_number = '';
	$tm_testimonial_box_columns = get_post_meta(get_the_ID(), 'tm_testimonial_box_columns', true);
	if(empty($tm_testimonial_box_columns))
		$tm_testimonial_box_columns = '';
	if($tm_testimonial_box_columns == 'two'):
		$columns_number = '2';
	elseif($tm_testimonial_box_columns == 'three'):
		$columns_number = '3';
	elseif($tm_testimonial_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'tm_staff_box_posts_per_page' ) ) :
function tm_staff_box_posts_per_page() {
	$tm_staff_box_posts_per_page = get_post_meta(get_the_ID(), 'tm_staff_box_posts_per_page', true);
	if(empty($tm_staff_box_posts_per_page))
		$tm_staff_box_posts_per_page = '';
	return $tm_staff_box_posts_per_page;
}
endif;
if ( ! function_exists( 'tm_staff_list_posts_per_page' ) ) :
function tm_staff_list_posts_per_page() {
	$tm_staff_list_posts_per_page = get_post_meta(get_the_ID(), 'tm_staff_list_posts_per_page', true);
	if(empty($tm_staff_list_posts_per_page))
		$tm_staff_list_posts_per_page = '';
	return $tm_staff_list_posts_per_page;
}
endif;
if ( ! function_exists( 'tm_staff_box_columns_class' ) ) :
function tm_staff_box_columns_class() {
	$columns_class = '';
	$tm_staff_box_columns = get_post_meta(get_the_ID(), 'tm_staff_box_columns', true);
	if(empty($tm_staff_box_columns))
		$tm_staff_box_columns = '';
	if($tm_staff_box_columns == 'two'):
		$columns_class = 'two-col';
	elseif($tm_staff_box_columns == 'three'):
		$columns_class = 'three-col';
	elseif($tm_staff_box_columns == 'four'):
		$columns_class = 'four-col';
	endif;
	$columns_class;
	return $columns_class;
}
endif;
if ( ! function_exists( 'tm_staff_box_columns_number' ) ) :
function tm_staff_box_columns_number() {
	$columns_number = '';
	$tm_staff_box_columns = get_post_meta(get_the_ID(), 'tm_staff_box_columns', true);
	if(empty($tm_staff_box_columns))
		$tm_staff_box_columns = '';
	if($tm_staff_box_columns == 'two'):
		$columns_number = '2';
	elseif($tm_staff_box_columns == 'three'):
		$columns_number = '3';
	elseif($tm_staff_box_columns == 'four'):
		$columns_number = '4';
	endif;
	return $columns_number;
}
endif;
if ( ! function_exists( 'tm_content_position' ) ) :
function tm_content_position() {
	$tm_content_position = get_post_meta(get_the_ID(), 'tm_content_position', true);
	if(empty($tm_content_position))
		$tm_content_position = '';
	return $tm_content_position;
}
endif;
if ( ! function_exists( 'templatemela_is_related_posts' ) ) :
function templatemela_is_related_posts() {
	$templatemela_is_related_posts = get_post_meta(get_the_ID(), 'tm_posts_show_related_posts', true);
	if(empty($templatemela_is_related_posts))
		$templatemela_is_related_posts = '';
	return $templatemela_is_related_posts;
}
endif;
if ( ! function_exists( 'templatemela_is_author_info' ) ) :
function templatemela_is_author_info() {
	$templatemela_is_author_info = get_post_meta(get_the_ID(), 'tm_posts_show_author_info', true);
	if(empty($templatemela_is_author_info))
		$templatemela_is_author_info = '';
	return $templatemela_is_author_info;
}
endif;
if ( ! function_exists( 'templatemela_shortcode_paging_nav' ) ) :
function templatemela_shortcode_paging_nav() {
    $output = '';
	if ( $GLOBALS['wp_query']->max_num_pages > 1 ) {
	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );
	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}
	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';
	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => wp_kses( __( '<i class="fa fa-angle-left"></i>', 'shine-fashion' ),allowed_html()),
		'next_text' => wp_kses( __( '<i class="fa fa-angle-right"></i>', 'shine-fashion' ),allowed_html()),
	) );
	
	if ( $links ) :
	$output .= '<nav class="navigation paging-navigation" role="navigation">';
		$output .= '<div class="pagination loop-pagination">';
		$output .= $links;
		$output .= '</div>';
	$output .= '</nav>';
	endif; 
	}
	return $output;
}
endif;
if ( !defined( 'TEMPLATEMELA_THEME_DIR' ) ) {
	define( 'TEMPLATEMELA_THEME_DIR', get_template_directory() );
}
if ( !defined( 'TEMPLATEMELA_THEME_URI' ) ) {
	define( 'TEMPLATEMELA_THEME_URI', get_template_directory_uri() );
}
if ( !defined( 'TEMPLAETMELA_EXTENSIONS_DIR' ) ) {
	define( 'TEMPLAETMELA_EXTENSIONS_DIR', trailingslashit( TEMPLATEMELA_THEME_DIR ) . 'templatemela' );
}
if ( !defined( 'TEMPLATEMELA_EXTENSION_URI' ) ) {
	define( 'TEMPLATEMELA_EXTENSION_URI', trailingslashit( TEMPLATEMELA_THEME_URI ) . 'templatemela' );
}
if ( !defined( 'RWMB_URL' ) ) {
	define( 'RWMB_URL', trailingslashit( trailingslashit( TEMPLATEMELA_EXTENSION_URI ) . 'meta-box' ) );
}
if ( !defined( 'RWMB_DIR' ) ) {
	define( 'RWMB_DIR', trailingslashit( trailingslashit( TEMPLAETMELA_EXTENSIONS_DIR ) . 'meta-box' ) );
}

/* Start  Metabox */
// Include the meta box script
	echo get_template_part( '/templatemela/meta-box/meta-box' );
// define global metaboxes array
global $TM_META_BOXES;
$TM_META_BOXES = array();
// include metaboxes
$metaboxes = array(
	'metaboxes-post.php',
	'metaboxes-common.php',
	'metaboxes-page.php',
	'metaboxes-testimonial.php',
	'metaboxes-staff.php'
);
foreach ( $metaboxes as $metabox ) {
	require_once get_template_directory() . '/templatemela/tm-meta-boxes' . '/' . $metabox ;		
}
/**
 * Register meta boxes
 *
 * @return void
 */
add_action( 'admin_init', 'rw_register_meta_box' );
function rw_register_meta_box()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) ) {
		return;
	}	
	global $TM_META_BOXES;	
	foreach ( $TM_META_BOXES as $meta_box ) {
		new RW_Meta_Box( $meta_box );
	}
}
/**
 * Localize meta boxes
 *
 * @return void
 */
function presscore_localize_meta_boxes() {
	global $TM_META_BOXES;
	$localized_meta_boxes = array();
	foreach ( $TM_META_BOXES as $meta_box ) {
		$localized_meta_boxes[ $meta_box['id'] ] = isset($meta_box['display_on'], $meta_box['display_on']['template']) ? (array) $meta_box['display_on']['template'] : array(); 
	}
	wp_localize_script( 'tm_metabox_script', 'tmMetaboxes', $localized_meta_boxes );
}
add_action( 'admin_enqueue_scripts', 'presscore_localize_meta_boxes', 15 );
/* End Metabox */


// Adds custom image height X width for small thumbnails
add_image_size( 'blog-posts-list', 885, 330, true );
add_image_size( 'small-thumb', 50, 50, true );
//Create HTML list of nav menu items and allow HTML tags.
class Description_Walker extends Walker_Nav_Menu { 
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty ( $item->classes ) ? array () : (array) $item->classes;	 
		$class_names = join(' ', apply_filters(	'nav_menu_css_class', array_filter( $classes ), $item ) );	 
		! empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
		// Build default menu items
		$output .= "<li id='menu-item-$item->ID' $class_names>";
		$attributes = '';	 
		! empty( $item->attr_title )
		and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';
		! empty( $item->target )
		and $attributes .= ' target="' . esc_attr( $item->target ) .'"';
		! empty( $item->xfn )
		and $attributes .= ' rel="' . esc_attr( $item->xfn ) .'"';
		! empty( $item->url )
		and $attributes .= ' href="' . esc_attr( $item->url ) .'"';
		// Build the description (you may need to change the depth to 0, 1, or 2)
		$description = ( ! empty ( $item->description ) and 1 == $depth ) ? '<span class="nav_desc">'. $item->description . '</span>' : '';		 
		$title = apply_filters( 'the_title', $item->title, $item->ID );		 
		$item_output = $args->before . "<a $attributes>" . $args->link_before . $title . '</a> ' . $args->link_after . $description . $args->after;
		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id  );
	}
} 
// Allow HTML descriptions in WordPress Menu
remove_filter( 'nav_menu_description', 'strip_tags' );
function templatemela_shop_body_classes( $classes ) {
if(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'left'){
	$classes[] = 'shop-left-sidebar '; 
	}elseif(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'right'){
	$classes[] = 'shop-right-sidebar '; 
	}elseif(isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] == 'full'){
	$classes[] = 'shop-full-width ';	
	}else{
	$classes[] = 'shop-left-sidebar' ;
}
	return $classes;
}
add_filter( 'body_class', 'templatemela_shop_body_classes' );
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) ||  (is_home()) ||  (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}


/* Related Product settings */
function related_products_args( $args ) {
  	$no = get_option("tmoption_related_items");	
	$args['posts_per_page'] = $no; 
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'related_products_args' );

/* Upsell Product settings */
function woocommerce_output_upsells() {
		$no1 = get_option("tmoption_upsells_items");	
	    woocommerce_upsell_display( $no1, 3); 
}
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

/* To display Wishlist in product block */
if ( in_array( 'yith-woocommerce-wishlist/init.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
if( ! function_exists( 'yith_wcwl_add_to_wishlist_in_shop' ) ){
    function yith_wcwl_add_to_wishlist_in_shop(){
        echo do_shortcode( "[yith_wcwl_add_to_wishlist]" );
    }
}
add_action( 'woocommerce_after_shop_loop_item', 'yith_wcwl_add_to_wishlist_in_shop', 5 );
endif;

/*	Product Navigation in shop page	 */
function tm_product_navigation()
{		
		global $post,$next,$previous;
		$current_url = get_permalink( $post->ID );
		$next_text = '';
		$previous_text = '';		
		
		// Get the previous and next product links
		$previous_link = get_permalink(get_adjacent_post(false,'',false)); 
		$next_link = get_permalink(get_adjacent_post(false,'',true));
		
		// Create the two links provided the product exists
		if ( $next_link != $current_url ) {
				$next = "<a href='" . $next_link . "'>" . $next_text . "</a>";
			}
			if ( $previous_link != $current_url ) {
				$previous = "<a href='" . $previous_link . "'>" . $previous_text . "</a>";
		}
		
		// Create the two links provided the product exists
			if ( $next_link != $current_url ) {
				$next_text = get_adjacent_post(false,'',true)->post_title;
				$next = "<a href='" . $next_link . "'>" . $next_text . "</a>";
			} 
			if ( $previous_link != $current_url ) {
				$previous_text = get_adjacent_post(false,'',false)->post_title;
				$previous = "<a href='" . $previous_link . "'>" . $previous_text . "</a>";
			}
			
		// Create HTML Output
		$output  = '<div class="tm_product_nav_buttons">'; 
		if ( $previous != '' )
			$output .= '<span class="previous"> ' . $previous . '</span>';
		if ( $next != '' )
			$output .= '<span class="next">' . $next .'</span>';
		$output .= '</div>';
		
		// Display the final output
		echo $output;
}
add_action( 'woocommerce_single_product_summary', 'tm_product_navigation', 5 );



/*	This function is used to convert hex color into rgb or rgba */

function tmhex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
		//Return default if no color provided
		if(empty($color))
          return $default; 
 
		//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        } 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        } 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        } 
        //Return rgb(a) color string
        return $output;
}
/*-----------------------------------------------------------------------------------*/
/*	Google Map  
/*-----------------------------------------------------------------------------------*/
function tm_googleMap($latlong, $text, $pin, $height, $id, $class) {
    	
		if (!$latlong) { $latlong = '-33.86938,151.204834'; }
		if (!$pin) { $pin = get_template_directory_uri().'/images/megnor/map-pin.png'; }
		if (!$height) { $height = ""; } else { $height = 'style="height:'.$height.'px;"'; }
		if (!$id) { $id = 0; }
		
		$text = str_replace(chr(13),'<br>',$text);
        $text = str_replace(chr(10),'',$text);

		return '<div id="map'.$id.'" class="google-map '.$class.'" '.$height.'></div>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript">
			function mapinitialize'.$id.'() {
				var latlng = new google.maps.LatLng('.$latlong.');
				var myOptions = {
					zoom: 17,
					center: latlng,
					scrollwheel: false,
					scaleControl: true,
					disableDefaultUI: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				var map = new google.maps.Map(document.getElementById("map'.$id.'"),myOptions);
				
				var image = "'.$pin.'";
				var marker = new google.maps.Marker({
					map: map, 
					icon: image,
					position: map.getCenter()
				});
				
				var contentString = "'.$text.'";
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
							
				google.maps.event.addListener(marker, "click", function() {
				  infowindow.open(map,marker);
				});												
			}
			mapinitialize'.$id.'();
		</script>';
}
function wc_remove_related_products( $args ) {
  return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);

/* for escaping i.e wp_kses( __()); the html element update to WP 4.3.1 */
function allowed_html() {
 $allowed_html = array(
		'span' => array(
				 'class' => array(),
				 'style' => array(),
				),
		'div' => array(
				 'class' => array(),
				 'style' => array(),
				),
		'a' => array(
				 'href' => array(),
				),
		'i' => array(
				 'class' => array(),
				),
		);
return  $allowed_html;
}
/* for escaping the html element update to WP 4.3.1 */

?>