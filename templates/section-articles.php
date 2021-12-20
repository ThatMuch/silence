<?
/**
 * Articles Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>


 <section class="section__area bg-yellow">
	<div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <h2 class="title mb-5"><?php echo get_sub_field('tittle'); ?></h2>
                        </div>
                  </div>
            <div class="row gx-4 d-none d-lg-flex">
                  <?php
                  $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2
                  );

                  $query = new WP_Query( $args );

                  if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                              $query->the_post();
                                    ?>
                  <div class="col-lg-6">
                        <div class="post__box">
                              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                        <div class="post__text">
                              <h2><?php the_title(); ?></h2>
                              <a href="<?php the_permalink() ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-2.svg" alt="<?php the_title(); ?>">
                              </a>
                        </div>
                        </div>
                  </div>
                  <?php }}
                        wp_reset_postdata();
                  ?>
            </div>
      </div>
 </section>