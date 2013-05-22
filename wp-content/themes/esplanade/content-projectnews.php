
	<?php if( has_post_thumbnail() ) : ?>
		<?php $thumb = ( esplanade_is_teaser() ? 'teaser-thumb' : 'blog-thumb' ); ?>
		<figure>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( $thumb ); ?>
			</a>
		</figure>
	<?php endif; ?>
	<?php if( is_paged() || ! esplanade_is_teaser() ) : ?>
		<header class="entry-header">
	<?php endif; ?>
			<h3 class="homepage-article-subject"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php if( is_paged() || ! esplanade_is_teaser() ) : ?>
			<aside class="homepage-post-meta">
				<?php _e( 'Published on','esplanade');?>: <?php the_time( get_option( 'date_format' ) ); ?> | 
				<?php _e( 'Author(s)','esplanade');?>: <?php coauthors(); ?> 
				<?php edit_post_link( __( 'Edit', 'esplanade' ), ' | ', '' ); ?>	
			</aside><!-- .entry-meta -->
		</header><!-- .entry-header -->
	<?php endif; ?>
	<div class="homepage-article-post">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
     <div class="homepage-article-link"><a href="<?php the_permalink(); ?>">Read More</a>
     </div><!-- end of homepage-artical-link -->
	<div class="clear"></div>
<?php if( esplanade_is_teaser() ) : ?>
	<?php esplanade_teaser_clearfix(); ?>
<?php endif; ?>