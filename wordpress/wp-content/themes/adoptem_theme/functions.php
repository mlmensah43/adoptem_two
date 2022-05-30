<?php 

    function adoptem_theme_files(){
        wp_enqueue_style('google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        // wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
        wp_enqueue_script('bootstrap-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js' );
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' );
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' );
        wp_enqueue_script('bootstrap-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' );
        wp_enqueue_script('bootstrap-modal', '/assets/js/modal.js' );
        // wp_enqueue_style('material-design-css', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css' );
        // wp_enqueue_script('material-design-js', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js' );
        wp_enqueue_style('adoptem_theme_main_styles',get_theme_file_uri('/assets/css/style-index.css'));
        wp_enqueue_style('adoptem_theme_header_styles',get_theme_file_uri('/assets/css/header.css'));
        wp_enqueue_style('adoptem_theme_blog_styles',get_theme_file_uri('/assets/css/blog.css'));
        wp_enqueue_style('adoptem_theme_pets_styles',get_theme_file_uri('/assets/css/pets.css'));
        wp_enqueue_style('adoptem_theme_footer_styles',get_theme_file_uri('/assets/css/footer.css'));
        // wp_enqueue_style('adoptem_theme_extra_styles',get_theme_file_uri('/assets/css/index.css'));
    }

    add_action('wp_enqueue_scripts','adoptem_theme_files');

    function adoptem_theme_features(){
        register_nav_menu('MainSiteMenuLocation', 'Main Site Menu Location');
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails', array( 'post', 'pets' ) );
    }
    add_action('after_setup_theme','adoptem_theme_features');
    

    function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
            $action,
            function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
            }
        );
        }
    }
    fa_custom_setup_kit('https://kit.fontawesome.com/43a92adb03.js');

?>