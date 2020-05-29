<section class="section section-newsletter background_cover" style="background: linear-gradient(rgba(131, 152, 141, 0.7),rgba(131, 152, 141, 0.7)), url('<?php echo get_sub_field('background'); ?>');">

    <div class="container">
        <h2 class="text-center"><?php echo get_sub_field('title'); ?></h2>

        <?php $form = get_sub_field('formulaire_dinscription');?>
          <?php if($form) : ?>

                <?php echo $form; ?>

          <?php endif; ?>
    </div>

</section>   