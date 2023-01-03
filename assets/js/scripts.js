
jQuery(document).ready(function ($) {
	$('.cardapio-thumb').click(function (e) {
		e.preventDefault();
		var classe = $(this).data('hamburguer');
		$('.cardapio-thumb').removeClass('active');
		$(this).addClass('active');

		$('#cardapio-main li').hide();
		$('#cardapio-main .' + classe).css('display', 'flex');
	});

	let menuMobile = document.querySelector(".menu-mobile");
	let mainNavigation = document.querySelector(".main-navigation");

	menuMobile.addEventListener("click", () => {
		menuMobile.classList.toggle('active');
		mainNavigation.classList.toggle('active');

	});
	$('.menu-mobile').on('click',function(){
		$('.btn-franqueado').toggle(); // aparece o div
		
	});
});

