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
							  <?php foreach( $images as $image ): ?>
                        <div class="client__box">
                            <div class="client__image">
                                <img src="<?php echo $image['sizes'][$size]; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                            <a href="#">lien</a>
                        </div>
						<?php endforeach; ?>
						<?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>