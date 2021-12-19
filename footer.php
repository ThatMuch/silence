<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>
	</div><!-- #content -->

    <div class="footer__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer__logo">
                      <?php $footer_logo = get_theme_mod( 'footer-logo' );?>
                        <img src="<?php echo $footer_logo ? $footer_logo : get_template_directory_uri()."/assets/images/stanlee_logo_texte.png" ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" class="mb-4">
                    </div>
                             <?php dynamic_sidebar('footer-details');?>
                            <a href="tel:<?php echo get_field('phone','options'); ?>" target="_blank" class="btn btn-orange"><img src="<?php echo get_template_directory_uri()?>/assets/images/phone.svg" alt=""><?php echo get_field('phone','options'); ?></a>
                        </div>
                        <div class="col-md-8">
                            <div class="footer__widget">
                                <?php dynamic_sidebar('footer-menu');?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                          <?php dynamic_sidebar('footer-widget');?>
                </div>
            </div>
        </div>
        <div class="footer__credits">
            <div class="container">
                <div class="footer__inner">
                <span>	© Copyright 2020, Tous droits réservés Silence</span>
                <a class="footer__credits__thatmuch" href="https://thatmuch.fr" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo  get_template_directory_uri() ?>/assets/images/thatmuch-logo.png" alt="logo that much">
                </a>
                </div>
            </div>
        </div>
    </div>
      <?php if(is_active_sidebar('footer-1')){
        //  dynamic_sidebar('footer-1');
            } ?>
    <?php wp_footer() ?>
  </body>
</html>
