<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in models to search the model
* @param void
* @return null
*
*/
class Searchval_model extends CI_Model{
/**
*
* function to search the db
* @param array
* @return result
*
*/
	public function searchUsers($credential)
	{
		$this->db->where('Name',$credential['Name']);
		$query=$this->db->get('Students');
		
		return $query->result();
	}
}
