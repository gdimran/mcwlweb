<?php

if ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}
require_once get_template_directory().'/CMB2/cmb2-conditionals/cmb2-conditionals.php';
require_once get_template_directory().'/CMB2/cmb2-conditionals/mcwlConditional-functions.php';




	add_theme_support( 'title-tag' );
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	load_theme_textdomain('mcwl',get_template_directory_uri().'/lang');


	register_nav_menus(array(
		'main-menu' => __('Main Menu','mcwl'),
		'footer-menu' => __('Footer Menu','mcwl'),

));

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
  $classes[] = 'current ';
  }
  return $classes;
}
// function special_nav_class_two ($classes, $item) {
    // if (in_array('menu-item-has-children', $classes) ){
    // $classes[] = 'sub-menu ';
    // }
   // return $classes;
// }
// add_filter('nav_menu_css_class' , 'special_nav_class_two' , 10 , 2);


function mcwl_css_and_js(){

	wp_enqueue_style('slicknav',get_template_directory_uri().'/css/slicknav.min.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('style',get_template_directory_uri().'/style.css');
	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style('reset','https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css');
    wp_enqueue_style('slick-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css');
    wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css');
		// wp_enqueue_style('zoom-image', get_template_directory_uri().'/css/jquery.jqZoom.css');

    //add for product page
    wp_enqueue_style('product_style',get_template_directory_uri().'/lib/css/product_style.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/lib/plugins/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('ps-icon',get_template_directory_uri().'/lib/plugins/ps-icon/style.css');
//    wp_enqueue_style('owl-carousel',get_template_directory_uri().'/lib/plugins/owl-carousel/assets/owl.carousel.css');
//    wp_enqueue_style('jquery-bar-rating',get_template_directory_uri().'/lib/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css');
//    wp_enqueue_style('bootstrap-select',get_template_directory_uri().'/lib/plugins/bootstrap-select/dist/css/bootstrap-select.min.css');
//    wp_enqueue_style('Magnific-Popup',get_template_directory_uri().'/lib/plugins/Magnific-Popup/dist/magnific-popup.css');
//    wp_enqueue_style('jquery-ui',get_template_directory_uri().'/lib/plugins/jquery-ui/jquery-ui.min.css');



//	wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js');
//	wp_enqueue_script('jfslicknav',get_template_directory_uri().'/js/jquery-for-slicknav.min.js');
//    wp_enqueue_script('jfbstrap',get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('poppers',get_template_directory_uri().'/js/popper.min.js');
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_script('slicknav',get_template_directory_uri().'/js/jquery.slicknav.min.js');
	wp_enqueue_script('modernizr',get_template_directory_uri().'/js/modernizr.min.js');
	wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js');
//    wp_enqueue_script('product-slider',get_template_directory_uri().'/js/product-slider.js');
//    wp_enqueue_script('zoom-image',get_template_directory_uri().'/js/zoom-image.js');
    wp_enqueue_script('zoom-slider',get_template_directory_uri().'/js/zoom-slider.js');
    wp_enqueue_script('slick-carousel','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js');
		// wp_enqueue_script('zoom-slider',get_template_directory_uri().'/js/jquery.jqZoom.js');


    //script for product page
//    wp_enqueue_script('jquery-bar-rating',get_template_directory_uri().'/lib/plugins/jquery-bar-rating/dist/jquery.barrating.min.js');
//    wp_enqueue_script('owl-carousel',get_template_directory_uri().'/lib/plugins/owl-carousel/owl.carousel.min.js');
////    wp_enqueue_script('gmap3',get_template_directory_uri().'/lib/plugins/gmap3.min.js');
//    wp_enqueue_script('imagesloaded',get_template_directory_uri().'/lib/plugins/imagesloaded.pkgd.js');
//    wp_enqueue_script('isotope',get_template_directory_uri().'/lib/plugins/isotope.pkgd.min.js');
//    wp_enqueue_script('bootstrap-select',get_template_directory_uri().'/lib/plugins/bootstrap-select/dist/js/bootstrap-select.min.js');
//    wp_enqueue_script('matchHeight',get_template_directory_uri().'/lib/plugins/jquery.matchHeight-min.js');
//    wp_enqueue_script('elevatezoom',get_template_directory_uri().'/lib/plugins/elevatezoom/jquery.elevatezoom.js');
//    wp_enqueue_script('jquery.magnific-popup',get_template_directory_uri().'/lib/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js');
   wp_enqueue_script('jquery-ui',get_template_directory_uri().'/lib/plugins/jquery-ui/jquery-ui.min.js');
    wp_enqueue_script( 'cmb2-conditionals', get_template_directory_uri() . '/CMB2/js/cmb2-conditionals.js');
		wp_enqueue_script( 'lightslider', 'https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js');
//    wp_enqueue_script('main',get_template_directory_uri().'/lib/js/main.js');




	}
add_action('wp_enqueue_scripts','mcwl_css_and_js');

/**
 * Hides the custom post template for pages on WordPress 4.6 and older
 *
 * @param array $post_templates Array of page templates. Keys are filenames, values are translated names.
 * @return array Filtered array of page templates.
 */
function makewp_exclude_page_templates( $post_templates ) {
    if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
        unset( $post_templates['templates/full-width-post-template.php'] );
    }

    return $post_templates;
}

add_filter( 'theme_page_templates', 'makewp_exclude_page_templates' );



/** * Install latest jQuery version 3.4.1. */
if (!is_admin()) {
	wp_deregister_script('jquery');
//	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"), false);
    wp_register_script('jquery', ("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"), false);

	wp_enqueue_script('jquery');
}

/*---------------custom post type product---------------*/
add_action('init','mcwl_products');
function mcwl_products(){
	register_post_type('mcwl_product_items',array(
		'labels'						=>array(
		'name'							=>__('MCWL Products'),
		'singular_name'			=>__('MCWL Product'),
		'menu_name'					=>__('MCWL Product Gallery'),
		'name_admin_bar'		=>__('Add MCWL Product'),
		'all_items'					=>__('All MCWL Products'),
		'add_new'						=>__('Add MCWL Product'),
		'add_new_item'			=>__('Add MCWL Product'),
		'edit_item'					=>__('Edit Product'),
		'new_item'					=>__('New Product'),
		'view_item'					=>__('View Product'),
		'search_items'			=>__('search Product')

	),
	'public'						=>true,
	'has_archive'				=>true,
	'rewrite'						=> array('slug'=>'single-product-item'),
	'menu_position'			=>8,
	'menu_icon'					=> 'dashicons-products',
	'supports'					=> array('title','thumbnail','editor','page-attributes'),
    'taxonomies'          => array( 'category' ),
)
);
}


/*---------------------cmb2 metabox for product------------------*/
add_action('cmb2_init', 'mcwl_product_metabox');
function mcwl_product_metabox(){
//	$prefix = '_sargam_conditionals_product_';

	$cmb_product = new_cmb2_box( array(
		'id'            => 'product-option',
		'title'         => 'Products Options',
		'object_types'  => array( 'mcwl_product_items' ), // Post type.
	) );
    $cmb_product->add_field( array(
		'name'       => 'Product Size',
		'desc'       => 'Insert the Product size.',
		'id'         => 'product_size',
		'type'       => 'text',
	) );
     $cmb_product->add_field( array(
		'name'       => 'Product Required Per Sft',
		'desc'       => 'Insert the Product Required Per Sft.',
		'id'         => 'product_required_sft',
		'type'       => 'text',
	) );
    $cmb_product->add_field( array(
		'name'       => 'Product Overview',
		'desc'       => 'Insert the Product Short overview here.',
		'id'         => 'product_overview',
		'type'       => 'textarea_small',
	) );
    $cmb_product->add_field( array(
		'name'       => 'Short note about price and calculation',
		'desc'       => 'Insert the short note here here.',
		'id'         => 'product_short_note',
		'type'       => 'textarea_small',
	) );
	$cmb_product->add_field( array(
	    'name'    => 'Product Image',
	    'desc'    => 'Upload an image or enter an URL. Or keep empty to upload nothing.',
	    'id'      => 'product_images',
	    'type'    => 'file_list',
	    // Optional:
	    'options' => array(
	        'url' => false, // Hide the text input for the url
	    ),
	    'text'    => array(
        'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
        'remove_image_text' => 'Replacement', // default: "Remove Image"
        'file_text' => 'Replacement', // default: "File:"
        'file_download_text' => 'Replacement', // default: "Download"
        'remove_text' => 'Replacement', // default: "Remove"
    ),
	    // query_args are passed to wp.media's library query.
	    'query_args' => array(
	        //'type' => 'application/pdf', // Make library only display PDFs.
	        // Or only allow gif, jpg, or png images
	        'type' => array(
	            'image/gif',
	            'image/jpeg',
	            'image/png',
	        ),
	    ),
	    'preview_size' => 'small', // Image size to use when previewing in the admin.
	) );

    $cmb_product->add_field( array(
		'name'    => esc_html__( 'Product Features', 'cmb2' ),
		'desc'    => esc_html__( 'Please insert the product features (optional)', 'cmb2' ),
		'id'      => 'mcwl_feature_wysiwyg',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 10,
		),
	) );

}


add_action( 'cmb2_admin_init', 'mcwl_register_repeatable_group_field_metabox' );





// function so_extend_frequent_bought_shortcode() {
//       global $post;
//     $id = $post->get_id();
//
//     return do_shortcode( '[ibenic_post id="' . $id . '"]');
// }
// add_shortcode( 'modal_new_shortcode', 'so_extend_frequent_bought_shortcode' );




/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
function cmb2_output_file_list_big( $file_list_meta_key, $img_size = 'medium' ) {

	// Get the list of files
	$files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

	//echo '<div class="file-list-wrap">';
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {
		echo '<div class="slide-big-img  zoom-box">';
		echo wp_get_attachment_image( $attachment_id, $img_size );
		echo '</div>';
	}
	//echo '</div>';
}
function cmb2_output_file_list_small( $file_list_meta_key, $img_size = 'small' ) {

	// Get the list of files
	$files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

	//echo '<div class="file-list-wrap">';
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {
		echo '<div class="slide-small-img">';
		echo wp_get_attachment_image( $attachment_id, $img_size );
		echo '</div>';
	}
	//echo '</div>';
}
function cmb2_output_file_list_for_modal( $file_list_meta_key, $img_size = 'small' ) {

	// Get the list of files
	$files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

	//echo '<div class="file-list-wrap">';
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {

		echo '<li data-thumb="'; echo wp_get_attachment_image( $attachment_id, $img_size ); //echo '">';
		echo wp_get_attachment_image( $attachment_id, $img_size );
		echo '</li>';
	}
	//echo '</div>';
}

/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function mcwl_register_repeatable_group_field_metabox() {

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => 'mcwl_group_metabox',
		'title'        => esc_html__( 'Product Category and Price', 'cmb2' ),
		'object_types' => array( 'mcwl_product_items' ),
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => 'mcwl_group_product_Cat_price',
		'type'        => 'group',
//		'description' => esc_html__( 'Product', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Category {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Category Name', 'cmb2' ),
		'id'         => 'product_cat_name',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Product price', 'cmb2' ),
		'description' => esc_html__( 'Product price based on category', 'cmb2' ),
		'id'          => 'product_price',
		'type'        => 'text',
	) );

}










/*---------------metabox end---------------*/



@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function main_slider(){
	register_sidebar(array(
		'name' => 'Main Slider',
		'id' => 'main-slider',
		'before_title' => '',
		'before_widget' => '',
		'after_widget' => '',
		'after_title' => '',
		'description' => 'You can add/remove slider here'
	));
}
add_action('widgets_init','main_slider');

// class Child_Wrap extends Walker_Nav_Menu
// {
    // function start_lvl(&$output, $depth = 0, $args = array())
    // {
        // $indent = str_repeat("\t", $depth);
        // $output .= "\n<div class='mcwl-sub-menu'>$indent<ul class=\"drop-down\">\n";
    // }

    // function end_lvl(&$output, $depth = 0, $args = array())
    // {
        // $indent = str_repeat("\t", $depth);
        // $output .= "$indent</ul></div>\n";
    // }
// }

//This function is responsible for adding "my-parent-item" class to parent menu item's


function add_menu_parent_class( $items ) {
$parents = array();
foreach ( $items as $item ) {
    //Check if the item is a parent item
    if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
        $parents[] = $item->menu_item_parent;
    }
}

foreach ( $items as $item ) {



	    if ( in_array( $item->ID, $parents ) ) {
        //Add "menu-parent-item" class to parents

				$item->classes[] = 'mcwl-sub-menu';

    }


}

return $items;
}

//add_menu_parent_class to menu
add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
