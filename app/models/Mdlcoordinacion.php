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
use Ocrend\Kernel\Helpers\Strings;
use Ocrend\Kernel\Helpers\Files;


/**
 * Modelo Mdlpersonal
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Mdlcoordinacion extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...


		/**
      * Obtiene elementos de Mdlcoordinacion en 4 tablas distintas
      *
      * @param string $select: Elementos de tbltecnicos a seleccionar
      *
      * @return false|array: false si no hay datos.
      *                     array con los datos.
    */

    public function verNodo(string $select = '*'){
        return $this->db->select($select,'tblnodo');
    }
    public function verComuna(string $select = '*'){
        return $this->db->select($select,'tblcomuna');
    }
    final public function getNodoById(int $id, string $select = '*') {
        return $this->db->select($select,'tblnodo',"id_nodo='$id'",'LIMIT 1');
    }


    final public function update_estado_nodo($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblnodo SET estado=if(estado=0,1,0) WHERE id_nodo=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'coordinacion/listar_nodo');
    }

    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el motivo de llamado.
     */
    public function registra_nuevo_nodo() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nodo = $http->request->get('nodo');
            $subnodo = $http->request->get('subnodo');
            $comuna = $http->request->get('comuna');

            # Verificar que no están vacíos
            if ($this->functions->e($nodo, $comuna, $subnodo)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el nodo
            $this->db->insert('tblnodo', array(
                'nodo' => $nodo,
                'comuna' => $comuna,
                'subnodo' => $subnodo
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

/**
  * Actualiza un nodo
  *
  * @return void
*/
public function editar_nodo(): array {
try {
  global $http;


  #Obtener los datos $_POST
  $nodo = $http->request->get('nodo');
  $subnodo = $http->request->get('subnodo');
  $comuna = $http->request->get('comuna');
  $id_nodo = $http->request->get('id_nodo');

  if ($this->functions->e($nodo, $comuna, $subnodo)) {
      throw new ModelsException('Todos los datos son necesarios');
  }
  $this->db->update('tblnodo',array(
    'nodo' => $nodo,
    'subnodo' => $subnodo,
    'comuna' => $comuna
),"id_nodo='$id_nodo'");
  //
  return array('success' => 1, 'message' => 'Modificacion de nodo');
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
}
}

public function carga_nodo(){

    return $this->db->query_select("select * from tblnodo where estado='1'");
}

public function getejecutivos(){
  return $this->db->select('nombre','tblperfiles',"nombre LIKE '%DESPACHO%' group by nombre order by nombre");
}

public function select_ejecutivo(): array {

  global $http;
    $cargo = $http->request->get('select_ejecutivo');

    $query=$this->db->select('*','users',"perfil='$cargo'");


    if ($query == true){
        return array('success' => 1, 'message' => $query);
        # code...
    }else{
      return array('success' => 0, 'message' => 'Datos no encontrados');
      }
}
// public function traer_comuna(): array{
//     try {
//         global $http;
//         $comuna = $this->db->select('*','tblcomuna',"estado=1");
//
//         if ($comuna == true) {
//           return array('success' => 1,'comuna' => $comuna);
//        }
//
//     } catch (Exception $e) {
//       return array('success' => 0, 'message' => 'Datos no encontrados');
//     }
// }
    public function traer_comuna(): array {
        try {
            global $http;
            $id_personal = $http->request->get('usuario');

            $noAsignada = $this->db->query_select("SELECT id_comuna,nombre FROM tblcomuna WHERe estado='1' and nombre not in (select comuna from tbl_coordinacion_ejecutivo_comuna where id_usuario='$id_personal')");

            $asignada = $this->db->select('*','tbl_coordinacion_ejecutivo_comuna',"id_usuario='$id_personal'");

            if ($noAsignada != true) {
                return array('success' => 1,'comunasNoAsignadas' => $noAsignada);
            }else {
                return array('success' => 1, 'comunasAsignadas' => $asignada, 'comunasNoAsignadas' => $noAsignada);
            }

        } catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }

public function quitar_comuna(): array {
try {
global $http;

#Obtener los datos $_POST
$usuario = $http->request->get('usuario');
$comuna = $http->request->get('comuna');

$this->db->query_select("DELETE FROM tbl_coordinacion_ejecutivo_comuna WHERE id_usuario='$usuario' AND comuna='$comuna'");
//
return array('success' => 1, 'men' => $usuario);
}catch (ModelsException $e) {
return array('success' => 0, 'message' => $e->getMessage());
}
}

public function asignar_comuna(): array {
try {
global $http;

#Obtener los datos $_POST
$usuario = $http->request->get('usuario');
$comuna = $http->request->get('comuna');


$this->db->insert('tbl_coordinacion_ejecutivo_comuna',array(
'id_usuario' => $usuario,
'comuna' => $comuna
));
//
return array('success' => 1, 'men' => $usuario);
}catch (ModelsException $e) {
return array('success' => 0, 'message' => $e->getMessage());
}
}




// ------------------------------------------------------------------------------------------------------
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
}
