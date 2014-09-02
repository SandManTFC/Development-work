<?php

//Description: Login model class

class Add_message_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
    }
    
    public function add_message()
    {
        // grab user input
        $message= $this->security->xss_clean($this->input->post('message'));
        $usernameTo = $this->security->xss_clean($this->input->post('username'));
        $usernamefrom = $this->security->xss_clean($this->input->post('usernamefrom'));
        
        $datetimenow = date('Y-m-d H:i:s', time() - 3600);
       
        $data = array(
        				'message' => $message,
        				'username' => $usernameTo,
        				'usernamefrom' => $usernamefrom,
        		        'dateT' => $datetimenow
        		);
        
        
        
        
        
        $this->db->insert('mail', $data);
    
     
            return true;
        
        
    }
}
?>

