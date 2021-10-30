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
      <fieldset>
            <?php if( get_sub_field('title') ) : ?>
                  <legend class="text-center">
                  <h5><?php echo get_sub_field('title'); ?></h5>
                  </legend>
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
<div class="multiple-items slider slider-logo">
    <?php foreach( $images as $image ): ?> 
      <div class="block-img-logo">
             <img src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt']; ?>" />
      </div>
    <?php endforeach; ?> 
</div>
<?php endif; ?>
</fieldset>
    </div>
</section>

