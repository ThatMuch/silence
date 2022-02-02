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
		<?php $articles = get_field( 'about-us-article' );?>
		<?php while ( have_rows( 'about-us-article' ) ) : the_row(); ?>
		<?php  // echo $i ; echo count($articles); ?>
			<div class="section__area <?php echo $i === 0 ? "border-bottom pb-150" : ""; ?> <?php echo $i + 1 == count($articles) ? "border-bottom-yellow" : ""; ?>">
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
										<?php $link = get_sub_field( 'link' ); ?>
										<h2 ><a class="post__link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" >
									<?php the_sub_field( 'title' ); ?></a></h2>
										<?php $link_article = get_sub_field( 'link' ); ?>
										<a class="btn-read-more" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" >
										<img src="<?php echo esc_html(get_template_directory_uri()) ;?>/assets/images/icon-2.svg" alt="<?php the_sub_field( 'title' ); ?>"></a>
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
<?php endif; ?>
<?php if ( have_rows( 'about-us_contact_link' ) ) : ?>
	<?php while ( have_rows('about-us_contact_link') ) : the_row(); ?>
        <div class="section__area bg-yellow">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 order-lg-1 text-center">
                        <?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ) : ?>
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
						<?php endif; ?>
                    </div>
                    <div class="col-lg-6 order-lg-0">
						<?php if ( get_sub_field('title') ) : ?>
							<h2 class="m-title mb-4"><?php echo esc_html(get_sub_field('title')); ?></h2>
						<?php endif; ?>

                        <div class="box__text">
                            <?php the_sub_field( 'text' ); ?>
                            <div class="btn-list justify-content-center mt-5">
								<?php $button_1 = get_sub_field( 'button_1' ); ?>
								<?php if ( $button_1 ) : ?>
									<a class="btn btn-green link" href="<?php echo esc_url( $button_1['url'] ); ?>" target="<?php echo esc_attr( $button_1['target'] ); ?>"><?php echo esc_html( $button_1['title'] ); ?></a>
								<?php endif; ?>
								<?php $button_2 = get_sub_field( 'button_2' ); ?>
								<?php if ( $button_2 ) : ?>
									<a class="btn btn-border orange bg-white link" href="<?php echo esc_url( $button_2['url'] ); ?>" target="<?php echo esc_attr( $button_2['target'] ); ?>"><?php echo esc_html( $button_2['title'] ); ?></a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
<?php endif; ?>

 <?php get_footer(); ?>
