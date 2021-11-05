<section class="section section__list_items">
	<div class="container">
		<!-- Header Section-->
			<?php if(get_sub_field('title') ) : ?>
				<div class="section__header mt-5 mb-5">
					<div class="row">
						<div class="col-sm-5 ">
							<h2 class="section__title text-uppercase"><?php echo get_sub_field('title'); ?></h2>
						</div>
						<div class="col-sm-7 d-flex align-items-center divider">
							<div class="block-round"></div>
						</div>
					</div>
				</div>
			<?php endif; ?>
    	<!-- Header Section -->
		<?php if ( get_sub_field('txt') ) : ?>
			<?php echo get_sub_field('txt'); ?>
		<?php endif; ?>
		<div class="grid">
			<?php if ( have_rows( 'list_items' ) ) : ?>
					<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<div class="item">
						<?php $img = get_sub_field( 'img' ); ?>
						<?php if ( $img ) : ?>
							<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
						<?php endif; ?>
						<?php the_sub_field( 'txt' ); ?>
					</div>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
		</div>

		<?php the_sub_field( 'txt_2' ); ?>

	</div>
</section>
