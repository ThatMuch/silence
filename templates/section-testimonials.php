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
             <!-- Header -->
	<?php include get_template_directory().'/components/section_header-line.php' ?>
<!-- Header -->
        <!-- Slogan -->
              <?php
              $args = array(
              'post_type' => 'testimonials'
              );
               $the_query = new WP_Query($args); ?>
               <div class="slider-wrapper">
                     <div class="slider slider-autoplay">
                           <?php if ($the_query->have_posts() ): ?>
                                <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                                <div>
                                      <div class="grid">
                                            <?php if (get_the_post_thumbnail()) : ?>
                                                  <div class="slider__img">
                                                      <div class="img__inner">
                                                            <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                                                      </div>
                                                  </div>
                                            <?php endif;?>
                                                  <div class="slider__content text-right">
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
                                <?php endwhile;?>
                          <?php endif; wp_reset_query(); ?>
                     </div>
               </div>
</div>
</section>