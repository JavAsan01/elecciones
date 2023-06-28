<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //CASO DE SALIR ERROR CON LOS PATH, SALE ESTE MENSAJE

class Maps extends CI_Controller {
	//En el constructor se inicializa la clase y se hace la carga de los modelos
	function __construct()
  {
    parent::__construct();
		//Carga de los modelos
		$this->load->model("CandidatoModel");
  }

	public function mapaIG()
	{
		// $dataG["lugares"]= $this->CandidatoModel->obtenerTodos();
		$data["lugaresDer"]= $this->CandidatoModel->obtenerTodosDerecha();
		$data["lugaresIzq"]= $this->CandidatoModel->obtenerTodosIzquierda();
		$this->load->view('header');
		$this->load->view('maps/mapIG', $data); //Se mandan los datos "$data" a la vista
		$this->load->view('footer');
	}

	public function mapaG()
	{
		// $dataG["lugares"]= $this->CandidatoModel->obtenerTodos();
		$data["lugaresPre"]= $this->CandidatoModel->obtenerTodosPresidentes();
		$data["lugaresAsam"]= $this->CandidatoModel->obtenerTodosAsambleistas();
		$data["lugaresAsamP"]= $this->CandidatoModel->obtenerTodosAsambleistasP();
		$this->load->view('header');
		$this->load->view('maps/mapG', $data); //Se mandan los datos "$data" a la vista
		$this->load->view('footer');
	}
	public function mapaP()
	{
		$dataP["lugaresPre"]= $this->CandidatoModel->obtenerTodosPresidentes();
		$this->load->view('header');
		$this->load->view('maps/mapP', $dataP); //Se mandan los datos "$data" a la vista
		$this->load->view('footer');
	}
	public function mapaA()
	{
		$dataA["lugaresAsam"]= $this->CandidatoModel->obtenerTodosAsambleistas();
		$this->load->view('header');
		$this->load->view('maps/mapA', $dataA); //Se mandan los datos "$data" a la vista
		$this->load->view('footer');
	}
	public function mapaAP()
	{
		$dataAP["lugaresAsamP"]= $this->CandidatoModel->obtenerTodosAsambleistasP();
		$this->load->view('header');
		$this->load->view('maps/mapAP', $dataAP); //Se mandan los datos "$data" a la vista
		$this->load->view('footer');
	}
}//Cierre de la clase
