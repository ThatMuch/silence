<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>

<?php get_header(); ?>
<main id="page" class="<?php echo has_post_thumbnail() ? "" : "mt-header" ?>">
<?php if (has_post_thumbnail()) : ?>
    <section class="page__header">
      <div class="page__header__content">
        <div class="container page__header__content__inner">
          <?php if ( get_field('slogan_page')) : ?>
            <h1 class="page__header__title page__header__slogan"><?php the_field( 'slogan_page' ); ?></h1>
          <?php else : ?>
            <h1 class="page__header__title text-center"><?php the_title(); ?></h1>
          <?php endif; ?>
        </div>
      </div>
        <?php the_post_thumbnail('large');/* img */ ?>
    </section>
  <?php endif?>

<div class="container">

  <section>
    <?php while (have_posts()) : the_post(); ?>
      <article>
              			<!-- Header Section-->
                    <div class="section__header mt-5 mb-5">
			<div class="row">
      <div class="col-sm-4 text-right">
        <h1><?php the_title(); ?></h1>
        </div>
				<div class="col-sm-8 d-flex align-items-center divider">
        <div class="block-round"></div>
        </div>
			</div>
		</div>
    <!-- Header Section -->
    <div class="content">
      <?php the_content(); ?>


   <?php if ( have_rows('price_list') ): ?>
      <div class="card_price_formation">
          <?php if ( get_field('title') ) : ?>
              <h3 class="title_card_formation"><?php echo the_field('title'); ?></h3>
          <?php endif; ?>
          
          <?php if ( get_field('subtitle') ) : ?>
              <p class="horaire"><?php echo the_field('subtitle'); ?></p>
          <?php endif; ?>    
          <?php if ( have_rows('price_list') ): $counter = 1; ?>
            <div class="bloc_price_formation ">
                <?php if( get_field('logo') ): ?>
                    <img src="<?php the_field('logo'); ?>" alt="Silence"/>
                <?php endif; ?>
                <ul>
                    <?php while( have_rows('price_list') ): the_row(); ?>
                    <li class="<?php  if( $counter == 2 ) { ?>last_list_price<?php } ?>"><p class="price_formation"><?php the_sub_field('prix'); ?> euros</p>
                        <p class="libelle_price"><?php the_sub_field('condition'); ?></p>

                        <?php 
                            $link = get_sub_field('lien');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                              <a class="btn_purchase" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>

                    </li>       
                    <?php $counter++; endwhile; ?>
                  </ul>
                  <?php endif; ?>  
              </div> 
          <hr class="wp-block-separator">
          <?php 
                            $link_achat = get_field('link_achat');
                            if( $link_achat ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                            ?>
                                  <div class="bloc_button_purchase"><a class="ml-auto btn btn-primary" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
          <?php endif; ?>

          <?php $form = get_field('formulaire');?>
                <?php if($form) : ?>
                      <?php echo $form; ?>
          <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>
      
      </article>
    <?php endwhile; ?>

   



  </section>

</main>
</div>
<?php get_footer(); ?>


