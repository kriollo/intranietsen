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
 * Modelo Varios
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Varios extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    public function listar_archivos_cargados($idapp){
        return $this->db->query_select("SELECT * FROM tbl_historialarchivoscargados where app='$idapp' order by id desc limit 5");
    }

    final function diferencia_meses($fecha_inicio,$fecha_termino){
        $result= $this->db->query_select("select timestampdiff(month,'$fecha_inicio','$fecha_termino')");
        if (false == $result){
            return ['0'];
        }else{
            return $result[0];
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