<?php
class Data_model extends CI_Model
{
    public function getPaket()
    {
        $query = $this->db->get('paket');
        return $query->result_array();
    }
}