<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
* class in controller to implement Pagination
* @param null
* @return void
*
*/

class Pagination_controller extends CI_Controller 
{
    /**
    *
    * constructor for loading
    *
    */

    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("Pagination_model");
        $this->load->library("pagination");
    }

    /**
    *
    * function to perform pagination
    * @param null
    * @return void
    *
    */
    
    public function page() {
        $config = array();
        $config["base_url"] = base_url() . "index.php/pagination_controller/page";
        $config["total_rows"] = $this->Pagination_model->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Pagination_model->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("paginationview", $data);
    }
}