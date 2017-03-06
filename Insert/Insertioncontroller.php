<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in controller to perform insertion 
* @param void
* @return null
*
*/
 class Insertioncontroller extends CI_Controller {

	/**
	*
	* function to insert into db
	* @param void
	* @return null
	*
	*/
	public function insert()
	{
		if($this->input->post())		{
			
			$name = $this->input->post('name');
			$id = $this->input->post('id');
			$rno = $this->input->post('rollno');
			
			$credential =array(
				'Name' => $name,
				'Id' => $id,
				'Roll_no' => $rno
				);
			
			$this->load->model('Insertionmodel');
			
			if($this->Insertionmodel->insertUsers($credential)){

				echo "Data Inserted";
			}else{
				echo "Insertion failed";

			}
			
		}else{
			$this->load->view('insert');
		}

	}

}
