<?php 
	
	session_start();
	include_once('../../api/kcl/Notifications.php');

	// captcha validation 
	include_once $_SERVER['DOCUMENT_ROOT'] . '/api/securimage/securimage.php';
	$securimage = new Securimage();

	if ($securimage->check($_POST['captchaInput']) == false) {
		  // the code was incorrect
		  // you should handle the error so that the form processor doesn't continue

		  // or you can use the following code if there is no validation or you do not know how

		error_log('captcha entered is incorrect');		
		$ret = array('success'=>'false', 'reason'=>'captcha');
		echo json_encode($ret);

	}
	else {
		
		// ready to submit form 
		$notify_admin = new Notifications();

		$mailgun_key = file_get_contents('../../api/kcl/mailgun_key.txt');
		$mailgun_domain = file_get_contents('../../api/kcl/mailgun_domain.txt');

		$mailgun_diagnostic = $notify_admin->SendEmail($mailgun_key, $mailgun_domain, $_POST);
		
		if ($mailgun_diagnostic->http_response_code == 200)
		{
			$ret = array('success'=>'true', 'email'=>$_POST['email']);
		}
		else 
		{
			$ret = array('success'=>'false', 'reason'=>'email');
		}

		//echo json_encode($ret);
	}

?>