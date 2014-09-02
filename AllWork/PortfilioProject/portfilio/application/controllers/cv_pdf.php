<?php

class CV_pdf extends  CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	}
	
	
	function index() 
	{	
		$this->hello_world();
		$this->headers();
	}


	function hello_world()
	{
		$this->load->library('cezpdf');

		$this->cezpdf->ezText('Philip Lee -CV-2014', 12, array('justification' => 'center'));
		$this->cezpdf->ezSetDy(-10);

		$content = 'Philip lee
				    37
				
				More details';

		$this->cezpdf->ezText($content, 10);

		$this->cezpdf->ezStream();
	}
	
	
	
	
	function tables()
	{
		$this->load->library('cezpdf');
	
		$db_data[] = array('qualification' => 'BSc Open Degree(IT Studies)', 'year' => '2009' , 'university' => 'Open University');
		$db_data[] = array('qualification' => 'Diploma in Computing', 'year' => '2006', 'University' => 'Open University');
		$db_data[] = array('qualification' => 'Certificate in IT and Computing', 'year' => '2004', 'university' => 'Open University');
		//$db_data[] = array('Qualification' => 'City and Guilds level 2', 'Year' => '2006', 'College' => 'South Devon College');
	
		$col_names = array(
				'qualification' => 'Qualification',
				'year' => 'Year',
				'university' => 'University'
				//'college' => 'College'
		);
	
		$this->cezpdf->ezTable($table_data, $col_names, 'Qualifications', array('width'=>550));
		$this->cezpdf->ezStream();
	}
	
	
	function headers()
	{
		$this->load->library('cezpdf');
		$this->load->helper('pdf');
	
		prep_pdf(); // creates the footer for the document we are creating.
	
		$db_data[] = array('qualification' => 'BSc Open Degree(IT Studies)', 'year' => '2009' , 'university' => 'Open University');
		$db_data[] = array('qualification' => 'Diploma in Computing', 'year' => '2006', 'university' => 'Open University');
		$db_data[] = array('qualification' => 'Certificate in IT and Computing', 'year' => '2004', 'university' => 'Open University');
		$db_data[] = array('qualification' => 'City and Guilds level 2', 'year' => '2006', 'university' => 'South Devon College');
	
		$col_names = array(
				'qualification' => 'Qualification',
				'year' => 'Year',
				'university' => 'University'
				
	);
		$this->cezpdf->ezTable($db_data, $col_names, 'Qualifications', array('width'=>550));
		$this->cezpdf->ezStream();
	}

}

?>