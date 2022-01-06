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
<?php
$args = array(
'post_type' => 'testimonials'
);
$the_query = new WP_Query($args); ?>

  <section class="section__area">
        <div class="container">
            <div class="row">
                  <div class="col-lg-10 mx-auto">
                        <?php if ( get_sub_field('title') ) : ?>
                              <h2 class="title"><?php echo esc_html_e(get_sub_field('title')); ?></h2>
                        <?php endif; ?>
                            <div class="testimonial__wrapper carousel slide" data-bs-ride="carousel" id="testimonial">
                            <div class="carousel-inner">
                              <?php if ($the_query->have_posts() ): $i = 0;?>
                                    <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                                          <div class="carousel-item <?php echo $i === 0 ? "active" : "" ?>">
                                                <div class="testimonial__item">
                                                <div class="testimonial__image">
                                                      <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                                                </div>
                                                <div class="testimonial__text">
                                                      <h2><?php the_title()?></h2>
                                                      <h3><?php echo esc_html_e(get_field('poste')); ?></h3>
                                                      <p><?php echo esc_html_e(get_field('quote')); ?></p>
                                                </div>
                                                </div>
                                          </div>
                                      <?php $i++; endwhile;?>
                          <?php endif;?>
                            </div>
                            <div class="carousel-indicators">
                                  <?php if ($the_query->have_posts() ): $i = 0;?>
                                    <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                                <button type="button" data-bs-target="#testimonial" data-bs-slide-to="<?php echo esc_attr($i);?>" class="<?php echo $i === 0 ? "active" : "" ?>"" aria-current="true" aria-label="<?php the_title()?>"></button>
                                 <?php $i++; endwhile;?>
                          <?php endif; wp_reset_postdata(); ?>
                            </div>
                        </div>
                  </div>
            </div>
</div>
</section>
