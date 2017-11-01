<?php
/**
 * The template for displaying posts in the Gallery post format
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-main-content">
  	
	<?php if ( is_search() || !is_single()) : ?>
  			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				  <div class="entry-thumbnail">
					<?php 
					the_post_thumbnail('blog-posts-list'); 
					$postImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
					?>
					<?php 
			if(!empty($postImage)): ?>
			<div class="entry-content-date">
		  			<?php tm_post_entry_date(); ?>
					</div>
				<div class="block_hover">
					<div class="links">
			 	  <a href="<?php echo esc_url($postImage); ?>" title="Click to view Full Image" data-lightbox="example-set" class="icon mustang-gallery"><i class="fa fa-search"></i></a> <a href="<?php echo esc_url(get_permalink()); ?>" title="Click to view Read More" class="icon readmore"><i class="fa fa-link"></i></a> 
					</div>
				</div>
			 <?php endif; ?>	
				  </div>	
			 <?php endif; ?>
  		
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
	<div class="entry-content-inner">
	
		<div class="entry-meta-inner">	
					
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
		</div>	
		</div>
      <?php if ( is_search() || !is_single()) : // Only display Excerpts for Search and not single pages ?>
      <div class="entry-summary">
        <div class="excerpt"> <?php echo tm_posts_short_description(); ?> </div>
      </div>
      <!-- .entry-summary -->
      <?php else : ?>
      <div class="entry-content">
       <?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'shine-fashion' ), allowed_html() ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'shine-fashion' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>
      <!-- .entry-content -->
      <?php endif; ?>
    </div>
    <!-- .entry-content-other -->
  </div>
  <!-- .entry-main-content -->
</article>
<!-- #post-## -->