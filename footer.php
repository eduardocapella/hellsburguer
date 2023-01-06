<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hell\'s_Burguer_2023
 */

?>


	<footer id="colophon" class="site-footer bg-vermelho">
		<div class="container">
			<div class="row justify-content-space-between">
				<div class="col-8 col-sm-6 site-info">
					<p>
						<?php
						$texto = get_field( 'rodape_texto', 'option' );
						echo $texto;
						?>
					</p>
				</div>
				<div class="col-4 col-sm-6 hells-redes-sociais">
					<ul class="redes-sociais">
						<?php
						$redes_sociais = get_field( 'redes_sociais', 'option' );

						$instagram_url = !empty( $redes_sociais[ 'instagram_url' ] ) ?  $redes_sociais[ 'instagram_url' ] : '';
						$instagram_icon = !empty( $redes_sociais[ 'instagram_icon' ] ) ?  $redes_sociais[ 'instagram_icon' ] : '';

						$facebook_url = !empty( $redes_sociais[ 'facebook_url' ] ) ?  $redes_sociais[ 'facebook_url' ] : '';
						$facebook_icon = !empty( $redes_sociais[ 'facebook_icon' ] ) ?  $redes_sociais[ 'facebook_icon' ] : '';

						if ( !empty( $instagram_url ) && !empty( $instagram_icon )  ) {
							?>
							<li>
								<a href="<?php echo $instagram_url; ?>">
									<figure><img src="<?php echo $instagram_icon[ 'url' ] ?>" alt="<?php echo $instagram_icon[ 'alt' ] ?>"></figure>
								</a>
							</li>
							<?php
						}



					?>
					</ul>
				</div><!-- .site-info -->
				<!-- /.col-sm-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
