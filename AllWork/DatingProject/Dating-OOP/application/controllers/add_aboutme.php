<?php 
class Add_Aboutme extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('add_aboutme_model');
        $this->load->helper('form');
    }
    
     function index()
     {
        // Load our view to be displayed
    	
    
    	}
    	
    	function insertAboutMeProcess()
    	{
    		$this->load->model('add_aboutme_model');
    		$this->load->model('members_dash_model');
    		
    		
    		
    		$this->add_aboutme_model->edit_aboutme();
    	
    		$user = $this->session->userdata('username');
    		 
    		$data['array_name']= $this->members_dash_model->view_user('member',$user)->result();
    		 
    		$this->load->view('member_dash_view', $data);
    			
    				
    		}
    	
      
   
   
}


?>

