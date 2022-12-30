jQuery(document).ready(function ($) {
	$('.cardapio-thumb').click(function (e) {
		e.preventDefault();
		var classe = $(this).data('hamburguer');
		$('.cardapio-thumb').removeClass('active');
		$(this).addClass('active');

		$('#cardapio-main li').hide();
		$('#cardapio-main .' + classe).css('display', 'flex');
	});
});
