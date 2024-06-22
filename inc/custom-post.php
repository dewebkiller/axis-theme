<?php

/* -----------Banner----------- */

add_action('init', 'dwk_custompost', 9);



function dwk_custompost() {



    register_post_type('dwk_courses', array(

        'labels' => array(

            'name' => __('Courses'),

            'singular_name' => __('Course')

        ),

        'public' => true,

        'has_archive' => true,

        'menu_icon' => 'dashicons-format-image',

        'rewrite' => array('slug' => 'dwk_courses'),

        'supports' => array('title',  'editor', 'thumbnail'),

            )

    );


    register_post_type('dwk_success_stories', array(

        'labels' => array(

            'name' => __('Success Stories'),

            'singular_name' => __('Success story')

        ),

        'public' => true,

        'has_archive' => true,

        'menu_icon' => 'dashicons-format-quote',

        'rewrite' => array('slug' => 'success_stories'),

        'supports' => array('title', 'editor', 'thumbnail'),

            )

    );

}

