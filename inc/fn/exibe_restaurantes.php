<?php

function exibe_restaurantes() {

	$titulo = get_field( 're_titulo' );
	$restaurantes = get_field( 're_restaurantes' );
	$background = get_field( 're_background' );
	$background_image = $background[ 'imagem' ][ 'url' ];
	$background_image_position = $background[ 'posicionamento_da_imagem' ];
	// print_r( '<pre>' );
	// print_r( $background_image_position );
	// print_r( '</pre>' );
	?>

	<section class="section_restaurantes" style='background-image: url("<?php echo $background_image; ?>"); background-size: cover; background-repeat: no-repeat; background-size: cover; background-position: <?php echo $background_image_position[ 'label' ]; ?> center;' >
		<div class="overlay"></div>
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