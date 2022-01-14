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
                              <h2 class="title mb-5">
								  Nos actualités</h2>
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
                        	<?php get_template_part('templates/wp', 'post-card'); ?>
                  </div>
                  <?php }}
                        wp_reset_postdata();
                  ?>
            </div>
			<div class="d-flex justify-content-center">
				<a href="<?php site_url() ;?>/blog" class="btn btn-border orange bg-white link">Voir tout</a>
			</div>
      </div>
 </section>
