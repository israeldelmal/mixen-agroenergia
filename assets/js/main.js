// Menú Adaptable
$('body > button').on('click', function(event) {
	event.preventDefault();
	$('body > nav').toggleClass('active-menu');
	$(this).find('span').toggleClass('active-button');
});

// Navegación
$('.item-menu').on('click', function(event) {
	event.preventDefault();
	let Item = $(this).attr('href');

	$('body > nav').toggleClass('active-menu');

	$('body > button > span').toggleClass('active-button');
	
	$('body, html').stop(true, true).animate({
		scrollTop: $(Item).offset().top - 100
	}, 1000);
});

// Productos
$(function() {
	$('#BtnProduct1').on('click', function(event) {
		event.preventDefault();
		let Product = $(this).attr('data-product');

		$(Product).slideDown();

		if ($('#Product2').is(':visible')) {
			$('#Product2').slideUp();
		}

		if ($('#Product3').is(':visible')) {
			$('#Product3').slideUp();
		}
	});

	$('#BtnProduct2').on('click', function(event) {
		event.preventDefault();
		let Product = $(this).attr('data-product');

		$(Product).slideDown();

		if ($('#Product1').is(':visible')) {
			$('#Product1').slideUp();
		}

		if ($('#Product3').is(':visible')) {
			$('#Product3').slideUp();
		}
	});

	$('#BtnProduct3').on('click', function(event) {
		event.preventDefault();
		let Product = $(this).attr('data-product');

		$(Product).slideDown();

		if ($('#Product1').is(':visible')) {
			$('#Product1').slideUp();
		}

		if ($('#Product2').is(':visible')) {
			$('#Product2').slideUp();
		}
	});
});