<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in controller to update db
*
*/
class UpdateModel extends CI_Model{
/**
* function to update the db
* @param post values
* @return bool
* 
*/
	
	public function updateUsers($credential,$id)
	{
		$this->db->where('ID',$id);
		if($this->db->update('Students',$credential)){
			return true;
		}
		else{		
			return false;
		}
	}
}