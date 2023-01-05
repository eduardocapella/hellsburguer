<?php
function exibe_banner_principal( $count ) {
	$cor_de_fundo = get_sub_field( 'cor_de_fundo' );
	$cor_de_fundo_value = $cor_de_fundo[ 'value' ];

	$titulo = get_sub_field( 'titulo' );
	$imagem = get_sub_field( 'imagem' );
	if ( !empty( get_sub_field( 'pre_titulo' ) ) ) {
		$pre_titulo = get_sub_field( 'pre_titulo' );
	}

	// print_r( '<pre>' );
	// print_r( $cor_de_fundo );
	// print_r( '</pre>' );

	?>

	<section id="section-<?php cria_section_id( $count, $titulo ); ?>" class=" section section_banner_principal">
		<div class="wrapper">
			<div class="texto-wrapper <?php echo 'bg-' . $cor_de_fundo_value; ?>">
				<div class="texto">
					<?php if( !empty( $pre_titulo ) ) { ?>
						<h3><?php echo $pre_titulo; ?></h3>
					<?php } ?>
					<h2><?php echo $titulo; ?></h2>
					<!-- /.texto -->
				</div>
				<!-- /.texto -->
			</div>
			<!-- /.texto -->
			<div class="imagem <?php echo 'bg-' . $cor_de_fundo_value; ?>">
				<figure>
					<img src="<?php echo $imagem[ 'url' ] ?>" alt="<?php echo $imagem[ 'alt' ] ?>">
				</figure>
			</div>
			<!-- /.imagem -->
		</div>
		<!-- /.container -->
	</section>

	<?php


}
