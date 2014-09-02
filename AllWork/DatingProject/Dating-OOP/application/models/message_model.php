<?php

class Message_model extends CI_Model{
	function __construct(){
		
		parent::__construct();
		$this->load->database();
	}

	public function fetchMessages()
	{
		// grab user input
		$username = $this->security->xss_clean($this->input->post('username'));
		$usernamefrom = $this->security->xss_clean($this->input->post('usernamefrom'));

		// Prep the query
		$query = "SELECT username,usernamefrom,subject,message,dateT,imageid,iname FROM mail WHERE username = '$username' and usernamefrom = '$usernamefrom'
		UNION
		SELECT username,usernamefrom,subject,message,dateT,imageid,iname FROM mail WHERE usernamefrom = '$username' and username = '$usernamefrom' ORDER BY dateT";

	  // Run the query
		$query = $this->db->query($query);
		
		// Let's check if there are any results
		if($query->num_rows() > 0)
		{
			
			return $query->result();
		}
		
		return false;
	}
}
?>