<?php
/*
Template Name: edirap
*/
?>
<?php get_header(); ?>
	<div id="container" >
	<DIV style="float:left; margin-top:10px; width:20%;">
	<div>
		<h3> Economy Covered </h3>
		<?php 
			//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

			$taxonomy     = 'content';
			$orderby      = 'name'; 
			$show_count   = 1;      // 1 for yes, 0 for no
			$pad_counts   = 1;      // 1 for yes, 0 for no
			$hierarchical = 1;      // 1 for yes, 0 for no
			$title        = '';

			$args = array(
			  'taxonomy'     => $taxonomy,
			  'orderby'      => $orderby,
			  'show_count'   => $show_count,
			  'pad_counts'   => $pad_counts,
			  'hierarchical' => $hierarchical,
			  'title_li'     => $title
			);
		?>
		<ul style="list-style-type:none;font-size:11px">
		<?php wp_list_categories( $args ); ?>
		</ul>
	</div>
	</DIV>
	<DIV style="float:left; margin-top:10px; width:60%;">
	<div>
		<h3> Recent updates </h3>
		<section id="content">
			<?php
				$args = array(
					'post_type' => 'section',
					'post_status' => 'publish',
					'order' => 'DESC',
					'posts_per_page' => 4,
				);
				$posts = new WP_Query( $args );	
			?>
			<?php if( $posts->have_posts() ) : ?>
				<?php while( $posts->have_posts() ) : $posts->the_post(); ?>
					<?php get_template_part( 'content', 'recentupdates' ); ?>
				<?php endwhile; ?>
				<div class="clear"></div>
				<?php esplanade_posts_nav(); ?>
			<?php else : ?>
				<?php esplanade_404(); ?>
			<?php endif; ?>
		</section><!-- #content -->		
	</div>
	</DIV>
    <DIV style="float:right;margin-top:10px; width:20%;">
		<h3> Sections </h3>
		<?php 
			//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

			$taxonomy     = 'index';
			$orderby      = 'name'; 
			$show_count   = 1;      // 1 for yes, 0 for no
			$pad_counts   = 1;      // 1 for yes, 0 for no
			$hierarchical = 0;      // 1 for yes, 0 for no
			$title        = '';

			$args = array(
			  'taxonomy'     => $taxonomy,
			  'orderby'      => $orderby,
			  'show_count'   => $show_count,
			  'pad_counts'   => $pad_counts,
			  'hierarchical' => $hierarchical,
			  'title_li'     => $title
			);
		?>
		<ul style="list-style-type:none;font-size:11px">
		<?php wp_list_categories( $args ); ?>		
		</ul>
	</DIV>

	</div><!-- #container -->
<?php get_footer(); ?>