<?php

if ( ! function_exists( 'multisport_customize_register' ) ) :
	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 */
	function multisport_customize_register( $wp_customize ) {

		/**
		 * Add Footer Section
		 */
		$wp_customize->add_section(
			'multisport_footer_section',
			array(
				'title'       => __( 'Footer', 'multisport' ),
				'capability'  => 'edit_theme_options',
			)
		);
		
		// Add Footer Copyright Text
		$wp_customize->add_setting(
			'multisport_footer_copyright',
			array(
			    'default'           => '',
			    'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'multisport_footer_copyright',
	        array(
	            'label'          => __( 'Copyright Text', 'multisport' ),
	            'section'        => 'multisport_footer_section',
	            'settings'       => 'multisport_footer_copyright',
	            'type'           => 'text',
	            )
	        )
		);

		/**
	     * Add Animations Section
	     */
	    $wp_customize->add_section(
	        'multisport_animations_display',
	        array(
	            'title'       => __( 'Animations', 'multisport' ),
	            'capability'  => 'edit_theme_options',
	        )
	    );

	    // Add display Animations option
	    $wp_customize->add_setting(
	            'multisport_animations_display',
	            array(
	                    'default'           => 1,
	                    'sanitize_callback' => 'multisport_sanitize_checkbox',
	            )
	    );

	    $wp_customize->add_control( new WP_Customize_Control( $wp_customize,
	                        'multisport_animations_display',
	                            array(
	                                'label'          => __( 'Enable Animations', 'multisport' ),
	                                'section'        => 'multisport_animations_display',
	                                'settings'       => 'multisport_animations_display',
	                                'type'           => 'checkbox',
	                            )
	                        )
	    );

	    /**
		 * Add Slider Section
		 */
		$wp_customize->add_section(
			'multisport_slider_section',
			array(
				'title'       => __( 'Slider', 'multisport' ),
				'capability'  => 'edit_theme_options',
			)
		);

		$wp_customize->add_setting(
				'multisport_slider_display',
				array(
						'default'           => 0,
						'sanitize_callback' => 'multisport_sanitize_checkbox',
				)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'multisport_slider_display',
								array(
									'label'          => __( 'Display Slider on a Static Front Page', 'multisport' ),
									'section'        => 'multisport_slider_section',
									'settings'       => 'multisport_slider_display',
									'type'           => 'checkbox',
								)
							)
		);
		
		for ($i = 1; $i <= 3; ++$i) {
		
			$slideImageId = 'multisport_slide'.$i.'_image';
			$defaultSliderImagePath = get_template_directory_uri().'/images/slider/'.$i.'.jpg';
			
			// Add Slide Background Image
			$wp_customize->add_setting( $slideImageId,
				array(
					'default' => $defaultSliderImagePath,
					'sanitize_callback' => 'multisport_sanitize_url'
				)
			);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $slideImageId,
					array(
						'label'   	 => sprintf( esc_html__( 'Slide #%s Image', 'multisport' ), $i ),
						'section' 	 => 'multisport_slider_section',
						'settings'   => $slideImageId,
					) 
				)
			);
		}
	}
endif; // multisport_customize_register
add_action( 'customize_register', 'multisport_customize_register' );

if ( ! function_exists( 'multisport_sanitize_checkbox' ) ) :
	/**
	 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
	 * as a boolean value, either TRUE or FALSE.
	 *
	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function multisport_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
endif; // multisport_sanitize_checkbox

if ( ! function_exists( 'multisport_sanitize_url' ) ) :

	function multisport_sanitize_url( $url ) {
		return esc_url_raw( $url );
	}

endif; // multisport_sanitize_url
