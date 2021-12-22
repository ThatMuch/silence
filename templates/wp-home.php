<?
/**
 * The template displaying the posts-overview
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 */
get_header();
$page_id = get_queried_object_id();
?>

<main id="blog">
	<div class="section__area border-top section__blog ">
			<?php if (have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('templates/wp', 'post')?>
			<?php endwhile; endif; ?>
			<?php
			if (  $wp_query->max_num_pages > 1 ) : ?>
			<div class="d-flex justify-content-center">
				<button class="btn btn-outline-primary misha_loadmore">Voir tous les articles</button>
			</div>
			<?php endif; ?>
	  </div>
  </main>


<?php get_footer(); ?>
