<?
/**
 * Articles Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>


 <section class="section section-articles">
 <?php if( get_sub_field('title') ) : ?>
	 <?php echo get_sub_field('title'); ?>
 <?php endif; ?>

	<div class="container">
	<fieldset>
            <?php if( get_sub_field('slogan') ) : ?>
                  <legend>
                  <h5><?php echo get_sub_field('slogan'); ?></h5>
                  </legend>
			<?php endif; ?>
    </fieldset>		
	</div>


 </section>