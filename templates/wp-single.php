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
          <div class="page__header-post__info"><?php echo get_the_date_stanlee(); ?></div>
        </div>
      </div>
        <?php the_post_thumbnail('large'); ?>
    </section>
  <?php endif?>
<section class="content container">
    <article>
      <?php the_content(); ?>
    </article>
</section>
<?php endwhile; endif; ?>

<section class="section section-moreArticles">
  <div class="container">
    <div class="section__header mb-5">
      <p class="section__header__title text-right">autres articles</p>
      <div class="row">
        <div class="col-sm-5">
          <h2 class="section__title mb-0">Voici quelques unes de nos articles les plus populaires</h2>
        </div>
        <div class="col-sm-7 divider">
            <div class="block-round"></div>
         </div>
      </div>
    </div>
<div class="slider slider-articles">
  <?php $args = array(
        'post_type' => 'post',
        'post__not_in' => array( get_the_ID() ),

    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {

    while ( $query->have_posts() ) {

          $query->the_post();
    ?>
     <div class="card-post card">
        <div class="card__inner">
                                                            <div class="card__front">
                                                            <div class="img__inner">
                                                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                                            <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/>
                                                            </div>
                                                            <div class="content-center-verticale">
                                                                  <h3 class="card__title"><?php the_title(); ?></h3>
                                                            </div>
                                                            </div>
                                                            <div class="card__back">
                                                                  <h3 class="card__back__title"><?php the_title(); ?></h3>
                                                                  <p class="card__back__text"><?php  the_excerpt(); ?></p>
                                                                  <a href="<?php the_permalink() ?>" class="btn btn-outline-primary">Lire<i class="icon arrow-right"></i></a>
                                                            </div>
                                                      </div>
                                                </div>

    <?php } } 	wp_reset_query();?>
</div>

</div>
</section>
</main>

<?php get_footer(); ?>
