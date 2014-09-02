<?php

class Image extends CI_Controller{
    
	public $data = array();
	
	private function assignUsername($username)
	{
		$opath = "assets/uploads/original/users/".$username."/";
		$tpath = "assets/uploads/thumbs/users/".$username."/";
		$mpath = "assets/uploads/main/users/".$username."/";
		$this->data = array(
	
				'dir' => array(
						
				        
						"original" => $opath,
						"thumb" => $tpath,
						"main" => $mpath,
				),
				'total' => 0,
				'images' => array(),
				'error' => ''
		);
	}
   
	
    
    function __construct()
    {
    	parent::__construct();
    }
    
	public function index($start = 0)
	{
		
		$user = $this->session->userdata('username');
		
		$opath = "assets/uploads/original/users/".$user."/";
		$tpath = "assets/uploads/thumbs/users/".$user."/";
		$mpath = "assets/uploads/main/users/".$user."/";
		
		if(!is_dir($mpath)) //create the folder if it's not already exists
		{
			mkdir($opath,0755,TRUE);
			mkdir($tpath,0755,TRUE);
			mkdir($mpath,0755,TRUE);
		}
		else {
			$this->assignUsername($user);
		}
		$this->assignUsername($user);
        if ($this->input->post('btn_upload')) {
            $this->upload();
        }

        $this->load->library('pagination');

        $c_paginate['base_url'] = base_url('image/index');
        $c_paginate['per_page'] = '9';
        $finish = $start + $c_paginate['per_page'];
        
        if (is_dir($this->data['dir']['thumb']))
        {
            $i = 0;
            if ($dh = opendir($this->data['dir']['thumb'])) {
                while (($file = readdir($dh)) !== false) {
                    // get file extension
                    $ext = strrev(strstr(strrev($file), ".", TRUE));
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png') {
                        if ($start <= $this->data['total'] && $this->data['total'] < $finish) {
                            $this->data['images'][$i]['thumb'] = $file;
                            $this->data['images'][$i]['original'] = str_replace('thumb_', '', $file);
                            $i++;
                        }
                        $this->data['total']++;
                    }
                }
                closedir($dh);
            }
        }

        $c_paginate['total_rows'] = $this->data['total'];

        $this->pagination->initialize($c_paginate);

		$this->load->view('images/index', $this->data);
	}

    private function upload()
    {
        $c_upload['upload_path']    = $this->data['dir']['original'];
        $c_upload['allowed_types']  = 'gif|jpg|png|jpeg|x-png';
        $c_upload['max_size']       = '500';
		$c_upload['max_width']      = '1600';
		$c_upload['max_height']     = '1200';
        $c_upload['remove_spaces']  = TRUE;

        $this->load->library('upload', $c_upload);
        
        if ($this->upload->do_upload()) {
            
            $img = $this->upload->data();
            
            // create thumbnail
            $new_image = $this->data['dir']['thumb'].'thumb_'.$img['file_name'];
           
            $c_img_lib = array(
                'image_library'     => 'gd2',
                'source_image'      => $img['full_path'],
                'maintain_ratio'    => TRUE,
                'width'             => 100,
                'height'            => 100,
                'new_image'         => $new_image
            );
            
            $this->load->library('image_lib', $c_img_lib);
            $this->image_lib->resize();
        } else {
            $this->data['error'] = $this->upload->display_errors();
        }
    }
    
    function is_empty_dir($dir)
    {
    	if (($files = @scandir($dir)) && count($files) <= 2) {
    		return true;
    	}
    	return false;
    }
    
    public function main($ori_img)
    {
    	$user = $this->session->userdata('username');
    	$this->assignUsername($user);
    	
    	$gal_file = $this->data['dir']['thumb'].'thumb_'.$ori_img;
    	$gal_dest = "multiple-slideshows/images/slideshow1/".$ori_img."";
    	copy($gal_file, $gal_dest);
    	
    	$filename = $this->data['dir']['original'].$ori_img;
    	$destination = $this->data['dir']['main'].$ori_img;
    	$dir = $this->data['dir']['main'];
    	
    	
    	if ($this->is_empty_dir($dir)) 
    	{
    		copy($filename, $destination);//"the folder is empty";
    		
    	}
    	else
    	{
    		foreach($files as $file){ // iterate files
    			if(is_file($file))
    				unlink($file); // delete file
    			copy($filename, $destination);
    			
    		}
    		
    	}
    	//copy($filename, $destination);
    	//rename($filename, $destination);
    	//move_uploaded_file ($filename ,$destination);
    	redirect('/image');
    	 
    }
    

    public function delete($ori_img)
    {
    	$user = $this->session->userdata('username');
    	$this->assignUsername($user);
    	unlink($this->data['dir']['original'].$ori_img);
    	unlink($this->data['dir']['thumb'].'thumb_'.$ori_img);
    	unlink($this->data['dir']['main'].$ori_img);
    	redirect('/image');
       
    }
}

/* End of file image.php */
/* Location: ./system/application/controllers/image.php */