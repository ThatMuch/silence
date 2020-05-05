<?
/**
 * Testimonials Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

  <section class="section section-testimonials">
        <div class="container">
              <div class="section__header section__header-right">
                    <div class="row">
                    <div class="col-sm-8 divider">
                              <div class="block-round"></div>
                          </div>
                          <div class="col-sm-4">
                              <?php if(get_sub_field('title') ) : ?>
                                    <h2 class="section__title mb-0"><?php echo get_sub_field('title'); ?></h2>
                              <?php endif; ?>
                          </div>

                    </div>
              </div>

        <fieldset>
            <?php if( get_sub_field('slogan') ) : ?>
                  <legend>
                  <h5><?php echo get_sub_field('slogan'); ?></h5>
                  </legend>
            <?php endif; ?>
        <!-- Slogan -->
              <?php
              $args = array(
              'post_type' => 'testimonials'
              );
               $the_query = new WP_Query($args); ?>
               <div class="slider slider-autoplay">
                     <?php if ($the_query->have_posts() ): ?>
                          <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                          <div>
                                <div class="row">
                                      <?php if (get_the_post_thumbnail()) : ?>
                                            <div class="slider__img col-lg-4">
                                                <div class="img__inner">
                                                      <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                                                </div>
                                            </div>
                                      <? endif;?>
                                            <div class="slider__content text-right col-lg-8">
                                                        <!-- Auteur -->
                                                        <h5><?php the_title()?></h5>
                                                        <?php if (get_field('poste') ) : ?>
                                                              <span> <?php echo get_field('poste'); ?></span>
                                                        <?php endif; ?>
                                                        <!-- Auteur -->
                                                        <!-- Job -->
                                                        <?php if (get_field('quote') ) : ?>
                                                              <p> <?php echo get_field('quote'); ?></p>
                                                        <?php endif; ?>
                                                        <!-- Job -->
                                            </div>
                                </div>

                          </div>
                          <? endwhile;?>
                    <? endif; wp_reset_query(); ?>
               </div>
      </fieldset>
</div>
</section>