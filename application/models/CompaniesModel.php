<?php

class CompaniesModel extends CI_Model{
    public function getall () {
        return $this->db->query("SELECT * FROM companies");
    }

    public function add () {
        return $this->db->query("INSERT INTO ");
    }
}