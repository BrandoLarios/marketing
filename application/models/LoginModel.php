<?php

class LoginModel extends CI_Model{

    public function getall () {
        return $this->db->query( 
            "SELECT *
            FROM users"
        )->result();
    }

    public function getid ($usename) {
        return $this->db->query( 
            "SELECT *
            FROM users
            WHERE username = '$usename'"
        )->row();
    }

    public function getroles ($id) {
        $rs = $this->db->query( 
            "SELECT r.letters
            FROM (users u join user_roles ur ON u.id = ur.id_user) join roles r ON ur.id_role = r.id 
            WHERE u.id = $id"
        )->result_array();
        $array = array();
        foreach ($rs as $row) {
			$array[] = $row['letters'];
		}
		return $array; 
    }
}