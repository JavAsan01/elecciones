<?php
/*MODEL DE LA TABLA Candidato*/
class CandidatoModel extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
//Funcion para consultar Ubicaciones
  function obtenerTodos()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoC=$this->db->get("candidato");
    //Se agrega una condicional, una validacion con if.
    if ($listadoC->num_rows()>0)
    {
      return $listadoC->result();
    }
    return false;
  }

  function obtenerTodosIzquierda()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('ideologia_can','Izquierda')->get("candidato");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
  function obtenerTodosDerecha()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('ideologia_can','Derecha')->get("candidato");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }

  function obtenerTodosPresidentes()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('dignidad_can','Presidente')->get("candidato");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
  function obtenerTodosAsambleistas()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('dignidad_can','Asambleista Nacional')->get("candidato");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
  function obtenerTodosAsambleistasP()
  {
    //Aqui se usa la funcion get donde se obtienen los datos y se llama la tabla de la base de datos.
    $listadoP=$this->db->select()->where('dignidad_can','Asambleista Provincial')->get("candidato");
    //Se agrega una condicional, una validacion con if.
    if ($listadoP->num_rows()>0)
    {
      return $listadoP->result();
    }
    return false;
  }
}
?>
