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
add_action( 'beans_main_prepend_markup', 'events' );
function events() {
	?>
	<div class="events">
		<h2>EVENTOS</h2>
		<hr>
		<?php echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>
	</div>

	<?php
}

add_action( 'beans_main_prepend_markup', 'apipa' );
function apipa() {
	?>
	<div class="apipa">
		<h2>CONHEÇA A APIPA</h2>
		<hr>
		<p class="uk-clearfix">
			<img class="uk-align-medium-left" src="wp-content/themes/tm-apipa/algodao.jpg" alt="" width="500" height="300">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<?php
}

add_action( 'beans_main_prepend_markup', 'form' );
function form() {
	?>
	<div class="form">
		<h2>FALE CONOSCO</h2>
		<hr>
		<p>Você pode ligar, mandar um email ou preencher o formulário abaixo e entrar em contato direto conosco</p>
		<p class="tel">Teresina - PI: (86) 3221 7100</p>
		<p class="tel">Uruçuí - PI: (89) 3544 3089</p>
		<!--<?php echo do_shortcode( '[contact-form-7 id="60" title="Contato"]' ); ?> Fapepi pc-->
		<?php echo do_shortcode( '[contact-form-7 id="58" title="Contato"]' ); ?> 

	</div>

	<?php
}


beans_remove_action( 'beans_post_title' );



// Always add this function at the bottom of template file.
beans_load_document();
?>
