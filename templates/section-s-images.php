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

  <section class="section section-logos">
      <div class="container">
      <div class="slider-wrapper">
            <?php if( get_sub_field('title') ) : ?>
              <div class="title-wrapper">
                <h5 class="section__title"><?php echo get_sub_field('title'); ?></h5>
              </div>
            <?php endif; ?>
        <?php if( get_sub_field('slogan') ) : ?>
	 <?php echo get_sub_field('slogan'); ?>
 <?php endif; ?>
        <!-- Slogan -->
  <?php

$images = get_sub_field('logo_list');
$size = 'medium';
$i = 8;

if( $images ): ?>
<div class="slider slider-logo">

    <?php foreach( $images as $image ): ?>
      <div class="block-img-logo">
             <img src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php endforeach; ?>


</div>
<?php endif; ?>
</div>
    </div>
</section>

