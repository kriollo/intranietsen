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

class Mdlconfirmacion extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...


		/**
      * Obtiene elementos de Mdlconfirmacion en 4 tablas distintas
      *
      * @param string $select: Elementos de tbltecnicos a seleccionar
      *
      * @return false|array: false si no hay datos.
      *                     array con los datos.
    */
    public function verActividades(string $select = '*'){
    return $this->db->select($select,'tblactividad');
}
    public function verBloques(string $select = '*'){
    return $this->db->select($select,'tblbloque');
    }
    public function verComunas(string $select = '*'){
    return $this->db->select($select,'tblcomuna');
    }
    public function verMotivocall(string $select = '*'){
    return $this->db->select($select,'tblmotivollamado');
    }


    final public function getActividadesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblactividad',"id_actividad='$id'",'LIMIT 1');
    }
    final public function getBloquesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblbloque',"id_bloque='$id'",'LIMIT 1');
    }
    final public function getComunasById(int $id, string $select = '*') {
        return $this->db->select($select,'tblcomuna',"id_comuna='$id'",'LIMIT 1');
    }
    final public function getMotivocallById(int $id, string $select = '*') {
        return $this->db->select($select,'tblmotivollamado',"id_motivo='$id'",'LIMIT 1');
    }

    final public function update_estado_actividad($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblactividad SET estado=if(estado=0,1,0) WHERE id_actividad=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_actividades');
    }
    final public function update_estado_bloque($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblbloque SET estado=if(estado=0,1,0) WHERE id_bloque=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_bloque');
    }
    final public function update_estado_comuna($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblcomuna SET estado=if(estado=0,1,0) WHERE id_comuna=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_comunas');
    }
    final public function update_estado_motivocall($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblmotivollamado SET estado=if(estado=0,1,0) WHERE id_motivo=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_motivocall');
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar la actividad.
     */
    public function registra_nueva_actividad() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $actividad = $http->request->get('actividad');

            # Verificar que no están vacíos
            if ($this->functions->e($actividad)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar al actividad
            $this->db->insert('tblactividad', array(
                'actividad' => $actividad
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el bloque.
     */
    public function registra_nuevo_bloque() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $bloque = $http->request->get('bloque');

            # Verificar que no están vacíos
            if ($this->functions->e($bloque)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblbloque', array(
                'bloque' => $bloque
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar la comuna.
     */
    public function registra_nueva_comuna() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $comuna = $http->request->get('comuna');

            # Verificar que no están vacíos
            if ($this->functions->e($comuna)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblcomuna', array(
                'nombre' => $comuna
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    /**
     * Realiza la acción de registro dentro del sistema
     *
     * @return array : Con información de éxito/falla al registrar el motivo de llamado.
     */
    public function registra_nuevo_motivocall() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $motivo = $http->request->get('motivo');

            # Verificar que no están vacíos
            if ($this->functions->e($motivo)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblmotivollamado', array(
                'motivo' => $motivo
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }


    /**
      * Actualiza una actividad
      *
      * @return void
    */
    public function editar_actividad(): array {
    try {
      global $http;


      #Obtener los datos $_POST
      $actividad = $http->request->get('actividad');
      $id_actividad = $http->request->get('id_actividad');

      if ($this->functions->e($actividad)) {
          throw new ModelsException('Todos los datos son necesarios');
      }
      $this->db->update('tblactividad',array(
        'actividad' => $actividad,
    ),"id_actividad='$id_actividad'");
      //
      return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
    }catch (ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
    }
  }

  /**
    * Actualiza un bloque
    *
    * @return void
  */
  public function editar_bloque(): array {
  try {
    global $http;


    #Obtener los datos $_POST
    $bloque = $http->request->get('bloque');
    $id_bloque = $http->request->get('id_bloque');

    if ($this->functions->e($bloque)) {
        throw new ModelsException('Todos los datos son necesarios');
    }
    $this->db->update('tblbloque',array(
      'bloque' => $bloque,
  ),"id_bloque='$id_bloque'");
    //
    return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
  }catch (ModelsException $e) {
      return array('success' => 0, 'message' => $e->getMessage());
  }
}

/**
  * Actualiza una Comuna
  *
  * @return void
*/
public function editar_comuna(): array {
try {
  global $http;


  #Obtener los datos $_POST
  $comuna = $http->request->get('comuna');
  $id_comuna = $http->request->get('id_comuna');

  if ($this->functions->e($comuna)) {
      throw new ModelsException('Todos los datos son necesarios');
  }
  $this->db->update('tblcomuna',array(
    'nombre' => $comuna,
),"id_comuna='$id_comuna'");
  //
  return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
}
}

/**
  * Actualiza una Comuna
  *
  * @return void
*/
public function editar_motivocall(): array {
try {
  global $http;


  #Obtener los datos $_POST
  $motivo = $http->request->get('motivo');
  $id_motivo = $http->request->get('id_motivo');

  if ($this->functions->e($motivo)) {
      throw new ModelsException('Todos los datos son necesarios');
  }
  $this->db->update('tblmotivollamado',array(
    'motivo' => $motivo,
),"id_motivo='$id_motivo'");
  //
  return array('success' => 1, 'message' => 'Modificacion de horas extra exitosa');
}catch (ModelsException $e) {
    return array('success' => 0, 'message' => $e->getMessage());
}
}
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
