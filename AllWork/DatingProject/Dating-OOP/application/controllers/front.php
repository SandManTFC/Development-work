 <?php   
  class Front extends CI_Controller{
    
    function __construct(){
        parent::__construct();
         $this->load->model('members_dash_model');  
                $this->load->helper('url');
                $this->load->helper('form');
              
    }
    
    public function index(){
        // Load our view to be displayed
    	if(($this->session->userdata('username')== ""))
    	{
   		
    		$this->load->view('front_view');
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