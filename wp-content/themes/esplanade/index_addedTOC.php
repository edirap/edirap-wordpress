<?php get_header(); ?>
	<div id="container">
		<?php if( is_home() && ! is_paged() && esplanade_get_option( 'slider' ) ) : ?>
			<?php get_template_part( 'slider' ); ?>
		<?php endif; ?>
		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
			<div class="content-sidebar-wrap">
		<?php endif; ?>
		<section id="content" style="margin:0; padding:0">
			<?php if( ( is_home() && is_paged() && esplanade_get_option( 'breadcrumbs' ) ) || ( ! is_home() && ( esplanade_get_option( 'breadcrumbs' ) || esplanade_get_option( 'location' ) ) ) ) : ?>
				<div id="location">
					<?php if( esplanade_get_option( 'breadcrumbs' ) ) : ?>
						<?php esplanade_breadcrumbs(); ?>
					<?php endif; ?>
					<?php if( ! is_home() && esplanade_get_option( 'location' ) ) : ?>
						<?php esplanade_current_location(); ?>
					<?php endif; ?>
				</div><!-- #location -->
			<?php endif; ?>
			<?php if( have_posts() ) : ?>
				<?php //while( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'content', get_post_format() ); ?>
				<?php //endwhile; ?>
				<article <?php post_class(); ?> id="taxonomy-content">
					<header class="entry-header">
					<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><a href="#" rel="bookmark" title="">Table of Contents</a></<?php esplanade_title_tag( 'post' ); ?>>
					</header><!-- .entry-header -->
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
				</article>
				
				<article <?php post_class(); ?> id="taxonomy-index">
					<header class="entry-header">
					<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><a href="#" rel="bookmark" title="">Index</a></<?php esplanade_title_tag( 'post' ); ?>>
					</header><!-- .entry-header -->
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
				</article>				
				<!-- <div class="clear"></div> -->				
				<?php //esplanade_posts_nav(); ?>
			<?php else : ?>
				<?php esplanade_404(); ?>
			<?php endif; ?>
		</section><!-- #content -->
		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
				<?php get_sidebar( 'left' ); ?>
			</div><!-- #content-sidebar-wrap -->
			<?php get_sidebar( 'right' ); ?>
		<?php elseif( ( 'no-sidebars' != esplanade_get_option( 'layout' ) ) && ( 'full-width' != esplanade_get_option( 'layout' ) ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>
	</div><!-- #container -->
<?php get_footer(); ?>