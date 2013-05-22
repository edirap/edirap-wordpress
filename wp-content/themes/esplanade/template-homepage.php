<?php
/*
Template Name: HomePage
*/
?>
<?php get_header(); ?>
	<div id="container" >
	<DIV style="float:left; margin-top:10px; width:50%;">
	<div style="margin-left: 5%;">
		<h2> Table of Contents </h2>
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
		<?php wp_list_categories( $args ); ?>
	</div>
	</DIV>

    <DIV style="float:right;margin-top:10px; width:50%;">
		<h2> Index </h2>
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
		<?php wp_list_categories( $args ); ?>
	</DIV>

	</div><!-- #container -->
<?php get_footer(); ?>