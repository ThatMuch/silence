<?
/**
 * Formations Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

<?php
   $args = array(
	    'post_type' => 'formations',
		'taxonomy' => 'category',
		'orderby' => 'name',
		'order'   => 'DESC',
		'exclude'=>1
    );

   $cats = get_categories($args);
?>

 <section class="section__area bg-gray">
	<div class="container">
		<div class="row">
                <div class="col-md-12">
                    <h2 class="title mb-5"><?php echo esc_html(get_sub_field('title')); ?></h2>
                </div>
        </div>
		<div class="row d-flex align-items-center">
			<?php  foreach($cats as $cat_) {?>
			<div class="col-lg-6">
				<h4 class="title-2 text-center"> <?php echo esc_html_e($cat_->name); ?></h4>
				<div class="row">
					<?php
						$args = array(
							'post_type' => 'formations',
							'category_name' => $cat_->name,
							'offset' => '0',
							'posts_per_page' => '9999'
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) {
                        	while ( $query->have_posts() ) {
                              $query->the_post();
					?>
					<?php $numb = $query->post_count ; ?>
					<div class="<?php echo $numb > 2 ? "col-md-6" : "col-sm-12"?>">
						<div class="item__box">
							<div class="<?php echo $numb > 2 ? "small" : ""?> item__image">
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="item__text">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							</div>
						</div>
					</div>

					<?php }} wp_reset_postdata(); ?>
				</div>
			</div>
			<?php }?>
	</div>
	</div>
</section>
