<?php

class Search_form_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	// --------------------------------------------------------------------

      /** 
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	function SaveForm($form_data)
	{
		$user = $this->session->userdata('username');
		
		$this->db->where('username', $user);
		
		
		// Run the query
		$query = $this->db->get('member_search_saved');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{	
			$this->db->where('username', $user);
			$this->db->update('member_search_saved', $form_data);
			
		}
		else
		 {
		$this->db->insert('member_search_saved', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	   }
	}
	

	function getDistance($lat1, $long1, $lat2, $long2)
	{
	
	#$earth = 6371; #km change accordingly
	$earth = 3960; #miles
	
	#Point 1 cords
	$lat1 = deg2rad($lat1);
	$long1= deg2rad($long1);
	
	#Point 2 cords
	$lat2 = deg2rad($lat2);
	$long2= deg2rad($long2);
	
	#Haversine Formula
	$dlong=$long2-$long1;
	$dlat=$lat2-$lat1;
	
	$sinlat=sin($dlat/2);
	$sinlong=sin($dlong/2);
	
	$a=($sinlat*$sinlat)+cos($lat1)*cos($lat2)*($sinlong*$sinlong);
	
	$c=2*asin(min(1,sqrt($a)));
	
	$d=round($earth*$c);
	
	return $d;
	
	}
	
	function distCalc($pc1_full,$pc2_full) {
	
	
	#Convert the post code to upper case and trim the variable
	$pc1_full = strtoupper(trim($pc1_full));
	
		#Remove any spaces
		$pc1_full = str_replace(" ","",$pc1_full);
	
		#Trim the last 3 characters off the end
		$pc1 = substr($pc1_full,0,strlen($pc1_full)-3);
	
		#Convert the post code to upper case and trim the variable
		$pc2_full = strtoupper(trim($pc2_full));
	
		#Remove any spaces
		$pc2_full = str_replace(" ","",$pc2_full);
	
		#Trim the last 3 characters off the end
		$pc2 = substr($pc2_full,0,strlen($pc2_full)-3);
	
	
	
		$sql="SELECT * FROM `hwz_postcodes` WHERE `outcode` = '$pc1'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
	
		$pc1_lat=$row['latitude'];
		$pc1_long=$row['longitude'];
	
	
		$sql="SELECT * FROM `hwz_postcodes` WHERE `outcode` = '$pc2'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
	
		$pc2_lat=$row['latitude'];
		$pc2_long=$row['longitude'];
	
		//echo "<br/>".$pc1."<br/>  ".$pc1_lat."<br/>  ".$pc1_long;
		//echo "<br/>".$pc2."<br/>  ".$pc2_lat."<br/>  ".$pc2_long;
	
		$distance =  $this->search_form_model->getDistance($pc1_lat, $pc1_long, $pc2_lat, $pc2_long);
	
		//echo "<br/>Distance:".$distance;
	
		return $distance;
	
	}
	
	
	function PopulateSearchForm()
	{
		$user = $this->session->userdata('username');
		
		$this->db->where('username', $user);
		
		
		// Run the query
		$query = $this->db->get('member_search_saved');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
	}
	
	
	
	function SearchMembers()
	{
		// grab user input
		//$my_gender = $this->security->xss_clean($this->input->post('my_gender'));
		$looking_for_gender = $this->security->xss_clean($this->input->post('looking_for_gender'));
		$age_from = $this->security->xss_clean($this->input->post('age_from'));
		$age_to = $this->security->xss_clean($this->input->post('age_to'));
		$member_postcode = $this->security->xss_clean($this->input->post('postcode'));
		$member_distance = $this->security->xss_clean($this->input->post('distance'));
		
		
		
		// Prep the query
		
		$this->db->where('Gender', $looking_for_gender);
		$this->db->where('Age >=', $age_from);
		$this->db->where('Age <=', $age_to);
		// Run the query
		$query = $this->db->get('member');
		// Let's check if there are any results
		
		
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{ 		
	                   
	            		return $query->result();                  
	          }
	             	     
		// If the previous process did not validate
		// then return false.
		return false;
	   }
		
		
		
		
	}
}

?>

