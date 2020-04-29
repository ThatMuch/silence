<?php
/**
 * functions to output ACFs flexible content
 *
 * @author     ThatMuch
 * @version    0.1.0
 * @since      silence_1.0.0
 *
 *
 */


/*==================================================================================
  SETTINGS/SETUP
==================================================================================*/


/* ADD TITLES BLOCKS
/––––––––––––––––––––––––––––––––––––*/
// adds the title sub-field to the ACF-row. Edit `name` at `add_filter` to match your ACF-value.
// » https://www.advancedcustomfields.com/resources/acf-fields-flexible_content-layout_title/
function stanlee_sections_backendtitle( $title, $field, $layout, $i ) {
  if (!empty(get_sub_field('title'))) {
  	$title = get_sub_field('title')." ($title)";
  }
  return $title;
}
add_filter('acf/fields/flexible_content/layout_title/name=sections', 'stanlee_sections_backendtitle', 10, 4);


/* GATHER SECTIONS
/––––––––––––––––––––––––*/
function stanlee_sections() {
  ob_start('sanitize_output');
  if (have_rows('sections')):
    while (have_rows('sections')): the_row();
      if (get_row_layout() == 'accordeon') : stanlee_section_accordeon(); endif;
      if (get_row_layout() == 'articles') : stanlee_section_articles(); endif;
      if (get_row_layout() == 'contact') : stanlee_section_contact(); endif;
      if (get_row_layout() == 'cta') : stanlee_section_link(); endif;
      if (get_row_layout() == 'formations') : stanlee_section_formations(); endif;
      if (get_row_layout() == 'newsletter') : stanlee_section_newsletter(); endif;
      if (get_row_layout() == 's-formations') : stanlee_section_s_formations(); endif;
      if (get_row_layout() == 's-images') : stanlee_section_s_images(); endif;
      if (get_row_layout() == 's-video') : stanlee_section_s_video(); endif;
      if (get_row_layout() == 'slider') : stanlee_section_slider(); endif;
      if (get_row_layout() == 'team') : stanlee_section_team(); endif;
      if (get_row_layout() == 'testimonials') : stanlee_section_testimonials(); endif;
      if (get_row_layout() == 'text') : stanlee_section_text(); endif;
    endwhile;
  endif;
  return ob_get_flush();
}


/*==================================================================================
  SECTIONS
==================================================================================*/

/* Accordeon
/––––––––––––––––––––––––*/
function stanlee_section_accordeon() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-accordeon.php');
  return ob_get_flush();
}
/* Articles
/––––––––––––––––––––––––*/
function stanlee_section_articles() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-articles.php');
  return ob_get_flush();
}

/* CONTACT
/––––––––––––––––––––––––*/
function stanlee_section_contact() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-contact.php');
  return ob_get_flush();
}

/* CTA
/––––––––––––––––––––––––*/
function stanlee_section_cta() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-cta.php');
  return ob_get_flush();
}
/* FORMATIONS
/––––––––––––––––––––––––*/
function stanlee_section_formations() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-formations.php');
  return ob_get_flush();
}

/* Newsletter
/––––––––––––––––––––––––*/
function stanlee_section_newsletter() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-newsletter.php');
  return ob_get_flush();
}

/* slider
/––––––––––––––––––––––––*/
function stanlee_section_slider() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-slider.php');
  return ob_get_flush();
}

/* Slider formations
/––––––––––––––––––––––––*/
function stanlee_section_s_formation() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-s-formation.php');
  return ob_get_flush();
}

/* s_images
/––––––––––––––––––––––––*/
function stanlee_section_s_images() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-s-images.php');
  return ob_get_flush();
}

/* s_video
/––––––––––––––––––––––––*/
function stanlee_section_s_video() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-s-video.php');
  return ob_get_flush();
}

/* TEAM
/––––––––––––––––––––––––*/
function stanlee_section_team() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-team.php');
  return ob_get_flush();
}

/* TESTIMONIALS
/––––––––––––––––––––––––*/
function stanlee_section_testimonials() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-testimonials.php');
  return ob_get_flush();
}

/* TEXT
/––––––––––––––––––––––––*/
function stanlee_section_text() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text.php');
  return ob_get_flush();
}
?>