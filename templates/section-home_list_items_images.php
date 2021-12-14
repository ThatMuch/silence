<section class="section__area border-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="title mb-100"><?php echo get_sub_field('title'); ?></h2>
			</div>
		</div>
	<?php if ( have_rows( 'list_items' ) ) : ?>
		<div class="row">
			<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
				<?php $img = get_sub_field( 'img' ); ?>
				<div class="col-md-6 col-lg-3">
					<div class="promo__item">
						<div class="promo__image">
							<?php if ( $img ) : ?>
								<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
							<?php endif; ?>
						</div>
						<h2><?php the_sub_field( 'txt' ); ?></h2>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	</div>
</section>