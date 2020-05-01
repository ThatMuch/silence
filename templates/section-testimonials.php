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
               <!-- Title -->
               <?php if(get_sub_field('title') ) : ?>
               <div class="header-section">
                        <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
                        <div class="block-round"></div>
               </div>
        <?php endif; ?>
        <!-- Title -->
        <!-- Slogan -->

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
               $the_query = new WP_Query($args);
              if ($the_query->have_posts() ): $i = 0; $y = 0; ?>
                    <div id="carouselTestimonials" class="section-testimonials__carousel carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                                <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                                    <div class="carousel-item section-testimonials__carousel_item <?php if($y == 0) {echo 'active';} ?>">
                                    <div class="container container-testimonials">
                                          <div class="row">
  

                                          <?php if (get_the_post_thumbnail()) : ?>
                                                <div class="img__inner card_img_Testimonials col-md-3">
                                                      <img src="<?php the_post_thumbnail_url()?>" alt="" class="section-testimonials__carousel_item-image">
                                                </div>    
                                                <? else : ?>
                                                      <div class="section-testimonials__carousel_item-image"></div>
                                                <? endif;?>

                                                <div class="block-contentTestimonials text-right col-md-9">
                                                      <div class="contentTestimonials">
                                                            <!-- Auteur -->
                                                            <h5><?php the_title()?></h5>  
                                                            <!-- Auteur -->
                                                      
                                                            <!-- Job -->
                                                            <?php if (get_field('quote') ) : ?>
                                                                  <p> <?php echo get_field('quote'); ?></p>
                                                            <?php endif; ?>
                                                            <!-- Job -->
                                                      </div>      
                                                </div>
                                               
                                          </div>
                                    </div>
                                 </div>
                                <? $y++ ; endwhile;?>
                              </div>

                              <ol class="carousel-indicators carousel-indicators-testimonials">
                                <?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                                      <li data-target="#carouselTestimonials" data-slide-to="<?php echo $i?>" class="<?php if($i == 0) {echo 'active';
                                      } ?>"></li>
                                <?php $i++; endwhile;?>
                              </ol>
                          <!-- <a class="carousel-control-prev" data-target="#carouselTestimonials" role="button" data-slide="prev">
                                <i class="fas fa-chevron-left fa-2x" aria-hidden="true"></i>
                          </a> -->
                          <!-- <a class="carousel-control-next" data-target="#carouselTestimonials" role="button" data-slide="next">
                                <i class="fas fa-chevron-right fa-2x" aria-hidden="true"></i>
                          </a> -->
                    </div>
                <? endif; wp_reset_query(); ?>


                </fieldset>
        </div>
 </section>