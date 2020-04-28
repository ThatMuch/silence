<?
/**
 * Slider Video Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

<section class = "section section-articles">
<!-- Slogans -->
<?php if ( have_rows('slogans') ): ?>

	<?php while( have_rows('slogans') ): the_row(); ?>

		<?php the_sub_field('text'); ?>

	<?php endwhile; ?>

<?php endif; ?>
<!-- Slogans -->

<?php
  $image = get_sub_field('background');
  $data_type = pathinfo($image['url'], PATHINFO_EXTENSION);
  if ($data_type == 'mp4') {?>
    <video>
      <source src="<?php echo $image['url'];?>" type="video/mp4">
	  Votre navigateur ne support pas le tag vidéo.
    </video>
  <?php } else {
    echo wp_get_attachment_image($image['ID'], 'large');
  }
?>

 </section>