<article class="article">
	<div class="row">
		<? phpif (has_post_thumbnail($post->ID)): ?>
			<div class="col-sm-6">
			<? phpthe_post_thumbnail('large', ['class' => 'modernizr-of']); ?>
			</div>
		<? phpendif; ?>
		<div class=" article_content <? phpif (has_post_thumbnail($post->ID)): ?> col-sm-6 <? phpelse : ?> col-sm-12<?endif; ?>">
			<h2 class="entry-title"><a href="<? phpthe_permalink()?>"><? phpthe_title(); ?></a></h2>
			<? phpthe_excerpt(); ?>

			<a class="btn btn-outline-primary" href=" <?php the_permalink() ?>"> Lire </a>
		</div>
	</div>
</article>