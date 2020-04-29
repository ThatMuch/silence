<article class="article">
	<div class="row">
		<? if (has_post_thumbnail($post->ID)): ?>
			<div class="col-sm-6">
			<? the_post_thumbnail('large', ['class' => 'modernizr-of']); ?>
			</div>
		<? endif; ?>
		<div class=" article_content <? if (has_post_thumbnail($post->ID)): ?> col-sm-6 <? else : ?> col-sm-12<?endif; ?>">
			<h2 class="entry-title"><a href="<? the_permalink()?>"><? the_title(); ?></a></h2>
			<? the_excerpt(); ?>
			<a class="btn btn-outline-primary" href=" <?php the_permalink() ?>"> Lire </a>
		</div>
	</div>
</article>