<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertionmodel extends CI_Model{

	
	public function insertUsers($credential)
	{
	//$this->db->set('id', $credential[])
		if($this->db->insert('Students',$credential))
		{
			return True;
		}
		else
		{
			return False;
		}
	}
}