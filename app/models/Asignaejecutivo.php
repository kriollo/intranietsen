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
 * Modelo Asignaejecutivo
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Asignaejecutivo extends Models implements IModels {


    // Contenido del modelo...
  use DBModel;

    /**
      * __construct()
    */

    public function getcargos(){
        return $this->db->select('*','tblcargos');
    }

    public function select_perfil(): array {

        global $http;
          $cargo = $http->request->get('select_perfil');

          $query=$this->db->select('id_cargo','tblcargos',"descripcion='$cargo'");

          $valor = $query[0][0];
          $nombres = $this->db->select('id_personal,nombres','tblpersonal',"id_cargo='$valor'");

          if ($nombres == true){
              return array('success' => 1, 'message' => $nombres);
              # code...
          }else{
            return array('success' => 0, 'message' => 'Datos no encontrados');
            }
      }

      public function traer_usuarios(): array {
        try {

        global $http;
        $id_personal = $http->request->get('usuario');


        $selectAsignados = $this->db->select('*','tblpersonal',"id_super='$id_personal'");
        $selectNoAsignados = $this->db->select('*','tblpersonal',"id_super='0' and id_personal<>'$id_personal'");
        // $personalNombre = $this->db->select('nombres','tblpersonal',"id_personal='$selectAsignados'");   REVISAR SI ES POSIBLE UTILIZARLA COMO FUNCION

        if ($selectAsignados != true) {
          return array('success' => 1,'usuariosNoAsignados' => $selectNoAsignados);
          # code... 'usuariosAsignados' => $selectAsignados,
      }else {
          return array('success' => 1, 'usuariosAsignados' => $selectAsignados, 'usuariosNoAsignados' => $selectNoAsignados);
      }

    } catch (Exception $e) {
        return array('success' => 0, 'message' => 'Datos no encontrados');
    }
}

public function quitar_supervision(): array {
try {
  global $http;

  #Obtener los datos $_POST
  $pendiente = "0";
  $id_personal = $http->request->get('mandoId');


  $this->db->update('tblpersonal',array(
    'id_super' => $pendiente
  ),"id_personal='$id_personal'",'LIMIT 1');
  //
  return array('success' => 1, 'men' => $id_personal);
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
  }
}

public function asignar_supervision(): array {
try {
  global $http;

  #Obtener los datos $_POST
  $id_personal = $http->request->get('mandoId');
  $super = $http->request->get('mandoIdSuper');


  $this->db->update('tblpersonal',array(
    'id_super' => $super
  ),"id_personal='$id_personal'",'LIMIT 1');
  //
  return array('success' => 1, 'men' => $id_personal);
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
  }
}
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
}
