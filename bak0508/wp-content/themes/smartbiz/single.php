<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="title">
				<a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_post_thumbnail( array(25,25) );?><?php the_title(); ?></a>
			</h2>
			<div class="entry">
				<?php
				the_content('<p class="serif">Read the rest of this entry &raquo;</p>');
				wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<div class="navigation" style="clear:both;">
					<div class="alignleft">
						<?php previous_post_link('%link','&laquo; Previous Entries'); ?>
					</div>
					<div class="alignright">
						<?php next_post_link('%link','Next Entries &raquo;');?>
					</div>
				</div>
				<br><br>
				<?php comments_template(); ?>
			</div>
			<div class="meta">
				<p>
						This entry was posted on <?php the_time( get_option( 'date_format' ) ) ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>
				</p>
			</div>
		</div>


	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	</div>
	<!-- End content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
