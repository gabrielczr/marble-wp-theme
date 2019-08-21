<?php

function marble_setup_theme()
{


  // Add default posts and comments RSS feed links to head.
  add_theme_support('automatic-feed-links');

  /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
  add_theme_support('title-tag');

  /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
  add_theme_support('post-thumbnails');

  add_image_size('marble-single-post-thumb', 1170, 300, true);

  add_image_size('marble-resized-400', 400, 9999, false);

  add_image_size('marble-resized-800', 1170, 500, true);

  add_image_size('marble-resized-380', 380, 270, true);

  register_nav_menu('primary', 'Primary Menu Menu');
}

add_action('after_setup_theme', 'marble_setup_theme');


//* register scripts and styles to the theme

function marble_enqueue_scripts()
{
  wp_enqueue_style(
    'marble-normalize',
    get_template_directory_uri() . '/css/normalize.css'
  );

  wp_enqueue_style(
    'marble-styles',
    get_template_directory_uri() . '/css/styles.css'
  );
}
add_action('wp_enqueue_scripts', 'marble_enqueue_scripts');



function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'extra-menu' => __('Extra Menu')
    )
  );
}
add_action('init', 'register_my_menus');


function marble_widgets_init()
{
  register_sidebar(array(
    'name' => __('Main Sidebar'),
    'id' => 'main-sidebar',
    'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name' => __('Footer Sidebar'),
    'id' => 'footer-sidebar',
    'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
    'before_widget' => '<div id="%1$s" class="col widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
  ));
}

add_action('widgets_init', 'marble_widgets_init');


/* project custom post types declaration

*/

// Register Custom Post Type
function marble_project_post_type()
{

  $labels = array(
    'name'                  => 'Projects',
    'singular_name'         => 'Project',
    'menu_name'             => 'Projects',
    'name_admin_bar'        => 'Projects',
    'archives'              => 'Project Archives',
    'attributes'            => 'Project Attributes',
    'parent_item_colon'     => 'Parent Project:',
    'all_items'             => 'All projects',
    'add_new_item'          => 'Add New Project',
    'add_new'               => 'Add New',
    'new_item'              => 'New Item',
    'edit_item'             => 'Edit Item',
    'update_item'           => 'Update Item',
    'view_item'             => 'View Item',
    'view_items'            => 'View Items',
    'search_items'          => 'Search Item',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into item',
    'uploaded_to_this_item' => 'Uploaded to this project',
    'items_list'            => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list'     => 'Filter items list',
  );
  $args = array(
    'label'                 => 'Project',
    'description'           => 'Project post type',
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
    'taxonomies'            => array('type', ' color'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-format-gallery',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'               => true,
  );
  register_post_type('project', $args);
}
add_action('init', 'marble_project_post_type', 0);

//register the new taxonomies for the above function

// Register Custom Taxonomy
function marble_type_custom_taxonomy()
{

  $labels = array(
    'name'                       => 'Types',
    'singular_name'              => 'Type',
    'menu_name'                  => 'Type',
    'all_items'                  => 'All types',
    'parent_item'                => 'Parent type',
    'parent_item_colon'          => 'Parent type:',
    'new_item_name'              => 'New type',
    'add_new_item'               => 'Add New Type',
    'edit_item'                  => 'Edit type',
    'update_item'                => 'Update type',
    'view_item'                  => 'View type',
    'separate_items_with_commas' => 'Separate items with commas',
    'add_or_remove_items'        => 'Add or remove items',
    'choose_from_most_used'      => 'Choose from the most used',
    'popular_items'              => 'Popular Items',
    'search_items'               => 'Search types',
    'not_found'                  => 'Not Found',
    'no_terms'                   => 'No items',
    'items_list'                 => 'Types list',
    'items_list_navigation'      => 'Types list navigation',
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => true,
  );
  register_taxonomy('type', array('project'), $args);
}
add_action('init', 'marble_type_custom_taxonomy', 0);


// Register Custom Taxonomy
function marble_color_custom_taxonomy()
{

  $labels = array(
    'name'                       => 'Colors',
    'singular_name'              => 'Color',
    'menu_name'                  => 'Color',
    'all_items'                  => 'All colors',
    'parent_item'                => 'Parent color',
    'parent_item_colon'          => 'Parent color:',
    'new_item_name'              => 'New color',
    'add_new_item'               => 'Add New Color',
    'edit_item'                  => 'Edit color',
    'update_item'                => 'Update color',
    'view_item'                  => 'View color',
    'separate_items_with_commas' => 'Separate items with commas',
    'add_or_remove_items'        => 'Add or remove items',
    'choose_from_most_used'      => 'Choose from the most used',
    'popular_items'              => 'Popular Items',
    'search_items'               => 'Search colors',
    'not_found'                  => 'Not Found',
    'no_terms'                   => 'No items',
    'items_list'                 => 'Color list',
    'items_list_navigation'      => 'Color list navigation',
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => true,
  );
  register_taxonomy('color', array('project'), $args);
}
add_action('init', 'marble_color_custom_taxonomy', 0);
