<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()):the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="post">
		<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail( array(25,25) );?><?php the_title(); ?></a></h2>
		<p class="meta">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="more">Read full article</a>
			<b>&nbsp;|&nbsp;</b><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?>
		</p>
		<div class="entry">
			<?php if ($smartbiz->showFull() == 'true' ): 
				global $more;
				$more=1;
				the_content(); ?>
			<?php else : ?>
			<div class="excerpt"><?php if ( get_the_excerpt() != '' ){
					the_excerpt();
				}else{
					global $more;
					$more=0;
					the_content();
				} ?></div>
			<?php endif; ?>
			<div style="clear:both;"></div>
			<p><a href="<?php the_permalink() ?>" class="links">Read More</a></p>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	<div class="navigation">
		<div class="alignleft">
			<?php previous_posts_link('&laquo; Previous Entries') ?>
		</div>
		<div class="alignright">
			<?php next_posts_link('Next Entries &raquo;') ?>
		</div>
	</div>
	<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
