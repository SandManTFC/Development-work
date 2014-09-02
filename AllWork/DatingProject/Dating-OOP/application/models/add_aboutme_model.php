<?php  
    class Add_aboutme_model extends CI_Model {  
      
        function Add_aboutme_model()  
        {  
            // Call the Model constructor  
            parent::__construct();
            $this->load->database();
   
        }  
          
        function edit_aboutme()  
            {  
            	
            	$aboutme= $this->security->xss_clean($this->input->post('aboutme'));
            	$user = $this->session->userdata('username');
            	
                	//$this->db->where('username', $user);
                	//$this->db->update('About',$aboutme);
                	
                	mysql_query("UPDATE member SET About = '$aboutme'
                	WHERE username = '$user'");
                	
                	
                
                	
                
            }
    }  
    ?>  