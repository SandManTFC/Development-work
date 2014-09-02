<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member_Reg_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
  $this->load->database();
 }
 
 public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('username'),
    'email'=>$this->input->post('email'),
    'password'=>md5($this->input->post('password')),
    'Age'=>$this->input->post('age'),
    'town'=>$this->input->post('town'),
    'postcode'=>$this->input->post('postcode'),
    'Gender'=>$this->input->post('gender')
  );
  $this->db->insert('member',$data);
 }
 
 
 
}
?>
