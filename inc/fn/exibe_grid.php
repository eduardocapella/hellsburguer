<?php


function exibe_grid( $count ) {

	$titulo = get_sub_field( 'gr_titulo' );
	$subtitulo = get_sub_field( 'gr_subtitulo' );
	$blocos = get_sub_field( 'gr_bloco' );
	$cor_de_fundo = get_sub_field( 'cor_de_fundo' );
	$cor_de_fundo_value = $cor_de_fundo[ 'value' ];
	?>

	<section id="section-<?php echo $count; ?>" class="section section_grid <?php echo 'bg-' . $cor_de_fundo_value ?>">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<hgroup>
						<h2><?php echo $titulo; ?></h2>
						<p><?php echo $subtitulo; ?></p>
					</hgroup>

				</div>
				<!-- /.col-sm-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<?php
				foreach( $blocos as $bloco ) {
					$titulo = $bloco[ 'titulo' ];
					$conteudo = $bloco[ 'conteudo' ];
					$imagem = $bloco[ 'imagem' ];

					?>
					<div class="col-sm-6 col-md-4">
						<h3><?php echo $titulo; ?></h3>
						<div class="conteudo">
							<?php echo $conteudo; ?>
						</div>
						<!-- /.conteudo -->
					</div>
					<!-- /.col-sm-4 -->
					<?php

				}
				?>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#x.section -->

	<?php
}