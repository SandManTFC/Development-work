<?php
class Members_profile_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function GetProfile()
	{

		// grab user input
		$members_username = $this->security->xss_clean($this->input->post('members_username'));
		
		
		// Prep the query
		$this->db->where('username', $members_username);
		
		
		// Run the query
		$query = $this->db->get('member');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
				
			return $query->result();
		}
		
		return false;
	 }
	 
	}
?>