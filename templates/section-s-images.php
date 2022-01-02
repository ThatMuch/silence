<?
/**
 * Logos Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

  <section class="section__area bg-green">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client__featured__wrapper">
            <h2><?php echo get_sub_field('title') ?></h2>
                <?php
                  $images = get_sub_field('logo_list');
                  $size = 'medium';
                  $i = 8;

                  if( $images ): ?>
              <div class="client__featured__list">
                  <?php foreach( $images as $image ): ?>
                    <div class="client__featured">
                          <img src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                  <?php endforeach; ?>
              </div>
              <?php endif;?>
          </div>
        </div>
      </div>
    </div>
</section>

