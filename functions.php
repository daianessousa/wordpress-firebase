<?php 

    function theme_landing(){

        wp_enqueue_style('style_css', get_stylesheet_uri() );
        wp_enqueue_style('style_theme_css', get_stylesheet_directory_uri() . '/css/style_theme.css');
        wp_enqueue_style('font_awesome', get_stylesheet_directory_uri() . '/fontawesome/css/all.css');

        wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
        wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'),'',true);

        wp_enqueue_script( 'firebase_js', 'https://www.gstatic.com/firebasejs/7.17.1/firebase.js');
		wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery'),'',true);

        

    }

    add_action('wp_enqueue_scripts', 'theme_landing');


    ?>