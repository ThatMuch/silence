<?php
/**
 * Formation Page
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 * Header
 */

get_header();
?>

<!-- H2 -->
<div class="section__area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( get_field('subtitle_page') ) : ?>
					<h2 class="text-center m-title"><?php echo esc_html(get_field('subtitle_page')); ?></h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<!-- Section 1 -->
<?php if ( have_rows( 'formation_section_1' ) ) : ?>
	<?php while ( have_rows( 'formation_section_1' ) ) : the_row(); ?>
		<div class="section__area bg-green">
			<div class="container">
				<div class="row gx-5">
					<div class="col-lg-4">
						<?php $image = get_sub_field( 'img' ); ?>
						<?php if ( $image  ) : ?>
							<img class="round-image" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] );?>">
						<?php endif; ?>
					</div>
					<div class="col-lg-8">
						<div class="text">
							<?php if ( get_sub_field('title') ) : ?>
								<h2 class="m-title text-light mb-4"><?php echo esc_html(get_sub_field('title')); ?></h2>
							<?php endif; ?>
							<?php if ( get_sub_field('text') ) : ?>
								<?php echo get_sub_field('text'); ?>
							<?php endif; ?>
								<?php $link = get_sub_field( 'link' ); ?>
							<?php if ( $link ) : ?>
			<a class="btn btn-white link m-full" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
		<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Section 2 -->
<?php if ( have_rows( 'formation_section_2' ) ) : ?>
	<?php while ( have_rows( 'formation_section_2' ) ) : the_row(); ?>
		<div class="section__area">
			<div class="container">
				<div class="row gx-5 align-items-center">
					<div class="col-lg-4 text-center order-lg-1">
						<?php $img = get_sub_field( 'img' ); ?>
						<?php if ( $img ) : ?>
			<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="round-image-half mb-5 mb-lg-0"/>
		<?php endif; ?>

					</div>
					<div class="col-lg-8">
						<div class="text-bx fw-medium">
							<h2 class="m-title text-center text-md-start mb-4 mb-lg-0">	<?php the_sub_field( 'title' ); ?></h2>
							<?php the_sub_field( 'text' ); ?>
								<?php $link = get_sub_field( 'link' ); ?>
								<?php if ( $link ) : ?>
			<a class="btn btn-green link m-full" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
		<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Contact -->
<?php if ( have_rows( 'formation_form_group' ) ) : ?>
	<?php while ( have_rows( 'formation_form_group' ) ) : the_row(); ?>
		<div class="section__area border-top-white border-bottom-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
						<div class="contact__form">
						<?php $form = get_sub_field('formation_form');?>
						<?php if($form) : ?>
								<?php echo $form; ?>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Section 3 -->
<?php if ( have_rows( 'formation_section_3' ) ) : ?>
	<?php while ( have_rows( 'formation_section_3' ) ) : the_row(); ?>
		<div class="section__area">
			<div class="container">
				<div class="row gx-5 align-items-center" style="    flex-direction: row-reverse;">
					<div class="col-lg-4 text-center order-lg-1">
						<?php $img = get_sub_field( 'image' ); ?>
						<?php if ( $img ) : ?>
							<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" class="round-image-half mb-5 mb-lg-0"/>
						<?php endif; ?>
					</div>
					<div class="col-lg-8">
						<div class="text-bx fw-medium">
							<h2 class="m-title text-center text-md-start mb-4 mb-lg-0">	<?php the_sub_field( 'title' ); ?></h2>
							<?php the_sub_field( 'text' ); ?>
								<?php $link = get_sub_field( 'link' ); ?>
								<?php if ( $link ) : ?>
									<a class="btn btn-green link m-full" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
								<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!-- Actualites -->
 <section class="section__area bg-yellow">
	<div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <h2 class="title mb-5">Nos actualités</h2>
                        </div>
                  </div>
            <div class="row gx-4 d-none d-lg-flex">
                  <?php
                  $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2
                  );

                  $query = new WP_Query( $args );

                  if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                              $query->the_post();
                                    ?>
                  <div class="col-lg-6">
                    <?php get_template_part('templates/wp', 'post-card'); ?>
                  </div>
                  <?php }}
                        wp_reset_postdata();
                  ?>
            </div>
      </div>
 </section>
 <?php get_footer(); ?>
