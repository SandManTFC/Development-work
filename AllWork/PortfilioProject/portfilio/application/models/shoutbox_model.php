<?php


class Shoutbox_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	

	function getshout(){
		$shouts = $this->db->get('shouts');
		if($shouts->num_rows() > 0){foreach ($shouts->result() as $shout){
			$data[] = $shout;
		}
		return $data;
		}
	}


	function newshout(){
		$name=$_POST["name"];
		$shout=$_POST["shout"];
		$email=$_POST["email"];
		$ins_shout = array(
				'name'=>$name,
				'shout'=>$shout,
				'email'=>$email
		);
		$this->db->insert('shouts',$ins_shout);
	}
}
?>

