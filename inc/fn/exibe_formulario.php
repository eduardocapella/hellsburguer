<?php

function exibe_formulario( $count ) {
	$cor_de_fundo = get_sub_field( 'cor_de_fundo' );
	$cor_de_fundo_value = $cor_de_fundo[ 'value' ];

	$titulo = get_sub_field( 'titulo' );

	$formulario = get_sub_field( 'form' );
	$formulario_title = $formulario[0]->post_title;
	$formulario_id = $formulario[0]->ID;
	$formulario_shortcode = '[contact-form-7 id="' . $formulario_id . '" title="' . $formulario_title . '"]';

	$imagem = get_sub_field( 'imagem' );

	?>

	<section id="section-<?php cria_section_id( $count, $titulo ); ?>" class="section section_formulario <?php echo 'bg-' . $cor_de_fundo_value ?>">

		<div class="container form">
			<div class="row">
				<div class="col-sm-6">
					<h2><?php echo $titulo; ?></h2>

					<?php echo do_shortcode( $formulario_shortcode ); ?>
				</div>
				<!-- /.col-sm-6 -->
				<div class="col-sm-6">
					<figure><img src="<?php echo $imagem[ 'url' ] ?>" alt="<?php echo $imagem[ 'alt' ] ?>"></figure>
				</div>
				<!-- /.col-sm-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->


	</section>

	<?php


}
