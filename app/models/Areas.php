<?php


namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Areas
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Areas extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    public function getAreas(){
          return $this->db->query_select("select id_area,descripcion from tblareas");
    }

    public function guardar_area() : array {
        try{
            global $http;
            $area=$http->request->get('nuvarea');
            if ($this->functions->e($area)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->insert('tblareas', array(
                'descripcion' => $area
            ));
            return array('success' => 1, 'message' => "Registro Guardado");
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function modificar_area(): array {
        global $http;
        try {
            $modarea=$http->request->get('modarea');
            $modidarea=$http->request->get('modareaid');
            if ($this->functions->e($modarea)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->query("UPDATE tblareas set descripcion='$modarea'
            WHERE id_area='$modidarea'");

            return array('success' => 1, 'message' => "Registro Modificado");
        } catch (ModelsException $e) {
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
