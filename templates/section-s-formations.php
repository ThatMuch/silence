<?
/**
 * Slider Formations Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

 <section class="section section-s-formations">
 <?php if( get_sub_field('title') ) : ?>
	 <?php echo get_sub_field('title'); ?>
 <?php endif; ?>
 <?php if( get_sub_field('slogan') ) : ?>
	 <?php echo get_sub_field('slogan'); ?>
 <?php endif; ?>

 <!-- Boucle sur les formations -->

 </section>