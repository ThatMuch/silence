<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>
	</div><!-- #content -->
    <footer class="footer">
      <div class="container">
      <div class="footer__header row d-flex align-items-end mb-5">
      <div class="col-sm-10">
            <div class="block-round"></div>
          </div>
          <div class="col-sm-2 footer__logo">
            <?php $footer_logo = get_theme_mod( 'footer-logo' );?>
            <img src="<?php echo $footer_logo ? $footer_logo : get_template_directory_uri()."/assets/images/stanlee_logo_texte.png" ?>" alt="" srcset="">
          </div>

        </div>
        <div class="row footer__inner">
        <div class="footer__contact col-sm-3">
            <?php if ( get_field('phone','options') ) : ?>
            <h4 class="mb-3">Contactez nous</h4>
            <a target="_blank" href="tel:<?php echo get_field('phone','options'); ?>" class="btn btn-outline-primary mb-3">
              <?php echo get_field('phone','options'); ?>
            <i class="icon mobile"></i>
            </a>
            <?php endif; ?>
            <?php if (have_rows('rs', 'options')) : ?>
            <ul class="footer__rs">
              <?php while ( have_rows('rs', 'options') ) : the_row(); ?>
                <?php if (get_sub_field('facebook') ) : ?>
                    <li class="footer__rs__item">
                      <a target="_blank" href="<?php the_sub_field('facebook');?>">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('twitter') ) : ?>
                    <li class="footer__rs__item">
                      <a target="_blank" href="<?php the_sub_field('twitter');?>">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('instagram') ) : ?>
                    <li class="footer__rs__item">
                      <a target="_blank" href="<?php the_sub_field('instagram');?>">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('google') ) : ?>
                    <li class="footer__rs__item">
                      <a target="_blank" href="<?php the_sub_field('google');?>">
                        <i class="fab fa-google" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('linkedin') ) : ?>
                    <li class="footer__rs__item">
                      <a target="_blank" href="<?php the_sub_field('linkedin');?>">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
                <?php if (get_sub_field('youtube') ) : ?>
                    <li class="footer__rs__item">
                      <a target="_blank" href="<?php the_sub_field('youtube');?>">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                      </a>
                    </li>
                  <?php endif; ?>
              <?php endwhile;?>
            </ul>
          <?php endif;?>
          </div>
          <div class="widget-list col-sm-9">
          <?php if(is_active_sidebar('footer-1')){
      dynamic_sidebar('footer-1');
        } ?>
          </div>
          </div>
      </div>
      <div class="footer__credits">
		<div class="container">
			<div class="footer__inner">
			<span>	© Copyright 2020, Tous droits réservés Silence</span>
			<a class="footer__credits__thatmuch" href="https://thatmuch.fr" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo  get_template_directory_uri() ?>/dist/images/thatmuch-logo.png" alt="logo that much">
			</a>
			</div>
		</div>
	</div>
    </footer>
    <?php wp_footer() ?>
  </body>
</html>
