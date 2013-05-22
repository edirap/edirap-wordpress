<?php 
	$economy_terms = get_the_terms( $post->ID, 'content');
	//$economy_term = reset(get_the_terms( $post->ID, 'content')); 	
	foreach ($economy_terms as $tmp_term) {
		if($tmp_term->slug != 'review-of-individual-economies')
		{
			$economy_term = $tmp_term;
		}
	}	
?>
<article class="post" id="post-<?php the_ID(); ?>" style="padding: 1.5% 0;">
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
				<?php _e( 'Last modified','esplanade');?>: <?php the_modified_time( get_option( 'date_format' ) ); ?> | 
				<?php _e( 'Author(s)','esplanade');?>: <?php coauthors(); ?> | 
				<?php _e( 'Economy', 'esplanade' );?>: <?php echo $economy_term->name; ?> 
				<?php edit_post_link( __( 'Edit', 'esplanade' ), ' | ', '' ); ?>	
			</aside><!-- .entry-meta -->
		</header><!-- .entry-header -->
	<?php endif; ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<div class="clear"></div>
</article><!-- .post -->
<?php if( esplanade_is_teaser() ) : ?>
	<?php esplanade_teaser_clearfix(); ?>
<?php endif; ?>