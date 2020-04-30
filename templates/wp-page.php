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

  <? if (has_post_thumbnail()) : ?>
    <section>
      <div class="element teaser">
        <? the_post_thumbnail('large', ['class' => 'modernizr-of']); ?>
      </div>
    </section>
  <? endif?>

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

<div class="card_training card">
   <div class="card_inner">
      <div class="card_front">
         <div class="img_inner"><img src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/5b95be27be7744fb5c8b467b.jpg" alt="wide image" /></div>
         <span class="card_type_training title-uppercase">coaching indiv. organisation</span>
         <div class="content-center-verticale">
            <h3 class="title-uppercase title-card">Gagner en confiance à l'oral</h3>
         </div>
         <div class="card_block_list">
            <ul>
               <li><img src="http://silence.local/wp-content/uploads/2020/04/icon-ordi.png" /><span class="title-uppercase">12 x 2H</span></li>
               <li><img src="http://silence.local/wp-content/uploads/2020/04/icon-ordi.png" /><span class="title-uppercase">12 x 2H</span></li>
               <li><img src="http://silence.local/wp-content/uploads/2020/04/icon-ordi.png" /><span class="title-uppercase">Paris</span></li>
               <li><img src="http://silence.local/wp-content/uploads/2020/04/icon-ordi.png" /><span class="title-uppercase">01 Pers</span></li>
            </ul>
         </div>
      </div>
      <div class="card_back border-raduis ">
         <h3 class="title-card-back">Gagner en confiance à l'oral</h3>
         <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
         <a class="btn btn-primary">bouton<i class="fa fa-chevron-right"></i></a> <a class="btn btn-outline-primary">bouton 2<i class="fa fa-chevron-right"></i></a>
      </div>
   </div>
</div>
<div class="card_post card">
   <div class="card_inner">
      <div class="card_front border-raduis ">
         <div class="img_inner"><img src="https://images.lanouvellerepublique.fr/image/upload/t_1020w/f_auto/5b95be27be7744fb5c8b467b.jpg" alt="wide image" /></div>
         <div class="content-center-verticale">
            <h3 class="title-uppercase title-card">Gagner en confiance à l'oral</h3>
         </div>
      </div>
      <div class="card_back border-raduis ">
         <h3 class="title-card-back">Gagner en confiance à l'oral</h3>
         <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
         <a class="btn btn-primary">bouton 2<i class="fa fa-chevron-right"></i></a>
      </div>
   </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<fieldset>
   <h5 class="title-uppercase">articles &amp; études de cas</h5>
   <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
</fieldset>

<? get_footer(); ?>
