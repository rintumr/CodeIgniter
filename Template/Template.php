<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
* class in controller to implement template functionality
* @param null
* @return void
*/
class Template extends CI_Controller {

	/**
	*
	* function for template
	* @param null
	* @return void
	*/
	public function index()
	{

		$query = $this->db->get('Students');
		$output = $query->result_array();
		
		$data = array(
	                'blog_title'   => 'My Blog Title',
	                'blog_heading' => 'My Blog Heading',

	                'blog_entries' => $output
        	     );

        $this->parser->parse('templateview', $data);
    }
}