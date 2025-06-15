<?php

    // ADD THEME SUPPORT
        function theme_support_setup() {
            add_theme_support( 'wp-block-styles' );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'excerpt' );
            add_theme_support( 'menus' );
        }
        add_action( 'after_setup_theme', 'theme_support_setup' );



    // ADD CSS & JS FILES
         function mytheme_enqueue_scripts() {

            //JS
            wp_enqueue_style( 'style', get_stylesheet_uri() );
            wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/myScript.js', [], null, true );

            //CSS
            wp_enqueue_style('css-home', get_template_directory_uri() . '/assets/css/home.css');
            wp_enqueue_style('css-home', get_template_directory_uri() . '/assets/css/single.css');
        }
        add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );



    //ACF BLOCK GUTTENBERG
    add_action('acf/init', 'my_acf_init');
    function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
            // register a testimonial block
            acf_register_block(array(
                'name'              => 'slideshow',
                'title'             => __('Slideshow'),
                'description'       => __('A custom testimonial block.'),
                'render_template'   => get_template_directory() . '/theme-parts/slideshow.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'testimonial', 'quote' ),
            ));
        }
    }
