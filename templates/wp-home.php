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

  <main id="blog">
  <?php if (has_post_thumbnail()) : ?>
    <section class="page__header">
    <h1 class="page__header__title text-center"><?php the_title(); ?></h1>
        <?php the_post_thumbnail('large'); ?>
    </section>
  <?php endif?>
    <section class="container">
      <? if (have_posts() ) : ?><?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/wp', 'post')?>
      <? endwhile; endif; ?>
      <?php
      global $wp_query;
      if (  $wp_query->max_num_pages > 1 ) : ?>

        <button class="btn btn-outline-primary misha_loadmore">Voir tous les articles</button>

      <?php endif; ?>
    </section>
  </main>


<? get_footer(); ?>
