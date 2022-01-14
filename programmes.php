<?php
/**
 * Template for Programmes Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Programmes
 * Header
 */

get_header();
$args_formations = array(
	'post_type'      => 'formations',
	'category_name'  => 'particuliers',
	'offset'         => '0',
	'posts_per_page' => '10',
	'order'          => 'ASC',
);
$query_formations = new WP_Query( $args_formations);

$args_formations_col1  = array(
	'post_type'      => 'formations',
	'category_name'  => 'particuliers',
	'offset'         => '0',
	'posts_per_page' => '2',
	'order'          => 'ASC',
);
$query_formations_col1 = new WP_Query( $args_formations_col1 );

$args_formations_col2  = array(
	'post_type'      => 'formations',
	'category_name'  => 'particuliers',
	'offset'         => '2',
	'posts_per_page' => '2',
	'order'          => 'ASC',
);
$query_formations_col2 = new WP_Query( $args_formations_col2 );

$args_modules  = array(
	'post_type'      => 'formations',
	'taxonomy' => 'modules',
	'orderby' => 'name',
	'order'   => 'DESC',
);
$query_modules = get_categories($args_modules);

$args_formations_col2  = array(
	'post_type'      => 'formations',
	'category_name'  => 'particuliers',
	'offset'         => '2',
	'posts_per_page' => '2',
	'order'          => 'ASC',
);
$query_formations_col2 = new WP_Query( $args_formations_col2 );

$args_testimonials = array(
'post_type' => 'testimonials'
);
$the_query_testimonials = new WP_Query($args_testimonials);
?>

<div class="section__area border-bottom pb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<h2 class="m-title text-center fw-normal"><?php echo esc_html(get_field('subtitle_page')); ?></h2>
			</div>
		</div>
	</div>
</div>
        <div class="section__area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
						<?php
							if ( $query_formations_col1->have_posts() ) :
								$i = 0;
								while ( $query_formations_col1->have_posts() ) :
										$query_formations_col1->the_post();
									?>
                        <h2 class="m-title text-center text-lg-start"><?php the_title(); ?></h2>
                        <div class="card__box">
                            <div class="item__box">
                                <div class="item__image">
									<img class="round-image" src="<?php echo esc_url( get_the_post_thumbnail_url($post->ID, 'full') ); ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="item__text">
                                    <h2><a href="<?php the_permalink() ?>">je veux m’inscrire</a></h2>
                                </div>
                            </div>
							<?php if ( have_rows( 'formation_programme' ) ) : ?>
								<?php while ( have_rows( 'formation_programme' ) ) : the_row(); ?>
									<div class="card__info">
										<h2>Le programme du <?php the_title(); ?></h2>
										<?php the_sub_field( 'formation_programme_text' ); ?>
										<a href="<?php echo esc_html(site_url()) ;?>/rdv-decouvertes" class="btn btn-green link">rdv découverte gratuit</a>
										<?php $formation_pdf = get_sub_field( 'formation_pdf' ); ?>
										<?php if ( $formation_pdf ) : ?>
											<a class="btn btn-border orange link" target="_blank" href="<?php echo esc_url( $formation_pdf['url'] ); ?>">télécharger</a>
										<?php endif; ?>
									</div>
								<?php endwhile;  wp_reset_postdata();?>
							<?php endif; ?>
                        </div>
								<?php endwhile;?>
							<?php endif;?>
                    </div>
                    <div class="col-lg-6 mt-lg-200">
                        <?php
							if ( $query_formations_col2 ->have_posts() ) :
								$i = 0;
								while ( $query_formations_col2 ->have_posts() ) :
										$query_formations_col2 ->the_post();
									?>
                        <h2 class="m-title text-center text-lg-start"><?php the_title(); ?></h2>
                        <div class="card__box">
                            <div class="item__box">
                                <div class="item__image">
									<img class="round-image" src="<?php echo esc_url( get_the_post_thumbnail_url($post->ID, 'full') ); ?>">
                                </div>
                                <div class="item__text">
                                    <h2><a href="<?php the_permalink() ?>">je veux m’inscrire</a></h2>
                                </div>
                            </div>
							<?php if ( have_rows( 'formation_programme' ) ) : ?>
								<?php while ( have_rows( 'formation_programme' ) ) : the_row(); ?>
									<div class="card__info">
										<h2>Le programme du <?php the_title(); ?></h2>
										<?php the_sub_field( 'formation_programme_text' ); ?>
										<a href="<?php echo esc_html(site_url()) ;?>/rdv-decouvertes" class="btn btn-green link">rdv découverte gratuit</a>
										<?php $formation_pdf = get_sub_field( 'formation_pdf' ); ?>
										<?php if ( $formation_pdf ) : ?>
											<a class="btn btn-border orange link" target="_blank"  href="<?php echo esc_url( $formation_pdf['url'] ); ?>">télécharger</a>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
                        </div>
								<?php endwhile; wp_reset_postdata(); ?>
							<?php endif;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Nos modules</h2>
                        <div class="modules__list owl-carousel">
							<?php foreach ($query_modules as $module) : ?>

								<div class="modules__item">
									<div class="modules__image">
										<?php
											// Define taxonomy prefix eg. 'category'
											// Use 'term' for all taxonomies.
											$taxonomy_prefix = 'modules';

											// Define term ID
											// Replace NULL with ID of term to be queried eg '123'.
											$term_id = $module->term_id;

											// Define prefixed term ID.
											$term_id_prefixed = $taxonomy_prefix .'_'. $term_id;

											$module_image = get_field( 'module_image', $term_id_prefixed );
											// Image variables.
											$url = $module_image['url'];
											$alt = $module_image['alt'];

											$size = 'thumbnail';
											$thumb = $module_image['sizes'][ $size ];
										?>
										<?php if ( $module_image ) : ?>
											<img src="<?php echo esc_url($thumb);  ?>" alt="<?php echo esc_attr($alt); ?>" />
										<?php endif; ?>
									</div>
									<h2><?php echo esc_html($module->name); ?></h2>
								</div>
								<?php endforeach;  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area pt-100 pb-100 bg-yellow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 pl-lg-5 text-center order-lg-1">
                        <div class="round-circle">
							<?php $program_section1_image = get_field( 'program_section1_image' ); ?>
						<?php if ( $program_section1_image ) : ?>
							<img src="<?php echo esc_url( $program_section1_image['url'] ); ?>" alt="<?php echo esc_attr( $program_section1_image['alt'] ); ?>" />
						<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="text-bc">
                            <h2 class="m-title mb-4"><?php the_field( 'program_section1_title' ); ?></h2>
                            <?php the_field( 'program_section1_text' ); ?>
                            <div class="btn-list justify-content-center mt-5">
								<?php $program_section1_link1 = get_field( 'program_section1_link1' ); ?>
								<?php if ( $program_section1_link1 ) : ?>
									<a class="btn btn-green link" href="<?php echo esc_url( $program_section1_link1['url'] ); ?>" target="<?php echo esc_attr( $program_section1_link1['target'] ); ?>"><?php echo esc_html( $program_section1_link1['title'] ); ?></a>
								<?php endif; ?>
								<?php $program_section1_link2 = get_field( 'program_section1_link2' ); ?>
								<?php if ( $program_section1_link2 ) : ?>
									<a class="btn btn-border orange bg-white link" href="<?php echo esc_url( $program_section1_link2['url'] ); ?>" target="<?php echo esc_attr( $program_section1_link2['target'] ); ?>"><?php echo esc_html( $program_section1_link2['title'] ); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area girl border-bottom">
            <div class="container">
				<!-- Chiffres -->
                <div class="row mb-75">
                    <div class="col-md-12 text-center">
                        <h2 class="title">notre formation en quelques chiffres</h2>
                        <div class="box__list owl-carousel">
							<?php
								if ( $query_formations ->have_posts() ) :
									$i = 0;
									while ( $query_formations ->have_posts() ) :
											$query_formations ->the_post();
							?>
								<div class="box__item">
									<div class="box__item__header">
										<h4 class="box__item__header__title">Taux de satisfaction de notre formation</h4>
										<h2 class="m-title"><?php the_title(); ?></h2>
										<p><?php the_field( 'formation_numbers_date' ); ?></p>
									</div>
									<div class="row">
										<?php if ( have_rows( 'formation_numbers_item' ) ) : ?>
											<?php while ( have_rows( 'formation_numbers_item' ) ) : the_row(); ?>
											<div class="col-sm-4">
												<div class="box__item__title">
													<h1 class="box__item__title__number"><?php the_sub_field( 'formation_numbers_item_number' ); ?></h1>
												</div>
												<p class="box__item__text"><?php the_sub_field( 'formation_numbers_item_text' ); ?></p>
											</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
								<?php endwhile;  wp_reset_postdata(); ?>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
				<!-- Temoignages -->
					<div class="row mt-75 mb-75">
						<div class="col-lg-12 mx-auto">
									<h2 class="title">Les participants en parlent</h2>
									<div class="testimonial__wrapper carousel slide" data-bs-ride="carousel" id="testimonial">
									<div class="carousel-inner">
									<?php if ($the_query_testimonials->have_posts() ): $i = 0;?>
											<?php  while ( $the_query_testimonials->have_posts() ): $the_query_testimonials->the_post(); ?>
												<div class="carousel-item <?php echo $i === 0 ? "active" : "" ?>">
														<div class="testimonial__item">
														<div class="testimonial__image">
															<img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
														</div>
														<div class="testimonial__text">
															<h2><?php the_title()?></h2>
															<h3><?php echo esc_html(get_field('poste')); ?></h3>
															<p><?php echo esc_html(get_field('quote')); ?></p>
														</div>
														</div>
												</div>
											<?php $i++; endwhile;  wp_reset_postdata();?>
								<?php endif;?>
									</div>
									<div class="carousel-indicators">
										<?php if ($the_query_testimonials->have_posts() ): $i = 0;?>
											<?php  while ( $the_query_testimonials->have_posts() ): $the_query_testimonials->the_post(); ?>
										<button type="button" data-bs-target="#testimonial" data-bs-slide-to="<?php echo esc_attr($i);?>" class="<?php echo $i === 0 ? "active" : "" ?>"" aria-current="true" aria-label="<?php the_title()?>"></button>
										<?php $i++; endwhile;?>
								<?php endif; wp_reset_postdata(); ?>
									</div>
								</div>
						</div>
					</div>
				<!-- Tarifs -->
                <h2 class="title mt-75 mb-75"><?php the_field( 'program_prices_title' ); ?></h2>
				<div class="row gx-4">
				<?php if ( have_rows( 'program_prices_card2' ) ) : ?>
					<?php while ( have_rows( 'program_prices_card2' ) ) : the_row(); ?>
						<div class="col-lg-3 order-lg-1">
							<div class="box__promotion">
								<div class="box__promotion__body">
									<h4>Â partir de</h4>
									<h2><?php the_sub_field( 'program_prices_card2_price' ); ?> € <span>ttc</span></h2>
									<h3 class="mt-4"><?php the_sub_field( 'program_prices_card2_text' ); ?></h3>
									<p>en fonction de la formation choisie</p>
								</div>
								<a href="#" class="btn btn-orange link">je m’inscris</a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'program_prices_card3' ) ) : ?>
					<?php while ( have_rows( 'program_prices_card3' ) ) : the_row(); ?>
						<div class="col-lg-3 order-lg-2">
							<div class="box__promotion green">
								<div class="box__promotion__body">
									<h4>Â partir de</h4>
									<h2><?php the_sub_field( 'program_prices_card3_price' ); ?> € <span>ttc</span></h2>
									<h3 class="mt-4"><?php the_sub_field( 'program_prices_card3_text' ); ?></h3>
									<p>en fonction de la formation choisie</p>
								</div>
								<a href="#" class="btn btn-green link ">je m’inscris</a>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'program_prices_card1' ) ) : ?>
					<?php while ( have_rows( 'program_prices_card1' ) ) : the_row(); ?>
						<div class="col-lg-5 ms-auto">
							<div class="box__promo">
								<h2><?php the_sub_field( 'program_prices_card1_text' ); ?></h2>
								<div class="btn-list">
											<?php $program_prices_card1_link1 = get_sub_field( 'program_prices_card1_link1' ); ?>
											<?php if ( $program_prices_card1_link1 ) : ?>
												<a class="btn btn-green link" href="<?php echo esc_url( $program_prices_card1_link1['url'] ); ?>" target="<?php echo esc_attr( $program_prices_card1_link1['target'] ); ?>"><?php echo esc_html( $program_prices_card1_link1['title'] ); ?></a>
											<?php endif; ?>
											<?php $program_prices_card1_link2 = get_sub_field( 'program_prices_card1_link2' ); ?>
											<?php if ( $program_prices_card1_link2 ) : ?>
												<a class="btn btn-border orange link bg-white" href="<?php echo esc_url( $program_prices_card1_link2['url'] ); ?>" target="<?php echo esc_attr( $program_prices_card1_link2['target'] ); ?>"><?php echo esc_html( $program_prices_card1_link2['title'] ); ?></a>
											<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
            </div>
        </div>

        <div class="section__area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row h-100">
								<?php
								if ( $query_formations ->have_posts() ) :
									$i = 0;
									while ( $query_formations ->have_posts() ) :
											$query_formations ->the_post();
							?>
                            <div class="col-md-6">
                                <div class="item__box" style="height: calc(100% - 22px);">
                                    <div class="item__image">
										<img class="round-image" src="<?php echo esc_url( get_the_post_thumbnail_url($post->ID, 'full') ); ?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="item__text icon-2">
                                        <h2><a target="_blank" href="<?php the_field( 'formation_link_cpf' ); ?>">cpf </br><?php the_title(); ?></a></h2>
                                    </div>
                                </div>
                            </div>
							<?php endwhile;  wp_reset_postdata(); ?>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item__box texted text-center bg-yellow">
                            <img width="143" class="round-image-half" src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/image-27.jpg" alt="">
                            <h3>nos formations sont certifiées</h3>
                            <p>Notre organisme de formation est certifié QUALIOPI et DATADOCK, il peut donc ainsi vous proposer une formation prise en charge par votre OPCO.  Nous sommes aussi référencées pour utiliser votre Compte Personnel de Formation. </p>
                            <a href="<?php site_url(); ?>/contact" class="btn btn-green link">nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray border-bottom-yellow pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
						<img src="<?php echo esc_html(get_template_directory_uri());?>/assets/images/client-13.png')" alt="CPF" class="d-block m-auto mb-2" style="mix-blend-mode: multiply;"/>
                        <a href="#" class="btn btn-border orange link">consulter mon solde CPF</a>
                    </div>
                </div>
            </div>
        </div>

		<div class="section__area bg-yellow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 pl-lg-5 text-center order-lg-1">
                        <div class="round-circle">
							<?php $program_section2_image = get_field( 'program_section2_image' ); ?>
							<?php if ( $program_section2_image ) : ?>
								<img src="<?php echo esc_url( $program_section2_image['url'] ); ?>" alt="<?php echo esc_attr( $program_section2_image['alt'] ); ?>" />
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="text-bc">
                            <h2 class="m-title mb-4"><?php the_field( 'program_section2_title' ); ?></h2>
                            <?php the_field( 'program_section2_text' ); ?>
                            <div class="btn-list justify-content-center mt-5">
								<?php $program_section2_link1 = get_field( 'program_section2_link1' ); ?>
								<?php if ( $program_section2_link1 ) : ?>
									<a class="btn btn-green link" href="<?php echo esc_url( $program_section2_link1['url'] ); ?>" target="<?php echo esc_attr( $program_section2_link1['target'] ); ?>"><?php echo esc_html( $program_section2_link1['title'] ); ?></a>
								<?php endif; ?>
								<?php $program_section2_link2 = get_field( 'program_section2_link2' ); ?>
								<?php if ( $program_section2_link2 ) : ?>
									<a class="btn btn-border orange bg-white link" href="<?php echo esc_url( $program_section2_link2['url'] ); ?>" target="<?php echo esc_attr( $program_section2_link2['target'] ); ?>"><?php echo esc_html( $program_section2_link2['title'] ); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
