<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
* class in model for Ajax
* @param null
* @return void
*
*/
class Ajaxmodel extends CI_Model {

	/**
	*
	* function to update
	* @param post values
	* @return bool
	*
	*/
	public function ajaxUpdate($credentials,$username){
		$this->db->where('username', $username);

	    if($this->db->update('Userdetails',$credentials)){
            return true;
		}else{
			return false;
		} 
			
	}
		
}
