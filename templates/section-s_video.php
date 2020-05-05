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

<section class= "section section-accueil">
<?php
  $image = get_sub_field('background');
  $data_type = pathinfo($image['url'], PATHINFO_EXTENSION);
  if ($data_type == 'mp4') {  ?>
  <video autoplay muted loop class="section-accueil-video"><source src="<?php echo $image['url'];?>" type="video/mp4"></video>
 
<?php } else { ?>
      <div class="section-accueil-background"><?php echo wp_get_attachment_image($image['ID'], 'large'); ?></div>
  <?php }
?>

<div class="container">
<!-- Slogans -->
<div class="multiple-items slider slider-fade">
<?php if ( have_rows('slogans') ): ?>

  <?php while( have_rows('slogans') ): the_row(); ?>
  <div>
        <section>
            <h1><?php the_sub_field('text'); ?></h1>
        <section>   
</div>        
	<?php endwhile; ?>

<?php endif; ?>
<!-- Slogans -->
</div> 
</div>


 </section>