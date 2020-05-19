<section class="section section-newsletter background_cover" style="background: linear-gradient(rgba(131, 152, 141, 0.7),rgba(131, 152, 141, 0.7)), url('https://upload.wikimedia.org/wikipedia/commons/1/14/Un_super_paysage.jpeg');">

    <div class="container">
        <h2 class="text-center"><?php echo get_sub_field('title'); ?></h2>

        <?php $form = get_sub_field('formulaire_dinscription');?>
          <?php if($form) : ?>

                <?php echo $form; ?>

          <?php endif; ?>
    </div>

</section>   