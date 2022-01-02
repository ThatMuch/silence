<?php
/**
 * functions to output ACFs flexible content
 *
 * @author     ThatMuch
 * @version    0.1.0
 * @since      silence_1.0.0
 */


/*
==================================================================================
  SETTINGS/SETUP
==================================================================================*/


/*
 ADD TITLES BLOCKS
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


/*
 GATHER SECTIONS
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
      if (get_row_layout() == 'sl-images') : stanlee_section_sl_images(); endif;
      if (get_row_layout() == 'slider') : stanlee_section_slider(); endif;
      if (get_row_layout() == 'team') : stanlee_section_team(); endif;
      if (get_row_layout() == 'testimonials') : stanlee_section_testimonials(); endif;
      if (get_row_layout() == 'text') : stanlee_section_text(); endif;
      if (get_row_layout() == 'home_list_items') : stanlee_section_home_list_items(); endif;
      if (get_row_layout() == 'home_list_items_images') : stanlee_section_home_list_items_images(); endif;
      if (get_row_layout() == 'concept_formations') : stanlee_section_concept_formations(); endif;
      if (get_row_layout() == 'programmes_formations') : stanlee_section_programmes_formations(); endif;
      if (get_row_layout() == 'programmes_formation_modules') : stanlee_section_programmes_formation_modules(); endif;
      if (get_row_layout() == 'programmes_chiffres') : stanlee_section_programmes_chiffres(); endif;
      if (get_row_layout() == 'programmes_tarif') : stanlee_section_programmes_tarif(); endif;
      if (get_row_layout() == 'team_formateurs') : stanlee_section_team_formateurs(); endif;
      if (get_row_layout() == 'content') : stanlee_section_content(); endif;
    endwhile;
  endif;
  return ob_get_flush();
}


/*
==================================================================================
  SECTIONS
==================================================================================*/

/*
 HOME - LIST ITEMS
/––––––––––––––––––––––––*/
  function stanlee_section_home_list_items() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-home_list_items.php';
    return ob_get_flush();
  }
/*
 HOME - LIST ITEMS IMAGES
/––––––––––––––––––––––––*/
  function stanlee_section_home_list_items_images() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-home_list_items_images.php';
    return ob_get_flush();
  }
/*
 CONCEPT - FORMATIONS
/––––––––––––––––––––––––*/
  function stanlee_section_concept_formations() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-concept_formations.php';
    return ob_get_flush();
  }

/*
 PROGRAMMES - FORMATIONS
/––––––––––––––––––––––––*/
  function stanlee_section_programmes_formations() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-programmes_formations.php';
    return ob_get_flush();
  }
/*
 PROGRAMMES - FORMATIONS MODULES
/––––––––––––––––––––––––*/
  function stanlee_section_programmes_formation_modules() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-programmes_formation_modules.php';
    return ob_get_flush();
  }
/*
 PROGRAMMES - CHIFFRES
/––––––––––––––––––––––––*/
  function stanlee_section_programmes_chiffres() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-programmes_chiffres.php';
    return ob_get_flush();
  }
/*
 PROGRAMMES - TARIF
/––––––––––––––––––––––––*/
  function stanlee_section_programmes_tarif() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-programmes_tarif.php';
    return ob_get_flush();
  }
/*
 TEAM - FORMATEURS
/––––––––––––––––––––––––*/
  function stanlee_section_team_formateurs() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-team_formateurs.php';
    return ob_get_flush();
  }
/*
 Content
/––––––––––––––––––––––––*/
  function stanlee_section_content() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-content.php';
    return ob_get_flush();
  }

/*
 Accordeon
/––––––––––––––––––––––––*/
  function stanlee_section_accordeon() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-accordeon.php';
    return ob_get_flush();
  }

  /*
   Articles
/––––––––––––––––––––––––*/
  function stanlee_section_articles() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-articles.php';
    return ob_get_flush();
  }

/*
 CONTACT
/––––––––––––––––––––––––*/
  function stanlee_section_contact() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-contact.php';
    return ob_get_flush();
  }

/*
 CTA
/––––––––––––––––––––––––*/
  function stanlee_section_cta() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-cta.php';
    return ob_get_flush();
  }
/*
 FORMATIONS
/––––––––––––––––––––––––*/
  function stanlee_section_formations() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-formations.php';
    return ob_get_flush();
  }

/*
 Newsletter
/––––––––––––––––––––––––*/
  function stanlee_section_newsletter() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-newsletter.php';
    return ob_get_flush();
  }

/*
 slider
/––––––––––––––––––––––––*/
  function stanlee_section_slider() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-slider.php';
    return ob_get_flush();
  }

/*
 Slider formations
/––––––––––––––––––––––––*/
  function stanlee_section_s_formations() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-s_formations.php';
    return ob_get_flush();
  }

/*
 s_images
/––––––––––––––––––––––––*/
  function stanlee_section_s_images() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-s-images.php';
    return ob_get_flush();
  }
/*
 sl_images
/––––––––––––––––––––––––*/
  function stanlee_section_sl_images() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-sl-images.php';
    return ob_get_flush();
  }

/*
 TEAM
/––––––––––––––––––––––––*/
  function stanlee_section_team() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-team.php';
    return ob_get_flush();
  }

/*
 TESTIMONIALS
/––––––––––––––––––––––––*/
  function stanlee_section_testimonials() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-testimonials.php';
    return ob_get_flush();
  }

/*
 TEXT
/––––––––––––––––––––––––*/
  function stanlee_section_text() {
    ob_start('sanitize_output');
      include get_template_directory().'/templates/section-text.php';
    return ob_get_flush();
  }
  ?>