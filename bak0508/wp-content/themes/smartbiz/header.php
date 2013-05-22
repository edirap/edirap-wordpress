<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<?php global $smartbiz;
	if ( is_front_page() ) : ?>
		<title><?php bloginfo( 'name'); ?></title>
	<?php elseif ( is_404() ) : ?>
		<title><?php ( 'Page Not Found'); ?> | <?php bloginfo( 'name'); ?></title>
	<?php elseif ( is_search() ) : ?>
		<title><?php printf(__ ("Search results for '%s'", "smartbiz"), esc_attr(get_search_query())); ?> | <?php bloginfo( 'name'); ?></title>
	<?php else : ?>
		<title><?php wp_title($sep=''); ?> | <?php bloginfo( 'name'); ?></title>
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="description" content="<?php bloginfo( 'name' ); ?>" >
	<?php if ((is_single() || is_category() || is_page() || is_home()) && (!is_paged())){} else { ?>
		<meta name="robots" content="noindex,follow" >
	<?php } ?>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name'); ?> RSS Feed" href="<?php bloginfo( 'rss2_url'); ?>" />
	<?php wp_head(); ?>
	<script type="text/javascript">
	/* <![CDATA[ */
	function resized(){
		var getH=document.getElementById('get_height');
		var setH=document.getElementById('set_height');
		var setH2=document.getElementById('navigation');
		setH.style.height=getH.clientHeight-6;
		setH2.style.height=getH.clientHeight;
	}
	/* ]]> */
	</script>
</head>
<body <?php body_class()?> onresize="resized();" onload="resized();">
<?php if ( ! isset( $content_width ) ) $content_width = 900;?>
	<div id="wrapper">

		<div id="header-wrapper">
			<table id="header" cellpadding="0" cellspacing="0" width="100%">
				<tbody>
				<tr valign="top">
					<td style="background-color:transparent;">
						<div id="logo">
							<div class="title">
							<?php if ($smartbiz->hideLogo() !== 'true' ): ?>
							<a href="<?php echo home_url(); ?>"><img src="<?php if ($smartbiz->logoUrl() != '' ){ echo $smartbiz->paths['baseurl'] .'/images/logo/'.$smartbiz->logoUrl(); } else { echo get_template_directory_uri() .'/images/logo/logo_d.png';} ?>" alt="<?php echo bloginfo( 'name'); ?>" /></a>
							<?php endif; ?>
							<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
							</div>
							<div class="desc">
							<p><?php bloginfo('description'); ?></p>
							</div>
						</div>
					</td>
					<?php if ($smartbiz->showSearch() == 'true' ): ?><td id="header-search" style="background-color:transparent;">
						<form method="get" action="">
							<fieldset>
							<input type="text" name="s" id="header-search-text" size="15" />
							<input type="submit" id="header-search-submit" value="GO" />
							</fieldset>
						</form>
					</td><?php endif; ?>	
				</tr>
				</tbody>
			</table>
		</div>

		<div id="nav_bar" style="width:980px;margin:0 auto;height-minimum:46px;float:left;">
			<table id="get_height" cellpadding="0" cellspacing="0" width="100%" style="border:solid 0px transparent;background-color:transparent;">
				<tbody>
				<tr valign="top">
					<td style="font-size:0;background-color:transparent;height:6px;width:46px;">
						<div class="border_radius navigation">
							<b class="r1" style="margin-right:0;">&nbsp;</b><b class="r2" style="margin-right:0;">&nbsp;</b><b class="r3" style="margin-right:0;">&nbsp;</b><b class="r4" style="margin-right:0;">&nbsp;</b><b class="r5" style="margin-right:0;">&nbsp;</b>
						</div>
					</td>
					<td rowspan="2" style="height:100%;width: 918px;background-color:transparent;">
						<div id="navigation">
							<ul class="menu">
							<li class="<?php if (is_home()) echo 'current_page_item'; ?>"><a href="<?php echo home_url(); ?>/" class="<?php if (is_home()) echo 'current_page_item'; ?>">Home</a></li>
							</ul>
							<?php smartbiz_nav(); ?>
						</div>
					</td>
					<td style="font-size:0;background-color:transparent;height:6px;width:16px;">
						<div class="border_radius navigation">
							<b class="r1" style="margin-left:0;">&nbsp;</b><b class="r2" style="margin-left:0;">&nbsp;</b><b class="r3" style="margin-left:0;">&nbsp;</b><b class="r4" style="margin-left:0;">&nbsp;</b><b class="r5" style="margin-left:0;">&nbsp;</b>
						</div>
					</td>
				</tr>
				<tr>
					<td id="set_height" class="navigation_b" style="min-height:100%;">&nbsp;</td>
					<td class="navigation_b" style="min-height:100%;">&nbsp;</td>
				</tr>
				</tbody>
			</table>
		</div>
		<?php if ($smartbiz->hideFeatured() !== 'true' ): ?>
		<div id="featured">
			<div class="text">
				<?php if ($smartbiz->headerFeatured() != '') : ?>
					<?php echo $smartbiz->headerFeatured(); ?>
				<?php else : ?>
					<p>Replace this with your custom text in the Header section of the <em>SmartBiz Options</em> page. Type some stuff in the box, click save, and your new featured section shows up in the header. You can also hide this section by checking the related box in the <em>SmartBiz Options</em>.</p>
					<p>Aliquam gravida posuere magna a venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in diam mauris. Phasellus nunc dui, lacinia non sollicitudin dapibus, aliquam at lorem...</p>
				<?php endif; ?>
			</div>				
			<div class="img">
				<img src="<?php if ($smartbiz->headerUrl() != '' ) { echo $smartbiz->paths['baseurl'].'/images/featured/'.$smartbiz->headerUrl();} else { echo get_template_directory_uri().'/images/featured/featured_d.png';} ?>" alt="<?php echo bloginfo( 'name'); ?>" />
			</div>
		</div>
		<b class="border_radius featured"><b class="r5">&nbsp;</b><b class="r4">&nbsp;</b><b class="r3">&nbsp;</b><b class="r2">&nbsp;</b><b class="r1">&nbsp;</b></b>
		<div id="margin">&nbsp;</div>
	</div>
		<div id="page">
		<b class="border_radius page"><b class="r1">&nbsp;</b><b class="r2">&nbsp;</b><b class="r3">&nbsp;</b><b class="r4">&nbsp;</b><b class="r5">&nbsp;</b></b>
		<div id="page-bgtop">
		<div id="page-bgbtm">		
		<?php else : ?>
	</div>
		<div id="page">
		<div id="page-bgtop2">
		<div id="page-bgbtm">	
		<?php endif; ?>		
			
