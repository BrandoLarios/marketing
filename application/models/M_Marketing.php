<?php
class M_Marketing extends CI_Model{

		function getUsuario($user,$pswd){
		$this-> db -> where('Usuario',$user);
		$this-> db -> where('Contraseña',$pswd);
		$query = $this-> db -> get('usuarios');

		return $query -> result_Array()[0];
	}

	function UsuariosRol(){
		$this->db->select('a.Nombre NomU,d.IdRol,d.Nombre NomR');
	    $this->db->from('usuarios a');
	    $this->db->join('roles d', 'a.Rol = d.IdRol');
	    $aResult = $this->db->get();

	    return $aResult->result_array();

	}
	
	function Camapañas(){
		$this->db->order_by('IdCampana','asc');
	    $aResult = $this->db->get('campañas');

	    return $aResult->result_array();

	}

	function CamapañasXCM($nombre){
		$this->db->where('CommunityManager',$nombre);
		$aResult = $this->db->get('campañas');
		return $aResult->result_array();
	}

	function GetCM(){
		$this->db->where('Rol',2);

		$aResult = $this->db->get('usuarios');

		return $aResult->result_Array();
	}

	function GetEmpresas(){
		$this->db->order_by('IdEmpresa','asc');
		 $aResult = $this->db->get('empresa');

	    return $aResult->result_array();

	}

	function save_Campa($datos){
		$this->db->insert('campañas',$datos);
	}

	function save_Empresa($datos){
		$this->db->insert('empresa',$datos);
	}

	function updateCampana($id,$datos){
		$this->db->where('IdCampana',$id);
		$this->db->update('campañas',$datos);
	}

	function UpdateEmpresa($id,$datos){
		$this->db->where('IdEmpresa',$id);
		$this->db->update('empresa',$datos);
	}

	function deleteCampana($id){
		$this->db->where('IdCampana',$id);
		$this->db->delete('campañas');
	}
	/*function getRoles(){
		$query = $this -> db -> get('usuarios');
		return $query -> result_Array();
	}
		function getProductos(){
		$query = $this -> db -> get('productos');

		return $query -> result_Array();
	}*/

	}
?>