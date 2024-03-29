<?php
/**
 * Template for Decouverte Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Decouverte
 * Header
 */

get_header();

?>


        <div class="section__area border-bottom-yellow">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center m-title"><?php echo esc_html(get_field('subtitle_page')); ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-12">
                        <h2 class="title"><?php the_field( 'dicovery_contact_title' ); ?></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
						<?php $image = get_field( 'discovery_contact_image' ); ?>
						<?php if ( $image ) : ?>
								<div class="mt-5 d-block d-lg-none mx-auto rounded-circle" style="height: 300px; width:300px;">
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						</div>
						<?php endif; ?>
						<?php the_field( 'dicovery_contact_text' ); ?>
						<?php $form = get_field('dicovery_contact_form');?>
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


        <div class="section__area bg-green">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-4">
						<?php $dicovery_text_image = get_field( 'dicovery_text_image' ); ?>
						<?php if ( $dicovery_text_image ) : ?>
							<img class="round-image" src="<?php echo esc_url( $dicovery_text_image['url'] ); ?>" alt="<?php echo esc_attr( $dicovery_text_image['alt'] ); ?>" />
						<?php endif; ?>
                    </div>
                    <div class="col-lg-8">
                        <div class="text-bx">
                            <?php the_field( 'dicovery_text' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
