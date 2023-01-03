<?php

function exibe_cardapio( $count ) {

	if( !empty( get_sub_field( 'gr_titulo' ) ) ) {
		$titulo = get_sub_field( 'gr_titulo' );
	}
	if( !empty( get_sub_field( 'gr_subtitulo' ) ) ) {
		$subtitulo = get_sub_field( 'gr_subtitulo' );
	}

	$cor_de_fundo = get_sub_field( 'cor_de_fundo' );
	$cor_de_fundo_value = $cor_de_fundo[ 'value' ];

	$hamburgueres = get_sub_field( 'hamburgueres' );
	?>

	<section id="section-<?php cria_section_id( $count, $titulo ); ?>" class="section section_cardapio <?php echo 'bg-' . $cor_de_fundo_value ?>">
		<div class="container">
			<?php
			if( !empty( $titulo ) || !empty( $subtitulo ) ) {
				?>
				<div class="row">
					<div class="col-sm-12">
						<hgroup>
							<?php if( !empty( $titulo ) ) { echo '<h2>' . $titulo . '</h2>'; } ?>
							<?php if( !empty( $subtitulo ) ) { echo '<p>' . $subtitulo . '</p>'; } ?>
						</hgroup>
					</div>
					<!-- /.col-sm-12 -->
				</div>
				<!-- /.row -->
			<?php } ?>

			<div class="row">
				<ul id="cardapio-thumbs">
					<?php
					foreach( $hamburgueres as $hamburguer ) {
						$apelido = get_field( 'apelido', $hamburguer->ID );
						$descricao_do_hamburguer = get_field( 'descricao_do_hamburguer', $hamburguer->ID );
						$imagem_principal = get_field( 'imagem_principal', $hamburguer->ID );
						$miniatura = get_field( 'miniatura', $hamburguer->ID );
						$texto_da_miniatura = get_field( 'texto_da_miniatura', $hamburguer->ID );
						?>
						<li class="cardapio-thumb" data-hamburguer="<?php echo sanitize_title( $apelido ); ?>">
							<a href="#">
								<figure>
									<img src="<?php echo $miniatura[ 'url' ] ?>" alt="<?php echo $miniatura[ 'alt' ] ?>">
								</figure>
								<h4><?php echo $texto_da_miniatura; ?></h4>
							</a>
						</li>
						<?php
					}
					?>
				</ul>
				<!-- /#cardapio-thumbs -->

				<ul id="cardapio-main">
					<?php
					foreach( $hamburgueres as $hamburguer ) {
						$titulo = get_the_title( $hamburguer->ID );
						$apelido = get_field( 'apelido', $hamburguer->ID );
						$descricao_do_hamburguer = get_field( 'descricao_do_hamburguer', $hamburguer->ID );
						$imagem_principal = get_field( 'imagem_principal', $hamburguer->ID );
						$miniatura = get_field( 'miniatura', $hamburguer->ID );
						$texto_da_miniatura = get_field( 'texto_da_miniatura', $hamburguer->ID );
						?>
						<li class="row align-items-center gx-0 <?php echo sanitize_title( $apelido ); ?>">
							<figure class="col-sm-6">
								<img src="<?php echo $imagem_principal[ 'url' ]; ?>" alt="<?php echo $imagem_principal[ 'alt' ]; ?>">
							</figure>
							<div class="conteudo col-sm-6">
								<h4><?php echo $apelido; ?></h4>
								<h3><?php echo $titulo; ?></h3>
								<div class="texto">
									<?php echo $descricao_do_hamburguer; ?>
								</div>
								<!-- /.texto -->
							</div>
							<!-- /.conteudo -->
						</li>
					<?php } ?>

				</ul>
				<!-- /#cardapio-main -->

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#x.section -->

	<?php
}