<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>

<?php get_header(); ?>
<div class="container">

<main id="page" class="<?php echo has_post_thumbnail() ? "" : "mt-header" ?>">
<?php if (has_post_thumbnail()) : ?>
    <section class="page__header">
      <div class="page__header__content">
        <div class="container page__header__content__inner">
          <?php if ( get_field('slogan_page')) : ?>
            <h1 class="page__header__title page__header__slogan"><?php the_field( 'slogan_page' ); ?></h1>
          <?php else : ?>
            <h1 class="page__header__title text-center"><?php the_title(); ?></h1>
          <?php endif; ?>
        </div>
      </div>
        <?php the_post_thumbnail('large');/* img */ ?>
    </section>
  <?php endif?>

  <section>
    <?php while (have_posts()) : the_post(); ?>
      <article>
              			<!-- Header Section-->
                    <div class="section__header mt-5 mb-5">
			<div class="row">
      <div class="col-sm-4 text-right">
        <h1><?php the_title(); ?></h1>
        </div>
				<div class="col-sm-8 d-flex align-items-center divider">
        <div class="block-round"></div>
        </div>
			</div>
		</div>
    <!-- Header Section -->
    <div class="content">
      <?php the_content(); ?>
    </div>
      </article>
    <?php endwhile; ?>
  </section>

</main>
</div>
<?php get_footer(); ?>


