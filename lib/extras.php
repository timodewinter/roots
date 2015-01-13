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

  //$title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


function socialbuttons_shortcode($atts){
  $return  = "";
  $return .= '<ul class="social-menu clearfix">';
  $return .= (get_field('facebook_url', 'options') ? '<li><a href="'.get_field('facebook_url', 'options').'" target="_blank"><img src="'.get_bloginfo('template_url').'/assets/img/social-facebook.svg" class="svg svg-include" /></a></li>' : '');
  $return .= (get_field('twitter_url', 'options') ? '<li><a href="'.get_field('twitter_url', 'options').'" target="_blank"><img src="'.get_bloginfo('template_url').'/assets/img/social-twitter.svg" class="svg svg-include" /></a></li>' : '');
  $return .= (get_field('instagram_url', 'options') ? '<li><a href="'.get_field('instagram_url', 'options').'" target="_blank"><img src="'.get_bloginfo('template_url').'/assets/img/social-instagram.svg" class="svg svg-include" /></a></li>' : '');
  $return .= '</ul>';
  
  return $return;
}
add_shortcode( 'socialbuttons', 'socialbuttons_shortcode' );


/******************************************
*	ACF Options pages
*
/*****************************************/

if( function_exists('acf_add_options_sub_page') ){
  acf_add_options_sub_page(array(
    'title' => 'Social URLs',
    'parent' => 'options-general.php',
    'capability' => 'manage_options'
  ));
}





if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_54afeab514e10',
	'title' => 'Page Sections',
	'fields' => array (
		array (
			'key' => 'field_54afeab92d0e6',
			'label' => 'Intro',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'field_54afeae62d0e7',
			'label' => 'Intro Title',
			'name' => 'intro_title',
			'prefix' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54afeaf32d0e8',
			'label' => 'Intro Text',
			'name' => 'intro_text',
			'prefix' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 3,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54afeb242d0eb',
			'label' => 'Store',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'field_54afeb002d0e9',
			'label' => 'Store Lead',
			'name' => 'store_lead',
			'prefix' => '',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54afeb152d0ea',
			'label' => 'Store Link',
			'name' => 'store_link',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54afec149d095',
			'label' => 'Menu',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'field_54afec349d096',
			'label' => 'Menus',
			'name' => 'menus',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Menu',
			'sub_fields' => array (
				array (
					'key' => 'field_54afec3d9d097',
					'label' => 'Name',
					'name' => 'name',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_54afec469d098',
					'label' => 'Type',
					'name' => 'type',
					'prefix' => '',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'fish' => 'Fish',
						'chicken' => 'Chicken',
						'beef' => 'Beef',
						'lamb' => 'Lamb',
						'pork' => 'Pork',
						'greens' => 'Greens',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_54afec6a9d099',
					'label' => 'Menu Items',
					'name' => 'items',
					'prefix' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => '',
					'max' => '',
					'layout' => 'row',
					'button_label' => 'Add Menu Item',
					'sub_fields' => array (
						array (
							'key' => 'field_54afec7b9d09a',
							'label' => 'Name',
							'name' => 'title',
							'prefix' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_54afec829d09b',
							'label' => 'Price',
							'name' => 'price',
							'prefix' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_54afec909d09c',
							'label' => 'Subtitle',
							'name' => 'subtitle',
							'prefix' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_54afec9a9d09d',
							'label' => 'Description',
							'name' => 'description',
							'prefix' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
				),
			),
		),
		array (
			'key' => 'field_54afeae62d0e8',
			'label' => 'Order Online Link',
			'name' => 'menu_link',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54afeb382d0ec',
			'label' => 'Locations',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'key' => 'field_54afeb542d0ed',
			'label' => 'Locations',
			'name' => 'locations',
			'prefix' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Location',
			'sub_fields' => array (
				array (
					'key' => 'field_54afeb622d0ee',
					'label' => 'Title',
					'name' => 'title',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_54afeb9c2d0f1',
					'label' => 'Hours',
					'name' => 'hours',
					'prefix' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => 'br',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_54afeba52d0f2',
					'label' => 'Address',
					'name' => 'address',
					'prefix' => '',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => 'br',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_54afeeb53d20d',
					'label' => 'Map Link',
					'name' => 'map_link',
					'prefix' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-landing-page.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
));

register_field_group(array (
	'key' => 'group_54ac0f1239685',
	'title' => 'Social URLs',
	'fields' => array (
		array (
			'key' => 'field_54ac0f2052e39',
			'label' => 'Facebook URL',
			'name' => 'facebook_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54ac0f2e52e3a',
			'label' => 'Twitter URL',
			'name' => 'twitter_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54ac10b7a95d6',
			'label' => 'Twitter handle',
			'name' => 'twitter_handle',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54ac0f3552e3b',
			'label' => 'Instagram URL',
			'name' => 'instagram_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-social-urls',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;


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
  
  // START - waypointsSticky
  wp_register_script('waypointsSticky', get_template_directory_uri() . '/vendor/imakewebthings/jquery-waypoints/shortcuts/sticky-elements/waypoints-sticky.min.js', array(), null, true);
  wp_enqueue_script('waypointsSticky');
  // END - waypoints
  
  // START - jqueryEasing
  wp_register_script('jqueryEasing', get_template_directory_uri() . '/vendor/gdsmith/jquery.easing/jquery.easing.1.3.min.js', array(), null, true);
  wp_enqueue_script('jqueryEasing');
  // END - jqueryEasing

  // START - masonry
  wp_register_script('masonry', get_template_directory_uri() . '/vendor/desandro/masonry/dist/masonry.pkgd.min.js', array(), null, true);
  wp_enqueue_script('masonry');
  // END - masonry

  // START - Royal Slider Style and Scripts
  wp_enqueue_style('royalslider', get_template_directory_uri() . '/vendor/timodewinter/royalslider/royalslider.css');
  wp_enqueue_style('royalslider_rsDefaultInv', get_template_directory_uri() . '/vendor/timodewinter/royalslider/skins/default-inverted/rs-default-inverted.css');
  wp_register_script('royalslider', get_template_directory_uri() . '/vendor/timodewinter/royalslider/jquery.royalslider.min.js', array(), null, true);
  wp_enqueue_script('royalslider');
  // END - Royal Slider Style and Scripts  



  // START - google-maps
  //wp_register_script('google-maps', 'https://maps.googleapis.com/maps/api/js', array(), null, true);
  //wp_enqueue_script('google-maps');
  // END - google-maps

}
add_action('wp_enqueue_scripts', 'theme_scripts', 99);


function theme_head(){
  // Typekit font
  echo "<script src=\"//use.typekit.net/psh8uom.js\"></script><script>try{Typekit.load();}catch(e){}</script>";
  
  // HTML5 Shiv
  echo "<!--[if lt IE 9]>\n";
  echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script>\n";
  echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>\n";
  echo "<![endif]-->";
}

add_action('wp_head', 'theme_head');



/******************************************
*	add_image_size
*
/*****************************************/

if ( function_exists( 'add_image_size' ) ) { 
/*
	add_image_size( 'extra-large', 2400, 2400, false);
*/
}




