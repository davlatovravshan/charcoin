$(document).ready(function() {

	var menu = $('.menu-sm');
	var openBtn = $('.menu');

	openBtn.on('click', function() {
		menu.toggleClass('active');
	});

});