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
$args  = array(
	'post_type'      => 'formations',
	'category_name'  => 'particuliers',
	'offset'         => '0',
	'posts_per_page' => '10',
	'order'          => 'ASC',
);
$query = new WP_Query( $args );
?>

<div class="section__area border-bottom pb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<h2 class="m-title text-center fw-normal"><?php echo esc_html_e(get_field('subtitle_page')); ?></h2>
			</div>
		</div>
	</div>
</div>
        <div class="section__area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
						<?php
							if ( $query->have_posts() ) :
								$i = 0;
								while ( $query->have_posts() ) :
										$query->the_post();
									?>
                        <h2 class="m-title text-center text-lg-start"><?php the_title(); ?></h2>
                        <div class="card__box">
                            <div class="item__box">
                                <div class="item__image">
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img class="round-image" src="<?php esc_html_e( $image[0] ); ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="item__text">
                                    <h2><a href="#">je veux m’inscrire</a></h2>
                                </div>
                            </div>
							<?php if ( have_rows( 'formation_programme' ) ) : ?>
								<?php while ( have_rows( 'formation_programme' ) ) : the_row(); ?>
									<div class="card__info">
										<h2>Le programme du <?php the_title(); ?></h2>
										<?php the_sub_field( 'formation_programme_text' ); ?>
										<a href="#" class="btn btn-green link">rdv découverte gratuit</a>
										<?php $formation_pdf = get_sub_field( 'formation_pdf' ); ?>
										<?php if ( $formation_pdf ) : ?>
											<a class="btn btn-border orange link" href="<?php echo esc_url( $formation_pdf['url'] ); ?>">télécharger</a>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
                        </div>
								<?php endwhile;?>
							<?php endif;?>
                    </div>
                    <div class="col-lg-6 mt-lg-200">
                        <h2 class="m-title text-center text-lg-start">Cercle à haute voix</h2>
                        <div class="card__box">
                            <div class="item__box">
                                <div class="item__image">
                                    <img src="assets/img/image-3.jpg" alt="">
                                </div>
                                <div class="item__text">
                                    <h2><a href="#">je veux m’inscrire</a></h2>
                                </div>
                            </div>
                            <div class="card__info">
                                <h2>Le programme du Cercle des oratrices</h2>
                                <p><strong>7</strong> modules <br>Cercle de <strong>6 à 10</strong> personnes <br><strong>16h00</strong> <br> 1 RDV <strong>1</strong> jeudi soir sur <strong>2</strong></p>
                                <a href="#" class="btn btn-green link">rdv découverte gratuit</a>
                                <a href="#" class="btn btn-border orange link">téléchager</a>
                            </div>
                        </div>
                        <h2 class="m-title text-center text-lg-start">Cercle des différents leaders</h2>
                        <div class="card__box">
                            <div class="item__box">
                                <div class="item__image">
                                    <img src="assets/img/image-4.jpg" alt="">
                                </div>
                                <div class="item__text">
                                    <h2><a href="#">je veux m’inscrire</a></h2>
                                </div>
                            </div>
                            <div class="card__info">
                                <h2>Le programme du Cercle des oratrices</h2>
                                <p><strong>7</strong> modules <br>Cercle de <strong>6 à 10</strong> personnes <br><strong>16h00</strong> <br> 1 RDV <strong>1</strong> jeudi soir sur <strong>2</strong></p>
                                <a href="#" class="btn btn-green link">rdv découverte gratuit</a>
                                <a href="#" class="btn btn-border orange link">téléchager</a>
                            </div>
                        </div>
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
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-1.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-2.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-3.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-4.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-1.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-2.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-3.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-4.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-1.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-2.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-3.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
                            <div class="modules__item">
                                <div class="modules__image">
                                    <img src="assets/img/module-4.jpg" alt="">
                                </div>
                                <h2>Maître du non-verbal – No stress – À voix haute – Lâcher-prise</h2>
                            </div>
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
                            <img src="assets/img/image-29.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="text-bc">
                            <h2 class="m-title mb-4">le saviez-vous ?</h2>
                            <p>Tous nos cercles de formation sont aussi disponibles en <strong>formation individuelle</strong>, en <strong>présentiel</strong> ou en <strong>distanciel</strong> avec un coach. </p>
                            <p>Si c’est ce que vous recherchez, <strong>contactez-nous</strong> pour adapter la formation à vos besoins ! </p>
                            <div class="btn-list justify-content-center mt-5">
                                <a href="#" class="btn btn-green link">nous contacter</a>
                                <a href="#" class="btn btn-border orange bg-white link">rdv découverte gratuit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area girl border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">notre formation en quelques chiffres</h2>
                        <div class="section__title">
                            <h4>Taux de satisfaction de notre formation</h4>
                            <h2 class="m-title">Cercle des Oratrices</h2>
                            <p>(en Mai 2021 - évaluation post-formation par les participants)</p>
                        </div>
                        <div class="box__list owl-carousel">
                            <div class="box__item">
                                <div class="box__item__title">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title two">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title three">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title two">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title three">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title two">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                            <div class="box__item">
                                <div class="box__item__title three">
                                    <h1>4,37/5</h1>
                                </div>
                                <h2>Evaluation de la qualité pédagogique de la formation</h2>
                            </div>
                        </div>
                        <h2 class="title mt-100">Les participants en parlent</h2>
                        <div class="testimonial__item">
                            <div class="testimonial__image">
                                <img src="assets/img/author-1.jpg" alt="">
                            </div>
                            <div class="testimonial__text text-start">
                                <h2>Jane Cooper</h2>
                                <h3>Marketing Coordinator</h3>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                        </div>
                        <h2 class="title mt-75 mb-75">Nos tarifs et comment financer la formation</h2>
                        <div class="row gx-4">
                            <div class="col-lg-3 order-lg-1">
                                <div class="box__promotion">
                                    <div class="box__promotion__body">
                                        <h4>Â partir de</h4>
                                        <h2>450 € <span>ttc</span></h2>
                                        <h3 class="mt-4">je paye via mes fonds propres</h3>
                                        <p>en fonction de la formation choisie</p>
                                    </div>
                                    <a href="#" class="btn btn-orange link">je m’inscris</a>
                                </div>
                            </div>
                            <div class="col-lg-3 order-lg-2">
                                <div class="box__promotion green">
                                    <div class="box__promotion__body">
                                        <h4>Â partir de</h4>
                                        <h2>750 € <span>ttc</span></h2>
                                        <h3>Je paye via mon CPF, via Pôle Emploi, ou c'est mon entreprise qui prend en charge</h3>
                                        <p>en fonction de la formation choisie</p>
                                    </div>
                                    <a href="#" class="btn btn-green link">je m’inscris</a>
                                </div>
                            </div>
                            <div class="col-lg-5 ms-auto">
                                <div class="box__promo">
                                    <h2>Si vous êtes en recherche d’emploi, nous sommes éligibles à l’Aide Individuel à la Formation de Pôle Emploi. Contactez-nous et demandez un RDV avec votre Agence Pôle Emploi.</h2>
                                    <div class="btn-list">
                                        <a href="#" class="btn btn-green link">nous contacter</a>
                                        <a href="#" class="btn btn-border orange link bg-white">faq</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item__box">
                                    <div class="item__image">
                                        <img src="assets/img/image-1.jpg" alt="">
                                    </div>
                                    <div class="item__text icon-2">
                                        <h2><a href="#">cpf cercle des oratrices</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item__box">
                                    <div class="item__image">
                                        <img src="assets/img/image-2.jpg" alt="">
                                    </div>
                                    <div class="item__text icon-2">
                                        <h2><a href="#">cpf cercle des leaders de demain</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item__box">
                                    <div class="item__image">
                                        <img src="assets/img/image-3.jpg" alt="">
                                    </div>
                                    <div class="item__text icon-2">
                                        <h2><a href="#">cpf cercle des oratrices</a></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item__box">
                                    <div class="item__image">
                                        <img src="assets/img/image-4.jpg" alt="">
                                    </div>
                                    <div class="item__text icon-2">
                                        <h2><a href="#">cpf cercle des différent</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item__box texted text-center bg-yellow">
                            <img width="143" class="round-image-half" src="assets/img/image-27.jpg" alt="">
                            <h3>nos formations sont certifiées</h3>
                            <p>Notre organisme de formation est certifié QUALIOPI et DATADOCK, il peut donc ainsi vous proposer une formation prise en charge par votre OPCO.  Nous sommes aussi référencées pour utiliser votre Compte Personnel de Formation. </p>
                            <a href="#" class="btn btn-green link">nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray border-bottom-yellow pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-border orange link">consulter mon solde formation</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 pl-lg-5 text-center order-lg-1">
                        <img class="mb-5 mb-lg-0" src="assets/img/image-16.png" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="text-bb">
                            <p>Tous nos cercles de formation sont aussi disponibles en <strong>formation individuelle</strong>, en <strong>présentiel</strong> ou en <strong>distanciel</strong> avec un coach. </p>
                            <p>Si c’est ce que vous recherchez, <strong>contactez-nous</strong> pour adapter la formation à vos besoins ! </p>
                            <div class="btn-list justify-content-center mt-5">
                                <a href="#" class="btn btn-green link">demande de devis</a>
                                <a href="#" class="btn btn-border orange bg-white link">faq</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
