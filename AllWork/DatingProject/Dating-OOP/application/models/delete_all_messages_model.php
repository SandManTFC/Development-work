<?php

//Description: Login model class

class Delete_all_messages_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }
    
    public function delete_messages()
    {
    
    
    	$usernameTo = $this->security->xss_clean($this->input->post('username'));
    	$usernamefrom = $this->security->xss_clean($this->input->post('usernamefrom'));
    	
    	
    	$this->db->where('username',$usernameTo);
    	$this->db->where('usernamefrom',$usernamefrom);
    	$this->db->delete('mail');
    	$affectedRows = $this->db->affected_rows();
    	if ($affectedRows > 0)
    	{
    	return TRUE;
    	}
    	else 
    	{
    	return FALSE;
    	}
    }
    
}
?>

