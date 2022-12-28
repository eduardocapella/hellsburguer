<?php
function analisa_ordem( $param ) {
	//print_r( $param );
	if ( $param == 'texto+imagem' ) {
		echo "ordem-inversa"; 
	}
}

function exibe_texto_e_imagem( $count ) {
	$cor_fundo = get_sub_field( 'ti_cor_fundo' );
	$cor_fundo_value = $cor_fundo[ 'value' ];

	$titulo = get_sub_field( 'ti_titulo' );
	$texto = get_sub_field( 'ti_texto' );
	$imagem = get_sub_field( 'ti_imagem' );
	$ordem = get_sub_field('ti_ordem_conteudo');
	if ( !empty( get_sub_field( 'ti_pre_titulo' ) ) ) {
		$pre_titulo = get_sub_field( 'ti_pre_titulo' );
	}

	// print_r( '<pre>' );
	// print_r( $ordem );
	// print_r( '</pre>' );

	?>

	<section id="section-<?php echo $count; ?>" class="section section_texto_e_imagem">
		<div class="wrapper <?php analisa_ordem( $ordem ) ?>">
			<div class="imagem">
				<figure>
					<img src="<?php echo $imagem[ 'url' ] ?>" alt="<?php echo $imagem[ 'alt' ] ?>">
				</figure>
			</div>
			<!-- /.imagem -->

			<div class="texto-wrapper <?php echo 'bg-' . $cor_fundo_value ?>">
				<div class="texto">
					<?php if( !empty( $pre_titulo ) ) { ?>
						<h3><?php echo $pre_titulo; ?></h3>
					<?php } ?>

					<h2><?php echo $titulo; ?></h2>
					<div class="ti_texto">
						<?php echo $texto; ?>
					</div>
					<!-- /.ti_texto -->
				</div>
				<!-- /.texto -->
			</div>
			<!-- /.texto -->
		</div>
		<!-- /.container -->
	</section>

	<?php


}



