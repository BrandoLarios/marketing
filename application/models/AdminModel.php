<?php

class AdminModel extends CI_Model{

    public function adduser ($user) {
        $this->db->query("INSERT INTO users(
            name,
            lastname,
            CURP,
            RFC,
            email,
            username,
            password,
            contract_date,
            register_date,
            state,
            municipality,
            direction,
            cp,
            phone,
            cellphone,
            deleted
        ) 
        VALUES (
            '$user[name]',
            '$user[lastname]',
            '$user[CURP]',
            '$user[RFC]',
            '$user[email]',
            '$user[username]',
            '$user[password]',
            '$user[contract_date]',
            now(),
            '$user[state]',
            '$user[municipality]',
            '$user[direction]',
            '$user[cp]',
            '$user[phone]',
            '$user[cellphone]',
            '$user[deleted]'
        )");
        
    }

}