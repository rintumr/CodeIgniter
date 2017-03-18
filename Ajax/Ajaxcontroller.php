<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
* class in controller for implementing Ajax
* @param null
* @return void
*
*/
class Ajaxcontroller extends CI_Controller {

	/**
	*
	* function for update page
	* @param null
	* @return void
	*
	*/
	public function index()
	{
		$this->load->view('ajaxview');
	}

   	/**
   	*
   	* function to perform the updation
   	* @param null
   	* @return void
   	*
   	*/
   	public function update()
	{
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$credentials=array(
				'username'=>$username,
				'password'=>$password
				);

			$this->load->model('Ajaxmodel');
           
			if($this->Ajaxmodel->ajaxUpdate($credentials,$username)){
				$message="Updated sucessfully";
				echo $message;
			 }else{
			 	$message="Sorry your data has not been updated.";
			 	echo $message;
			 } 
}
}