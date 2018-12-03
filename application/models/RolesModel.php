<?php

class RolesModel extends CI_Model{


    public function getUsersRoles () {
        return $this->db->query( 
            "SELECT u.id as id_user, r.name as name
            FROM (users u join user_roles ur ON u.id = ur.id_user) join roles r ON ur.id_role = r.id"
        )->result();
    }

    public function getUserRoles ($id) {
        $rs = $this->db->query( 
            "SELECT r.name 
            FROM (users u join user_roles ur ON u.id = ur.id_user) join roles r ON ur.id_role = r.id 
            WHERE u.id = $id"
        )->result_array();
        $array = array();
        foreach ($rs as $row) {
			$array[] = $row['name'];
		}
		return $array; 
    }

    public function updateUserRoles ($id,$roles) {
        //Borrar los roles del id del usuario para agregar los nuevos
        $this->db->query("DELETE FROM user_roles WHERE id_user = $id");

        if($roles['AA'] == '1'){
            $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES ($id, '1')");
        }
        if($roles['AE'] == '1'){
            $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES ($id, '2')");
        }
        if($roles['CM'] == '1'){
            $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES ($id, '3')");
        }
        if($roles['GC'] == '1'){
            $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES ($id, '4')");
        }
        if($roles['D'] == '1'){
            $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES ($id, '5')");
        }
        if($roles['C'] == '1'){
            $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES ($id, '6')");
        }
		/*foreach ($roles as $role => $allowed) {
            if($allowed){
                //Obtiene el id de los roles seleccionados
				$id_role = $this->db->query("SELECT id FROM roles WHERE name = '$role'")->row()->id_role;
                //Insertar los roles junto con el id del usuario
                $this->db->query("INSERT INTO user_roles (id_user, id_role) VALUES($id, $id_role)");
            }      
        }*/
    }
}