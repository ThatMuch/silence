<!-- SEARCH -->

<?php

$args = array(
 'parent' => 0
);

$taxonomy = 'category';
$terms = get_terms($taxonomy, array( 'parent' => 0, 'exclude' => 1 ) );
$selectedCat = 3;
$subTerms = get_terms($taxonomy, array( 'parent' => $selectedCat , 'exclude' => 1 ) );
?>
<div class="search p-5">
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="formations-searchform">
  <div class="container h-100">
    <div class="search__header">
			  <div class="row">
          <div class="col-sm-4">
            <h2 class="search__header__slogan text-left">Recherche avancée</h2>
          </div>
          <div class="col-sm-8 divider">
            <div class="block-round"></div>
          </div>
      </div>
      </div>
    <div class="search__content text-center">
    <p class="mb-5">Renseigner les cartes pour trouver votre bonheur</p>
    <div class="d-grid">
<div class="card-search">
  <fieldset>
    <legend>
      Je suis
    </legend>
    <div class="p-5">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/user-2.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="cat" id="cat">
            <option value="">Selectionner</option>
            <?php foreach ( $terms as $term ) { ?>
              <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
              <?php } ?>
    </select>
  </div>
</div>
  </fieldset>
</div>
<div class="card-search">
  <fieldset>
    <legend>
      Je cherche
    </legend>
    <div class="p-5">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/user-2.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="model" id="model">
            <option value=""><?php _e( 'Selectionner', 'textdomain' ); ?></option>
            <?php foreach ( $subTerms as $term ) { ?>
              <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
              <?php } ?>
    </select>
  </div>
</div>
  </fieldset>
</div>
<div class="card-search">
  <fieldset>
    <legend>
      Je désire
    </legend>
    <div class="p-5">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/user-2.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="model" id="model">
            <option value=""><?php _e( 'Selectionner', 'textdomain' ); ?></option>
            <option value=""><?php _e( 'Selectionner', 'textdomain' ); ?></option>
            <?php foreach ( $subTerms as $term ) { ?>
              <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
              <?php } ?>
    </select>
  </div>
</div>
  </fieldset>
</div>
    </div>
    <input type="hidden" name="post_type" value="formations" />
	<button type="submit" id="searchsubmit" class="btn btn-primary">Appliquer<i class="fas fa-arrow-right"></i></button>
    </div>
  </div>
</form>
</div>
<!-- SEARCH -->