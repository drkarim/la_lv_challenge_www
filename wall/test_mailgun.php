<?php 

	include_once('../api/kcl/Notifications.php');
	require '../api/vendor/autoload.php';
	

	$notify_admin = new Notifications();
	
	$POST['title'] = "Dr."; 
	$POST['firstname'] = "rashed";
	$POST['lastname'] = "karim"; 
	$POST['address'] = "3 odden lodge";
	$POST['email'] = "rashed.karim@gmail.com";
	$POST['institution'] = "kcl";

	$mailgun_key = file_get_contents('../api/kcl/mailgun_key.txt');
	$mailgun_domain = file_get_contents('../api/kcl/mailgun_domain.txt');

	$diagnostic = $notify_admin->SendEmail($mailgun_key, $mailgun_domain, $POST);
	
	if ($diagnostic->http_response_code == 200)
	{
		echo "Detected 200";
	}
	else 
	{
		echo "not detected";
	}
	//echo json_encode($ret);

?>