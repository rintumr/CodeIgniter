<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* class in model to implement pagination
* @param null
* @return void
*
*/

class Pagination_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    /**
    *
    * function to get the count of db
    * @param null
    * @return void
    *
    */

    public function record_count() {
        return $this->db->count_all("Countries");
    }

    /**
    *
    * function to fetch the data
    * @param null
    * @return void
    *
    */
    
    public function fetch_countries($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("Countries");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}