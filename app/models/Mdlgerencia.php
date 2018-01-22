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

class Mdlgerencia extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...


		/**
      * Obtiene elementos de Mdlgerencia en 3 tablas distintas
      *
      * @param string $select: Elementos de tbltecnicos a seleccionar
      *
      * @return false|array: false si no hay datos.
      *                     array con los datos.
    */
    public function verProgramadores(string $select = '*'){
    return $this->db->select($select,'users',"cargo= 'Ejecutivo HD'");
    }
    public function verOrdenes(string $select = '*'){
    return $this->db->query("select count(*) as orden,operador,users.name from tblordenes inner JOIN users on tblordenes.operador=users.id_user GROUP by operador");
    }


    final public function getActividadesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblactividad',"id_actividad='$id'",'LIMIT 1');
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
