<?
/**
 * Template for ACF flexible elements
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 *
 */
?>
<? /* Template Name: Sections */ ?>

<? get_header(); ?>

<main id="sections">
<?php if (has_post_thumbnail()) : ?>
    <section class="page__header">
    <h1 class="page__header__title text-center"><?php the_title(); ?></h1>
        <?php the_post_thumbnail('large'); ?>
    </section>
  <?php endif?>

  <? if (have_posts()): while (have_posts()): the_post() ?>
    <? stanlee_sections() ?>
  <? endwhile; endif ?>

</main>

<? get_footer() ?>
