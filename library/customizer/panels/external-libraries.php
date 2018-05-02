<?php
/* external-libraries.php
 * Descripion: adds settings and controllers for bootstrap grid, wow.js & animate, 
 * font awesome & hover.css to theme customizer 
 */
 
 function add_external_libraries($wp_customize){
 
//panel
	$wp_customize->add_section( 
			'external-libraries' , 
			array(
				'title'      => __( 'External Libraries', 'bonestheme' ),
				'description' => '',
				'priority'   => 30,
				
		) 
	);

//replace bones grid with bootstrap grid
	$wp_customize->add_setting( 'boot_strap' , array(
		'default' => 0,
    ) );
	$wp_customize->add_control( 'boot_strap', array(
	  'label' => __( 'Bootstrap Grid' ),
	  'type' => 'checkbox',
	  'section' => 'external-libraries',
	) );
	

//wow & animate
	$wp_customize->add_setting( 'wow_animate' , array(
		'default' => 0,
    ) );
	
	$wp_customize->add_control( 'wow_animate', array(
	  'label' => __( 'Animate.css & WOW.js' ),
	  'type' => 'checkbox',
	  'section' => 'external-libraries',
	) );
	
//font awesome & hover.css
	$wp_customize->add_setting( 'font_awesome' , array(
		'default' => 0,
    ) );

	$wp_customize->add_control( 'font_awesome', array(
	  'label' => __( 'Font-Awesome.css & Hover.css' ),
	  'type' => 'checkbox',
	  'section' => 'external-libraries',
	) );
 
 //slick slider
 
 /**** slick 1****/
	$wp_customize->add_setting( 'slick_slider' , array(
		'default' => 0,
    ) );

	$wp_customize->add_control( 'slick_slider', array(
	  'label' => __( 'Slick Slider' ),
	  'type' => 'checkbox',
	  'section' => 'external-libraries',
	) );
 
 
 	$wp_customize->add_setting(
    'slick_class',
    array(
        'default' => '',
    )
);

	$wp_customize->add_control(
		'slick_class',
		array(
			'label' => 'Slick Slider Class',
			'section' => 'external-libraries',
			'type' => 'text',
		)
	);

 	$wp_customize->add_setting(
    'slick_settings',
    array(
        'default' => '',
    )
);

	$wp_customize->add_control(
		'slick_settings',
		array(
			'label' => 'Slick Slider Settings',
			'section' => 'external-libraries',
			'type' => 'textarea',
		)
	);
 /**** slick 2****/ 
 	 	
 /*	$wp_customize->add_setting( 'slick_slider_2' , array(
		'default' => 0,
    ) );

	$wp_customize->add_control( 'slick_slider_2', array(
	  'label' => __( 'Add Secondary Slick Slider' ),
	  'type' => 'checkbox',
	  'section' => 'external-libraries',
	) );
 */
 
 	$wp_customize->add_setting(
    'slick_class_2',
    array(
        'default' => '',
		
    )
);

	$wp_customize->add_control(
		'slick_class_2',
		array(
			'label' => 'Secondary Slick Slider Class',
			'section' => 'external-libraries',
			'type' => 'text',
			'description' => '(Carousel, second slider, etc...)',
		)
	);


 	$wp_customize->add_setting(
    'slick_settings_2',
    array(
        'default' => '',
    )
);

	$wp_customize->add_control(
		'slick_settings_2',
		array(
			'label' => 'Secondary Slick Slider Settings',
			'section' => 'external-libraries',
			'type' => 'textarea',
		)
	);
 
 
 }
 add_action( 'customize_register', 'add_external_libraries' );
 
 
 ?>