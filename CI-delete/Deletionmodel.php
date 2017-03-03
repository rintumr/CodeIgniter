<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in model for deletion
* @param void
* @return null
*
*/
class Deletionmodel extends CI_Model{

	/**
	*
	* function to perform delete
	* @param id
	* @return bool
	*
	*/
	public function deleteUser($id)
	{
		$this->db->where('Id',$id);
		if($this->db->delete('Students'))
		{
			return True;
		}
		else
		{		
			return False;
		}
	}
}