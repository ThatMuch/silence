<?php
/**
 * Add your own custom functions here
 * For example, your shortcodes...
 *
 */


/*==================================================================================
 SHORTCODES
==================================================================================*/


/* BUTTON
/––––––––––––––––––––––––*/
// Usage: [button link="https://twitter.com" text="Twitter"]
function shortcode_button($atts) {
  $link = $atts['link'];
  $text = $atts['text'];
  return '<a href="'.$link.'" class="btn btn-primary">'.$text.'</a>';
}
add_shortcode('button', 'shortcode_button');

// Logo du site
add_theme_support(
  'custom-logo', array(
      'flex-height' => true,
  )
);

function your_theme_customizer_setting($wp_customize) {
  // add a setting
      $wp_customize->add_setting('footer-logo');
  // Add a control to upload the hover logo
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer-logo', array(
          'label' => 'Footer Logo',
          'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
          'settings' => 'footer-logo',
          'priority' => 8 // show it just below the custom-logo
      )));
  }

  add_action('customize_register', 'your_theme_customizer_setting');

// Page d'options
if(function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// WYSIWYG
function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {

  // Define the style_formats array

    $style_formats = array(
  /*
  * Each array child is a format with it's own settings
  * Notice that each array has title, block, classes, and wrapper arguments
  * Title is the label which will be visible in Formats menu
  * Block defines whether it is a span, div, selector, or inline style
  * Classes allows you to define CSS classes
  * Wrapper whether or not to add a new block-level element around any selected elements
  */
      array(
        'title' => 'Chapeau',
        'block' => 'span',
        'classes' => 'chapeau',
        'wrapper' => true,

      ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );

    return $init_array;

  }
  // Attach callback to 'tiny_mce_before_init'
  add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );


