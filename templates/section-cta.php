<?
/**
 * Link Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

  <section class="section section-cta
  <? phpif(get_sub_field('fond') == "Couleur"):?> bg-primary
  <? phpelseif(get_sub_field('fond') == "Gris"):?> bg-light<? phpendif;?>">

    <!-- Section background: image -->
    <? phpif(get_sub_field('fond') == "Image"):?>
        <div class="section__background-image"  style="
        <? phpif(get_sub_field('image')):?>
        background-image:url(<? phpecho the_sub_field('image') ?>);
        <? phpendif;?>"></div>
    <? phpendif;?>
    <!-- Section background: image -->
    <div class="container">
        <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section__title"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->

        <!-- Text -->
        <?php if(get_sub_field('text') ) : ?>
            <p class="mb-4"> <?php echo get_sub_field('text'); ?></p>
        <?php endif; ?>
        <!-- Text -->
       <!-- Button -->
  <?php if ( get_sub_field('button') ) : $link = get_sub_field('button');?>
                <div class="section-text-image__btn">
                    <a class="btn <?php echo  $fond == "Couleur" ? "btn-dark" : "btn-primary" ?>" href="<?php echo  $link['url']; ?>" target="<?php echo $link['target'];?>">
                        <?php echo  $link['title']; ?>
                    </a>
                </div>
                <?php endif; ?>
                <!-- Button -->
      </div>
 </section>