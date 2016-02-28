if (typeof jQuery == 'undefined') {  
    // jQuery is not loaded 
	//alert('jQuery is not loaded');
} else {
    // jQuery is loaded
	//alert('jQuery is loaded');
} 

( function( $ ) {
$(document).ready(function(){
 
	$('#menu-main-menu-1').prepend('<div id="menu-button">Menu</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
});

} )( jQuery );