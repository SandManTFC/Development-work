
<?php
class Lost_password_form extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		
	}

	function index()
	{
		// Load our view to be displayed
		 
		$this->load->view('lost_password_form_view');
	}
	 
	
	
			
	
}
	?>

	 
	 
