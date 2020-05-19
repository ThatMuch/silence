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
  <?php if (has_post_thumbnail()) : ?>
    <section class="page__header page__header-post">
      <div class="page__header__content">
        <div class="container page__header__content__inner">
          <?php if ( get_field('slogan_page')) : ?>
            <h1 class="page__header__title "><?php echo get_field( 'slogan_page' ); ?></h1>
            <?php else : ?>
            <h1 class="page__header__title "><?php the_title(); ?></h1>
          <?php endif; ?>
          <div class="page__header-post__info"><?= get_the_date_stanlee(); ?></div>
          <a href="" class="btn btn-primary page__header-post__btn">Partager</a>
        </div>
      </div>
        <?php the_post_thumbnail('large'); ?>
    </section>
  <?php endif?>
<section class="content container">
    <article>
    <h1 class="page__header__title "><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
</section>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
