<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hell\'s_Burguer_2023
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-sm-12">
							<h2>OPS!</h2>
							<p>Não encontramos essa página</p>
							<div class="is-layout-flex wp-block-buttons">
								<div class="wp-block-button">
									<a href="<?php echo get_home_url(); ?>" class="wp-block-button__link wp-element-button">Voltar ao Início</a>
								</div>
							</div>
						</div>
						<!-- /.col-sm-12 -->
					</div>
					<!-- /.row justify-content-center -->
				</div>
				<!-- /.container -->
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
