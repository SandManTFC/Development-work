<?php
class Lost_password extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		
	}

	public function index()
	{

	}


function sendMail()
{
	$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'tfukdate@gmail.com', // change it to yours
			'smtp_pass' => 'escorts1976', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
	);

	$message = strip_tags(trim($_POST['message']))+ strip_tags(trim($_POST['email']));;
	$this->load->library('email', $config);
	$this->email->set_newline("\r\n");
	$this->email->from('tfukdate@gmail.com'); // change it to yours
	$this->email->to('phillee.pl@gmail.com');// change it to yours
	$this->email->subject('Help/Contact Message from TFUKD');
	$this->email->message($message);
	if($this->email->send())
	{
		echo 'Email sent.';
	}
	else
	{
		show_error($this->email->print_debugger());
	}

}
}
?>