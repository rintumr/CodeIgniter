<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in models to search the model
* @param void
* @return null
*
*/
class Searchfulltext_model extends CI_Model{
/**
*
* function to search the db
* @param array
* @return result
*
*/
	public function searchText($title)
	{
        $this->db->where('MATCH (Title) AGAINST ("'.$title.'")');
		$query=$this->db->get('Details');
		// var_dump($query);die();
		
		return $query->result();
   
	}
}
