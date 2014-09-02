<?php
class Delete_messages extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('delete_all_messages_model');
		$this->load->model('message_model');
		$this->load->model('received_messages_model');
	}

	public function index()
	{

	}



	function deleteAllMessages()
	{
		$this->load->model('delete_all_messages_model');
		//Validate message added or not
		$result = $this->delete_all_messages_model->delete_messages();

		// Now we verify the result
		if($result){
			// If user did not validate, then show them login page again
			$data['data_array'] = $this->received_messages_model->ReceivedMessages();
			
			if(!$data['data_array'])
			{
			
				$dataU['error'] = '<font color=black>No Messages.</font>';
				$this->load->view('received_messages_view', $dataU);
			}
			
			
		}
		else
		{
			
			$data['data_array'] = $this->message_model->fetchMessages();

			$this->load->view('message_view', $data);
				
		}

	}


}
?>