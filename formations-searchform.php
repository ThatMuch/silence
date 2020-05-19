<!-- SEARCH -->

<?php

$args = array(
 'parent' => 0
);

$taxonomy = 'category';
$terms = get_terms($taxonomy, array( 'parent' => 0, 'exclude' => 1 ) );
$selectedCat = 3;
$subTermsO = get_terms($taxonomy, array( 'parent' => 2 , 'exclude' => 1, 'hide_empty' => false ) );
$subTermsP = get_terms($taxonomy, array( 'parent' => 3 , 'exclude' => 1, 'hide_empty' => false ) );
?>

<div class="search p-5">
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="formations-searchform">
  <div class="container h-100 position-relative">
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
      <option value="0" disabled>Selectionner</option>
        <?php foreach ( $terms as $term ) { ?>
          <option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
        <?php } ?>
    </select>
  </div>
</div>
  </fieldset>
</div>
<div id="card-sub" class="card-search">
  <fieldset>
    <legend>
     Je cherche
    </legend>
    <div class="p-5">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/user-2.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="category__in" id="subCat" >
      <option value="0"><?php _e( 'Selectionner', 'textdomain' ); ?></option>
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
    <select name="tag" id="tag">
            <option value="0"><?php _e( 'Selectionner', 'textdomain' ); ?></option>
            <?php foreach ( $subTermsO as $term ) { ?>
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
    <button class="btn btn-close close-search"><i class="fas fa-times"></i></button>
  </div>
</form>
</div>
<!-- SEARCH -->

<script type="text/javascript">
  var subTermsO = <?php echo json_encode($subTermsO); ?>;
  var subTermsP = <?php echo json_encode($subTermsP); ?>;

  function updateOptions(select, optionsArray) {
    select.children('option').slice(1).remove()
    // Ajouter les options
    optionsArray.forEach(({term_id,name}) => {
      select.append(
        $('<option>', {
          'value': term_id,
          'text': name
        })
      );
    })

    generateListItems(select, select.siblings('.select-options'))
  }

  function toggleTagSelect() {
    var tag = $('#cat').val() == 3

    $('#tag').prop('disabled', tag)
    if(tag) {
      $('#tag').parent().addClass('disabled')
    } else {
      $('#tag').parent().removeClass('disabled')
    }

  }

 $('#cat').on('change', function(e) {
  var value = e.target.value;
  var select = $('#subCat');
  var label = $('#subCat+.select-styled');
  var legend = $('#card-sub legend');

  //select.val("0")
  if(value == 3) {
    toggleTagSelect()
    legend.html('Je désire')
    // Réinitialiser label du select
    label.text("Selectionner")
    // Retirer les options précedentes
    updateOptions(select, subTermsP)

  } else {
    toggleTagSelect()
    legend.html('Je cherche')
    // Réinitialiser label du select
    label.text("Selectionner")
    // Retirer les options précedentes
    updateOptions(select, subTermsO)
  }
 });
</script>