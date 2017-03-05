<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*
* class in controller to perform deletion
* @param void
* @return null
*
*/
class Deletioncontroller extends CI_Controller {

	/**
	*
	*function to implement delete functionality
	* @param void
	* @return null
	*
	*/
	public function delete()
	{
		if($this->input->post())
		{

			
			$id = $this->input->post('id');
			
			$this->load->model('Deletionmodel');
			if($this->Deletionmodel->deleteUser($id)){
				echo "Data Deleted";
			}else{
				echo "Deletion failed";

			}
		}else{
			$this->load->view('deleteview');
		}

	}

}
