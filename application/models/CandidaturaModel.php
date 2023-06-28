<?php
  class CandidaturaModel extends CI_Model //CI_Model ya viene con el framework
  {
    function __construct()
    {
      // Reconocer a las clases
      parent::__construct();
    }

    //Nuevo PARA OBTENER EL ID
    function obtenerPorId($id_can){
      $this->db->where("id_can", $id_can);
      $candidato=$this->db->get("candidato");
      if ($candidato->num_rows()>0) {
        return $candidato->row();
      }
      return false;
    }
    //Funcion para insertar un instructor de MYSQL
    function insertar($datos){
      //Active Record en CodeIgniter
      return $this->db->insert("candidato",$datos);

    }
    //Funcion para consultar Candidatos
    function obtenerTodos(){
      $listadoCandidatos=$this->db->get("candidato"); //Devuelve un array   SIEMPRE VALIDAR CON UN IF
      if($listadoCandidatos->num_rows()>0){ //SI HAY DATOS     num_rows nos deuelve el numero de filas que haya
        return $listadoCandidatos->result();
      }else{ //NO HAY DATOS
        return false;
      }
    }
    function borrar($id_can){
      $this->db->where("id_can",$id_can);
      if ($this->db->delete("candidato")) {
        return true;
      } else {
        return false;
      }
    }

    //funcion para actualizar un cliente
    function actualizar($id_can,$datosEditados)
    {
      $this->db->where("id_can",$id_can);
      return $this->db->update('candidato',$datosEditados);
      }

  }// Cierre de la clase
 ?>
