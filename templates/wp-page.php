<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       silence_1.0.0
 */
?>

<? get_header(); ?>
<div class="container">

<main id="page">

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
        <?php the_post_thumbnail('large'); ?>
    </section>
  <?php endif?>

  <section>
    <? while (have_posts()) : the_post(); ?>
      <article>
        <h1><? the_title(); ?></h1>
        <? the_content(); ?>
      </article>
    <? endwhile; ?>
  </section>

</main>
</div>

<h2>“Express the change you want to see, in your words”</h2>
<p><span class="subtitle text-right">nos formations et coaching prise de parole</span></p>
<h4>Nos derniers articles et études de cas</h4>
<h5>articles &amp; études de cas</h5>
<div class="block-round"> </div>
<p><a class="btn btn-primary" href="#">bouton<i class="fa fa-chevron-right"></i></a> <a class="btn btn-outline-primary" href="#">bouton 2<i class="fa fa-chevron-right"></i></a></p>

<!-- Formation -->
<div class="card-training card">
   <div class="card__inner">
      <div class="card__front">
         <div class="img__inner"><img src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/5b95be27be7744fb5c8b467b.jpg" alt="wide image" /></div>
         <span class="card-training__category">coaching indiv. organisation</span>
         <div class="content-center-verticale">
            <h3 class="card__title">Gagner en confiance à l'oral</h3>
         </div>
         <div class="card-training__details">
            <ul>
               <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ordi.svg" /><span>12 x 2H</span></li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.svg" /><span>12 x 2H</span></li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" /><span>Paris</span></li>
               <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user.svg" /><span>01 Pers</span></li>
            </ul>
         </div>
      </div>
      <div class="card__back ">
         <h3 class="card__back__title">Gagner en confiance à l'oral</h3>
         <p class="card__back__text">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
         <a class="btn btn-primary">bouton<i class="fa fa-chevron-right"></i></a> <a class="btn btn-outline-primary">bouton 2<i class="fa fa-chevron-right"></i></a>
      </div>
   </div>
</div>

<!-- SECTION ARTICLES -->
<fieldset>
  <legend>
    <h5 >articles &amp; études de cas</h5>
  </legend>
  <div class="card-post card">
   <div class="card__inner">
      <div class="card__front">
         <div class="img__inner">
           <img src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/5b95be27be7744fb5c8b467b.jpg" alt="wide image" />
          </div>
          <div class="content-center-verticale">
            <h3 class="card__title">Gagner en confiance à l'oral</h3>
         </div>
      </div>
      <div class="card__back">
         <h3 class="card__back__title">Gagner en confiance à l'oral</h3>
         <p class="card__back__text">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
         <a class="btn btn-primary">bouton 2<i class="fa fa-chevron-right"></i></a>
      </div>
   </div>
</div>
</fieldset>

<? get_footer(); ?>
