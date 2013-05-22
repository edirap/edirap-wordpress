<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()): ?>
	<div>
		<?php $post = $posts[0]; ?>
		<h2 class="pagetitle">
			<?php if (is_category()): ?>
				<?php printf( __ ( '&#8216;%s&#8217; Posts', 'smartbiz'), single_cat_title('', false)); ?>
			<?php elseif (is_tag()): ?>
				<?php printf( __ ( 'Posts tagged &#8216;%s&#8217;', 'smartbiz'), single_tag_title('', false)); ?>
			<?php elseif (is_day()): ?>
				Archive for <?php the_time( __ ( 'F jS, Y', 'smartbiz')); ?>
			<?php elseif (is_month()): ?>
			    Archive for	<?php the_time( __ ( 'F, Y', 'smartbiz')); ?>
			<?php elseif (is_year()): ?>
				Archive for	<?php the_time( __ ( 'Y', 'smartbiz')); ?>
			<?php elseif (is_author()): 
				$current_author = get_userdata($author);
				printf( __ ( 'Posts by %s', 'smartbiz'), $current_author->nickname); ?>
			<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
				Blog Archives
			<?php endif; ?>
		</h2>
		<div class="entry">&nbsp;</div>
	</div>
	
	<?php while ( have_posts() ): the_post(); ?>
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
	
	<div class="navigation">
		<div class="alignleft">
			<?php previous_posts_link('&laquo; Previous Entries') ?>
		</div>
		<div class="alignright">
			<?php next_posts_link('Next Entries &raquo;') ?>
		</div>
	</div>
	<?php else: ?>
	<div class="post">
		<h2 class="title">Not Found</h2>
	</div>
	<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
