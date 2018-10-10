<?php

class AdminModel extends CI_Model{

    public function add ($user) {
        return $this->db->query("INSERT INTO users(
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

            username,     
            password,     
            register_date,
            deleted      
        ) 
        VALUES (
            '$user[name]',
            '$user[lastname]',
            '$user[email]',
            '$user[CURP]',
            '$user[phone]', 
            '$user[cellphone]', 
             
            '$user[state]', 
            '$user[municipality]', 
            '$user[colony]', 
            '$user[direction]', 
            $user[cp],

            '$user[contract_date]', 
            '$user[RFC]', 
            '$user[inhour]', 
            '$user[outhour]',

            '$user[username]', 
            '$user[password]', 
            '$user[register_date]', 
            '$user[deleted]'
        )");
    }

    public function getall() {
        return $this->db->query( 
            "SELECT name,lastname,email,CURP,RFC,contract_date
            FROM users
            order by register_date desc"
        )->result();
    }
}