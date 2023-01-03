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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			<?php
			$rodape = get_field( 'rodape', 'option' );
			echo '<p>' . $rodape[ 'texto' ] .'</p>';

			$escolha = get_field( 'selecione_as_redes_sociais_do_hells' );
			//print_r( 'AQUI >>> ' . $escolha );

			if( get_field( 'selecione_as_redes_sociais_do_hells', "option" ) == 'Instagram' )  {
				$redes_sociais = get_field( 'redes_sociais', "option" );
				
				?>
				<a href="<?php echo $redes_sociais[ 'instagram_url' ]; ?>"><img src="<?php echo $redes_sociais[ 'instagram_icon' ]['url'] ?>" alt="logo instagram"></a>
				<?php 
			}  
			
			?>

			
			
			


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
