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
			<div class="post__box">
				<div class="post__image">
					<?php the_post_thumbnail('medium', ['class' => 'modernizr-of']); ?>
				</div>
				<div class="post__text">
					<h2><a class="post__link" href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
					<a class="btn-read-more" href="<?php the_permalink()?>"><img src="<?php echo esc_html_e(get_template_directory_uri()) ;?>/assets/images/icon-2.svg" alt=""></a>
				</div>
			</div>
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
