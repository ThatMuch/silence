<?
/**
 * Text Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

 <section class="section section-faq">
 <div class="container">
      			<!-- Header Section-->
                  <div class=" section__header">
			<?php if ( get_sub_field('title') ) : ?>
				<p class="section__header__title text-left"><?php echo get_sub_field('title'); ?></p>
			<?php endif; ?>
			<div class="row">
            <div class="col-sm-6 divider">
				<div class="block-round"></div>
				</div>
				<div class="col-sm-6">
				<?php if ( get_sub_field('slogan') ) : ?>
				<h2 class="section__header__slogan text-left"><?php echo get_sub_field('slogan'); ?></h2>
			<?php endif; ?>
        </div>

			</div>
		</div>
		<!-- Header Section -->
        <?php if ( get_sub_field('text') ) : ?>
            <div class="section-faq__text"><?php echo get_sub_field('text'); ?></div>
        <?php endif; ?>

        <div class="accordion section-faq__accordion" id="faq-accordion">
            <!-- FAQ -->
            <?php if ( have_rows('items') ) :  $i =0; ?>

                <?php while( have_rows('items') ) : the_row();?>
                    <div class="card">
                        <div class="card-header collapsed" id="heading-<?php echo $i ?>" data-toggle="collapse" data-target="#collapse-<?php echo $i ?>" aria-expanded="true" aria-controls="collapseOne">
                        <div class="row">
                            <div class="col-10 col-md-11"><span class="section-faq__accordion__title"><?php the_sub_field('title'); ?></span></div>
                            <div class="col-2 col-md-1 d-flex">
                                <span class="card-header-expand ml-auto">
                                    <i class="fas fa-plus"></i>
                                </span>
                             </div>
                        </div>
                        </div>

                        <div id="collapse-<?php echo $i ?>" class="collapse" aria-labelledby="heading-<?php echo $i ?>" data-parent="#faq-accordion">
                            <div class="card-body">
                                <div class="row d-flex align-items-center">
                                    <div class="col-sm-4">
                                    <?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>
                                        <!-- Thumbnail image -->
                                        <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="m-auto d-block"/>
                                    <?php endif; ?>
                                    </div>
                                    <div class="col-sm-8">
                                    <div class="answer"><?php the_sub_field('text'); ?></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php $i++; endwhile; ?>

            <?php endif; ?>

            <!-- FAQ -->

        </div>
    </div>
 </section>