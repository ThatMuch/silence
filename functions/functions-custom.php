<?php
/**
 * Add your own custom functions here
 * For example, your shortcodes...
 */


/*
==================================================================================
 SHORTCODES
==================================================================================*/


/*
 BUTTON
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
          'section' => 'title_tagline', // this is the section where the custom-logo from WordPress is
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
  add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'formations') return false;
    return $current_status;
}



add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );
 /**
  * Hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires */
function create_topics_nonhierarchical_taxonomy() {

// Labels part for the GUI.

  $labels = array(
    'name' => _x( 'Role', 'taxonomy general name' ),
    'singular_name' => _x( 'Role', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Roles' ),
    'popular_items' => __( 'Popular Roles' ),
    'all_items' => __( 'All Roles' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Role' ),
    'update_item' => __( 'Update Role' ),
    'add_new_item' => __( 'Add New Role' ),
    'new_item_name' => __( 'New Role Name' ),
    'separate_items_with_commas' => __( 'Separate roles with commas' ),
    'add_or_remove_items' => __( 'Add or remove roles' ),
    'choose_from_most_used' => __( 'Choose from the most used roles' ),
    'menu_name' => __( 'Roles' ),
  );

// Now register the non-hierarchical taxonomy like tag.

  register_taxonomy('roles','books',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'role' ),
  ));
}

