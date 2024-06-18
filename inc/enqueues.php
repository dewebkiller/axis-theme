
<?php

function dwk_enqueues() {
    
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), time());
    wp_enqueue_style('bootstrap');

    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.3.6');
    wp_enqueue_style('reset');

    wp_register_style('layout', get_template_directory_uri() . '/css/layout.css', array(), '1.3.6');
    wp_enqueue_style('layout');

    
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0');
    wp_enqueue_style('responsive');

    wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.3.6');
    wp_enqueue_style('swiper');

    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '1.0');
    wp_enqueue_style('fontawesome');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '4.1.1');
    wp_enqueue_style('animate');

    wp_register_style('hover', get_template_directory_uri() . '/css/hover.css', array(), '2.3.2');
    wp_enqueue_style('hover');
    
    wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '1.3.6');
    wp_enqueue_style('aos');
     

    wp_register_style('Courgette', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', false, '4.7.0', null);
    wp_enqueue_style('Courgette');

    wp_register_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', array(), '1.3.6');
    wp_enqueue_style('fancybox');


    /* Scripts */

    wp_enqueue_script('jquery');
    /* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
      https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

    // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, true);
    // wp_enqueue_script('jquery');

    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', false, null, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('owljs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', false, null, true);
    wp_enqueue_script('owljs');
    
    wp_register_script('waypoints',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', false, '4.0', true);
    wp_enqueue_script('waypoints');

    wp_register_script('wow',  get_template_directory_uri() . '/js/wow.min.js', false, '4.0', true);
    wp_enqueue_script('wow');

    wp_register_script('fancybox',  'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', false, '4.0', true);
    wp_enqueue_script('fancybox');

    wp_register_script('aosjs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', false, null, true);
    wp_enqueue_script('aosjs');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', false, null, true);
    wp_enqueue_script('custom');
 
}

add_action('wp_enqueue_scripts', 'dwk_enqueues', 100);
