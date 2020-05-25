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


 <section class="section section-articles">
 <?php if( get_sub_field('title') ) : ?>
	 <?php echo get_sub_field('title'); ?>
 <?php endif; ?>

	<div class="container">
            <div class="section__header">
                  <div class="row">
                        <div class="col-sm-7 divider">
                                    <div class="block-round"></div>
                              </div>
                              <div class="col-sm-5">
                                    <?php if(get_sub_field('tittle') ) : ?>
                                          <h2 class="section__title mb-0"><?php echo get_sub_field('tittle'); ?></h2>
                                    <?php endif; ?>
                              </div>
                  </div>
            </div>

	<fieldset>
            <?php if( get_sub_field('slogan') ) : ?>
                  <legend>
                  <h5><?php echo get_sub_field('slogan'); ?></h5>
                  </legend>
                  <?php endif; ?>

                  <div class="row">
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

                                          <div class="col-md-6">
                                                <div class="card-post card">
                                                      <div class="card__inner">
                                                            <div class="card__front">
                                                            <div class="img__inner">
                                                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                                            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                                                            </div>
                                                            <div class="content-center-verticale">
                                                                  <h3 class="card__title"><?php the_title(); ?></h3>
                                                            </div>
                                                            </div>
                                                            <div class="card__back">
                                                                  <h3 class="card__back__title"><?php the_title(); ?></h3>
                                                                  <p class="card__back__text"><?php  the_excerpt(); ?></p>
                                                                  <a href="<?php the_permalink() ?>" class="btn btn-outline-primary">Lire<i class="icon arrow-right"></i></a>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>

                              <?php

                        }

                  }

wp_reset_postdata();

?>
                  </div>
    </fieldset>
	</div>
      <?php
$link = get_sub_field('bouton');
if( $link ):
    $link_url = $link['url'];
    $link_title = $link['title'];
?>
<div class="container-button">
	<a class="btn btn-primary mt-auto" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
</div>
<?php endif; ?>

 </section>