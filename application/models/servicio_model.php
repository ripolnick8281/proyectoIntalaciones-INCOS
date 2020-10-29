<?php if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Servicio_model extends CI_Model{

public function listarservicio()
{
    $this->db->select('*');
    $this->db->from('servicio');
    return $this->db->get();
    
}

public function agregarservicio($data)
{
    $this->db->insert('servicio',$data);

    
}

public function recuperarservicio($id)
	{
		$this->db->select('*');
		$this->db->from('servicio');
		$this->db->where('idservicio',$id);
		return $this->db->get();
	}

public function modificarservicio($id,$data)
{
    $this->db->where('idservicio',$id);
    $this->db->update('servicio',$data);

    
}

public function Eliminadologicoservicio($id,$data)
{
    $this->db->where('idservicio',$id);
    $this->db->update('servicio',$data);

    
}


}