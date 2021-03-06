<?php 
if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features
    *
    *  It is important to set up these functions before the init hook so that none of these
    *  features are lost.
    *
    *  @since MyFirstTheme 1.0
    */

function add_enqueue_style(){
    

    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900');
    wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',array(),'4.0.0','all');
    wp_enqueue_style('venobox',get_template_directory_uri().'/assets/vendor/venobox/venobox.css',array(),'1.0.0','all');

    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/vendor/font-awesome/css/font-awesome.min.css',array(),'4.7.0','all');
    wp_enqueue_style('font-awesome','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main-style',get_template_directory_uri().'/assets/css/style.css',array(),time(),'all');


    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('slick','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js',array('jquery'));
    wp_enqueue_script('bootstrap-bundle',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),'4.0.0',true);
    wp_enqueue_script('jquery-easing',get_template_directory_uri().'/assets/vendor/jquery.easing/jquery.easing.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('email-form',get_template_directory_uri().'"/assets/vendor/php-email-form/validate.js',array(),'1.0.1',true);
    wp_enqueue_script('counter',get_template_directory_uri().'/assets/vendor/counterup/counterup.min.js',array(),'1.0.1',true);
    wp_enqueue_script('jquery-sticky',get_template_directory_uri().'/assets/vendor/jquery-sticky/jquery.sticky.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('venobox',get_template_directory_uri().'/assets/vendor/venobox/venobox.min.js',array(),'1.0.1',true);
    wp_enqueue_script('lockfixed',get_template_directory_uri().'/assets/vendor/lockfixed/jquery.lockfixed.min.js',array('jquery'),'3.4.1',true);
    wp_enqueue_script('waypoints',get_template_directory_uri().'/assets/vendor/waypoints/jquery.waypoints.min.js',array(),'1.0.1',true);
    wp_enqueue_script('superfish',get_template_directory_uri().'/assets/vendor/superfish/superfish.min.js',array(),'1.0.1',true);
    wp_enqueue_script('hoverintent',get_template_directory_uri().'/assets/vendor/hoverIntent/hoverIntent.js',array(''),'1.0.1',true);
    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js',array('jquery'),'3.4.1',true);
    
}
add_action('wp_enqueue_scripts','add_enqueue_style');
add_theme_support( 'automatic-feed-links' );

function Pav_register_nav_menu(){
    register_nav_menu('primary','Primary Navigation Menu');

}
 add_action('after_setup_theme','Pav_register_nav_menu');
 add_theme_support( 'custom-logo' );
 function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    'uploads'                => true,
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

  
        
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


/**
 * for search menu bar
 * 
 */
// add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
// function add_search_form($items, $args) {
// if( $args->theme_location == 'primary' )
//         $items .= '<div class="search-box">
//         <input type="search" value="search" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
//         return $items;
// }

/**
 * theme support
 * 
 */
/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
 
    /** tag-title **/
    add_theme_support( 'title-tag' );
 
    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
 
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
 
    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
 
    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
 
    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );
 
    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );
 
    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
 
 
 
}
add_action('after_setup_theme','theme_setup');


endif;


