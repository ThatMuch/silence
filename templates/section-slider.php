<?
/**
 * Carousel Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

  <section class="section section-slider">
      <div class="container">

          <div class="section__header">
              <div class="row">
                  <div class="col-sm-9 divider">
                    <div class="block-round"></div>
                  </div>
                  <div class="col-sm-3">
                    <?php if ( get_sub_field('title') ) : ?>
                        <h2><?php echo get_sub_field('title'); ?></h2>
                    <?php endif; ?>
                  </div>
              </div>
          </div>

          <div class="slider-default slider">
          <?php
            if( have_rows('items') ):
                while ( have_rows('items') ) : the_row(); ?>
                <div>
                    <div class="row">
                        <div class="col-sm-6 slider__img">
                            <?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>"/>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-6 slider__content">
                            <h3> <?php the_sub_field('title'); ?> </h3>
                            <p> <?php the_sub_field('text'); ?> </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif;?>
          </div>
       <!-- Button -->
       <?php if ( get_sub_field('button') ) : $link = get_sub_field('button');?>
                <div class="section-slider__btn">
                    <a class="btn btn-outline-primary" href="<?php echo  $link['url']; ?>" target="<?php echo $link['target'];?>">
                        <?php echo  $link['title']; ?><i class="fas fa-download"></i>
                    </a>
                </div>
                <?php endif; ?>
                <!-- Button -->
      </div>
 </section>