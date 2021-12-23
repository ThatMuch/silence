<?
/**
 * The template displaying the posts-overview
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 */
get_header();
$page_id = get_queried_object_id();
?>

<main id="blog">
	<!-- Subtitle -->
	<div class="section__area border-bottom pb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if ( get_field('subtitle_page', $page_id ) ) : ?>
						<h2 class="text-center m-title"><?php echo esc_html_e(get_field('subtitle_page', $page_id )); ?></h2>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter -->
	<div class="section__area bg-gray">
		<div class="container">
			<div class="row gx-5 justify-content-center">
				<div class="col-lg-6">
					<div class="contact__text">
						<?php $newsletter_image = get_field( 'newsletter_image' , $page_id); ?>
						<?php if ( $newsletter_image ) : ?>
							<div class="rounded-circle">
								<img src="<?php echo esc_url( $newsletter_image['url'] ); ?>" alt="<?php echo esc_attr( $newsletter_image['alt'] ); ?>" />
							</div>
						<?php endif; ?>
						<h3 class="contact__title"><?php the_field( 'newsletter_title', $page_id ); ?></h3>
						<?php the_field( 'newsletter_text', $page_id ); ?>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="contact__form">
						<?php $form = get_field('newsletter_form', $page_id);?>
					   <?php if($form) : ?>
							   <?php echo $form; ?>
					   <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Posts -->
	<div class="section__area border-top section__blog ">
			<?php if (have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('templates/wp', 'post')?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			<?php
			if (  $wp_query->max_num_pages > 1 ) : ?>
			<div class="d-flex justify-content-center">
				<button class="btn btn-outline-primary misha_loadmore">Voir tous les articles</button>
			</div>
			<?php endif; ?>
	  </div>
  </main>


<?php get_footer(); ?>
