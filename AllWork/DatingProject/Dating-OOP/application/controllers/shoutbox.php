   <?php 
   
   
    	class Shoutbox extends CI_Controller {
    	
    		function __construct()
    		{
    			parent::__construct();
    			
    	
    	
    		}
    	
    		public function index()
    		{
    			$this->load->Model('shoutbox_model');
    			$data['shout']=$this->shoutbox_model->getshout();
    			$this->load->view('shoutbox_view',$data);
    		}
    	
    	
    

    

    function shout()
    {
    $this->load->Model('shoutbox_model');
    $this->shoutbox_model->newshout();
    $data['shout']=$this->shoutbox_model->getshout();
    $this->load->view('shoutbox_view',$data) ;
    }
    }
?>

