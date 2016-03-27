function registration_handler() 
{

	// Example taken from: http://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php
	// variable to hold request
	var request;

	// bind to the submit event of our form
	
	   
		// abort any pending request
		if (request) {
		    request.abort();
		}

		 // setup some local variables
		var $form = $('#registration');
		// let's select and cache all the fields
		var $inputs = $form.find("input, select, button, textarea");
		// serialize the data in the form
		var serializedData = $form.serialize();

		// let's disable the inputs for the duration of the ajax request
		// Note: we disable elements AFTER the form data has been serialized.
		// Disabled form elements will not be serialized.
		$inputs.prop("disabled", true);

		request = $.ajax({

		  url: "form_process/process.php",
		  type: "post",
		  dataType: "json",
		  data: serializedData
		   
		});

		request.done(function (response){

			if (response.success == 'false')
			{
				if (response.reason == 'captcha' ) {
					
					$('#captchaInputDIV').addClass('has-error');
					$('#form_process_error').html('Can you please check your captcha again? Refresh image if necessary.');
				}
				else if (response.reason == 'email')
				{
					$('#form_process_error').html('Server error. Please try again and if problem persists, email: rashed.karim@kcl.ac.uk');	
				}
			}
			else if (response.success == 'true') {
				
				window.location.href = '/thankyou.php';
			}

			$inputs.prop("disabled", false);
		});

		request.fail(function (jqXHR, textStatus, errorThrown){
			$inputs.prop("disabled", false);
		});

  	

}