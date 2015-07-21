$(document).ready(function (){
	console.log("ready");

	var getRequest = function() {
		var requestPhp = $('textarea#phpInput').val();
		var requestTwig = $('textarea#twigInput').val();
		request = { php: requestPhp, twig: requestTwig};
		console.log(request);
		return request;
	};

	var drawResponse = function(response) {
		if (response.error) {
			$('div#error').html(response);
		} else {
			$('div#response').html(response);
		}
	};

	$('textarea').change(function() {
		var request = getRequest();
		$.ajax({
	    	url: '/ajax.php',
			type: 'GET',
			data: {
				'mode': 'getHtmlResponse',
				'requestPhp': request.php,
				'requestTwig': request.twig
			}
	    }).done(function (response) {
	    	drawResponse(response);
	    });
	});

});