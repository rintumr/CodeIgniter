<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in controller to search the db with validation
* @param void
* @return null
*
*/
class Searchfulltext_controller extends CI_Controller {

	/**
	* Function to implement search functionality
	* @param void
	* @return null
	*/	
	public function search()
	{
		if($this->input->post()) {
			$this->load->library('form_validation');

            $this->form_validation->set_rules('title', 'title','required|min_length[2]');
            
            
		     //$keyword = $this->input->post('search');
			 $title= $this->input->post('title');
            if($this->form_validation->run() == FALSE){

            	$this->load->view('searchview');
            	
            }else{
            	
			    $this->load->model('Searchfulltext_model');
			    $data['result']=$this->Searchfulltext_model->searchText($title);
			 // var_dump($data);die();

			    $this->load->view('fulltextview',$data); 
		    }  
		}else{
		
		$this->load->view('searchview');
	}
	
	}

}
