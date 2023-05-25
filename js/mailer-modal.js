$(function() {

	var form = $('#ajax-contact-modal');
	var formMessages = $('#form-messages-modal');

	$(form).submit(function(e) {
		e.preventDefault();

		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// $(formMessages).removeClass('error');
			// $(formMessages).addClass('success');

			// $(formMessages).text(response);

			window.location.href = "thanks.html";

			$('#name').val('');
			$('#email').val('');
			$('#tel').val('');
			$('#message').val('');
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
