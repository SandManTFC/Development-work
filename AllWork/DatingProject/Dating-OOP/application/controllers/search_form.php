<?php

class Search_form extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('search_form_model');
	}	
	function index()
	{			
		if($this->session->userdata('username') == "")
		{
			
			$this->load->view('reg_view.php');
			
		}
		else
		{
	   
		$this->form_validation->set_rules('my_gender', 'My Gender', 'required|trim|xss_clean|max_length[6]');			
		$this->form_validation->set_rules('looking_for_gender', 'looking for Gender', 'required|trim|xss_clean|max_length[6]');			
		$this->form_validation->set_rules('age_from', 'Age_From','callback_isblank|callback_minnumcheck');			
		$this->form_validation->set_rules('age_to', 'Age_To','callback_isblank|callback_maxnumcheck');			
		$this->form_validation->set_rules('postcode', 'Postcode', 'required|trim|xss_clean|max_length[10]');
		$this->form_validation->set_rules('distance', 'Distance', 'required|trim|xss_clean');
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		
		
		
		
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('search_form_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			$user = $this->session->userdata('username');
			
			$form_data = array(
					        'username' => $user,
					       	'my_gender' => set_value('my_gender'),
					       	'looking_for_gender' => set_value('looking_for_gender'),
					       	'age_from' => set_value('age_from'),
					       	'age_to' => set_value('age_to'),
					       	'postcode' => set_value('postcode'),
					        'distance' => set_value('distance')
						);
			
			
			$this->session->set_userdata($form_data);
			
			$data['data_array'] = $this->search_form_model->SearchMembers();
				
			$this->load->view('search_results_view', $data);
					
			// run insert model to write data to db
			
			
		
			if ($this->search_form_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				
				
				
				$data['data_array'] = $this->search_form_model->SearchMembers();
					
				$this->load->view('search_results_view', $data);
				
				
				
				
			
			}
		
		}
	}
}

function FetchFormData()
{
	$data['data_array'] = $this->search_form_model->PopulateSearchForm();
	
	if(!$data['data_array'])
	{

		return FALSE;
	}
	else
	{
		$this->load->view('search_form_view', $data);
		return TRUE;
	}
}



function isblank($in)
{
	if (empty($in)) {
		$this->form_validation->set_message('isblank', 'Empty Field,You must enter an Age above 18');
		return FALSE;
	} else {
		return TRUE;
	}
}


function minnumcheck($in)
 {
	if (intval($in) < 18) {
		$this->form_validation->set_message('minnumcheck', 'You must be 18 years or older to use this site');
		return FALSE;
	} else {
		return TRUE;
	}
}



function maxnumcheck($in)
{
	if (intval($in) > 99) {
		$this->form_validation->set_message('maxnumcheck', 'Invalid Maximum Age');
		return FALSE;
	} else {
		return TRUE;
	}
}

	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
	
	
}
?>
