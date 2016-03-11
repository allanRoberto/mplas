(function ($, root, undefined) {
	
	$(document).ready(function() {
		$('.owl-carousel').each( function() {
	        var $carousel = $(this);
	        $carousel.owlCarousel({
	            dots : false,
	           	navigation : true,
	           	loop: false,
	           	pagination: false,
	            items : 3,
	            margin : 50,
	            navigationText : [ '<span class="fa fa-chevron-left fa-2x"><span>', '<span class="fa fa-chevron-right fa-2x"></span>' ]
	        });
    	});
    });	


})(jQuery, this);
