<?php

function exibe_restaurantes() {

	// transformar os dados dos campos em variáveis ou objetos PHP
	$titulo = get_field( 're_titulo' );
	$restaurantes = get_field( 're_restaurantes' );
	$background = get_field( 're_background' );
	$background_image = $background[ 'imagem' ][ 'url' ];
	$background_image_position = $background[ 'posicionamento_da_imagem' ];
	if( ( $background[ 'transparencia' ] != 'Sem Transparência' ) ) {
		$background_opacity = $background[ 'opacidade' ] / 100;
	} else {
		$background_opacity = null;
	}

	// função para escrever o parâmetro style apenas se houver transparência
	function write_opacity( $param ) {
		if( !empty( $param ) ) {
			echo 'style="opacity:'. $param .'"';
		}
	}

	$background_image_style= 'background-image: url("' . $background_image . '");';
	$style = array(
		$background_image_style,
		'background-size: cover;',
		'background-repeat: no-repeat;',
		'background-size: cover;',
		'background-position:' . $background_image_position[ 'label' ] . ' center;'
	);
	$styles = implode( ' ', $style);
	?>

	<section class="section_restaurantes" style="<?php echo esc_html($styles); ?>" >
		<div class="overlay" <?php write_opacity( $background_opacity ); ?>></div>
		<!-- /.overlay -->



		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<h2><?php echo $titulo; ?></h2>
					<ul class="lista-de-restaurantes">
						<?php foreach( $restaurantes as $restaurante ) { ?>
							<li>
								<h3><?php echo $restaurante[ 'nome' ]; ?></h3>
								<p><?php echo $restaurante[ 'endereco' ]; ?></p>
							</li>
						<?php } ?>
					</ul>
				</div>
				<!-- /.col-sm-12 -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.restaurantes -->
	<?php
}