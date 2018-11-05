<?php

class UsersModel extends CI_Model{

    public function add ($user) {
        return $this->db->query(
            "INSERT INTO users(
            name,         
            lastname,     
            email,        
            CURP,         
            phone,        
            cellphone,

            state,        
            municipality, 
            colony,       
            direction,    
            cp, 

            contract_date,
            RFC,          
            inhour,       
            outhour, 
    
            password,     
            register_date,
            deleted      
            ) VALUES (
            '$user[name]',
            '$user[lastname]',
            '$user[email]',
            '$user[CURP]',
            $user[phone], 
            $user[cellphone], 
             
            '$user[state]', 
            '$user[municipality]', 
            '$user[colony]', 
            '$user[direction]', 
            $user[cp],

            '$user[contract_date]', 
            '$user[RFC]', 
            '$user[inhour]', 
            '$user[outhour]',

            '$user[password]', 
            now(), 
            '$user[deleted]'
            )"
        );
    }

    public function getall () {
        return $this->db->query( 
            "SELECT *
            FROM users
            order by register_date desc"
        )->result();
    }

    public function getuser ($id) {
        return $this->db->query(
            "SELECT * 
            FROM users
            WHERE id=$id"
        )->row();
    }

    public function modify ($user,$id) {
        return $this->db->query(
            "UPDATE users SET 

            name = '$user[name]',         
            lastname = '$user[lastname]',     
            email = '$user[email]',        
            CURP = '$user[CURP]',         
            phone = $user[phone],        
            cellphone = $user[cellphone],

            state = '$user[state]',        
            municipality = '$user[municipality]', 
            colony = '$user[colony]',       
            direction = '$user[direction]',    
            cp = $user[cp], 

            contract_date = '$user[contract_date]',
            RFC = '$user[RFC]',          
            inhour = '$user[inhour]',       
            outhour = '$user[outhour]'

            WHERE id = $id"
        );
    }

    public function delete ($id) {
        return $this->db->query(
            "UPDATE users SET deleted = '1' WHERE id = $id"
        );
    }

    public function active ($id) {
        return $this->db->query(
            "UPDATE users SET deleted = '0' WHERE id = $id"
        );
    }
}