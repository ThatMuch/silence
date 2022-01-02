<?php function cptui_register_my_cpts() {
/**
 * Post Type: Equipe.
 */

$labels = array(
    "name" => __( "Equipe", "" ),
    "singular_name" => __( "membre", "" ),
    "menu_name" => __( "Equipe", "" ),
    "all_items" => __( "Tous les membres", "" ),
    "add_new" => __( "Ajouter un membre", "" ),
    "add_new_item" => __( "Ajouter un nouveau membre", "" ),
    "edit_item" => __( "Modifier un membre", "" ),
    "new_item" => __( "Nouveau membre", "" ),
    "view_item" => __( "Voir le membre", "" ),
    "view_items" => __( "Voir les membres", "" ),
    "search_items" => __( "Chercher un membre", "" ),
    "not_found" => __( "Aucun membre trouvé", "" ),
    "not_found_in_trash" => __( "Aucun membre dans la corbeille", "" ),
    "featured_image" => __( "Image", "" ),
    "remove_featured_image" => __( "Retirer la photo du membre", "" ),
    "use_featured_image" => __( "Utiliser la photo du membre", "" ),
    "insert_into_item" => __( "Ajouter dans le membre", "" ),
);

$args = array(
    "label" => __( "Equipe", "" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "team", "with_front" => true ),
    "query_var" => true,
    "menu_icon" => "dashicons-groups",
    "supports" => array( "title", "thumbnail" ),
	"taxonomies" => [ "roles"],
);

register_post_type( "team", $args );

/**
 * Post Type: Témoignages.
 */

$labels = array(
    "name" => __( "Témoignages", "" ),
    "singular_name" => __( "Témoignage", "" ),
    "menu_name" => __( "Témoignages", "" ),
    "all_items" => __( "Tous les témoignages", "" ),
    "add_new" => __( "Ajouter un témoignage", "" ),
    "add_new_item" => __( "Ajouter un nouveau témoignage", "" ),
    "edit_item" => __( "Modifier le témoignage", "" ),
    "new_item" => __( "Nouveau témoignage", "" ),
    "view_item" => __( "Voir le témoignage", "" ),
    "view_items" => __( "Voir les témoignages", "" ),
    "search_items" => __( "Chercher un témoignage", "" ),
    "not_found" => __( "Rien trouvé", "" ),
    "not_found_in_trash" => __( "Rien n'a été trouvé dans la corbeille", "" ),
);

$args = array(
    "label" => __( "Témoignages", "" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "rest_base" => "",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "testimonials", "with_front" => true ),
    "query_var" => true,
    "menu_icon" => "dashicons-format-quote",
    "supports" => array( "title", "thumbnail" ),
);

register_post_type( "testimonials", $args );


	/**
	 * Post Type: Formations.
	 */

	$labels = [
		"name" => __( "Formations", "silence" ),
		"singular_name" => __( "Formation", "silence" ),
		"menu_name" => __( "Nos formations", "silence" ),
		"all_items" => __( "Toutes les formations", "silence" ),
		"add_new" => __( "Ajouter une formation", "silence" ),
		"add_new_item" => __( "Ajouter une formation", "silence" ),
		"edit_item" => __( "Modifier la formation", "silence" ),
		"new_item" => __( "Nouvelle formation", "silence" ),
		"view_item" => __( "Voir la formation", "silence" ),
		"view_items" => __( "Voir les formations", "silence" ),
		"search_items" => __( "Chercher une formation", "silence" ),
		"not_found" => __( "Aucune formation trouvée", "silence" ),
		"not_found_in_trash" => __( "Aucune formation trouvée dans la corbeille", "silence" ),
		"featured_image" => __( "Couverture", "silence" ),
		"set_featured_image" => __( "Définir la couverture", "silence" ),
		"remove_featured_image" => __( "Retirer la couverture", "silence" ),
		"use_featured_image" => __( "Utiliser la couverture", "silence" ),
		"filter_items_list" => __( "Filtrer les formations", "silence" ),
		"items_list" => __( "Liste des formations", "silence" ),
		"name_admin_bar" => __( "Nouvelle formation", "silence" ),
		"item_published" => __( "Formation publiée", "silence" ),
		"item_published_privately" => __( "Formation publiée en privée", "silence" ),
		"item_reverted_to_draft" => __( "Formation repassé en brouillon", "silence" ),
		"item_updated" => __( "Formation mise à jour", "silence" ),
	];

	$args = [
		"label" => __( "Formations", "silence" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "formations", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "thumbnail"],
		"taxonomies" => [ "category"],
	];

	register_post_type( "formations", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

?>


