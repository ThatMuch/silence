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
		<!-- Navigation -->
		<ul class="nav nav-tab" id="pills-tab" role="tablist">
		<?php foreach ($subCat as $key=>$value) { ?>
			<li class="nav-item">
			<a class="nav-link <?php echo $key === 0 ? 'active' : '' ?>" id="pills-<?php echo $key?>-tab" data-toggle="pill" data-target="#pills-<?php echo $key?>" role="tab" aria-controls="pills-<?php echo $key?>" aria-selected="true">
				<?php echo $value-> name; ?>
			</a>
			</li>
		<?php } ?>
		<li class="nav-item">
		<a class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">
				Conseil sur mesure
			</a>
		</li>
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
							<div class="col-sm-4 d-flex justify-content-center">
								<div class="card-training card">
									<div class="card__inner">
										<div class="card__front">
											<div class="img__inner"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title()?>" /></div>
											<span class="card-training__category"><?php echo $cat->name ?></span>
											<div class="content-center-verticale">
												<h3 class="card__title"><?php the_title();?></h3>
											</div>
											<div class="card-training__details">
											<?php if ( have_rows( 'details' ) ) : ?>
												<ul>
												<?php while ( have_rows( 'details' ) ) : the_row(); ?>

												<li>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" />
													<span><?php the_sub_field( 'time_remot' ); ?></span>
												</li>
												<li>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.svg" />
													<span><?php the_sub_field( 'people' ); ?> Pers</span>
												</li>
												<?php endwhile; ?>
												</u>
											<?php endif; ?>
											</div>
										</div>
										<div class="card__back ">
											<h3 class="card__back__title"><?php the_title();?></h3>
											<?php if ( get_field('desc') ) : ?>
												<p class="card__back__text"><?php echo get_field('desc'); ?></p>
											<?php endif; ?>
											<a href="<?php echo site_url()?>/contact" class="btn btn-primary mt-auto btn-icon">Nous contacter<i class="icon arrow-right"></i></a>
											<?php if ( get_field('brochure') ) : ?>
											 <a href="<?php  the_field('brochure'); ?>" target="_blank" >Télécharger la brochure<i class="icon download"></i></a>
											<?php endif; ?>
										</div>
									</div>


								</div>
							</div>
				<?php
						endwhile;
					endif;
					wp_reset_query();
				?>
				</div>
				</div>
			<?php endforeach; ?>
			<div class="tab-pane fade " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				<?php if( get_sub_field('conseil_sur_mesure') ) : ?>
					<?php echo get_sub_field('conseil_sur_mesure'); ?>
				<?php endif; ?>

		</div>
		</div>
	</div>
</section>