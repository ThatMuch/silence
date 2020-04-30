<?
/**
 * The template displaying the posts-overview
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */

?>

<? get_header(); ?>
<?php $page_id = get_queried_object_id();?>
  <main id="blog">
  <?php if (has_post_thumbnail()) : ?>
    <section class="page__header">
      <div class="page__header__content">
        <div class="container page__header__content__inner">
          <?php if ( get_field('slogan_page',$page_id)) : ?>
            <h1 class="page__header__title page__header__slogan"><?php the_field( 'slogan_page',$page_id ); ?></h1>
          <?php else : ?>
            <h1 class="page__header__title text-center"><?php echo get_the_title($page_id); ?></h1>
          <?php endif; ?>

        </div>
      </div>
      <? echo get_the_post_thumbnail($page_id,'large'); ?>
    </section>
  <?php endif?>

    <section class="container">
      <? if (have_posts() ) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/wp', 'post')?>
      <? endwhile; endif; ?>
      <?php
      if (  $wp_query->max_num_pages > 1 ) : ?>
        <button class="btn btn-outline-primary misha_loadmore">Voir tous les articles</button>
      <?php endif; ?>
    </section>
  </main>


<? get_footer(); ?>
