    <?php  
    class Members_dash_model extends CI_Model {  
      
        function Members_dash_model()  
        {  
            // Call the Model constructor  
            parent::__construct();
            $this->load->database();
   
        }  
          
        function view_user($table_name,$user_name)  
            {  
            	
               
                	$this->db->where('username', $user_name);
                	
                	return $this->db->get($table_name);
                
            }
    }  
    ?>  