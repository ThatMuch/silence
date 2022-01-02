<section class="section__area border-bottom">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<h2 class="m-title"><?php echo get_sub_field('title'); ?></h2>
			</div>
			<div class="col-md-12 mt-100 mb-4">
				<h2 class="title">Vous avez besoin de :</h2>
			</div>
        </div>

		<div class="row">
			<div class="col-md-12">
				<div class="service__list">
					<?php if ( have_rows( 'list_items' ) ) : ?>
						<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
							<div class="service__item">
								<div class="service__icon">
									<div>
										<?php $img = get_sub_field( 'img' ); ?>
										<?php if ( $img ) : ?>
											<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
										<?php endif; ?>
									</div>
								</div>
								<p class="service__title">
									<?php the_sub_field( 'txt' ); ?>
								</p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row mt-100">
			<div class="col-md-12 text-center">
				<h2 class="m-title"><?php the_sub_field( 'txt_2' ); ?></h2>
			</div>
		</div>
	</div>
</section>
