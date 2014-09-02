<?php

class Members_profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('members_profile_model');
		$this->load->library('session');

	}

	function index()
	{

		

	}
	
	function fetchMembersProfile()
	{
	
		$data['data_array'] = $this->members_profile_model->GetProfile();
	
		$this->load->view('members_profile_view', $data);
	
	}


}
?>