<h3><a href="#"><?php the_title();?></a></h3>
<div>
<article class="post" id="post-<?php the_ID(); ?>">
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
			<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?php esplanade_title_tag( 'post' ); ?>>
	<?php if( is_paged() || ! esplanade_is_teaser() ) : ?>
			<aside class="entry-meta">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a> | 
				<?php _e( 'Filed under', 'esplanade' ); ?>: <?php the_category( ', ' ) ?>
				<?php edit_post_link( __( 'Edit', 'esplanade' ), ' | ', '' ); ?>
			</aside><!-- .entry-meta -->
		</header><!-- .entry-header -->
	<?php endif; ?>
	<div class="entry-content">
		<?php if( has_post_format( 'audio' ) ) : ?>
			<p><?php esplanade_post_audio(); ?></p>
		<?php elseif( has_post_format( 'video' ) ) : ?>
			<p><?php esplanade_post_video(); ?></p>
		<?php endif; ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	</div><!-- .entry-content -->	
	<div class="entry-summary">
		<?php //the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<div class="clear"></div>
</article><!-- .post -->
</div>
<?php if( esplanade_is_teaser() ) : ?>
	<?php esplanade_teaser_clearfix(); ?>
<?php endif; ?>