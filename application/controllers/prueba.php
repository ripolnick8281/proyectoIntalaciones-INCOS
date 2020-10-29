<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {



	public function test()
	{   $query=$this->db->get('servicio');
        $execonsulta=$query->result();
        print_r($execonsulta);
	}

	
}
