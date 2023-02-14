<?php 

/* Ajoute des éléments au thème 
 */
function portfolio_support_theme(){
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');

    // Ajout le sous menu menu dans apparence
    add_theme_support('menus');
    register_nav_menu( 'header', 'Menu du header');
    register_nav_menu( 'footer', 'Menu du footer');

}
add_action('after_setup_theme', 'portfolio_support_theme');

/* Enqueue scripts and styles Bootstrap
 */
function portfolio_style_bootstrap() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js%27');
}
add_action('wp_enqueue_scripts', 'portfolio_style_bootstrap');


/**
 * Enqueue mon style css
 */
function portfolio_my_style() {
    wp_enqueue_style( 'portfolio', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_my_style',11);

function admin_bar(){

    if(is_user_logged_in()){
      add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
  }
  add_action('init', 'admin_bar' );
  ?>


  <!-- Enregistrement du CPT compétences -->
<?php
function enregistrer_cpt_competences() {
$labels = array(
'name' => 'Compétences',
'singular_name' => 'Compétence',
'menu_name' => 'Compétences',
'name_admin_bar' => 'Compétence',
'add_new' => 'Ajouter une nouvelle compétence',
'add_new_item' => 'Ajouter une nouvelle compétence',
'new_item' => 'Nouvelle compétence',
'edit_item' => 'Modifier la compétence',
'view_item' => 'Voir la compétence',
'all_items' => 'Toutes les compétences',
'search_items' => 'Rechercher des compétences',
'parent_item_colon' => 'Compétence parente:',
'not_found' => 'Aucune compétence trouvée.',
'not_found_in_trash' => 'Aucune compétence trouvée dans la corbeille.'
);

$args = array(
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'competences' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => 20,
	'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'menu_icon'          => 'dashicons-groups', 

);

register_post_type( 'competences', $args );

}

add_action( 'init', 'enregistrer_cpt_competences' );

function cpt_projects() {
    $labels = array(
        'name' => 'Projets',
        'singular_name' => 'Projet',
        'menu_name' => 'Projets',
        'all_items' => 'Tous les projets',
        'add_new' => 'Ajouter un projet',
        'add_new_item' => 'Ajouter un nouveau projet',
        'edit_item' => 'Modifier le projet',
        'new_item' => 'Nouveau projet',
        'view_item' => 'Voir le projet',
        'search_items' => 'Rechercher un projet',
        'not_found' => 'Aucun projet trouvé',
        'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projets'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );
    register_post_type('projects', $args);
}
add_action('init', 'cpt_projects');
