<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>

<?php get_header(); ?>
<main id="page">
<div class="container">

  <section>
    <?php while (have_posts()) : the_post(); ?>
      <article>
		<div class="content">
		<?php the_content(); ?>
		</div>
      </article>
    <?php endwhile; ?>
  </section>
</main>
</div>
<?php get_footer(); ?>


