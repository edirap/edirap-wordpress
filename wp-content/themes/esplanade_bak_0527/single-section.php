<?php get_header(); ?>
	<div id="container">
		<?php if( 'sidebar-content-sidebar' == esplanade_get_option( 'layout' ) ) : ?>
			<div class="content-sidebar-wrap">
		<?php endif; ?>
		<section id="content" style="margin:0; padding:0">
			<?php if( have_posts() ) : the_post(); ?>
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
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<div class="entry">
						<?php if( esplanade_get_option( 'breadcrumbs' ) ) : ?>
							<div id="location">
								<?php esplanade_breadcrumbs(); ?>
							</div><!-- #location -->
						<?php endif; ?>
						<script>
							jQuery(document).ready(function($){
								$( "#tabs" ).tabs();
							});	
						</script>
						
						<table style="margin-bottom:0px">
						<tr>						
							<td align="left"><?php previous_post_link('%link','<-- '.'%title') ?> </td>
							<td align="right"><?php next_post_link('%link','%title'.' -->') ?></td>
						</tr>
						</table>

						<div class="demo">
						<div id="tabs">
							<ul>
								<li><a href="#tabs-1">Section</a></li>
								<li><a href="#tabs-2">Revisions</a></li>
								<li><a href="#tabs-3">Discussion</a></li>
								<li><a href="#tabs-4">Chapter Navigation</a></li>
								<li><a href="#tabs-5">Debugging</a></li>
							</ul>
						<div id="tabs-1">				
						<?php esplanade_post_nav(); ?>
						<header class="entry-header">
							<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><?php the_title(); ?></<?php esplanade_title_tag( 'post' ); ?>>
							<aside class="entry-meta">
								<?php _e( 'Last modified','esplanade');?>: <?php the_modified_time( get_option( 'date_format' ) ); ?> | 
								<?php _e( 'Author(s)','esplanade');?>: <?php coauthors(); ?> | 
								<?php _e( 'Economy', 'esplanade' ); ?>: <?php echo $economy_term->name; ?> |
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
							<?php the_content(); ?>
							<div class="clear"></div>
						</div><!-- .entry-content -->
						<footer class="entry-utility">
							<?php wp_link_pages( array( 'before' => '<p class="post-pagination">' . __( 'Pages:', 'esplanade' ), 'after' => '</p>' ) ); ?>
							<?php //esplanade_social_bookmarks(); ?>
							<?php //esplanade_post_author(); ?>
							<?php esplanade_post_nav(); ?>
						</footer><!-- .entry-utility -->
						</div> <!-- end of tab1 -->						
						<div id="tabs-2">
							<?php the_revision_list_prd(); ?>
						</div>
						<div id="tabs-3">
							<?php comments_template(); ?>
						</div>
						<div id="tabs-4">
							<h3><?php echo $economy_term->name; ?></h3>							
							<?php
							$wpq = array('post_type'=>'section','content'=>$economy_term->slug, 'order'=>'ASC','posts_per_page'=>-1);
							$query = new WP_Query($wpq); ?>
							
							<ul>
							<?php while ( $query->have_posts()) : $query->the_post(); ?>						
							<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
							<?php 
								endwhile; 
								// Reset Post Data
								wp_reset_postdata();
							?>			

							</ul>
						</div>
						<div id="tabs-5">
							<h3>Debugging</h3>
							<?php 
								//var_dump($economy_terms); 
								$i = new CoAuthorsIterator();
								print $i->count() == 1 ? 'Author: ' : 'Authors: ';
								$i->iterate();
								the_author();
								while($i->iterate()){
									print $i->is_last() ? ' and ' : ', ';
									the_author();
								}
								coauthors_posts_links();
							?>
						</div>						
						</div>
						
						</div><!-- End demo -->								
					</div><!-- .entry -->
					
					
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