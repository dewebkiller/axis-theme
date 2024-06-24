<?php

/** custom category type */

add_action( 'init', 'dwk_courses_type' );



function dwk_courses_type() {

	register_taxonomy(

		'dwk_courses_cat',

		'dwk_courses',

		array(

			'label' => __( 'Course Type' ),

			'rewrite' => array( 'slug' => 'dwk_courses_type' ),

			'hierarchical' => true,

			'show_admin_column' => true,

	

		)

	);

}



