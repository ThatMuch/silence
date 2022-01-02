<?
/**
 * Text Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

 <section class="section section-text">
 <div class="container">
      <!-- Header Section-->
      <?php if(get_sub_field('title') ) : ?>
            <div class="section__header mt-5 mb-5">
			<div class="row">
          <div class="col-sm-5 ">
              <h2 class="section__title text-uppercase"><?php echo get_sub_field('title'); ?></h2>
          </div>
          <div class="col-sm-7 d-flex align-items-center divider">
              <div class="block-round"></div>
          </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Header Section -->
        <!-- Texte -->
        <?php if(get_sub_field('text') ) : ?>
            <div><?php echo get_sub_field('text'); ?></div>
        <?php endif; ?>
        <!-- Texte -->

        <div class="row row_certifications align-items-center">
    <?php

$certifications = get_sub_field('certifications');

if( $certifications ): ?>
        <?php foreach( $certifications as $certification ): ?>
        <div class="col-sm text-center">
                <div class="block_certifications_img justify-content-center">
                  <img src="<?php echo $certification['url']; ?>" alt="<?php echo $certification['alt']; ?>" />
                </div>
        </div>
        <?php endforeach; ?>

<?php endif; ?>
    </div>
      <?php if(get_sub_field('text') ) : ?>
              <div><?php echo get_sub_field('second_text'); ?></div>
          <?php endif; ?>
  </div>
 </section>
