<?php
/**
 * Template for ADN Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: ADN
 * Header
 */

get_header();

?>
        <div class="section__area border-bottom-green">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h5 class="title-5 text-orange mb-5"><?php echo esc_html_e(get_field('subtitle_page')); ?></h5>
                    </div>
                </div>
                <div class="row">
				<?php if ( have_rows( 'adn_numbers_item' ) ) : ?>
					<?php $i = 0; ?>
					<?php while ( have_rows( 'adn_numbers_item' ) ) : the_row(); ?>
					    <div class="col-md-6 col-lg-3">
                        <div class="box__item">
                            <div class="box__item__title box-<?php echo esc_attr($i) ; ?>">
                                <span class="box__item__title__number"><?php the_sub_field( 'number' ); ?></span>
                            </div>
                            <p class="box__item__text" style="margin:0"><?php the_sub_field( 'text' ); ?></p>
                            <p class="box__item__ast"><?php the_sub_field( 'asterisque' ); ?></p>
                        </div>
                    </div>
					<?php $i++; endwhile; ?>
				<?php endif; ?>
                </div>
            </div>
        </div>

        <div class="section__area bg-green">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center text-lg-start">
						<?php $adn_section1_image = get_field( 'adn_section1_image' ); ?>
						<?php if ( $adn_section1_image ) : ?>
							<img class="round-image" src="<?php echo esc_url( $adn_section1_image['url'] ); ?>" alt="<?php echo esc_attr( $adn_section1_image['alt'] ); ?>" />
						<?php endif; ?>
						<p class="text-center"><?php echo esc_attr($adn_section1_image['caption'])?></p>
                    </div>
                    <div class="col-lg-7 ms-auto">
                        <div class="text-bx">
                        <?php the_field( 'adn_section1_text' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area border-bottom-yellow border-top-green">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 text-center">
						<?php $adn_section2_image = get_field( 'adn_section2_image' ); ?>
						<?php if ( $adn_section2_image ) : ?>
							<img class="mb-5 round-image-half" src="<?php echo esc_url( $adn_section2_image['url'] ); ?>" alt="<?php echo esc_attr( $adn_section2_image['alt'] ); ?>" />
						<?php endif; ?>
					</div>
					<div class="col-lg-8">
						<div class="text-bx">
							<?php the_field( 'adn_section2_text' ); ?>
						</div>
					</div>
				</div>
        	</div>
		</div>

        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h2 class="title"><?php the_field( 'adn_contact_title' ); ?></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
						<?php $image = get_field( 'adn_contact_image' ); ?>
						<?php if ( $image ) : ?>
								<div class="mt-5 d-block d-lg-none mx-auto rounded-circle" style="height: 300px; width:300px;">
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						</div>
						<?php endif; ?>
						<?php the_field( 'adn_contact_text' ); ?>
						<?php $form = get_field('adn_contact_form');?>
						<?php if($form) : ?>
								<?php echo $form; ?>
						<?php endif; ?>
                    </div>
                    <div class="col-lg-6 ms-auto d-flex align-items-center">
							<?php if ( $image ) : ?>
								<div class="mb-4 d-none d-lg-block rounded-circle" style="height: 300px; width:300px;" >
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
									</div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


		<?php get_footer(); ?>
