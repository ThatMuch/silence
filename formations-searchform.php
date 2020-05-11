<!-- SEARCH -->
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
    <p>Renseigner les cartes pour trouver votre bonheur</p>
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
    <select name="model" id="model">
            <option value=""><?php _e( 'Selectionner', 'textdomain' ); ?></option>
            <option value="organisation"><?php _e( 'Une organisation', 'textdomain' ); ?></option>
            <option value="particulier"><?php _e( 'Un particulier', 'textdomain' ); ?></option>
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
            <option value="organisation"><?php _e( 'Une organisation', 'textdomain' ); ?></option>
            <option value="particulier"><?php _e( 'Un particulier', 'textdomain' ); ?></option>
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
            <option value="organisation"><?php _e( 'Une organisation', 'textdomain' ); ?></option>
            <option value="particulier"><?php _e( 'Un particulier', 'textdomain' ); ?></option>
    </select>
  </div>
</div>
  </fieldset>
</div>
    </div>
	<input type="submit" id="searchsubmit" class="btn btn-primary" value="Appliquer" />
    </div>
  </div>
</form>
</div>
<!-- SEARCH -->