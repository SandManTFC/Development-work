<?php

class Add_message extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('add_message_model');
		$this->load->model('message_model');
		
		
	}

	public function index()
	{
		
	}
	

	
	function insertMessageProcess()
	{
		
		
		/*$this->form_validation->set_rules('message', 'Message', 'required|min_length[10]|max_length[70]');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('members_profile_view');
		}
		else
		{*/
		
		
		$this->load->model('add_message_model');
		//Validate message added or not
		$result = $this->add_message_model->add_message();
	
		// Now we verify the result
		if(!$result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Message not added try again</font><br />';
			$this->index($msg);
		}else{
			// If user did validate,
			// Send them to members area
			//redirect('message/fetch');
			$data['data_array'] = $this->message_model->fetchMessages();
			 
			$this->load->view('message_view', $data);
			
		}
	
	}
	//}


}
?>
