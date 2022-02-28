<?php
define('THEME_URL', get_template_directory_uri());


/*
 *Nhúng file style
 */
function myblog_style()
{

    /*
     * nhung css
     */
    $urlCss = THEME_URL . '/assets/';
    wp_register_style('myblog_style_google_font', 'https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed&display=swap');
    wp_enqueue_style('myblog_style_google_font');

    wp_register_style('myblog_style_bootstrap', $urlCss . 'libs/bootstrap/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('myblog_style_bootstrap');

    wp_register_style('myblog_style_font_awesome', $urlCss . 'libs/font-awesome/css/font-awesome.min.css', array(), '1.0');
    wp_enqueue_style('myblog_style_font_awesome');

    wp_register_style('myblog_style_style', $urlCss . 'css/style.css', array(), '1.0');
    wp_enqueue_style('myblog_style_style');

    wp_register_style('myblog_style_css/responsive', $urlCss . 'css/responsive.css', array(), '1.0');
    wp_enqueue_style('myblog_style_css/responsive');


    /*
     * nhung js
     */
    $urlJs = THEME_URL . '/assets/';
    wp_register_script('myblog_script_jquery', $urlJs . 'js/jquery-3.2.1.min.js', array(), '1.0', true);
    wp_enqueue_script('myblog_script_jquery');


    wp_register_script('myblog_script_bootstrap', $urlJs . 'libs/bootstrap/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('myblog_script_bootstrap');

    wp_register_script('myblog_script_main', $urlJs . 'js/main.js', array(), '1.0', true);
    wp_enqueue_script('myblog_script_main');


}

add_action('wp_enqueue_scripts', 'myblog_style');

function register_my_menu() {
    register_nav_menu('topmenu',__( 'Menu chính' ));
}
add_action( 'init', 'register_my_menu' );
add_theme_support('post-thumbnails');
function setpostview($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
function getpostviews($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}