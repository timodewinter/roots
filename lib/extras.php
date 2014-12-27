<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);



/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 */
class MyTheme_Logos {
   public static function register ( $wp_customize ) {
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'mytheme_options', 
         array(
            'title' => __( 'MyTheme Options', 'mytheme' ), //Visible title of section
            'priority' => 35, //Determines what order this appears in
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize some example settings for MyTheme.', 'mytheme'), //Descriptive tooltip
         ) 
      );
      
      //1. Define a new section (if desired) to the Theme Customizer
      $wp_customize->add_section( 'mytheme_logos', 
         array(
            'title' => __( 'Logos', 'mytheme_logos' ), //Visible title of section
            'priority' => 35, //Determines what order this appears in
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize the logos on the site.', 'mytheme_logos'), //Descriptive tooltip
         ) 
      );

      
      
      //  =============================
      //  = Favicon                   =
      //  =============================
      $wp_customize->add_setting('mytheme_favicon', array(
          'default'           => 'none'
      ));
   
      $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'favicon_setting', array(
          'label'    => 'Favicon',
          'section'  => 'mytheme_logos',
          'settings' => 'mytheme_favicon',
          'priority' => 5
     )));



      //  =============================
      //  = Touch Icons               =
      //  =============================

      // WP_Customize_Image_Control
      $wp_customize->add_setting( 'mytheme_icon', array(
          'default'        => '',
      ) );

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_icon', array(
          'label'   => 'Icon Setting Default',
          'section' => 'mytheme_logos',
          'settings'   => 'mytheme_icon',
          'priority' => 10
      ) ) );


      // WP_Customize_Image_Control
      $wp_customize->add_setting( 'mytheme_icon_76', array(
          'default'        => '',
      ) );

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_icon_76', array(
          'label'   => 'Icon Setting 76x76',
          'section' => 'mytheme_logos',
          'settings'   => 'mytheme_icon_76',
          'priority' => 10
      ) ) );


      // WP_Customize_Image_Control
      $wp_customize->add_setting( 'mytheme_icon_120', array(
          'default'        => '',
      ) );

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_icon_120', array(
          'label'   => 'Icon Setting 120x120',
          'section' => 'mytheme_logos',
          'settings'   => 'mytheme_icon_120',
          'priority' => 10
      ) ) );


      // WP_Customize_Image_Control
      $wp_customize->add_setting( 'mytheme_icon_152', array(
          'default'        => '',
      ) );

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mytheme_icon_152', array(
          'label'   => 'Icon Setting 152x152',
          'section' => 'mytheme_logos',
          'settings'   => 'mytheme_icon_152',
          'priority' => 10
      ) ) );


      
      
      
      
         
      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
      $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
   }

}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'MyTheme_Logos' , 'register' ) );










/******************************************
*	theme_scripts
*
/*****************************************/




function theme_scripts() {
  wp_enqueue_script('jquery');
    
  // START - localscroll
  wp_register_script('localscroll', get_template_directory_uri() . '/vendor/flesler/jquery.localScroll/jquery.localScroll.min.js', array(), null, true);
  wp_enqueue_script('localscroll');
  // END - localscroll

  // START - scrollTo
  wp_register_script('scrollTo', get_template_directory_uri() . '/vendor/flesler/jquery.scrollto/jquery.scrollTo.min.js', array(), null, true);
  wp_enqueue_script('scrollTo');
  // END - scrollTo

  // START - waypoints
  wp_register_script('waypoints', get_template_directory_uri() . '/vendor/imakewebthings/jquery-waypoints/waypoints.min.js', array(), null, true);
  wp_enqueue_script('waypoints');
  // END - waypoints

  // START - google-maps
  //wp_register_script('google-maps', 'https://maps.googleapis.com/maps/api/js', array(), null, true);
  //wp_enqueue_script('google-maps');
  // END - google-maps

}
add_action('wp_enqueue_scripts', 'theme_scripts', 99);



/******************************************
*	add_image_size
*
/*****************************************/

if ( function_exists( 'add_image_size' ) ) { 
/*
	add_image_size( 'extra-large', 2400, 2400, false);
*/
}




