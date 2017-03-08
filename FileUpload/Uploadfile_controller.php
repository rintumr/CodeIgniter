<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in controller for file upload
* @param null
* @return void
*
*/	

class Uploadfile_controller extends CI_Controller {
	
	/**
	*
	* function to perform file upload
	* @param null
	* @return void
	*
	*/
	
	public function do_upload()
	{
		if($this->input->post()){
			
	     $config['upload_path'] = 'assets/';  
	     $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf|doc|txt'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
			 
			$filename= $this->input->post('filename');
			$userfile = $this->input->post('userfile');
			$credential= array
				('Fname' =>$filename
					);
            
	        if (!$this->upload->do_upload('userfile')) {
	             var_dump($this->upload->display_errors());die;
                 $error = array('error' => $this->upload->display_errors()); 
                 $this->load->view('uploadfile', $error); 
                 echo "Upload Failed!!!";
         
            }else{ 
			    $this->load->model('Uploadfile_model');
		         
                $data = array('upload' => $this->upload->data()); 
		       if($this->Uploadfile_model->uploadUsers($credential)){
                   $this->load->view('uploadsuccess'); 
		       }else{
			       echo "Upload Failed!!!";
			       $this->load->view('uploadfile');
		       }
		    }
			
		}else{
			$this->load->view('uploadfile');
		}					


	 }
}