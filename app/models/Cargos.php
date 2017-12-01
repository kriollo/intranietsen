<?php


namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Cargos
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Cargos extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    public function getCargos(){
        return $this->db->query_select("select @rownum:=@rownum+1 as rownum,tblcargos.* from (select @rownum:=0)r,tblcargos");
    }

    public function guardar_cargo() : array {
        try{
            global $http;
            $cargo=$http->request->get('nuvcargo');
            if ($this->functions->e($cargo)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->insert('tblcargos', array(
            'descripcion' => $cargo
            ));
            return array('success' => 1, 'message' => "Registro Guardado");
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function modificar_cargo(): array {
        try {
            global $http;
            $modcargo=$http->request->get('modcargo');
            $modid=$http->request->get('modid');
            if ($this->functions->e($modcargo)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->query("UPDATE tblcargos set descripcion='$modcargo'
            WHERE id_cargo='$modid'");
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
