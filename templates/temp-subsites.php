<?
/**
 * Template for Sites with Sub-Sites.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       Silence0.2
 *
 */
?>
<? php/* Template Name: Subsites */ ?>

<? phpget_header(); ?>

  <main id="subsites">

    <? phpif (have_posts() ) : while (have_posts()) : the_post(); ?>
      <section>
        <div class="element overview">
          <h1><? phpthe_title(); ?></h1>
          <p><? phpthe_content(); ?><p>
        </div>
      </section>
    <? phpendwhile; endif; ?>

    <? php// Child Pages
    $args = [
      'post_type'      => 'page',
      'posts_per_page' => -1,
      'post_parent'    => $post->ID,
      'order'          => 'ASC',
      'orderby'        => 'menu_order'
     ];
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : ?>
      <section>
        <div class="element sites">
          <? phpwhile ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="site">
              <h2><? phpthe_title(); ?></h2>
              <? phpthe_post_thumbnail('large', ['class' => 'modernizr-of']); ?>
              <p><? phpthe_content(); ?></p>
            </div>
          <? phpendwhile; ?>
        </div>
      </section>
    <? phpendif; wp_reset_query(); ?>

  </main>

<? phpget_footer(); ?>
