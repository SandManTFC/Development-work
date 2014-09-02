
<?php
class Contact_form extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library(array('smtp','phpmailer'));
		$this->load->library('form_validation');
	}

	function index()
	{
		// Load our view to be displayed
		 
		$this->load->view('main_view');
	}
	 
	
	
			
	
		public function SendMessage()
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'required|min_length[10]|max_length[70]');
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('help_form_view');
			}
			else
			{
			
			
			
			$mail = new PHPMailer();
			$mail->IsSMTP(); // send via SMTP
			$mail->SMTPSecure = "ssl";
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
			$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
			$mail->Username   = "tfukdate@gmail.com";  // GMAIL username
			$mail->Password   = "escorts1976";
			$webmaster_email = "admin@totallyfreeukdating.co.uk"; //Reply to this email ID
			$email= 'phillee.pl@gmail.com';// Recipients email ID
			$name="name"; // Recipient's name
			$mail->From = "admin@totallyfreeukdating.co.uk";
			$mail->FromName = "totallyfreeukdating";
			$mail->AddAddress($email,$name);
			$mail->AddReplyTo($webmaster_email,"admin@totallyfreeukdating.co.uk");
			$mail->WordWrap = 50; // set word wrap
			/*$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
			$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment*/
			$mail->IsHTML(true); // send as HTML
			$mail->Subject = "Help Message!";
			
	
	
	
	$mail->Body = "You have a help message: {$_POST['message']}. Reply to {$_POST['email']}"; //HTMl Body
	
	$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
	if(!$mail->Send())
	{
	echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
	  echo "Email Sent";
	   $this->load->view('main_view');
	     }
	  }
	 }
	}
	?>

	 
	 
