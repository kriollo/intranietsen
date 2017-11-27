<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Horasextra
 *
 * @author Felipe Andrade V. <jjara@wys.cl>
 */

class Horasextra extends Models implements IModels {
  /**
   * Característica para establecer conexión con base de datos.
   */
  use DBModel;

    // Contenido del modelo...

    public function hora_extra() : array {
      try{

      global $http;
        $id_user = $http->request->get('iduser');

        $this->db->query("INSERT INTO tbl_horasextra(fecha, rut, hora_desde, hora_hasta, solicitante, motivo, id_user)
        SELECT fecha, rut, hora_desde, hora_hasta, solicitante, motivo, id_user
        FROM tmp_horasextra WHERE id_user='$id_user'
        ;");
        $this->db->query("DELETE FROM tmp_horasextra WHERE id_user='$id_user';");

        return array('success' => 1, 'message' => 'Peticion de horas extra exitosa');
    } catch (ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
    }
    }
    public function tmp_hora_extra() : array {
        try {
          global $http;

          # Obtener los datos $_POST
          $fecha = $http->request->get('fecha');
          $rut = $http->request->get('rut');
          $fechad = $http->request->get('fechad');
          $fechah = $http->request->get('fechah');
          $solicitante = $http->request->get('nombre');
          $motivo = $http->request->get('motivo');
          $iduser = $http->request->get('iduser');

          if ($this->functions->e($solicitante,$rut,$motivo, $fechad, $fechah)) {
              throw new ModelsException('Todos los datos son necesarios');
          }

          # Verificar Rut
          $this->checkRut($rut);

          #inserta la solicitud a la tbl temporal
          $this->db->insert('tmp_horasextra',array(
            'fecha'=> $fecha,
            'rut' => $rut,
            'hora_desde' => $fechad,
            'hora_hasta' => $fechah,
            'solicitante' => $solicitante,
            'motivo' => $motivo,
            'id_user' => $iduser
          ));
          //
          return array('success' => 1, 'message' => 'Peticion de horas extra exitosa');
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
    }
    public function modificar(): array {
    try {
      global $http;


      #Obtener los datos $_POST
      $fecha = $http->request->get('fecha');
      $fechad = $http->request->get('fechad');
      $fechah = $http->request->get('fechah');
      $motivo = $http->request->get('motivo');
      $id = $http->request->get('id');


      if ($this->functions->e($motivo, $fechad, $fechah)) {
          throw new ModelsException('Todos los datos son necesarios');
      }
      $this->db->update('tbl_horasextra',array(
        'fecha'=> $fecha,
        'fechad' => $fechad,
        'fechah' => $fechah,
        'motivo' => $motivo
      ),"id='$id'",'LIMIT 1');
      //
      return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
    }catch (ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
    }
  }
  public function aprobar(): array {
  try {
    global $http;


    #Obtener los datos $_POST
    $aprobar = "Aprobada";
    $motivo = $http->request->get('motivo_respuesta');
    $id = $http->request->get('id_respuesta');


    if ($this->functions->e($motivo)) {
        throw new ModelsException('Ingrese un motivo');
    }
    $this->db->update('tbl_horasextra',array(
      'estatus' => $aprobar,
      'motivo' => $motivo
    ),"id='$id'",'LIMIT 1');
    //
    return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
  }
  }
  public function rechazar(): array {
  try {
    global $http;


    #Obtener los datos $_POST
    $aprobar = "Rechazada";
    $motivo = $http->request->get('motivo_respuesta');
    $id = $http->request->get('id_respuesta');


    if ($this->functions->e($motivo)) {
        throw new ModelsException('Ingrese un motivo');
    }
    $this->db->update('tbl_horasextra',array(
      'estatus' => $aprobar,
      'motivo' => $motivo
    ),"id='$id'",'LIMIT 1');
    //
    return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
  }
  }
  public function eliminar() : array {
      try {
          global $http;

          # Obtener los datos $_POST
          $id = $http->request->get('id_solicitudhx');

          # Elimina perfil
          $this->db->delete('tmp_horasextra',"id='$id'"," LIMIT 1");

          //return array('success' => 1, 'message' => 'Eliminación éxitosa.');
          return array('success' => 1, 'message' => 'Eliminación éxitosa.');
      } catch (ModelsException $e) {
          return array('success' => 0, 'message' => $e->getMessage());
      }
  }

  // public function eliminar() : array {
  //     try {
  //         global $http;
  //
  //         # Obtener los datos $_POST
  //         $id = $http->request->get('id_solicitudhx');
  //
  //         # Elimina perfil
  //         $this->db->delete('tbl_horasextra',"id='$id'"," LIMIT 1");
  //
  //         //return array('success' => 1, 'message' => 'Eliminación éxitosa.');
  //         return array('success' => 1, 'message' => 'Eliminación éxitosa.');
  //     } catch (ModelsException $e) {
  //         return array('success' => 0, 'message' => $e->getMessage());
  //     }
  // }
    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
    }

    /**
      * __destruct()
    */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
    public function gethx(string $select = '*',string $condicion = '1=1'){
      if ($select === '*')
      {
        return $this->db->select($select,'tbl_horasextra',$condicion,'ORDER BY id DESC');
      }else{
        return $this->db->select($select,'tbl_horasextra',$condicion,'LIMIT 1');
      }
    }
    public function gethxtmp(string $id_user){
        return $this->db->select('*','tmp_horasextra','id_user='.$id_user,'ORDER BY id DESC');
    }
    public function gethxid(int $id,string $select = '*'){
      return $this->db->select($select,'tbl_horasextra',"id='$id'",'LIMIT 1');
    }
    public function buscar_coincidencia(){
  global $http;
  $busqueda=$http->request->get('busca');

  $query=$this->db->query_select("select * from tblpersonal where rut like '$busqueda%' || nombres like '%$busqueda%' limit 1 ");
  if ($query == true){
      return array('success' => 0, 'nombre' => $query[0][2], 'rut' => $query[0][1]);
      # code...
  }else{
    return array('success' => 1, 'message' => 'Datos no encontrados');
    }
  }
  public function getdatos(string $select = '*',string $filtro) {
      return $this->db->select($select,'tblpersonal',$filtro);
  }
  /**
   * Verifica el rut introducido existe en la db
   *
   * @param string $rut: Rut del trabajador
   *
   */
  private function checkRut(string $rut) {
      # Existencia de email
      $rut = $this->db->scape($rut);
      $query = $this->db->select('rut', 'tmp_horasextra', "rut='$rut'", 'LIMIT 1');
      if (false !== $query) {
          throw new ModelsException('El Rut introducido ya existe.');
      }
  }
}
