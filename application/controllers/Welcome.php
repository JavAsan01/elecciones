<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //CASO DE SALIR ERROR CON LOS PATH, SALE ESTE MENSAJE
class Welcome extends CI_Controller {
	//En el constructor se inicializa la clase y se hace la carga de los modelos
	function __construct()
  {
    parent::__construct();
		//Carga de los modelos
		// $this->load->model("UbicacionModel");
  }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	// public function index()
	// {
	// 	$data["lugares"]= $this->LugarModel->obtenerTodos();
	// 	$this->load->view('welcome_message', $data); //Se mandan los datos "$data" a la vista welcome_message
	// }
}//Cierre de la clase
