<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session_model extends CI_Model {

		public function sessionStart($data)
	{
		$this->db->where('username',$data['username']);
		$query=$this->db->get('Userdetails');
		  
	       	return $query->result();
	     
	     
    }

    
 }
