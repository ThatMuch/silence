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
<div class="container">
			<!-- Header Section-->
			<div class=" section__header section__header-right">
			<?php if ( get_sub_field('title') ) : ?>
				<p class="section__header__title text-right"><?php echo get_sub_field('title'); ?></p>
			<?php endif; ?>
			<div class="row">
				<div class="col-sm-6 divider">
				<div class="block-round"></div>
				</div>
				<div class="col-sm-6">
				<?php if ( get_sub_field('slogan') ) : ?>
				<h2 class="section__header__slogan text-right"><?php echo get_sub_field('slogan'); ?></h2>
			<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- Header Section -->
		<!-- Boucle sur les formations -->
</div>


 </section>