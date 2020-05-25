<?
/**
 * The template displaying the posts-overview
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */

?>

<?php get_header(); ?>
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
      <?php echo get_the_post_thumbnail($page_id,'large'); ?>
    </section>
  <?php endif?>

    <section class="container">
      	<!-- Header Section-->
			<div class=" section__header">
			<?php if ( get_sub_field('title') ) : ?>
				<p class="section__header__title text-left"><?php echo get_sub_field('title'); ?></p>
			<?php endif; ?>
			<div class="row">
				<div class="col-sm-6">
				<?php if ( get_sub_field('slogan') ) : ?>
				<h2 class="section__header__slogan text-left"><?php echo get_sub_field('slogan'); ?></h2>
			<?php endif; ?>
        </div>
        <div class="col-sm-6 divider">
				<div class="block-round"></div>
				</div>
			</div>
		</div>
		<!-- Header Section -->
      <?php if (have_posts() ) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/wp', 'post')?>
      <?php endwhile; endif; ?>
      <?php
      if (  $wp_query->max_num_pages > 1 ) : ?>
        <button class="btn btn-outline-primary misha_loadmore">Voir tous les articles</button>
      <?php endif; ?>
    </section>
  </main>


<?php get_footer(); ?>
