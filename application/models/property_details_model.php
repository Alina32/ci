<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_details_model extends CI_Model {

    private $table_name = 'property_details';

    public function get_property_details()
    {
        return $this->db->from($this->table_name)->limit(1)->get()->result_array(); 
    }
   public function insert_property_details($data) {
    $this->db->insert($this->table_name, $data);
}
}