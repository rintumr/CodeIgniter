<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in controller to search the db with validation
* @param void
* @return null
*
*/
class Searchvalcontroller extends CI_Controller {

	/**
	* Function to implement search functionality
	* @param void
	* @return null
	*/	
	public function search()
	{
		if($this->input->post()) {
			$this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Name','required|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('id','Id', 'required|max_length[2]'); 

            //$this->load->view('searchval');
		     $keyword = $this->input->post('search');
			 $id= $this->input->post('id');
			 $name= $this->input->post('name');
			 $credential =array('Id' => $id,
			                   'Name' => $name );

            if($this->form_validation->run() == FALSE){
            	echo "Invalid Search";
            	
            }else{
            	
			    $this->load->model('Searchval_model');
			    $data['result']=$this->Searchval_model->searchUsers($credential);
			
			    $this->load->view('search_result',$data); 
		    }  
		}else{
		
		$this->load->view('searchval');
	}
	
	}

}
