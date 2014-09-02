<?php
class Message extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('message_model');
		$this->load->helper('form');
	}
	public function index()
	{
		$this->load->view('message_view');
	}
	
   public function fetch(){
    	
   	//fetch all messages between you and member
    	$data['data_array'] = $this->message_model->fetchMessages();
    	
    	 
      		// Now we verify the result
      		if(!$data['data_array'])
      		{
      			// If user did not validate, then show them login page again
      			$data['error'] = '<font color=black>No Messages.</font>';
      			
      			$this->load->view('message_view', $data);
      			
      			
      			
      		}
      		else
      		{
      			// If user did validate,
      			// Send them to members area
      			$this->load->view('message_view', $data);
      		}
      	}
   }

    
	?>