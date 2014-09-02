<?php 
class Member_dash extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('members_dash_model');
        $this->load->helper('form');
    }
    
     function index(){
        // Load our view to be displayed
    	if(($this->session->userdata('username')== ""))
    	{
    		$this->load->view('reg_view.php');
    	}
    	else 
    	{
    	$user = $this->session->userdata('username');
    	
    	$data['array_name']= $this->members_dash_model->view_user('member',$user)->result();
       
        $this->load->view('member_dash_view', $data);
    	}
    	
    	
      }
   
   
}


?>
