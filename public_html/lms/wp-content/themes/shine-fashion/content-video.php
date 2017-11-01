<?php
/**
 * The template for displaying posts in the Video post format
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-main-content">
  	
	  <?php if (!is_single()) : ?>
	  
		<?php endif; ?>	
	
	 <div class="entry-content-other">
	 <div class="entry-main-header">
			<header class="entry-header">
				<?php 		
					if ( is_single() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					endif;
				?>
		  </header>
      <!-- .entry-header -->
	 </div>
    	  <div class="entry-content"> 
			
	 <div class="entry-meta-inner"> 
	  <div class="entry-content-date">
		  <?php tm_post_entry_date(); ?>
		</div>
	  <div class="entry-meta"> 
			  <?php if (is_single()):
					templatemela_categories_links(); 
				endif;?>	
			  <?php templatemela_tags_links(); ?>
			  <?php templatemela_author_link(); ?>
			  <?php templatemela_comments_link(); ?>
			  <?php edit_post_link( esc_html__( 'Edit', 'shine-fashion' ), '<span class="edit-link"><i class="fa fa-pencil"></i>', '</span>' ); ?>
	   </div>
	 <!-- .entry-meta -->
	  <?php the_content(); ?>
		</div>
      </div>
    </div>
    <!-- .entry-content-other -->
  </div>
  <!-- .entry-main-content -->
</article>
<!-- #post-## -->