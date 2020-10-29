<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login_vista');
	}


	public function inicio()
	{
		$this->load->view('inicio_vista');
	}

	public function listar()
	{   $listaservicio=$this->servicio_model->listarservicio();
		$data['servicio']=$listaservicio;
		$this->load->view('listar_vista',$data);
	}

	public function registrar()
	{
		$this->load->view('registrar_servicio');
	}

	
	public function registrarbd() 
	{ 
	    $data['servicio']=$_POST['servicio'];
		$data['nombreCliente']=$_POST['nombreCliente'];
		$data['telefono']=$_POST['telefono'];
		$this->servicio_model->agregarservicio($data);
		redirect('welcome/listar', 'refresh');
	}

	public function modificar()
	{
		$id=$_POST['id'];
		$data['infoservicio']=$this->servicio_model->recuperarservicio($id);
		$this->load->view('modificarservicio_vista',$data);
	}

	public function modificarbd()
	{
		$id=$_POST['id'];
		$servicio=$_POST['servicio'];
		$nombre=$_POST['nombreCliente'];
		$telefono=$_POST['telefono'];
		
		$data['servicio']=$servicio;
		$data['nombreCliente']=$nombre;
		$data['telefono']=$telefono;
		
		
		$this->servicio_model->modificarservicio($id,$data);
		redirect('welcome/listar','refresh');
	}
	 
	public function eliminarservicio()
	{
		$id=$_POST['id'];
		$data['estado']=0;
		$this->servicio_model->Eliminadologicoservicio($id,$data);
		redirect('welcome/listar','refresh');
	
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */