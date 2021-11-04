<?php if ( have_rows( 'sections' ) ): ?>
	<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'home_list_items' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'txt' ); ?>
			<?php if ( have_rows( 'list_items' ) ) : ?>
				<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'txt' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
			<?php the_sub_field( 'txt_2' ); ?>
		<?php elseif ( get_row_layout() == 'home_list_items_images' ) : ?>
			<?php if ( have_rows( 'list_items' ) ) : ?>
				<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'txt' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'concept_formations' ) : ?>
			<?php the_sub_field( 'title' ); ?>
		<?php elseif ( get_row_layout() == 'concept_formations_details' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php if ( have_rows( 'list_items' ) ) : ?>
				<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'txt' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'formations' ) : ?>
			<?php the_sub_field( 'title' ); ?>
		<?php elseif ( get_row_layout() == 'programmes_formations' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php if ( have_rows( 'list_items' ) ) : ?>
				<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'txt' ); ?>
					<?php $file = get_sub_field( 'file' ); ?>
					<?php if ( $file ) : ?>
						<a href="<?php echo esc_url( $file['url'] ); ?>"><?php echo esc_html( $file['filename'] ); ?></a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'programmes_formation_modules' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php if ( have_rows( 'list_items' ) ) : ?>
				<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<?php $img = get_sub_field( 'img' ); ?>
					<?php if ( $img ) : ?>
						<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
					<?php endif; ?>
					<?php the_sub_field( 'txt' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
			<?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) : ?>
				<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'programmes_chiffres' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php if ( have_rows( 'sections' ) ) : ?>
				<?php while ( have_rows( 'sections' ) ) : the_row(); ?>
					<?php the_sub_field( 'title' ); ?>
					<?php the_sub_field( 'txt' ); ?>
					<?php if ( have_rows( 'list_items' ) ) : ?>
						<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
							<?php the_sub_field( 'number' ); ?>
							<?php the_sub_field( 'txt' ); ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'programmes_tarif' ) : ?>
			<?php if ( have_rows( 'list_items' ) ) : ?>
				<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					<?php the_sub_field( 'title' ); ?>
					<?php the_sub_field( 'Price' ); ?>
					<?php the_sub_field( 'txt' ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
			<?php $link = get_sub_field( 'link' ); ?>
			<?php if ( $link ) : ?>
				<a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'team' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
		<?php elseif ( get_row_layout() == 'team_formateurs' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
		<?php elseif ( get_row_layout() == 'content' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'txt' ); ?>
			<?php $img = get_sub_field( 'img' ); ?>
			<?php if ( $img ) : ?>
				<img src="<?php echo esc_url( $img['url'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'text' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'text' ); ?>
		<?php elseif ( get_row_layout() == 'cta' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'text' ); ?>
			<?php $button = get_sub_field( 'button' ); ?>
			<?php if ( $button ) : ?>
				<a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
			<?php endif; ?>
			<?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
			<?php $background_color_checked_values = get_sub_field( 'background_color' ); ?>
			<?php if ( $background_color_checked_values ) : ?>
				<?php foreach ( $background_color_checked_values as $background_color_value ): ?>
					<?php echo esc_html( $background_color_value ); ?>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'testimonials' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
		<?php elseif ( get_row_layout() == 's-images' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php $logo_list_images = get_sub_field( 'logo_list' ); ?>
			<?php if ( $logo_list_images ) :  ?>
				<?php foreach ( $logo_list_images as $logo_list_image ): ?>
					<a href="<?php echo esc_url( $logo_list_image['url'] ); ?>">
						<img src="<?php echo esc_url( $logo_list_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $logo_list_image['alt'] ); ?>" />
					</a>
					<p><?php echo esc_html( $logo_list_image['caption'] ); ?></p>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 's-formations' ) : ?>
			<?php $button = get_sub_field( 'button' ); ?>
			<?php if ( $button ) : ?>
				<a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
			<?php endif; ?>
			<?php the_sub_field( 'slogan' ); ?>
			<?php the_sub_field( 'title' ); ?>
		<?php elseif ( get_row_layout() == 'slider' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
			<?php $button = get_sub_field( 'button' ); ?>
			<?php if ( $button ) : ?>
				<a href="<?php echo esc_url( $button['url'] ); ?>" target="<?php echo esc_attr( $button['target'] ); ?>"><?php echo esc_html( $button['title'] ); ?></a>
			<?php endif; ?>
			<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<?php the_sub_field( 'title' ); ?>
					<?php the_sub_field( 'text' ); ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) : ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php elseif ( get_row_layout() == 'contact' ) : ?>
			<?php the_sub_field( 'slogan' ); ?>
			<?php // The cf7 field type is not supported in this version of the plugin. ?>
			<?php // Contact http://www.hookturn.io to request support for this field type. ?>
			<?php the_sub_field( 'title' ); ?>
		<?php elseif ( get_row_layout() == 'accordeon' ) : ?>
			<?php the_sub_field( 'slogan' ); ?>
			<?php the_sub_field( 'text' ); ?>
			<?php if ( have_rows( 'items' ) ) : ?>
				<?php while ( have_rows( 'items' ) ) : the_row(); ?>
					<?php the_sub_field( 'title' ); ?>
					<?php the_sub_field( 'text' ); ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<?php if ( $image ) : ?>
						<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
			<?php the_sub_field( 'title' ); ?>
		<?php elseif ( get_row_layout() == 'articles' ) : ?>
			<?php $bouton = get_sub_field( 'bouton' ); ?>
			<?php if ( $bouton ) : ?>
				<a href="<?php echo esc_url( $bouton['url'] ); ?>" target="<?php echo esc_attr( $bouton['target'] ); ?>"><?php echo esc_html( $bouton['title'] ); ?></a>
			<?php endif; ?>
			<?php the_sub_field( 'tittle' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
		<?php elseif ( get_row_layout() == 'newsletter' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php // The cf7 field type is not supported in this version of the plugin. ?>
			<?php // Contact http://www.hookturn.io to request support for this field type. ?>
			<?php if ( get_sub_field( 'background' ) ) : ?>
				<img src="<?php the_sub_field( 'background' ); ?>" />
			<?php endif ?>
		<?php elseif ( get_row_layout() == 'formations' ) : ?>
			<?php the_sub_field( 'title' ); ?>
			<?php the_sub_field( 'slogan' ); ?>
			<?php $category = get_sub_field( 'category' ); ?>
			<?php $term = get_term_by( 'id', $category, 'category' ); ?>
			<?php if ( $term ) : ?>
				<a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>