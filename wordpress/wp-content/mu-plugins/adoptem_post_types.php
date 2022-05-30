
<?php

    function pets_post_types(){
        $args = array(
            'public' => true,
            'has_archive' => true,
            'labels' => array(
                'name' => 'Pets',
                'add_new_item' => 'Add New Pet',
                'edit_item' => 'Edit Pet',
                'all_items' => 'All Pets',
                'singular_name' => 'Pet',
                'not_found' => 'No Pets found'
            ),
            'menu_icon' => 'dashicons-pets',
            'show_in_rest' => true,
            
            );
        register_post_type('pets',$args);
    }

    add_action('init', 'pets_post_types');

?>