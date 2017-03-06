<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
	*
	* class in controller to update
	* loads array credential to model
	*
	*/	
class Updatecontroller extends CI_Controller {
	
	/**
	*
	* function to update Students table
	*@param void
	*@return null
	*
	*/
	public function update()
	{
		if($this->input->post()){

			$name = $this->input->post('name');
			$id = $this->input->post('id');
			$rno = $this->input->post('rollno');
			$credential =array(
				'Name' => $name,
				'Roll_no' => $rno
				);

			$this->load->model('UpdateModel');
			if($this->UpdateModel->updateUsers($credential,$id)){
				echo "Data Updated";
			}else{
				echo "Updation failed";
			}
		}else{
			$this->load->view('updateview');
		}

	}

}
