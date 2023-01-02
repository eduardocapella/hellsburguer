<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hell\'s_Burguer_2023
 */

get_header();
?>

      <main id="primary" class="site-main">

      <?php
      the_content();

      // Check value exists.
      if( have_rows( 'secoes' ) ):

            $count = 0;
            // Loop through rows.
            while ( have_rows( 'secoes' ) ) : the_row();
                  require_once get_template_directory() . '/inc/fn/exibe_restaurantes.php';
                  require_once get_template_directory() . '/inc/fn/exibe_texto_e_imagem.php';

                  require_once get_template_directory() . '/inc/fn/exibe_grid.php';
                  require_once get_template_directory() . '/inc/fn/exibe_cards.php';
                  require_once get_template_directory() . '/inc/fn/exibe_cardapio.php';
                  require_once get_template_directory() . '/inc/fn/exibe_formulario.php';

                  $count++;

                  // Case: Restaurantes layout.
                  if( get_row_layout() == 'restaurantes' ):
                        exibe_restaurantes( $count );
                        // Do something...

                  // Case: Texto e Imagem layout
                  elseif( get_row_layout() == 'texto_e_imagem' ):
                        exibe_texto_e_imagem( $count );
                        // Do something...

                  // Case: Grid layout
                  elseif( get_row_layout() == 'grid' ):
                        exibe_grid( $count );
                        // Do something...

                  // Case: Cards layout
                  elseif( get_row_layout() == 'cards' ):
                        exibe_cards( $count );
                        // Do something...

                  // Case: Cardápio layout
                  elseif( get_row_layout() == 'cardapio' ):
                        exibe_cardapio( $count );
                        // Do something...

                  // Case: Formulário layout
                  elseif( get_row_layout() == 'formulario' ):
                        exibe_formulario( $count );
                        // Do something...

                  endif;

          // End loop.
          endwhile;

      // No value.
      else :
          // Do something...
      endif;

      ?>

	</main><!-- #main -->

<?php

get_footer();
