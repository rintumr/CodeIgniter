<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in model for file upload
* @param null
* @return void
*/

class Uploadfile_model extends CI_Model{
	
	/**
	*
	* function to update DB with uploaded filename
	* @param array
	* @return bool
	*
	*/

	public function uploadUsers($credential)
	{
		
		if($this->db->insert('Uploads',$credential)){
			return true;
		}else{
			return false;
		}


	}

}
