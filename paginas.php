<?php
/* Template Name: Paginas */
beans_remove_action( 'beans_post_title' );
beans_remove_action( 'beans_breadcrumb' );

add_action( 'beans_header_after_markup', 'page_header' );
function page_header(){
?>
<div class="header-pages">
	<div class="uk-width-1-1">
		<?php
		beans_post_title();
		beans_breadcrumb();
		?>
	</div>
</div>
<?php
}
beans_add_attribute( 'beans_breadcrumb_item', 'class', 'uk-icon-home' );

//'Source Sans Pro', sans-serif
//font:normal 14px / 20px "Helvetica Neue", Helvetica, Arial, sans-serif

// Always add this function at the bottom of template file.
beans_load_document();
?>
