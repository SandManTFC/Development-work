<?php
class Index_gallery extends CI_Controller{

	function __construct(){
		parent::__construct();
		

	}

	public function index()
	{
		// Load our view to be displayed
		
			 
			$this->load->view('multiple-slideshows/gallery');
	}
		
	 
	 
}

?>