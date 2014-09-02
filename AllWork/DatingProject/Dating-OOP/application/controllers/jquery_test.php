<?php
class Jquery_test extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		$this->load->helper('form');

	}

	public function index()
	{
		// Load our view to be displayed
		
			 
			$this->load->view('jquery_test_form_view');
		}

}

?>