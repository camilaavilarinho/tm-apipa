<?php
/* Template Name: Inicio */

add_action( 'beans_main_prepend_markup', 'post_slider' );

function post_slider(){
	?>
	<div class="uk-grid section-slider">
		<div class="uk-width-6-10">
			<?php wdp_slider(1); ?>
		</div>
		<div class="uk-width-4-10 sub-pages">
			<div class="uk-grid line-1">
				<div class="uk-width-1-3">
					<a href="#" class="link-sub">
						<div class="square">
							<i class="uk-icon-file-text-o uk-icon-large"></i>
							<p>Relatórios</p>
						</div>
					</a>
				</div>
				<div class="uk-width-1-3">
					<a href="#" class="link-sub">
						<div class="square">
							<i class="uk-icon-briefcase uk-icon-large"></i>
							<p>Trabalhos</p>
						</div>
					</a>
				</div>
				<div class="uk-width-1-3">
						<a href="#" class="link-sub">
							<div class="square">
								<i class="uk-icon-calendar uk-icon-large"></i>
								<p>Eventos</p>
							</div>
						</a>
				</div>
			</div>
			<div class="uk-grid line-1">
				<div class="uk-width-1-3">
					<a href="#" class="link-sub">
						<div class="square">
							<i class="uk-icon-leaf uk-icon-large"></i>
							<p>Safras</p>
						</div>
					</a>
				</div>
				<div class="uk-width-1-3">
					<a href="#" class="link-sub">
						<div class="square">
							<i class="uk-icon-book uk-icon-large"></i>
							<p>Treinamentos</p>
						</div>
					</a>
				</div>
				<div class="uk-width-1-3">
					<a href="#" class="link-sub">
						<div class="square">
							<i class="uk-icon-line-chart uk-icon-large"></i>
							<p>Metas</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>


	<?php

}
/*add_action( 'beans_header_after_markup', 'beans_child_view_add_slider' );
function beans_child_view_add_slider() {

	?>
	<div data-uk-slider>
		<div class="uk-slider-container">
			<h1>Teste</h1>
		</div>
	</div>

	<?php

}*/

beans_remove_action( 'beans_post_title' );




// Always add this function at the bottom of template file.
beans_load_document();
?>
