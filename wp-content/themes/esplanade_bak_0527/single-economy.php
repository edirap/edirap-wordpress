<?php get_header(); ?>
	<div id="container">
		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
			<div class="content-sidebar-wrap">
		<?php endif; ?>
		<section id="content" style="margin:0; padding:0">
			<?php if( have_posts() ) : the_post(); ?>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<div class="entry">
						<?php if( esplanade_get_option( 'breadcrumbs' ) ) : ?>
							<div id="location">
								<?php esplanade_breadcrumbs(); ?>
							</div><!-- #location -->
						<?php endif; ?>
						<?php esplanade_post_nav(); ?>
						<header class="entry-header">
							<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><?php the_title(); ?></<?php esplanade_title_tag( 'post' ); ?>>
							<aside class="entry-meta">
								<?php _e( 'Last modified','esplanade');?>: <?php the_modified_time( get_option( 'date_format' ) ); ?> | 
								<?php _e( 'Author(s)','esplanade');?>: <?php coauthors(); ?> | 
								<?php //the_tags( __( 'and tagged with: ', 'esplanade' ), ', ', '' ); ?>
								<?php echo get_the_term_list( $post->ID, 'index', 'Indexed with: ', ', ', '' ); ?>
								<?php edit_post_link( __( 'Edit', 'esplanade' ), ' | ', '' ); ?>		
							</aside><!-- .entry-meta -->
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php if( has_post_format( 'audio' ) ) : ?>
								<p><?php esplanade_post_audio(); ?></p>
							<?php elseif( has_post_format( 'video' ) ) : ?>
								<p><?php esplanade_post_video(); ?></p>
							<?php endif; ?>
							<table>
								<tr><td align="left"><?php echo('Domain Name: ')?></td><td align="left"><?php echo(types_render_field("domain", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Total population: ')?></td><td align="left"><?php echo(types_render_field("total-population", array())); ?></td></tr>
								<tr><td align="left"><?php echo('GDP: ')?></td><td align="left"><?php echo(types_render_field("gdp", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Key economic sectors: ')?></td><td align="left"><?php echo(types_render_field("key-economic-sectors", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Computers per 100 inhabitants: ')?></td><td align="left"><?php echo(types_render_field("computers", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Fixed-line telephones per 100 inhabitants: ')?></td><td align="left"><?php echo(types_render_field("fixed-trne-telephones", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Mobile phone subscribers per 100 inhabitants: ')?></td><td align="left"><?php echo(types_render_field("mobile-phone-subscribers", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Internet users per 100 inhabitants: ')?></td><td align="left"><?php echo(types_render_field("internet-users", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Domain names registered under '.types_render_field("domain", array()).': ')?></td><td align="left"><?php echo(types_render_field("domain-names-registered", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Broadband subscribers per 100 inhabitants: ')?></td><td align="left"><?php echo(types_render_field("broadband-subscribers", array())); ?></td></tr>
								<tr><td align="left"><?php echo('Internet domestic bandwidth: ')?></td><td align="left"><?php echo(types_render_field("internet-domestic-bandwidth", array())); ?>	</td></tr>
								<tr><td align="left"><?php echo('Internet international bandwidth: ')?></td><td align="left"><?php echo(types_render_field("internet-international-bandwidth", array())); ?></td></tr>	
								<tr><td align="left"><?php echo('Sources: ')?></td><td align="left"><?php echo(types_render_field("sources", array())); ?>	</td></tr>		
							</table>
							<div class="clear"></div>
						</div><!-- .entry-content -->
						<footer class="entry-utility">
							<?php //wp_link_pages( array( 'before' => '<p class="post-pagination">' . __( 'Pages:', 'esplanade' ), 'after' => '</p>' ) ); ?>
							<?php //esplanade_social_bookmarks(); ?>
							<?php //esplanade_post_author(); ?>
							<?php //esplanade_post_nav(); ?>
						</footer><!-- .entry-utility -->
					</div><!-- .entry -->
					<?php comments_template(); ?>
				</article><!-- .post -->
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