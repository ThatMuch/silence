    <div class="section__area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title mt-5 mb-75">Ils parlent de nous</h2>
                    <div class="client__wrapper owl-carousel">
						<?php
							$images = get_sub_field('logo_list');
							$size = 'medium';
							if( $images ): ?>
							  <?php foreach( $images as $image ):
							  	$attachment_id = $image['id'];
								 // Image variables.
								$url = $image['url'];
								$alt = $image['alt'];
								$url_image = get_field( 'url_image', $attachment_id );

								// Thumbnail size attributes.
								$size = 'thumbnail';
								$thumb = $image['sizes'][ $size ];
							?>
                        <div class="client__box">
                            <div class="client__image">
								<a href="<?php echo esc_url( $url_image['url'] ); ?>" target="<?php echo esc_attr( $url_image['target'] ); ?>">
								<img src="<?php echo esc_url($thumb);  ?>" alt="<?php echo esc_attr($alt); ?>" />
								</a>
                            </div>

                        </div>
						<?php endforeach; ?>
						<?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
