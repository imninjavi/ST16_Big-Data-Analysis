<?php

class Bdata_model extends CI_Model
{
    private $_table = "bdata";

    public function fetchData() {

        return $this->db->get($this->_table);
    }

    public function getCountry() {

        return $this->db->query("SELECT DISTINCT country FROM bdata;");
    }

    public function limitData() {

        $this->db->limit(200, 10);
        return $this->db->get($this->_table)->result();
    }
}
