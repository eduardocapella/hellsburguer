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
			} );
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

		for( i = 0; i < menu_ids.length; i++ ) {
			if( scrollTop > menu_ids[ i ][ 1 ] - screen_height + 200 ) {
				section_avistada = menu_ids[ i ][ 0 ];
			}
		}
		$( '#primary-menu a' ).removeClass( 'active' );
		$( 'a[href=' + section_avistada + ']' ).addClass( 'active' );
	} );

	const swiper = new Swiper( '.swiper', {

		slidesPerView: 1,
		// centeredSlides: true,
		spaceBetween: 27,
		watchSlidesProgress: true,

		// Optional parameters
		direction: 'horizontal',
		loop: false,

		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},

		breakpoints: {
			576: {
				slidesPerView: 1,
				spaceBetween: 27,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 27,
			},
			992: {
				slidesPerView: 3,
				spaceBetween: 27,
			},
		},

	} );


} );