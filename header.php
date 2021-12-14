<?php
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php silence_gtm('head') ?>
    <!--=== OPEN-GRAPH TAGS ===-->
    <?php silence_ogtags() ?>
    <!--=== WP HEAD ===-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php silence_gtm('body') ?>

     <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
<!-- MENU -->
<nav class="header__area navbar navbar-expand-lg">
  <div class="container">
    <!-- Navbar brand -->
  <a class="navbar-brand" href="<?php echo site_url(); ?>">
  <?php if($image[0]) : ?>
    <img src="<?php $image[0]?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
    <?php else: ?>
  <div class="logo" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/stanlee_logo_texte.png')"></div>
  <?php endif;?>
  </a>

  <!-- Button Toggler -->
  <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="text">MENU</span>
  </button>

    <div class="collapse navbar-collapse w-100" id="navbar-content">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'mainmenu', // Defined when registering the menu
            'menu_id'        => 'menu-main',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav ms-auto',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
    </div>

  </div>
</nav>


<!-- HEADER -->
<header class="hero hero__area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hero__text">
          <h1><?php the_title(); ?></h1>
          <?php if ( get_field('slogan_page')) : ?>
            <?php the_field( 'slogan_page' ); ?>
          <?php endif; ?>
            <?php if (is_archive() || is_category()): ?>
            <h1>
            <?php
                if ( is_day() ) :
                  echo get_the_date();
                  elseif ( is_month() ) :
                    echo get_the_date( _x( 'F Y', 'monthly archives date format', 'stanlee' ) );
                  elseif ( is_year() ) :
                    echo get_the_date( _x( 'Y', 'yearly archives date format', 'stanlee' ) );
                  endif;
                  ?>
            </h1>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </header>


<!-- HEADER -->
    <div id="content" class="site-content">
