<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script>
	jQuery(document).ready(function($){
		var highestCol = Math.max($('#edirap-central-column').height(),$('#edirap-right-sidebar').height());
		$('#edirap-central-column').height(highestCol);
		$('#edirap-right-sidebar').height(highestCol);		
		/*$('#mega-menu-4').dcMegaMenu({
			rowItems: '3',
			speed: 'fast',
			effect: 'fade'
		});
		*/	
	});	
</script>
</head>

<body <?php body_class() ?>>
	<div id="wrapper">
		<header id="header">
			<!--<div id="edirap-header_decoration">
				<img src="<?php bloginfo('template_directory');?>/images/logo_dec.png"  width="122" height="60"  />
			</div> -->
			<div id="edirap-logo">
				<a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory');?>/images/Digital-Review-Logo-424x90.png" alt="Insert Logo Here" name="Insert_logo" width="424" height="90" id="Insert_logo" style="display:block;" /></a> 
			</div>
			<div id="edirap-social_networks" class="social_networks_widget">
				<ul class="social-networks">
				<li><a rel="external" target="_blank" href="#"><img src="<?php bloginfo('template_directory');?>/images/twitter.png" width="24" height="24" alt=""></a></li>
				<li><a rel="external" target="_blank" href="#"><img src="<?php bloginfo('template_directory');?>/images/gplus.png" width="24" height="24" alt=""></a></li>
				<li><a rel="external" target="_blank" href="#"><img src="<?php bloginfo('template_directory');?>/images/facebook.png" width="24" height="24" alt=""></a></li>
				<li><a rel="external" target="_blank" href="#"><img src="<?php bloginfo('template_directory');?>/images/linkedin.png" width="24" height="24" alt=""></a></li>		    </ul>  
				</div>
			<div id="edirap-search" class="widget_search">
				<form method="get" class="searchform" action="#">
				   <input type="text" class="searching" value="Search ..." onfocus="if(this.value=='Search ...'){this.value=''}" onblur="if(this.value==''){this.value='Search ...'}" name="s"><input  class="submit" type="submit" value="">
				</form>   
			</div>			
			  <!-- Mega menu starts -->
			<?php
				wp_nav_menu(array( 'container_class' => 'black', 'menu_class' => 'mega-menu','menu_id' => 'mega-menu-4' ));
			?>		
			<div class="clear"></div>
			<script type="text/javascript">
				jQuery('#mega-menu-4').dcMegaMenu({
					rowItems: '3',
					speed: 'fast',
					effect: 'fade'
				});
            </script>
			<?php if ( ( '' != get_header_image() ) ||  ( false != get_header_image() ) ) : ?>
				<a href="<?php echo home_url( '/' ); ?>" rel="home">
					<img id="header-image" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" />
				</a>
			<?php endif; ?>
			<!-- <nav id="access">
				<a class="nav-toggle" href="#">Navigation</a>
				<?php //wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
				<?php //get_search_form(); ?>
				<div class="clear"></div>
			</nav><!-- #access -->

		</header><!-- #header -->