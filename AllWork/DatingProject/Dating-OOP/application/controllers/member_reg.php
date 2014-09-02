<?php 
class Member_Reg extends CI_Controller{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('login_model');
  $this->load->model('member_reg_model');
  $this->load->model('members_dash_model');
  $this->load->helper('form');
  $this->load->helper(array('form', 'url')); 
  $this->load->library('form_validation');
  $this->load->database();
 }
 
 public function index()
 {
  if(($this->session->userdata('username')!=""))
  {
   $this->members_dash();
  }
  else
  {
 
   $this->load->view("reg_view.php");
   
  }
 }
 
 public function registration()
 {
 	$this->form_validation->set_rules('username', 'Username','required|callback_validate_username|min_length[5]|max_length[12]|');
 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_validate_email');
 	$this->form_validation->set_rules('emailconf', 'Email Confirmation', 'required|matches[email]');
 	$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
 	$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
 	$this->form_validation->set_rules('age', 'Age', 'required|min_length[2]|max_length[2]|numeric');
 	$this->form_validation->set_rules('town', 'Town', 'required');
 	$this->form_validation->set_rules('postcode', 'Postcode', 'required');
 	
 	if ($this->form_validation->run() == FALSE)
 	{
 		$this->load->view('reg_view');
 	}
 	else
 	{
  $this->member_reg_model->add_user();
  $data['error'] = '<font color=red>Welcome you are now Registered,Log-in below.</font>';
  
  
  // Load the message page
  $this->load->view('front_view',$data);
  
 	}
 }
 
 
 
 
 public function members_dash()
 {
 	$user = $this->session->userdata('username');
 	 
 	$data['array_name']= $this->members_dash_model->view_user('member',$user)->result();
 	 
 	$this->load->view('member_dash_view', $data);
 }
 
 public function login()
 {
  $email=$this->input->post('email');
  $password=md5($this->input->post('pass'));

  $result=$this->login_model->validate($email,$password);
  if($result) 
  {
  	$this->members_dash;
  }
  else {
  	       $this->index();
  }
 }
 
 public function thank()
 {
  $this->load->view('front_view.php');
 }
 
 
 public function logout() 
 {
  $newdata = array(
  'userid'   =>'',
  'username'  =>'', 
  'logged_in' => FALSE,
  );
  $this->session->unset_userdata($newdata );
  $this->session->sess_destroy();
  $this->load->view('front_view');
 }
 
 
 
 		
 public function validate_username()
 {
 	// grab user input
 	$username = $this->security->xss_clean($this->input->post('username'));
 
 
 	// Prep the query
 	$this->db->where('username', $username);
 
 	// Run the query
 	$query = $this->db->get('member');
 	// Let's check if there are any results
 	if($query->num_rows() > 0)
 	{
 		$this->form_validation->set_message('validate_username','Username already exists');
 		return FALSE;
 	}
 	// If the previous process did not validate
 	// then return false.
 	$query->free_result();
 	
 	return TRUE;
 }
 
 public function validate_email()
 {
 	// grab user input
 	$email = $this->security->xss_clean($this->input->post('email'));
 
 
 	// Prep the query
 	$this->db->where('email',$email);
 
 	// Run the query
 	$query = $this->db->get('member');
 	// Let's check if there are any results
 	if($query->num_rows() > 0)
 	{
 		$this->form_validation->set_message('validate_email','Email address already exists, Your already registered, Please login');
 		return FALSE;
 	}
 	// If the previous process did not validate
 	// then return false.
 	$query->free_result();
 
 	return TRUE;
 }
 
 	
}
 

 

?>
