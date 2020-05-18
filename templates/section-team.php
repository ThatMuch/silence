<?
/**
 * Team Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

  <section class="section section-team">
      <div class="container">
   			<!-- Header Section-->
               <div class=" section__header">
			<?php if ( get_sub_field('title') ) : ?>
				<p class="section__header__title text-right"><?php echo get_sub_field('title'); ?></p>
			<?php endif; ?>
			<div class="row">
				<div class="col-sm-6">
				<?php if ( get_sub_field('slogan') ) : ?>
				<h2 class="section__header__slogan text-right"><?php echo get_sub_field('slogan'); ?></h2>
			<?php endif; ?>
				</div>
                <div class="col-sm-6 divider">
				<div class="block-round"></div>
				</div>
			</div>
		</div>
		<!-- Header Section -->
          <?php
              $args = array(
                  'post_type' => 'team'
                  );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts() ): ?>
                      <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                          <div class="row section-team__member">
                          <div class="col-sm-4 section-team__member__img">
                                 <!-- Image -->
                                 <?php if (get_the_post_thumbnail()) : ?>
                                    <div class="img__inner">
                                        <img src="<?php the_post_thumbnail_url('medium')?>" alt="<?php the_title()?>">
                                    </div>
                                <? endif;?>
                                <!-- Image -->
                          </div>
                          <div class="col-sm-8">
                            <!-- Name -->
                            <h3 class="section-team__member__name"><?php the_title()?></h3>
                                  <!-- Name -->
                                  <!-- Job -->
                                  <?php if (get_field('job') ) : ?>
                                      <h4 class="section-team__member__job"> <?php echo get_field('job'); ?></h4>
                                  <?php endif; ?>
                                  <!-- Job -->
                                  <!-- Description -->
                                  <?php if (get_field('description') ) : ?>
                                      <p class="section-team__member__desc"> <?php echo get_field('description'); ?></p>
                                  <?php endif; ?>
                                  <!-- Description -->
                                  <!-- Social medias -->
                                  <?php if (have_rows('links')) : ?>
                                          <div class="section-team__member__rs">
                                      <?php while ( have_rows('links') ) : the_row(); ?>
                                              <!-- Facebook -->
                                              <?php if (get_sub_field('facebook') ) : ?>

                                                  <a href="<?php the_sub_field('facebook');?>" class="btn btn-icon">
                                                  Facebook
                                                      <i class="fab fa-facebook" aria-hidden="true"></i>
                                                  </a>

                                              <?php endif; ?>
                                              <!-- Facebook -->
                                              <!-- Twitter -->
                                              <?php if (get_sub_field('twitter') ) : ?>

                                                  <a href="<?php the_sub_field('twitter');?>" class="btn btn-icon btn-outline-primary">
                                                  Twitter
                                                  <i class="fab fa-twitter" aria-hidden="true"></i>
                                                  </a>

                                              <?php endif; ?>
                                              <!-- Twitter -->
                                              <!-- Linkedin -->
                                              <?php if (get_sub_field('linkedin') ) : ?>

                                                  <a href="<?php the_sub_field('linkedin');?>" class="btn btn-icon btn-outline-primary">
                                                  Linkedin
                                                  <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                                  </a>

                                              <?php endif; ?>
                                              <!-- Linkedin -->
                                              <!-- Instagram -->
                                              <?php if (get_sub_field('instagram') ) : ?>

                                                  <a href="<?php the_sub_field('instagram');?>" class="btn btn-outline-primary btn-icon">
                                                  Instagram
                                                  <i class="fab fa-instagram" aria-hidden="true"></i>
                                                  </a>

                                              <?php endif; ?>
                                              <!-- Instagram -->
                                              <!-- Google + -->
                                              <?php if (get_sub_field('google') ) : ?>

                                                  <a href="<?php the_sub_field('google');?>" class="btn btn-outline-primary btn-icon">
                                                  Google +
                                                  <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                                                  </a>

                                              <?php endif; ?>
                                              <!-- Google + -->
                                      <?php endwhile; ?>
                                          </div>
                                  <?php endif; ?>
                                  <!-- Social media -->
                          </div>

                          </div>
                      <? endwhile; ?>
                  <? endif; wp_reset_query(); ?>
      </div>
 </section>