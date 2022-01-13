<?php
/**
 * Post Card
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 * @package     silence
 */

?>
<div class="post__box">
	<div class="post__image">
		<?php the_post_thumbnail('medium', ['class' => 'modernizr-of']); ?>
	</div>
	<div class="post__text">
		<h2><a class="post__link" href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
		<a class="btn-read-more" href="<?php the_permalink()?>"><img src="<?php echo esc_html(get_template_directory_uri()) ;?>/assets/images/icon-2.svg" alt="<?php the_title(); ?>"></a>
	</div>
</div>
