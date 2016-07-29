<?php

// Include Beans. Do not remove the line below.
require_once( get_template_directory() . '/lib/init.php' );

/*
 * Remove this action and callback function if you do not whish to use LESS to style your site or overwrite UIkit variables.
 * If you are using LESS, make sure to enable development mode via the Admin->Appearance->Settings option. LESS will then be processed on the fly.
 */
/*add_action( 'beans_uikit_enqueue_scripts', 'beans_child_enqueue_uikit_assets' );

function beans_child_enqueue_uikit_assets() {

	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/style.less', 'less' );

}*/

// Remove this action and callback function if you are not adding CSS in the style.css file.
add_action( 'wp_enqueue_scripts', 'beans_child_enqueue_assets' );

function beans_child_enqueue_assets() {

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

}

// Enqueue the UIkit dynamic grid component.
add_action( 'beans_uikit_enqueue_scripts', 'beans_child_enqueue_grid_uikit_assets' );

function beans_child_enqueue_grid_uikit_assets() {

	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/assets/js/banks.js', 'js' );
	// Stop here if we are on a singular view.
	if ( is_singular() )
		return;

    beans_uikit_enqueue_components( array( 'grid' ), 'add-ons' );
		// Add the theme js as a uikit fragment (search)


}


// Display posts in a responsive dynamic grid.
add_action( 'wp', 'beans_child_posts_grid' );

function beans_child_posts_grid() {

	// Stop here if we are on a singular view.
	if ( is_singular() )
		return;

	// Add grid.
	beans_wrap_inner_markup( 'beans_content', 'beans_child_posts_grid', 'div', array(
		'data-uk-grid' => '{gutter: 20}'
	) );
	beans_wrap_markup( 'beans_post', 'beans_child_post_grid_column', 'div', array(
		'class' => 'uk-width-large-1-3 uk-width-medium-1-2'
	) );

	// Move the posts pagination after the new grid markup.
	beans_modify_action_hook( 'beans_posts_pagination', 'beans_child_posts_grid_after_markup' );

}

add_filter( 'the_content', 'beans_child_modify_post_content' );

function beans_child_modify_post_content( $content ) {

    // Return the excerpt() if it exists and if it is the home/front page.
    if ( has_excerpt() && ( is_home() || is_front_page() ) )
        return '<p>' . get_the_excerpt() . '</p><p>' . beans_post_more_link() . '</p>';

    return $content;

}

// Move the post image above the post title.
beans_modify_action_hook( 'beans_post_image', 'beans_post_title_before_markup' );
// Remove the post meta categories.
beans_remove_action( 'beans_post_meta_categories' );
// Remove the post meta.
beans_remove_action( 'beans_post_meta' );

// Add a button on post "See more"
beans_add_attribute( 'beans_post_more_link', 'class', 'uk-button' );

//Add content before header
add_action( 'beans_header_before_markup', 'apipa_pre_header' );

function apipa_pre_header(){
	?>
	<div class="uk-grid pre-header">
		<div class="uk-width-3-10">
			<?php beans_site_branding(); ?>
		</div>
		<div class="uk-width-7-10 uk-hidden-small">
			<div class="uk-grid">
				<div class="uk-width-1-3">
					<div class="icon"><i class="uk-icon-map-marker uk-icon-large"></i></div>
					<div class="text"><p>Rua Arêa Leão, Nº 1064, Nossa Senhora das Graças, Teresina - PI</p></div>
				</div>
				<div class="uk-width-1-3 dotted">
					<p class="p-icon"><i class="uk-icon-phone uk-icon-large"></i></p>
					<p>Teresina - PI: (86) 3221 7100 <br> Uruçúi - PI: (89) 3544 3089</p>
				</div>
				<div class="uk-width-1-3 dotted links">
					<a href="#"><i class="uk-icon-twitter uk-icon-medium link"></i></a>
					<a href="#"><i class="uk-icon-facebook uk-icon-medium link"></i></a>
					<a href="#"><i class="uk-icon-google-plus uk-icon-medium link"></i></a>
				</div>
			</div>
		</div>
	</div>

	<?php
}

beans_remove_action( 'beans_site_branding' );
beans_replace_attribute( 'beans_primary_menu', 'class', 'uk-float-right', 'uk-clearfix' );

//search form
beans_replace_attribute( 'beans_search_form', 'class', 'uk-form-icon uk-form-icon-flip', 'uk-display-inline-block' );
beans_remove_markup( 'beans_search_form_input_icon' );

beans_add_smart_action( 'beans_primary_menu_append_markup', 'banks_primary_menu_search' );
function banks_primary_menu_search() {

	echo beans_open_markup( 'banks_menu_primary_search', 'div', array(
		'class' => 'tm-search uk-visible-large uk-navbar-content',
		'style' => 'display: none;'
	) );

		get_search_form();

	echo beans_close_markup( 'banks_menu_primary_search', 'div' );

	echo beans_open_markup( 'banks_menu_primary_search_toggle', 'div', array(
		'class' => 'tm-search-toggle uk-visible-large uk-navbar-content uk-display-inline-block uk-contrast'
	) );

		echo beans_open_markup( 'banks_menu_primary_search_icon', 'i', array( 'class' => 'uk-icon-search' ) );
		echo beans_close_markup( 'banks_menu_primary_search_icon', 'i' );

	echo beans_close_markup( 'banks_menu_primary_search_toggle', 'div' );

}
beans_add_attribute( 'beans_search_form', 'class', 'search' );
