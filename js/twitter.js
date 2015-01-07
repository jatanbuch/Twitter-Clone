$(document).ready(function() {
	$('span#glyphicon').click(function() {
		if($('ul#left_items').is(":hidden")) {
			$('ul#left_items').slideDown();
			$('section').fadeTo('slow', 0.3);
			$('img#background_image').fadeTo('slow', 0.9);
			$('header').fadeTo('slow', 0.3);
		}else{
			$('ul#left_items').slideUp();
			$('section').fadeTo('slow', 1.0);
			$('img#background_image').fadeTo('slow', 1.0);
			$('header').fadeTo('slow', 1.0);
		}
	});
});