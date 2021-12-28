<?php
/**
 * Template for Equipe Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Equipe
 * Header
 */

get_header();

?>

        <div class="section__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ( get_field('subtitle_page') ) : ?>
							<h2 class="text-center m-title"><?php echo esc_html_e(get_field('subtitle_page')); ?></h2>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<?php if ( have_rows( 'team_section_1' ) ) : ?>
	<?php while ( have_rows( 'team_section_1' ) ) : the_row(); ?>
        <div class="section__area border-bottom pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
						<?php $image = get_sub_field( 'img' ); ?>
		<?php if ( $image ) : ?>
			<img class="round-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		<?php endif; ?>
                    </div>
                    <div class="col-lg-8 ms-auto">
                        <div class="text-bx">
                            	<?php the_sub_field( 'text' ); ?>
								<?php $btn_link = get_sub_field( 'link' ); ?>
								<?php if ( $btn_link ) : ?>
									<a class="btn btn-green" href="<?php echo esc_url( $btn_link['url'] ); ?>" target="<?php echo esc_attr( $btn_link['target'] ); ?>"><?php echo esc_html( $btn_link['title'] ); ?></a>
								<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
<?php endif; ?>


        <div class="section__area bg-gray">
            <div class="container">
				<?php if ( have_rows( 'team_section_2' ) ) : ?>
					<?php while ( have_rows( 'team_section_2' ) ) : the_row(); ?>
								<div class="row align-items-center">
									<div class="col-lg-3 order-lg-1">
										<?php $img = get_sub_field( 'img' ); ?>
										<?php if ( $img ) : ?>
											<img class="round-image-half border-green" src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
										<?php endif; ?>
									</div>
									<div class="col-lg-7 me-auto text-center">
										<h2 class="m-title mb-30"><?php the_sub_field( 'title' ); ?></h2>
										<div class="text-bx">
											<?php the_sub_field( 'text' ); ?>
											<?php $btn_link = get_sub_field( 'link' ); ?>
											<?php if ( $btn_link ) : ?>
												<a class="btn btn-green link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $btn_link['target'] ); ?>"><?php echo esc_html( $btn_link['title'] ); ?></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<hr>
									</div>
								</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'team_section_3' ) ) : ?>
					<?php while ( have_rows( 'team_section_3' ) ) : the_row(); ?>
								<div class="row align-items-center" style="flex-direction:row-reverse;">
									<div class="col-lg-7 me-auto text-center">
										<h2 class="m-title mb-30"><?php the_sub_field( 'title' ); ?></h2>
										<div class="text-bx">
											<?php the_sub_field( 'text' ); ?>
											<?php $btn_link = get_sub_field( 'link' ); ?>
											<?php if ( $btn_link ) : ?>
												<a class="btn btn-green link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $btn_link['target'] ); ?>"><?php echo esc_html( $btn_link['title'] ); ?></a>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-lg-3 order-lg-1">
										<?php $img = get_sub_field( 'img' ); ?>
										<?php if ( $img ) : ?>
											<img class="round-image-half border-green" src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
										<?php endif; ?>
									</div>
								</div>
					<?php endwhile; ?>
				<?php endif; ?>

            </div>
        </div>


        <div class="section__area border-top border-bottom pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Nos formatrices et formateurs</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-1.jpg" alt="">
                            </div>
                            <h2>Esther Howard</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-2.jpg" alt="">
                            </div>
                            <h2>Guy Hawkins</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-3.jpg" alt="">
                            </div>
                            <h2>Jane Cooper</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-4.jpg" alt="">
                            </div>
                            <h2>Wade Warren</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-5.jpg" alt="">
                            </div>
                            <h2>Jenny Wilson</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-6.jpg" alt="">
                            </div>
                            <h2>Kristin Watson</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-7.jpg" alt="">
                            </div>
                            <h2>Cody Fisher</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-8.jpg" alt="">
                            </div>
                            <h2>Jacob Jones</h2>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">L’équipe</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-9.jpg" alt="">
                            </div>
                            <h2>Gladys</h2>
                            <p>intitulé poste</p>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <img src="assets/img/team-10.jpg" alt="">
                            </div>
                            <h2>Leslie</h2>
                            <p>intitulé poste</p>
                            <a href="#" class="linked">voir profil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title fw-bolder">le fondateur</h2>
                        <div class="testimonial__item bg-white">
                            <div class="testimonial__image">
                                <img src="assets/img/author-1.jpg" alt="">
                            </div>
                            <div class="testimonial__text">
                                <h2>Jane Cooper</h2>
                                <h3>Marketing Coordinator</h3>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
