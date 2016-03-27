<?php 

	include_once('../../api/vendor/autoload.php');
	use Mailgun\Mailgun;


	class Notifications
	{

		public $admin_email; 
		public $admin_salute; 
		public $mailgun_key_file; 
		public $mailgun_settings_file; 

		public $title; 
		public $firstname; 
		public $lastname;	
		public $institution; 
		public $address; 
		public $email; 

		public function __construct()
		{
			$this->admin_email = "rashed.karim@gmail.com";
			$this->admin_salute = "Dear Rashed";
			/*$this->mailgun_key_file = "mailgun_key.txt";
			$this->mailgun_settings_file = "mailgun_settings.txt";*/
		}

		public function GetInfoDigest() 
		{
			$info_digest[0] = "Title: ".$this->title;
			$info_digest[1] = "First name: ".$this->firstname; 
			$info_digest[2] = "Last name: ".$this->lastname; 
			$info_digest[3] = "institution: ".$this->institution; 
			$info_digest[4] = "Address: ".$this->address; 
			$info_digest[5] = "Email: ".$this->email;

			return implode("<br />", $info_digest);
		}	

		/*
		*	Check the return using $return['http_response_code'] for 200, email was successfully queued by Mailgun
		*/
		public function SendEmail($mailgun_key, $mailgun_domain, $form_input) 
		{

			$this->title = $form_input['title'];
			$this->firstname = $form_input['firstname'];
			$this->lastname = $form_input['lastname'];
			$this->institution = $form_input['institution'];
			$this->address = $form_input['address'];
			$this->email = $form_input['email'];

			$subject = "STACOM participant request";

			$info_digest = $this->GetInfoDigest();

			$body = "<p>".$this->admin_salute.",</p><p>We have received a new request for participant with the following information: ".$info_digest."<br /><br />.Please do not reply to this email.</p><p>Best wishes, <br />MICCAI STACOM team</p>";
			
			/*
			$mg = new Mailgun("key-0eb2ac56430a428c4979afeb73db38bc");
			$domain = "sandbox94e6990f1bf1441182552b1e92fe9374.mailgun.org";
			*/

			$mg_key = trim($mailgun_key);
			$mg = new Mailgun($mg_key);
			$domain = trim($mailgun_domain);
		//error_log("Mailgun key = ".$mg_key."\nMailgun domain = ".$domain);
			$result = $mg->sendMessage($domain, array('from'    => 'no-reply@sandbox94e6990f1bf1441182552b1e92fe9374.mailgun.org', 
													  'to'      => $this->admin_email, 
			                                		  'h:Reply-To'=>  $this->admin_email,
			                                		  'subject' => $subject, 
			                                		  'html'    => $body
			                          	));
			
			//echo print_r($result, true);
			return $result;
		}
			
	}

?>