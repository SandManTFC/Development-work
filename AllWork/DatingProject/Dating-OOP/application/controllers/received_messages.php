<?php
class Received_messages extends CI_Controller {
	 
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('received_messages_model');
		$this->load->model('members_dash_model');
		
	}

	function index()
	{
		$data['data_array'] = $this->received_messages_model->ReceivedMessages();
		
		if(!$data['data_array'])
		{
		
			$dataU['error'] = '<font color=black>No Messages.</font>';
			$this->load->view('received_messages_view', $dataU);
		}
		else 
		{
			$this->load->view('received_messages_view', $data);
		}
	}
	

 }
?>