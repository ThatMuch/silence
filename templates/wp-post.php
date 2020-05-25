<article class="article">
	<div class="row">
		<?php if (has_post_thumbnail($post->ID)): ?>
			<div class="col-sm-6">
			<?php the_post_thumbnail('large', ['class' => 'modernizr-of']); ?>
			</div>
		<?php endif; ?>
		<div class=" article_content <?php if (has_post_thumbnail($post->ID)): ?> col-sm-6 <?php else : ?> col-sm-12<?php endif; ?>">
			<h2 class="entry-title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
			<a class="btn btn-outline-primary" href=" <?php the_permalink() ?>"> Lire <i class="icon arrow-right"></i></a>
		</div>
	</div>
</article>