$(function() {

	var form = $('#ajax-contact');
	var formMessages = $('#form-messages');

	$(form).submit(function(e) {
		e.preventDefault();

		var formData = $(form).serialize();
		var origen = $('#origen').val();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// $(formMessages).removeClass('error');
			// $(formMessages).addClass('success');

			// $(formMessages).text(response);

			//Reseteamos las variables UTM del localStorage
			localStorage.removeItem('utmSource');
            localStorage.removeItem('utmMedium');

			window.location.href = "thanks.php";

			$('#name').val('');
			$('#email').val('');
			$('#tel').val('');
			$('#message').val('');
			$('#utmSource').val('');
			$('#utmMedium').val('');
		})
		.fail(function(data) {
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});
