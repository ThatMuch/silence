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
<nav class="navbar navbar-expand-lg menu">
  <div class="container">
  <a class="navbar-brand" href="<?php echo site_url(); ?>">
    <div class="logo" style="background-image: url('<?php if($image[0]): echo $image[0]; else: echo get_template_directory_uri()?>/assets/images/stanlee_logo_texte.png<?php endif; ?>')"></div>
  </a>
  <?php if (have_rows('rs', 'options')) : ?>
            <ul class="footer__rs mr-5">
              <?php while ( have_rows('rs', 'options') ) : the_row(); ?>
                <?php if (get_sub_field('facebook') ) : ?>
                    <li class="footer__rs__item">
                      <a href="<?php the_sub_field('facebook');?>">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('twitter') ) : ?>
                    <li class="footer__rs__item">
                      <a href="<?php the_sub_field('twitter');?>">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('instagram') ) : ?>
                    <li class="footer__rs__item">
                      <a href="<?php the_sub_field('instagram');?>">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('google') ) : ?>
                    <li class="footer__rs__item">
                      <a href="<?php the_sub_field('google');?>">
                        <i class="fab fa-google" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('linkedin') ) : ?>
                    <li class="footer__rs__item">
                      <a href="<?php the_sub_field('linkedin');?>">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('youtube') ) : ?>
                    <li class="footer__rs__item">
                      <a href="<?php the_sub_field('youtube');?>">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
              <?php endwhile;?>
            </ul>
          <?php endif;?>
    <div class="collapse navbar-collapse" id="navbar-content">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'mainmenu', // Defined when registering the menu
            'menu_id'        => 'menu-main',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'navbar-nav',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
    </div>
    <button  class="ml-auto btn btn-primary btn-search d-none d-md-block">
  <span class="btn-search__text">Formation et coaching</span>
  <i class="icon search-wen"></i></button>
  </div>
</nav>

<button class="navbar-toggler btn-menu collapsed" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
  <span class="btn-menu__burger"></span>
</button>
<button  class="ml-auto btn btn-primary btn-search d-md-none d-block">
  <span class="btn-search__text">Formation et coaching</span>
  <i class="icon search-wen"></i> </button>
<!-- SEARCH -->
<?php get_template_part( 'formations', 'searchform' ); ?>
<!-- SEARCH -->
<!-- HEADER -->
<? if (is_archive() || is_category()): ?>
  <header>
    <h1 class="page-title screen-reader-text">
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
  </header>
<? endif; ?>
<!-- HEADER -->
    <div id="content" class="site-content">
