	<?php if(get_sub_field('title') ) : ?>
				<div class="section__header mt-5 mb-5">
					<div class="row">
						<div class="col-sm-5 ">
							<h2 class="section__title text-uppercase"><?php echo get_sub_field('title'); ?></h2>
						</div>
						<div class="col-sm-7 d-flex align-items-center justify-content-end section__header__img">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/Pattern_cercle-blue.svg'?>" alt="">
						</div>
					</div>
				</div>
			<?php endif; ?>