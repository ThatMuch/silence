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
			<div class="section__header section__header-right">
					<?php if ( get_sub_field('title') ) : ?>
						<p class="section__header__title text-right"><?php echo get_sub_field('title'); ?></p>
					<?php endif; ?>
					<div class="row">
						<div class="col-sm-7 divider">
							<div class="block-round"></div>
						</div>
						<div class="col-sm-5">
							<?php if ( get_sub_field('slogan') ) : ?>
							<h2 class="section__header__slogan text-right"><?php echo get_sub_field('slogan'); ?></h2>
						<?php endif; ?>
						</div>
					</div>
			</div>

     <div class="row justify-content-center">



			<?php
                    $args = array(
						'post_type' => 'formations',
						'posts_per_page' => 3,
						'tag' => 'featured'
					);
					$the_query = new WP_Query($args);

					if ($the_query->have_posts()) : ;
					    while ($the_query->have_posts()) : $the_query->the_post() ;?>

								<div class="col-md-4 d-flex justify-content-center column-grid-card">
									<div class="card-training card">
									<div class="card__inner">
										<div class="card__front">
											<div class="img__inner"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title()?>" /></div>
											<span class="card-training__category">
											<?php
												foreach((get_the_category()) as $category){
													echo $category->name."<br>";
													}
												?>
										    </span>
											<div class="content-center-verticale">
												<h3 class="card__title"><?php the_title();?></h3>
											</div>
											<div class="card-training__details">
											<?php if ( have_rows( 'details' ) ) : ?>
												<ul>
												<?php while ( have_rows( 'details' ) ) : the_row(); ?>
												<?php if (get_sub_field( 'time_remot' )): ?>
												<li>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons_silenceoratoire_Timer.svg" />
													<span><?php the_sub_field( 'time_remot' ); ?></span>
												</li>
											<?php endif; ?>
											<?php if (get_sub_field( 'people' )): ?>
												<li>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons_silenceoratoire_Participants.svg" />
													<span><?php the_sub_field( 'people' ); ?> Pers</span>
												</li>
											<?php endif; ?>
												<?php endwhile; ?>
												</u>
											<?php endif; ?>
											</div>
										</div>
										<div class="card__back ">
											<h3 class="card__back__title"><?php the_title();?></h3>
											<?php if(has_tag('Formation à distance')): ?>
											<span class="badge badge-light">Format à distance disponible</span>
											<?php endif; ?>
											<?php if ( get_field('desc') ) : ?>
												<div class="card__back__text <?php echo has_tag('Formation à distance') ? "has_tag" : ""?>"><?php echo get_field('desc'); ?></div>
											<?php endif; ?>
											<?php // if (intval(strlen(get_field('desc'))) > 250) : ?>
                                      <!-- <button  class="btn btn-link showMore">lire +</button> -->
                                    <?php // endif; ?>												<a class="btn btn-primary mt-auto btn-icon mb-2" href="<?php echo site_url()?>/contact">Nous contacter <i class="icon arrow-right"></i></a>

											<?php if ( get_field('brochure') ) : ?>
											 <a href="<?php  the_field('brochure'); ?>" target="_blank" class="btn btn-outline-primary btn-icon" >Télécharger la brochure<i class="icon download"></i></a>
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
<?php
$link = get_sub_field('button');
if( $link ):
    $link_url = $link['url'];
    $link_title = $link['title'];
?>
<div class="container-button">
	<a class="btn btn-primary mt-auto btn-icon" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?> <i class="icon search-wen"></i></a>
</div>
<?php endif; ?>
</div>


 </section>