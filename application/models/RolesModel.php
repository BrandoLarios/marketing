<?php

class RolesModel extends CI_Model{

    public function getUserRoles ($id) {
        return $this->db->query( 
            "SELECT r.name 
            FROM (users u join user_roles ur ON u.id = ur.id_user) join roles r ON ur.id_role = r.id 
            WHERE u.id = $id"
        )->result_array(); 
    }

    public function updateUserRoles ($id,$roles) {
        //Borrar los roles del id del usuario para agregar los nuevos
        $this->db->query("DELETE FROM user_roles WHERE id_user = $id");

		foreach ($roles as $role) {
                //Obtener el id de los roles seleccionadod
				$id_role = $this->db->query("SELECT id FROM roles WHERE name = '$role'")->row()->id_role;
                //Insertar los roles junto con el id del usuario
				$this->db->query("INSERT INTO users_roles(id_user, id_role) VALUES($id, $id_role)");
			}
		}
        
    }
}