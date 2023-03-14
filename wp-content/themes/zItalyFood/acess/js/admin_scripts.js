(function($){

	$(document).ready(function(){

			$("button#zitaly_imgas_about").click(function(){


				let aboutImage 		= wp.media({
						title		: 'Select A About Us Photo',
						button		: {
							text : 'Select Image'
						}
					});

					aboutImage.open();
					
					aboutImage.on('select', function(){

							var imgUrl 	= aboutImage.state().get('selection').first().toJSON();

							$("input#zitaly_imgas_about").val(imgUrl.url);
							$("img#zitaly_imgas_about").attr('src',imgUrl.url);

					});
				return false;

			});

			$("button#zitaly_client_img").click(function(){


				let clienttImage 		= wp.media({
						title		: 'Select A About Us Photo',
						button		: {
							text : 'Select Image'
						}
					});

					clienttImage.open();
					
					clienttImage.on('select', function(){

							var clientUrl 	= clienttImage.state().get('selection').first().toJSON();

							$("input#zitaly_client_img").val(clientUrl.url);
							$("img#zitaly_client_img").attr('src',clientUrl.url);

					});



				return false;
			});

		

	});


})(jQuery)