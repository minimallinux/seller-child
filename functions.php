<?php
// Include parent theme styles. 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
function footer_widgets_init() {
   //Image Widget Areas for banners/images etc in footer under logo
    register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4 class="footer-title">',
        'name'          => __('Image Footer', 'sage'),
        'id'            => 'image-sidebar-footer',
        'description' => __( 'The Image footer widget area','seller-child' )
    ]);
    //Other footer widget areas
    //First footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4 class="footer-title">',
        'name' => __( 'First Footer Widget Area', 'sage' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'seller-child' )
    ]);
     //Second footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4 class="footer-title">',
        'name' => __( 'Second Footer Widget Area', 'sage' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area','seller-child' )
    ]);
     //Third footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4 class="footer-title">',
        'name' => __( 'Third Footer Widget Area', 'sage' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'seller-child' )
    ]);
      //Fourth footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="footer-title">',
        'after_title'   => '</h4 class="footer-title">',
        'name' => __( 'Fourth Footer Widget Area', 'sage' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The Fourth footer widget area', 'seller-child' )
    ]);
    //Social widget area,located anywhere. Empty by default.
    register_sidebar([
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4 class="widget-title">',
        'name' => __( 'Social Widget Area', 'sage' ),
        'id' => 'social-widget-area',
        'description' => __( 'The Social widget area', 'seller-child' )
    ]);
}
add_action( 'widgets_init', 'footer_widgets_init' );

?>