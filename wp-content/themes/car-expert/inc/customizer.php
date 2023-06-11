<?php

/**
 * Car Expert Theme Customizer
 *
 * @package Car Expert
 */



/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function car_expert_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    //select sanitization function
    function car_expert_sanitize_select($input, $setting)
    {
        $input = sanitize_key($input);
        $choices = $setting->manager->get_control($setting->id)->choices;
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
    function car_expert_sanitize_image($file, $setting)
    {
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );
        //check file type from file name
        $file_ext = wp_check_filetype($file, $mimes);
        //if file has a valid mime type return it, otherwise return default
        return ($file_ext['ext'] ? $file : $setting->default);
    }

    $wp_customize->add_setting('car_expert_site_tagline_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  '',
        'sanitize_callback' => 'absint',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('car_expert_site_tagline_show', array(
        'label'      => __('Hide Site Tagline Only? ', 'car-expert'),
        'section'    => 'title_tagline',
        'settings'   => 'car_expert_site_tagline_show',
        'type'       => 'checkbox',

    ));

    $wp_customize->add_panel('car_expert_settings', array(
        'priority'       => 50,
        'title'          => __('Car Expert Theme settings', 'car-expert'),
        'description'    => __('All Car Expert theme settings', 'car-expert'),
    ));
    $wp_customize->add_section('car_expert_header', array(
        'title' => __('Car Expert Header Settings', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Car Expert theme header settings', 'car-expert'),
        'panel'    => 'car_expert_settings',

    ));
    $wp_customize->add_setting('car_expert_main_menu_style', array(
        'default'        => 'style1',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'car_expert_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_main_menu_style', array(
        'label'      => __('Main Menu Style', 'car-expert'),
        'description' => __('You can set the menu style one or two. ', 'car-expert'),
        'section'    => 'car_expert_header',
        'settings'   => 'car_expert_main_menu_style',
        'type'       => 'select',
        'choices'    => array(
            'style1' => __('Style One', 'car-expert'),
            'style2' => __('Style Two', 'car-expert'),
        ),
    ));

    //Car Expert Home intro
    $wp_customize->add_section('car_expert_hbanner', array(
        'title' => __('Home Intro Settings', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Portfoli profile Intro Settings', 'car-expert'),
        'panel'    => 'car_expert_settings',

    ));
    $wp_customize->add_setting('car_expert_hbanner_show', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'default'       =>  '',
        'sanitize_callback' => 'absint',
        'transport'     => 'refresh',
    ));
    $wp_customize->add_control('car_expert_hbanner_show', array(
        'label'      => __('Show Home Banner? ', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_hbanner_show',
        'type'       => 'checkbox',

    ));
    $wp_customize->add_setting('car_expert_hbanner_img', array(
        'capability'        => 'edit_theme_options',
        'default'           => get_template_directory_uri() . '/assets/img/banner.jpg',
        'sanitize_callback' => 'car_expert_sanitize_image',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'car_expert_hbanner_img',
        array(
            'label'    => __('Upload Banner Image', 'car-expert'),
            'description'    => __('Image size should be 450px width & 460px height for better view.', 'car-expert'),
            'section'  => 'car_expert_hbanner',
            'settings' => 'car_expert_hbanner_img',
        )
    ));
    $wp_customize->add_setting('car_expert_hbanner_subtitle', array(
        'default' => __('WELLCOME TO CAR EXPERT', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_hbanner_subtitle', array(
        'label'      => __('Intro Subtitle', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_hbanner_subtitle',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('car_expert_hbanner_title', array(
        'default' => __('The best car', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_hbanner_title', array(
        'label'      => __('Intro Title', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_hbanner_title',
        'type'       => 'text',
    ));
    $wp_customize->add_setting('car_expert_color_title', array(
        'default' => __('Engineering Company', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_color_title', array(
        'label'      => __('Intro Color Title', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_color_title',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('car_expert_hbanner_desc', array(
        'default' => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'wp_kses_post',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_hbanner_desc', array(
        'label'      => __('Intro Description', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_hbanner_desc',
        'type'       => 'textarea',
    ));
    $wp_customize->add_setting('car_expert_btn_text_one', array(
        'default' => __('Contact Us', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control('car_expert_btn_text_one', array(
        'label'      => __('Button one text', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_btn_text_one',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('car_expert_btn_url_one', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_btn_url_one', array(
        'label'      => __('Button one url', 'car-expert'),
        'description'      => __('Keep url empty for hide this button', 'car-expert'),
        'section'    => 'car_expert_hbanner',
        'settings'   => 'car_expert_btn_url_one',
        'type'       => 'url',
    ));


    //Car Expert blog settings
    $wp_customize->add_section('car_expert_blog', array(
        'title' => __('Car Expert Blog Settings', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Car Expert theme blog settings', 'car-expert'),
        'panel'    => 'car_expert_settings',

    ));
    $wp_customize->add_setting('car_expert_blog_container', array(
        'default'        => 'container',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'car_expert_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_blog_container', array(
        'label'      => __('Container type', 'car-expert'),
        'description' => __('You can set standard container or full width container. ', 'car-expert'),
        'section'    => 'car_expert_blog',
        'settings'   => 'car_expert_blog_container',
        'type'       => 'select',
        'choices'    => array(
            'container' => __('Standard Container', 'car-expert'),
            'container-fluid' => __('Full width Container', 'car-expert'),
        ),
    ));
    $wp_customize->add_setting('car_expert_blog_layout', array(
        'default'        => 'rightside',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'car_expert_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_blog_layout', array(
        'label'      => __('Select Blog Layout', 'car-expert'),
        'description' => __('Right and Left sidebar only show when sidebar widget is available. ', 'car-expert'),
        'section'    => 'car_expert_blog',
        'settings'   => 'car_expert_blog_layout',
        'type'       => 'select',
        'choices'    => array(
            'rightside' => __('Right Sidebar', 'car-expert'),
            'leftside' => __('Left Sidebar', 'car-expert'),
            'fullwidth' => __('No Sidebar', 'car-expert'),
        ),
    ));
    $wp_customize->add_setting('car_expert_blog_style', array(
        'default'        => 'list',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'car_expert_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_blog_style', array(
        'label'      => __('Select Blog Style', 'car-expert'),
        'section'    => 'car_expert_blog',
        'settings'   => 'car_expert_blog_style',
        'type'       => 'select',
        'choices'    => array(
            'default' => __('Default Style', 'car-expert'),
            'grid' => __('Grid Style', 'car-expert'),
            'list' => __('List Style', 'car-expert'),
        ),
    ));
    //Car Expert page settings
    $wp_customize->add_section('car_expert_page', array(
        'title' => __('Car Expert Page Settings', 'car-expert'),
        'capability'     => 'edit_theme_options',
        'description'     => __('Car Expert theme blog settings', 'car-expert'),
        'panel'    => 'car_expert_settings',

    ));
    $wp_customize->add_setting('car_expert_page_container', array(
        'default'        => 'container',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'car_expert_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_page_container', array(
        'label'      => __('Page Container type', 'car-expert'),
        'description' => __('You can set standard container or full width container for page. ', 'car-expert'),
        'section'    => 'car_expert_page',
        'settings'   => 'car_expert_page_container',
        'type'       => 'select',
        'choices'    => array(
            'container' => __('Standard Container', 'car-expert'),
            'container-fluid' => __('Full width Container', 'car-expert'),
        ),
    ));
    $wp_customize->add_setting('car_expert_page_header', array(
        'default'        => 'show',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'car_expert_sanitize_select',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('car_expert_page_header', array(
        'label'      => __('Show Page header', 'car-expert'),
        'section'    => 'car_expert_page',
        'settings'   => 'car_expert_page_header',
        'type'       => 'select',
        'choices'    => array(
            'show' => __('Show all pages', 'car-expert'),
            'hide-home' => __('Hide Only Front Page', 'car-expert'),
            'hide' => __('Hide All Pages', 'car-expert'),
        ),
    ));




    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'car_expert_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'car_expert_customize_partial_blogdescription',
            )
        );
    }
}
add_action('customize_register', 'car_expert_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function car_expert_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function car_expert_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function car_expert_customize_preview_js()
{
    wp_enqueue_script('car-expert-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), CAR_EXPERT_VERSION, true);
}
add_action('customize_preview_init', 'car_expert_customize_preview_js');
