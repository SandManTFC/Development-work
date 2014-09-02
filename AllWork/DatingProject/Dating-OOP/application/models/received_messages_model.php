<?php

class Received_messages_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function ReceivedMessages()
	{
		
		$user = $this->session->userdata('username');
       // Prep the query
		
		$this->db->select('*');
		$this->db->group_by('usernamefrom');
		$this->db->where('username', $user);
		

		// Run the query
		$query = $this->db->get('mail');
		// Let's check if there are any results
		if($query->num_rows() > 0)
		{
			
			return $query->result();
			
			
		}
		// If the previous process did not validate
		// then return false.
		return false;
	}
}
?>
