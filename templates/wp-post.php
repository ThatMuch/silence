<?php
/**
 * Post
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 */

?>
<div class="section__area">
	<div class="container">
	<div class="row gx-5 align-items-center">
		<div class="col-lg-6">
			<?php get_template_part('templates/wp', 'post-card'); ?>
		</div>
		<div class="col-lg-6">
			<h2><a class="m-title text-left" href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
			<div class="text-bx">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
	</div>
</div>
