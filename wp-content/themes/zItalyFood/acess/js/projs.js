(function($){

	$(document).ready(function(){

		$('.widget .promasud').parent('.widget').addClass('wid-gallery');


	 $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });

		

	});


})(jQuery)