<?
/**
 * Text Block
 * This is a (very basic) default ACF-Block using the "Flexible Element" field-type
 * it is included through 'functions-sections.php' which is triggered by 'sections.php'.
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 *
 */
 ?>

 <section class="section section-text">
 <div class="container">
        <!-- Title -->
        <?php if(get_sub_field('title') ) : ?>
            <h2 class="section__title text-uppercase"><?php echo get_sub_field('title'); ?></h2>
        <?php endif; ?>
        <!-- Title -->
        <!-- Texte -->
        <?php if(get_sub_field('text') ) : ?>
            <div><?php echo get_sub_field('text'); ?></div>
        <?php endif; ?>
        <!-- Texte -->
    </div>
 </section>