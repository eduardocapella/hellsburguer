<?php

function exibe_texto_e_imagem() {
	$cor_fundo = get_sub_field( 'ti_cor_fundo' );
	$cor_fundo_value = $cor_fundo[ 'value' ];

	$titulo = get_sub_field( 'ti_titulo' );
	$texto = get_sub_field( 'ti_texto' );
	$imagem = get_sub_field( 'ti_imagem' );

	if ( !empty( get_sub_field( 'ti_pre_titulo' ) ) ) {
		$pre_titulo = get_sub_field( 'ti_pre_titulo' );
	}

	// print_r( '<pre>' );
	// print_r( $imagem );
	// print_r( '</pre>' );

	?>

	<section class="texto_e_imagem">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 imagem">
					<figure>
						<img src="<?php echo $imagem[ 'url' ] ?>" alt="<?php echo $imagem[ 'alt' ] ?>">
					</figure>
				</div>
				<!-- /.col-sm-6 -->
				<div class="col-sm-6 texto <?php echo 'texto-' . $cor_fundo_value ?>">
					<?php if( !empty( $pre_titulo ) ) { ?>
						<h3><?php echo $pre_titulo; ?></h3>
					<?php } ?>

					<?php
					// if( !empty( $pre_titulo ) ) {
					// 	echo '<h3>' . $pre_titulo . '</h3>';
					// }
					?>

					<h2><?php echo $titulo; ?></h2>
					<div class="ti_texto">
						<?php echo $texto; ?>
					</div>
					<!-- /.ti_texto -->
				</div>
				<!-- /.col-sm-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>

	<?php


}



