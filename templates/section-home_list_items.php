<section class="section section__list_items">
	<div class="container">
		<!-- Header Section-->
		<?php include get_template_directory() . '/components/section_header-dotted.php'?>
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
