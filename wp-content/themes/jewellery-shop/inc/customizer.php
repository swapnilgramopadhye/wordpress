<?php
/**
 * Jewellery Shop Theme Customizer
 *
 * @package Jewellery Shop
 */

get_template_part('/inc/select/category-dropdown-custom-control');

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jewellery_shop_customize_register( $wp_customize ) {

	function jewellery_shop_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	function jewellery_shop_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	//Theme Options
	$wp_customize->add_panel( 'jewellery_shop_panel_area', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'jewellery-shop' ),
	) );
	
	// Header Section
	$wp_customize->add_section('jewellery_shop_header_section', array(
        'title' => __('Manage Header Section', 'jewellery-shop'),
        'priority' => null,
		'panel' => 'jewellery_shop_panel_area',
 	));

	$wp_customize->add_setting('jewellery_shop_phone_number',array(
		'default' => '',
		'sanitize_callback' => 'jewellery_shop_sanitize_phone_number',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_phone_number', array(
	   'settings' => 'jewellery_shop_phone_number',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Add Phone Number', 'jewellery-shop'),
	   'type'      => 'text'
	));

	$wp_customize->add_setting('jewellery_shop_email_address',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_email_address', array(
	   'settings' => 'jewellery_shop_email_address',
	   'section'   => 'jewellery_shop_header_section',
	   'label' => __('Add Email Address', 'jewellery-shop'),
	   'type'      => 'text'
	));

	// Home Category Dropdown Section
	$wp_customize->add_section('jewellery_shop_one_cols_section',array(
		'title'	=> __('Manage Slider','jewellery-shop'),
		'description'	=> __('Select Category from the Dropdowns for slider, Also use the given image dimension (1600 x 850).','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area'
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'jewellery_shop_slidersection', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Jewellery_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'jewellery_shop_slidersection', array(
		'section' => 'jewellery_shop_one_cols_section',
		'settings'   => 'jewellery_shop_slidersection',
	) ) );

	$wp_customize->add_setting('jewellery_shop_button_text',array(
		'default' => 'Hire Me',
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control( 'jewellery_shop_button_text', array(
	   'settings' => 'jewellery_shop_button_text',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label' => __('Add Button Text', 'jewellery-shop'),
	   'type'      => 'text'
	));
	
	//Hide Section
	$wp_customize->add_setting('jewellery_shop_hide_categorysec',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'jewellery_shop_hide_categorysec', array(
	   'settings' => 'jewellery_shop_hide_categorysec',
	   'section'   => 'jewellery_shop_one_cols_section',
	   'label'     => __('Uncheck To Enable This Section','jewellery-shop'),
	   'type'      => 'checkbox'
	));
	
	// Services Section 
	$wp_customize->add_section('jewellery_shop_below_slider_section', array(
		'title'	=> __('Manage Services Section','jewellery-shop'),
		'description'	=> __('Select Pages from the dropdown for Services.','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area',
	));

	// Add a category dropdown Slider Coloumn
	$wp_customize->add_setting( 'jewellery_shop_services_cat', array(
		'default'	=> '0',	
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( new Jewellery_Shop_Category_Dropdown_Custom_Control( $wp_customize, 'jewellery_shop_services_cat', array(
		'section' => 'jewellery_shop_below_slider_section',
		'settings'   => 'jewellery_shop_services_cat',
	) ) );

	$wp_customize->add_setting('jewellery_shop_disabled_pgboxes',array(
		'default' => true,
		'sanitize_callback' => 'jewellery_shop_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));
	
	$wp_customize->add_control( 'jewellery_shop_disabled_pgboxes', array(
	   'settings' => 'jewellery_shop_disabled_pgboxes',
	   'section'   => 'jewellery_shop_below_slider_section',
	   'label'     => __('Uncheck To Enable This Section','jewellery-shop'),
	   'type'      => 'checkbox'
	));

	// Footer Section 
	$wp_customize->add_section('jewellery_shop_footer', array(
		'title'	=> __('Manage Footer Section','jewellery-shop'),
		'priority'	=> null,
		'panel' => 'jewellery_shop_panel_area',
	));

	$wp_customize->add_setting('jewellery_shop_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));	
	$wp_customize->add_control( 'jewellery_shop_copyright_line', array(
	   'section' 	=> 'jewellery_shop_footer',
	   'label'	 	=> __('Copyright Line','jewellery-shop'),
	   'type'    	=> 'text',
	   'priority' 	=> null,
    ));
}
add_action( 'customize_register', 'jewellery_shop_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jewellery_shop_customize_preview_js() {
	wp_enqueue_script( 'jewellery_shop_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'jewellery_shop_customize_preview_js' );