<?php get_header(); ?>
	<div id="container">
		<?php if( is_home() && ! is_paged() && esplanade_get_option( 'slider' ) ) : ?>
			<?php get_template_part( 'slider' ); ?>
		<?php endif; ?>
		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
			<div class="content-sidebar-wrap">
		<?php endif; ?>
		<section id="content">
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
			<?php 
			/*$args = array(
					'post_type'	 =>	array('economy','section'),
					'post_status' =>	'publish',
					'content'	=> 'afghanistan',
					'order'     => 'DESC',
				);

			$wp_query = new WP_Query($args); */
			?>		
			<?php global $query_string; query_posts($query_string . "&order=ASC&posts_per_page=30"); ?>
			<?php if( have_posts() ) : ?>	
			<script type="text/javascript">		
			jQuery(function($) {
				$( "#accordion" ).accordion({ autoHeight: false });
			});
			</script>			
			<div class="demo">
			<div id="accordion">			
				<?php while( have_posts() ) : the_post(); ?>
					<?php if( get_post_type() == 'economy' ) : ?>
						<?php get_template_part( 'content', 'economy_all' ); ?>
					<?php endif; ?>				
				<?php endwhile; ?>
				<div class="clear"></div>
				<?php esplanade_posts_nav(); ?>
				
			</div><!-- End demo -->					
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