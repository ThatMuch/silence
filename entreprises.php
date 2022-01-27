<?php
/**
 * Template for Entrepries Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 *  Template Name: Entrepries
 * Header
 */

get_header();

?>

        <div class="section__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-center m-title"><?php echo esc_html(get_field('subtitle_page')); ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-center">
						<?php $company_section1_image = get_field( 'company_section1_image' ); ?>
						<?php if ( $company_section1_image ) : ?>
							<img class="round-image-half" src="<?php echo esc_url( $company_section1_image['url'] ); ?>" alt="<?php echo esc_attr( $company_section1_image['alt'] ); ?>" />
						<?php endif; ?>
                    </div>
                    <div class="col-lg-8 ms-auto">
                        <div class="text-b">
                            <?php the_field( 'company_section1_text' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area border-bottom-yellow two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="title mb-75"><?php the_field( 'company_choices_title' ); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="service__list">
						<?php if ( have_rows( 'company_choices_item' ) ) : ?>
							<?php while ( have_rows( 'company_choices_item' ) ) : the_row(); ?>
							<div class="service__item seven">
								<?php $image = get_sub_field( 'image' ); ?>
                                <div class="service__icon" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>')">
                                    <h2><?php the_sub_field( 'choice' ); ?></h2>
                                </div>
                                <h3><?php the_sub_field( 'title' ); ?></h3>
                                <?php the_sub_field( 'text' ); ?>
                            </div>
							<?php endwhile; ?>
						<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 pl-lg-5 text-center order-lg-1">
                        <?php $company_section2_image = get_field( 'company_section2_image' ); ?>
<?php if ( $company_section2_image ) : ?>
	<img src="<?php echo esc_url( $company_section2_image['url'] ); ?>" alt="<?php echo esc_attr( $company_section2_image['alt'] ); ?>" />
<?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-bs">
                            <h5 class="fw-bold text-orange text-uppercase mb-30"><?php the_field( 'company_section2_title' ); ?></h5>
                            <?php the_field( 'company_section2_text' ); ?>
                            <div class="btn-list justify-content-center mt-5">
								<?php $company_section2_link1 = get_field( 'company_section2_link1' ); ?>
<?php if ( $company_section2_link1 ) : ?>
	<a class="btn btn-green link" href="<?php echo esc_url( $company_section2_link1['url'] ); ?>" target="<?php echo esc_attr( $company_section2_link1['target'] ); ?>"><?php echo esc_html( $company_section2_link1['title'] ); ?></a>
<?php endif; ?>

<?php $company_section2_link2 = get_field( 'company_section2_link2' ); ?>
<?php if ( $company_section2_link2 ) : ?>
	<a class="btn btn-border orange bg-white link" href="<?php echo esc_url( $company_section2_link2['url'] ); ?>" target="<?php echo esc_attr( $company_section2_link2['target'] ); ?>"><?php echo esc_html( $company_section2_link2['title'] ); ?></a>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area border-bottom-yellow two pt-200">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title mb-75"><?php the_field( 'company_section3_title' ); ?></h2>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-3">
						<?php $company_section3_image = get_field( 'company_section3_image' ); ?>
<?php if ( $company_section3_image ) : ?>
	<img  class="round-image" src="<?php echo esc_url( $company_section3_image['url'] ); ?>" alt="<?php echo esc_attr( $company_section3_image['alt'] ); ?>" />
<?php endif; ?>

                    </div>
                    <div class="col-lg-9">
                        <div class="text-bx">
                            <?php the_field( 'company_section3_text' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 pl-lg-5 text-center order-lg-1">
                        <?php $company_section4_image = get_field( 'company_section4_image' ); ?>
<?php if ( $company_section4_image ) : ?>
	<img src="<?php echo esc_url( $company_section4_image['url'] ); ?>" alt="<?php echo esc_attr( $company_section4_image['alt'] ); ?>" />
<?php endif; ?>
                    </div>
                    <div class="col-lg-7">
                        <div class="text-bb">
							<?php if (get_field('company_section4_title')) : ?>
							<h5 class="fw-bold text-orange text-uppercase mb-30">	<?php the_field( 'company_section4_title' ); ?> </h5>
								<?php endif;?>
                            <?php the_field( 'company_section4_text' ); ?>
                            <div class="btn-list justify-content-center mt-5">
								<?php $company_section4_link1 = get_field( 'company_section4_link1' ); ?>
								<?php $company_section4_link2 = get_field( 'company_section4_link2' ); ?>
								<?php if ( $company_section4_link1 ) : ?>
									<a class="btn btn-green link" href="<?php echo esc_url( $company_section4_link1['url'] ); ?>" target="<?php echo esc_attr( $company_section4_link1['target'] ); ?>"><?php echo esc_html( $company_section4_link1['title'] ); ?></a>
								<?php endif; ?>
								<?php $company_section4_link2 = get_field( 'company_section4_link2' ); ?>
								<?php if ( $company_section4_link2 ) : ?>
									<a class="btn btn-border orange bg-white link" href="<?php echo esc_url( $company_section4_link2['url'] ); ?>" target="<?php echo esc_attr( $company_section4_link2['target'] ); ?>"><?php echo esc_html( $company_section4_link2['title'] ); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
