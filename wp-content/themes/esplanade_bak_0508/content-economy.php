<h3><a href="#">Economy Overview</a></h3>
<div>


<article class="post" id="post-<?php the_ID(); ?>">
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
			<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title('','--Overview'); ?></a></<?php esplanade_title_tag( 'post' ); ?>>
	<?php if( is_paged() || ! esplanade_is_teaser() ) : ?>
			<aside class="entry-meta">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a> | 
				<?php _e( 'Filed under', 'esplanade' ); ?>: <?php the_category( ', ' ) ?>
				<?php edit_post_link( __( 'Edit', 'esplanade' ), ' | ', '' ); ?>
			</aside><!-- .entry-meta -->
		</header><!-- .entry-header -->
	<?php endif; ?>
	<div class="entry-summary">
		<table>
		<tr><td align="left"><?php echo('Domain Name: ')?></td><td align="left"><?php echo(types_render_field("domain", array())); ?></td></tr>
		<tr><td align="left"><?php echo('Total population: ')?></td><td align="left"><?php echo(types_render_field("total-population", array())); ?></td></tr>
		<tr><td align="left"><?php echo('GDP per capita: ')?></td><td align="left"><?php echo(types_render_field("gdp", array())); ?></td></tr>
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
	</div><!-- .entry-summary -->
	<div class="clear"></div>
</article><!-- .post -->
</div> <!-- end of accordion -->
<?php if( esplanade_is_teaser() ) : ?>
	<?php esplanade_teaser_clearfix(); ?>
<?php endif; ?>
