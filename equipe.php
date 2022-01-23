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
							<h2 class="text-center m-title"><?php echo esc_html(get_field('subtitle_page')); ?></h2>
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


<?php if ( have_rows( 'team_section_2' ) ) : ?>
	<?php while ( have_rows( 'team_section_2' ) ) : the_row(); ?>
        <div class="section__area bg-gray">
            <div class="container">
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

							</div>
						</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php

   $args = array(
	    'post_type' => 'team',
		'taxonomy' => 'roles',
		'orderby' => 'name',
		'order'   => 'DESC',
		'exclude'=>array(1),
		'post__not_in' => $ID
    );
   $roles = get_categories($args);
?>
        <div class="section__area border-top border-bottom pb-150">
            <div class="container">
				<?php foreach($roles as $role_) : ?>
					<?php if ($role_->slug != "fondateur") : ?>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title"><?php echo esc_html_e($role_->name); ?></h2>
                    </div>
                </div>
                <div class="row justify-content-center">
					<?php
						$args = array(
							'post_type' => 'team',
							   'tax_query' => array(
									array(
										'taxonomy' => 'roles',
										'field'    => 'name',
										'terms'    => $role_->name,
									),
								),
							'offset' => '0',
							'posts_per_page' => '9999'
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
                        	while ( $query->have_posts() ) :
                              $query->the_post();
					?>
                    <div class="col-lg-4">
                        <div class="team__box">
                            <div class="team__image">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo esc_url($image[0]); ?>" alt="<?php esc_attr(the_title()); ?>">
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <a data-bs-toggle="modal" data-bs-target="#modal-<?php echo esc_attr( $post->ID ); ?>" class="linked">voir profil</a>
                        </div>
                    </div>

					<!-- Modal -->
						<div class="modal fade" id="modal-<?php echo esc_attr( $post->ID ); ?>" tabindex="-1" aria-labelledby="modal-<?php echo esc_attr( $post->ID ); ?>Label" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-sm-5">
										<div class="team__image">
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo esc_attr($image[0]); ?>" alt="<?php esc_attr(the_title()); ?>">
										</div>
									</div>
									<div class="col-sm-7">
										<h2><?php the_title(); ?></h2>
										<?php if ( get_field('job') ) : ?>
											<h3 class="team__role"><?php echo esc_attr(get_field('job')); ?></h3>
										<?php endif; ?>
										<?php if ( get_field('description') ) : ?>
											<?php echo get_field('description'); ?>
										<?php endif; ?>
										<?php if ( have_rows( 'links' ) ) : ?>
											<?php while ( have_rows( 'links' ) ) : the_row(); ?>
											<?php if ( get_sub_field('website') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('website')); ?>" class="btn btn-border orange mb-2 me-2 link">Site</a>
											<?php endif; ?>
											<?php if ( get_sub_field('website') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('facebook')); ?>" class="btn btn-border orange mb-2 me-2 link">Facebook</a>
											<?php endif; ?>
											<?php if ( get_sub_field('twitter') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('twitter')); ?>" class="btn btn-border orange mb-2 me-2 link">Twitter</a>
											<?php endif; ?>
											<?php if ( get_sub_field('instagram') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('instagram')); ?>" class="btn btn-border orange mb-2 me-2 link">Instagram</a>
											<?php endif; ?>
											<?php if ( get_sub_field('linkedin') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('linkedin')); ?>" class="btn btn-border orange mb-2 me-2 link">Linkedin</a>
											<?php endif; ?>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
							</div>
						</div>
						</div>
					<?php endwhile; ?>
					<?php endif;  wp_reset_postdata(); ?>
                </div>
				<?php endif; ?>
				<?php endforeach; ?>
            </div>
        </div>


<?php
	$args = array(
		'post_type' => 'team',
			'tax_query' => array(
				array(
					'taxonomy' => 'roles',
					'field'    => 'slug',
					'terms'    => "fondateur",
				),
			),
		'posts_per_page' => '1'
	);
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
?>
        <div class="section__area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title fw-bolder">Le fondateur</h2>
                        <div class="testimonial__item bg-white">
                            <div class="testimonial__image">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
											<img src="<?php echo esc_attr($image[0]); ?>" alt="<?php esc_attr(the_title()); ?>">
                            </div>
                            <div class="testimonial__text" style="max-width: inherit;">
                                <h2><?php esc_attr(the_title()) ;?></h2>
                                <h3><?php echo esc_attr(get_field('job')); ?></h3>
                                <?php the_field('description'); ?>
									<?php if ( have_rows( 'links' ) ) : ?>
											<?php while ( have_rows( 'links' ) ) : the_row(); ?>
											<?php if ( get_sub_field('website') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('website')); ?>" class="btn btn-border orange mb-2 me-2 link">Site</a>
											<?php endif; ?>
											<?php if ( get_sub_field('website') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('facebook')); ?>" class="btn btn-border orange mb-2 me-2 link">Facebook</a>
											<?php endif; ?>
											<?php if ( get_sub_field('twitter') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('twitter')); ?>" class="btn btn-border orange mb-2 me-2 link">Twitter</a>
											<?php endif; ?>
											<?php if ( get_sub_field('instagram') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('instagram')); ?>" class="btn btn-border orange mb-2 me-2 link">Instagram</a>
											<?php endif; ?>
											<?php if ( get_sub_field('linkedin') ) : ?>
												<a href="<?php echo esc_attr(get_sub_field('linkedin')); ?>" class="btn btn-border orange mb-2 me-2 link">Linkedin</a>
											<?php endif; ?>
											<?php endwhile; ?>
										<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
<?php endif;?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
