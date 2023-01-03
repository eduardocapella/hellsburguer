<?php


function exibe_cards( $count ) {

	$titulo = get_sub_field( 'gr_titulo' );
	$subtitulo = get_sub_field( 'gr_subtitulo' );
	$blocos = get_sub_field( 'gr_bloco' );
	$cor_de_fundo = get_sub_field( 'cor_de_fundo' );
	$cor_de_fundo_value = $cor_de_fundo[ 'value' ];

		//print_r( '<pre>' );
       	//print_r( $blocos);
        	//print_r( '</pre>' );
        ?>
	<section id="section-<?php cria_section_id( $count, $titulo ); ?>" class="section section_cards <?php echo 'bg-' . $cor_de_fundo_value ?>">
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

			<div class="swiper">
				<div class="swiper-wrapper cards">
					<?php
					foreach( $blocos as $bloco ) {
						$titulo = get_the_title( $bloco->ID );
						$imagem = get_the_post_thumbnail( $bloco->ID );
						$conteudo = get_the_content( $bloco->ID );

						?>
						<div class="swiper-slide">
							<div class="card-container">

								<div class="conteudo">
									<h3><?php echo $titulo; ?></h3>
									<?php echo $bloco->post_content; ?>
								</div>
								<!-- /.conteudo -->
								<div class="imagem">
									<figure>
										<?php echo $imagem;?>
									</figure>

								</div>
							</div>
						</div>
						<!-- /.col-sm-4 -->
						<?php
					}
					?>
				</div>
				<!-- /.row -->
				<div class="swiper-pagination"></div>
			</div>
			<!-- /.swiper -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /#x.section -->

	<?php
}