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
				<div class="col-sm-6 divider">
				<div class="block-round"></div>
				</div>
				<div class="col-sm-6">
				<?php if ( get_sub_field('slogan') ) : ?>
				<h2 class="section__header__slogan text-right"><?php echo get_sub_field('slogan'); ?></h2>
			<?php endif; ?>
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
                  <div class="row justify-content-center">
                      <?php  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
                          <div class="col-sm-4">
                              <div class="section-team__member">
                                <!-- Image -->
                                <?php if (get_the_post_thumbnail()) : ?>
                                    <img class="section-team__member__img" src="<?php the_post_thumbnail_url('thumbnail')?>" alt="<?php the_title()?>">
                                <? else : ?>
                                    <div class="section-team__member__img"></div>
                                <? endif;?>
                                <!-- Image -->
                                  <!-- Name -->
                                      <h4 class="section-team__member__name"><?php the_title()?></h4>
                                  <!-- Name -->
                                  <!-- Job -->
                                  <?php if (get_field('job') ) : ?>
                                      <h5 class="section-team__member__job"> <?php echo get_field('job'); ?></h5>
                                  <?php endif; ?>
                                  <!-- Job -->
                                  <!-- Description -->
                                  <?php if (get_field('description') ) : ?>
                                      <p class="section-team__member__desc"> <?php echo get_field('description'); ?></p>
                                  <?php endif; ?>
                                  <!-- Description -->
                                  <!-- Social medias -->
                                  <?php if (have_rows('links')) : ?>
                                      <?php while ( have_rows('links') ) : the_row(); ?>
                                          <ul class="section-team__member__rs">
                                              <!-- Facebook -->
                                              <?php if (get_sub_field('facebook') ) : ?>
                                              <li>
                                                  <a href="<?php the_sub_field('facebook');?>">
                                                      <i class="fab fa-facebook" aria-hidden="true"></i>
                                                  </a>
                                              </li>
                                              <?php endif; ?>
                                              <!-- Facebook -->
                                              <!-- Twitter -->
                                              <?php if (get_sub_field('twitter') ) : ?>
                                              <li>
                                                  <a href="<?php the_sub_field('twitter');?>">
                                                      <i class="fab fa-twitter" aria-hidden="true"></i>
                                                  </a>
                                              </li>
                                              <?php endif; ?>
                                              <!-- Twitter -->
                                              <!-- Linkedin -->
                                              <?php if (get_sub_field('linkedin') ) : ?>
                                              <li>
                                                  <a href="<?php the_sub_field('linkedin');?>">
                                                      <i class="fab fa-linkedin" aria-hidden="true"></i>
                                                  </a>
                                              </li>
                                              <?php endif; ?>
                                              <!-- Linkedin -->
                                              <!-- Instagram -->
                                              <?php if (get_sub_field('instagram') ) : ?>
                                              <li>
                                                  <a href="<?php the_sub_field('instagram');?>">
                                                      <i class="fab fa-instagram" aria-hidden="true"></i>
                                                  </a>
                                              </li>
                                              <?php endif; ?>
                                              <!-- Instagram -->
                                              <!-- Google + -->
                                              <?php if (get_sub_field('google') ) : ?>
                                              <li>
                                                  <a href="<?php the_sub_field('google');?>">
                                                      <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                                                  </a>
                                              </li>
                                              <?php endif; ?>
                                              <!-- Google + -->
                                          </ul>
                                      <?php endwhile; ?>
                                  <?php endif; ?>
                                  <!-- Social media -->
                              </div>
                          </div>
                      <? endwhile; ?>
                  </div>
                  <? endif; wp_reset_query(); ?>
      </div>
 </section>