<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Contact extends CI_Controller {

  private $_status = array('status' => NULL, 'message' => NULL);
  
  function __construct()
  {
  	parent::__construct();
  	$this->load->helper('url');
  	$this->load->helper('form');
  	$this->load->library(array('smtp','phpmailer'));
  	$this->load->library('form_validation');
  
  }
  
  
  

  public function index()
  {
    $this->load->view('contact_form_view');
  }

  public function save_stuff(){

    $data = array();

    $this->form_validation->set_rules('field_1','Field 1', 'trim|required');

    if($this->form_validation->run() == FALSE){
      $this->_status['status']  = "error";
      $this->_status['message'] ="boo";
      $this->load->view('contact_form_error_view','',TRUE);
    }
    else {
      /*
       * Execute or call your save routine here
       */
      $this->_status['status']  = "success";
      $this->_status['message'] = "<p>Hooray! Your STUFF was saved.</p>";
    }

    echo json_encode($this->_status);
  }

}
?>