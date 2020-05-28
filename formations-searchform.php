<!-- SEARCH -->

<?php

$taxonomy = 'category';
$terms = get_terms($taxonomy, array( 'parent' => 0, 'exclude' => 1 ) );
$orgId = get_term_by("slug", "organisations", $taxonomy)->term_id;
$partId= get_term_by("slug", "particulier", $taxonomy)->term_id;
$subTermsO = get_terms($taxonomy, array( 'parent' => $orgId , 'exclude' => 1, 'hide_empty' => false ) );
$subTermsP = get_terms($taxonomy, array( 'parent' => $partId , 'exclude' => 1, 'hide_empty' => false ) );
$tags = get_tags(array('type' => 'formations', 'exclude' => 9));

?>

<div class="search p-5">
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="formations-searchform">
  <div class="container h-100 position-relative">
    <div class="search__header">
			  <div class="row align-items-center">
          <div class="col-sm-4">
            <h2 class="search__header__slogan text-left">Recherche avancée</h2>
          </div>
          <div class="col-sm-8 divider">
            <div class="block-round l-2"></div>
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
    <div class="p-5 card-search__icon">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/user-2.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="cat" id="cat">
      <option value="" disabled>Selectionner</option>
        <?php foreach ( $terms as $term ) { ?>
          <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
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
    <div class="p-5 card-search__icon">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/search_B.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="category__in" id="subCat" disabled="disabled" >
      <option value=""><?php _e( 'Selectionner', 'textdomain' ); ?></option>
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
    <div class="p-5 card-search__icon">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/screen.svg" alt="">
    </div>
<div class="card-search__dropdown">
  <div class="select-container">
    <select name="tag_id" id="tag">
            <option value=""><?php _e( 'Selectionner', 'textdomain' ); ?></option>
            <?php foreach ( $tags as $tag ) { ?>
              <option value="<?php echo $tag->term_id; ?>"><?php echo $tag->name; ?></option>
              <?php } ?>
    </select>
  </div>
</div>
  </fieldset>
</div>
    </div>
    <input type="hidden" name="post_type" value="formations" />
	  <button type="submit" id="searchsubmit" class="btn btn-primary">Appliquer<i class="icon arrow-right"></i></button>
    </div>
    <a class="btn btn-close close-search"><i class="icon close"></i></a>
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
    select.parent().removeClass('disabled');
    select.prop('disabled', false)
    generateListItems(select, select.siblings('.select-options'))
  }

  function toggleTagSelect() {
    var cat = $('#cat').val() == "particulier"

    $('#tag').prop('disabled', cat)
    if(cat) {
      $('#tag').parent().addClass('disabled')
    } else {
      $('#tag').parent().removeClass('disabled')
    }

  }

 $('#cat').on('change', function(e) {
  var value = e.target.value;
  if(value == "particulier") {
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