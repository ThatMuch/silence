<?
/**
 * The template for displaying all single posts and attachments
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>

<?php get_header(); ?>

  <main id="post">
  <?php if (have_posts() ) : while (have_posts()) : the_post(); ?>
<section class="content container">
    <article>
      <?php the_content(); ?>
    </article>
</section>
<?php endwhile; endif; ?>
 <!-- Actualites -->
<?php require get_template_directory().'/templates/section-articles.php'; ?>
</main>

<?php get_footer(); ?>
