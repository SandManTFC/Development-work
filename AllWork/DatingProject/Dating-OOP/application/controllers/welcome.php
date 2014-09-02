<?php

class Welcome extends  CI_Controller {
    	
    		function __construct()
    		{
    			parent::__construct();
    			
    			$this->load->library('Layouts');
    	
    		}
	
	function index()
	{
		
		$this->layouts->set_title('Welcome User!');
		
		$this->layouts->add_include('js/simple_js.js')
					  ->add_include('css/simple_css.css');
		
		$this->layouts->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */