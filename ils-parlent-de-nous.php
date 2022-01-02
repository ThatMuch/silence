<?php
/**
 * Template for Ils parlent de nous Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Ils parlent de nous
 * Header
 */

get_header();

?>

        <div class="section__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <h2 class="text-center m-title text-uppercase">Podcasts, articles, magazines, TV, radio, presse entreprise, interviews… Découvrez ce que d’autres en disent !</h2>
                    </div>
                </div>
            </div>
        </div>
<?php if ( have_rows( 'about-us-article' ) ) : ?>
	<?php $i = 0; ?>
	<div class="section__blog">
		<?php while ( have_rows( 'about-us-article' ) ) : the_row(); ?>
			<div class="section__area <?php echo $i === 0 ? "border-bottom pb-150" : ""; ?>">
			<div class="container">
						<div class="row gx-5 align-items-center">
							<div class="col-lg-6">
								<div class="post__box">
									<?php $image = get_sub_field( 'image' ); ?>
									<?php if ( $image ) : ?>
										<div class="post__image">
										<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									</div>
									<?php endif; ?>

									<div class="post__text">
										<h2 ><a class="post__link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" >
									<?php the_sub_field( 'title' ); ?></a></h2>
										<?php $link_article = get_sub_field( 'link' ); ?>
										<a class="btn-read-more" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" >
										<img src="<?php echo esc_html_e(get_template_directory_uri()) ;?>/assets/images/icon-2.svg" alt="<?php the_sub_field( 'title' ); ?>"></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h2>
									<a class="m-title text-left"  href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php the_sub_field( 'title' ); ?> </a>
								</h2>
								<div class="text-bx">
									<?php the_sub_field( 'extract' ); ?>
								</div>
							</div>
						</div>
					</div>
			</div>
		<?php $i++; endwhile; ?>
	</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
        <!-- <div class="section__area border-bottom pb-150">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="post__box">
                            <img src="assets/img/image-10.jpg" alt="">
                            <div class="post__text">
                                <h2>Interview Meriem <br/>Hachimi</h2>
                                <a href="#"><img src="assets/img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="m-title">interview</h2>
                        <div class="text-bx">
                            <p>Interviewé par Meriem Hachimi pour le Coaching News Magazine en décembre 2020, Nicolas revient sur son parcours d’ancien timide et partage quelques techniques qu’il a utilisé pour dépasser ta timidité et gagner confiance en lui. Et comme c’est super bien écrit, ça se lit plutôt bien 😉</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-1">
                        <div class="post__box">
                            <img src="assets/img/image-10.jpg" alt="">
                            <div class="post__text">
                                <h2>Interview Meriem <br/>Hachimi</h2>
                                <a href="#"><img src="assets/img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="m-title">interview</h2>
                        <div class="text-bx">
                            <p>Interviewé par Meriem Hachimi pour le Coaching News Magazine en décembre 2020, Nicolas revient sur son parcours d’ancien timide et partage quelques techniques qu’il a utilisé pour dépasser ta timidité et gagner confiance en lui. Et comme c’est super bien écrit, ça se lit plutôt bien 😉</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="post__box">
                            <img src="assets/img/image-10.jpg" alt="">
                            <div class="post__text">
                                <h2>Interview Meriem <br/>Hachimi</h2>
                                <a href="#"><img src="assets/img/icon-2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="m-title">interview</h2>
                        <div class="text-bx">
                            <p>Interviewé par Meriem Hachimi pour le Coaching News Magazine en décembre 2020, Nicolas revient sur son parcours d’ancien timide et partage quelques techniques qu’il a utilisé pour dépasser ta timidité et gagner confiance en lui. Et comme c’est super bien écrit, ça se lit plutôt bien 😉</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
 <?php get_footer(); ?>
