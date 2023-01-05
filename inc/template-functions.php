<?php


/* CONFIGURATION PAGE */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'Hell"s Theme Options',
		'menu_title'    => 'Hell"s Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

// impedir que o Contact Form 7 crie tags p automaticamente
add_filter('wpcf7_autop_or_not', '__return_false');


/* CUSTOM POST TYPES */

// Molhos
require get_template_directory() . '/inc/cpts/cpt-molhos.php';

// Hamburguers
require get_template_directory() . '/inc/cpts/cpt-hamburguers.php';



// Função que cria nomes de id para as seções levando em conta o title e a contagem delas
function cria_section_id( $count, $titulo='' ) {
	if( !empty( $titulo) ) {
		echo sanitize_title( $titulo );
	} else {
		echo $count;
	}
}

function escreve_botao( $botao ) {
	?>
	<div class="is-layout-flex wp-block-buttons">
		<div class="wp-block-button">
			<a href="<?php echo $botao[ 'texto' ]; ?>" class="wp-block-button__link wp-element-button"><?php echo $botao[ 'texto' ]; ?></a>
		</div>
	</div>
	<?php
}
