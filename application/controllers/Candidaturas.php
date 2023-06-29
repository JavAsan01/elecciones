<?php
  class Candidaturas extends CI_Controller
  {
    function __construct()
    {
      parent:: __construct();
      //error_reporting(0);

      //Cargar aqui todos los modelos
      $this->load-> model('CandidaturaModel');
    }
    public function lista(){
      $data['candidaturas']=$this->CandidaturaModel->obtenerTodos();
      $this->load->view('header');
      $this->load->view('candidaturas/lista',$data);
      $this->load->view('footer');
    }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('candidaturas/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoCandidato=array(
        "cedula_can"=>$this->input->post('cedula_can'),
        "dignidad_can"=>$this->input->post('dignidad_can'),
        "apellidos_can"=>$this->input->post('apellidos_can'),
        "nombres_can"=>$this->input->post('nombres_can'),
        "edad_can"=>$this->input->post('edad_can'),
        "movimiento_can"=>$this->input->post('movimiento_can'),
        "ideologia_can"=>$this->input->post('ideologia_can'),
        "latitud_can"=>$this->input->post('latitud_can'),
        "longitud_can"=>$this->input->post('longitud_can')
      );
      if($this->CandidaturaModel->insertar($datosNuevoCandidato)){
        redirect('candidaturas/lista');
      }else{
        echo "<h1>ERROR AL INSERTAR</H1>"; //EMBEBER CODIGO
      }
    }

    //Funcion para eliminar Candidato
    public function eliminar($id_can){
      if ($this->CandidaturaModel->borrar($id_can)) {
        redirect('candidaturas/lista');
      } else {
        echo "ERROR AL BORRAR :(";
      }
    }

    //funcion renderiza vista editar con el instructor
    public function editar($id_can){
      $data["canEdit"]=$this->CandidaturaModel->obtenerPorId($id_can);
      $this->load->view('header');
      $this->load->view('candidaturas/editar', $data);
      $this->load->view('footer');
    }

    public function procesarActualizacion(){
      $datosEditados=array(
        "cedula_can"=>$this->input->post('cedula_can'),
        "dignidad_can"=>$this->input->post('dignidad_can'),
        "apellidos_can"=>$this->input->post('apellidos_can'),
        "nombres_can"=>$this->input->post('nombres_can'),
        "edad_can"=>$this->input->post('edad_can'),
        "movimiento_can"=>$this->input->post('movimiento_can'),
        "ideologia_can"=>$this->input->post('ideologia_can'),
        "latitud_can"=>$this->input->post('latitud_can'),
        "longitud_can"=>$this->input->post('longitud_can')
      );
      $id_can=$this->input->post("id_can");
      if ($this->CandidaturaModel->actualizar($id_can, $datosEditados)) {
        // $this->session->set_flashdata("confirmacion","Candidato actualizado exitosamente");
      } else {
        // $this->session->set_flashdata("error","Error al actualizar intente de nuevo");
      }
      redirect("Candidaturas/lista");
    }

  }//Cierre de la clase
 ?>
