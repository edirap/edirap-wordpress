<?php

// Required functions
if ( is_file ( TEMPLATEPATH . '/functions/smartbiz-functions.php'))
	require_once ( TEMPLATEPATH . '/functions/smartbiz-functions.php');
else
	require_once ( TEMPLATEPATH . '/functions/smartbiz-functions.php');

//Redirect to theme options page
if ( is_admin() && isset($_GET['activated'] ) && $pagenow ==	"themes.php" )
	wp_redirect ( 'themes.php?page=smartbiz-admin.php');
	
//Add support for post thumbnails
	add_theme_support ( 'post-thumbnails' );

//Navigation menu
 function smartbiz_addmenus() {
        register_nav_menus(
                array(
                        'main_nav' => 'The Main Menu',
                )
        );
 }
 add_action( 'after_setup_theme', 'smartbiz_addmenus' );

 function smartbiz_nav() {
    if ( function_exists( 'wp_nav_menu' ) ){
        wp_nav_menu( array(
                        'menu'=>'main_nav',
                        'container_class'=>'menu',
                        'container_id'=>'navwrap',
                        'fallback_cb' => 'smartbiz_nav_fallback',
                        'theme_location' => 'main_nav'
                ));
        }
    else
        smartbiz_nav_fallback();
 }
 
function smartbiz_nav_fallback() {
	global $smartbiz;
	echo '<div id="navwrap" class="menu"><ul>';
	if ($smartbiz->hidePages() !== 'true' ) {
		echo wp_list_pages( 'title_li=' );
	}
	if ($smartbiz->hideCategories() !== 'true' ){
		echo wp_list_categories( 'title_li=' );
	}
	echo '</ul></div>';
}

// Sidebar
function smartbiz_widget_init() {
	register_sidebar(array (
		'name'=> __( 'Sidebar', 'smartbiz'),
		'id' => 'main_sidebar',
		'description' => __( 'Main widget area - Sidebar 1', 'smartbiz' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
add_action( 'widgets_init', 'smartbiz_widget_init' );
?>