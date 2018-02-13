<?php

/*
 * Add stylesheets
 */
function add_yonder_styles() {
  // Enqueue normalize.css
  wp_enqueue_style( 'normalize', get_template_directory_uri() . "styles\normalize.css");
  // Enqueue style.css
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_yonder_styles' );


/*
 * Register navigation menus
 */
function add_yonder_menus() {
  register_nav_menus(
    array(
      'primary-menu' => 'Primary Menu',
      'secondary-menu' => 'Secondary Menu'
    )
  );
}
add_action( 'init', 'add_yonder_menus' );


/*
 * Register widget areas
 */
function add_yonder_widget_areas() {
  /* Register true sidebar */
  register_sidebar( array(
    'name' => 'Sidebar Area',
    'id'  => 'sidebar-widgets',
    'before_widget' => '<section id="%1$s" class=""%2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));

  /* Register other widget areas. */

}
add_action( 'widgets_init', 'add_yonder_widget_areas' );

?>
