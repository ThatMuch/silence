<section class="section section__list_items_image">
<!-- Header -->
	<?php include get_template_directory().'/components/section_header-line.php' ?>
<!-- Header -->
	<?php if ( have_rows( 'list_items' ) ) : ?>
		<div class="grid">
			<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
				<?php $img = get_sub_field( 'img' ); ?>
				<div class="item">
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'txt' ); ?>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			Vide
		</div>
			<?php endif; ?>
</section>