<?
/**
 * Formations Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

<?php
$cat = get_sub_field('category');
$subCat = get_categories( array('child_of' => $cat, 'orderby' => 'name', 'hide_empty' => false ) );
?>

 <section class="section section_formations">
	<div class="container">
		<!-- Header -->
		<?php if ( get_sub_field('slogan') ) : ?>
			<p><?php echo get_sub_field('slogan'); ?></p>
		<?php endif; ?>

		<?php if ( get_sub_field('title') ) : ?>
			<h2><?php echo get_sub_field('title'); ?></h2>
		<?php endif; ?>
		<!-- Navigation -->
		<ul class="nav nav-tab mb-3" id="pills-tab" role="tablist">
		<?php foreach ($subCat as $key=>$value) { ?>
			<li class="nav-item">
			<a class="nav-link <?php echo $key === 0 ? 'active' : '' ?>" id="pills-<?php echo $key?>-tab" data-toggle="pill" data-target="#pills-<?php echo $key?>" role="tab" aria-controls="pills-<?php echo $key?>" aria-selected="true">
				<?php echo $value-> name; ?>
			</a>
			</li>
		<?php } ?>
		</ul>
		<!-- Tab Content -->
		<div class="tab-content" id="pills-tabContent">
			<?php foreach ($subCat as $key=>$cat) :

				$args = array(
					'post_type' => 'formations',
					'cat' => $cat -> cat_ID,
					'category__in' => array($cat->term_id),
					);
				$the_query = new WP_Query($args);
			?>
				<!-- Tab Pane : par sous-categories -->
				<div class="tab-pane fade <?php  echo $key === 0 ? 'show active' : '' ?>" id="pills-<?php echo $key?>" role="tabpanel" aria-labelledby="pills-<?php echo $key?>-tab">
				<div class="row">
				<?php
					if ($the_query->have_posts()) : ;
						while ($the_query->have_posts()) : $the_query->the_post() ;?>
							<!-- Cards -->
							<div class="col-sm-4"><?php the_title();?></div>
				<?php
						endwhile;
					endif;
					wp_reset_query();
				?>
				</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>