jQuery( document ).ready( function( $ ) {
	$( '.cardapio-thumb' ).click( function( e ) {
		e.preventDefault();
		var classe = $( this ).data( 'hamburguer' );
		$( '.cardapio-thumb' ).removeClass( 'active' );
		$( this ).addClass( 'active' );

		$( '#cardapio-main li' ).hide();
		$( '#cardapio-main .' + classe ).css( 'display', 'flex' );
	} );
	

	/* MENU HAMBURGUER */
	let menuMobile = document.querySelector( '.menu-mobile' );
	let mainNavigation = document.querySelector( '.main-navigation' );

	menuMobile.addEventListener( 'click', () => {
		menuMobile.classList.toggle( 'active' );
		mainNavigation.classList.toggle( 'active' );
	} );



	$( '.menu-mobile' ).on( 'click', function() {
		$( '.btn-franqueado' ).toggle(); // aparece o div
	} );


	/* FIM - MENU HAMBURGUER */

	/* Get menu items href, beginning and ending top of section */
	// let menu_ids = [];
	let menu_ids = [];

	function get_menu_href_pos() {
		screen_height = $( window ).height();
		$( '#primary-menu' )
			.find( 'li a' )
			.each( function( index ) {
				let href = $( this ).attr( 'href' );
				let div = $( $( this ).attr( 'href' ) );
				menu_ids[ index ] = [];
				menu_ids[ index ][ 0 ] = href;
				menu_ids[ index ][ 1 ] = div.offset().top;
				menu_ids[ index ][ 2 ] = div.height();
			} );
		console.log( 'menu_ids', menu_ids );
	}
	get_menu_href_pos();

	// menu - navigate through sections
	$( '#primary-menu a' ).click( function( e ) {
		e.preventDefault();
		$( '#primary-menu a' ).removeClass( 'active' );
		$( this ).addClass( 'active' );
		$section = $( $( this ).attr( 'href' ) );
		pos = $section.offset();
		$( 'html, body' ).animate( {
				scrollTop: pos.top - 120,
			},
			500
		);
	} );

	// Monitorar o Scroll para ver se está dentro de uma das seções do menu
	$( window ).scroll( function() {
		var scrollTop = $( window ).scrollTop();
		var screen_height = $( window ).height();
		var section_avistada = '';
		console.log( 'scrollTop', scrollTop );
		// console.log( 'screen_height', screen_height );

		for( i = 0; i < menu_ids.length; i++ ) {
			if( scrollTop > menu_ids[ i ][ 1 ] - screen_height + 200 ) {
				// menu_ids[i][0].addClass('active');
				section_avistada = menu_ids[ i ][ 0 ];
				console.log( 'section_avistada', section_avistada );
				// console.log( 'PASSOU!!!', menu_ids[ i ][ 0 ] );
			}
		}
		$( '#primary-menu a' ).removeClass( 'active' );
		$('a[href=' + section_avistada + ']').addClass('active');
		console.log('AQUI!', $('a[href=' + section_avistada + ']'));
	} );
} );