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
    public function getMenuPPAL(){
        return $this->db->query_select("Select id_menu,descripcion from tblmenu order by descripcion");
    }
    public function getSubMenu(int $id_menu=99){
        return $this->db->query_select("Select id_menu,id_submenu,descripcion from tblsubmenu where id_menu='$id_menu' and estado=1 order by descripcion");
    }

    final function diferencia_meses($fecha_inicio,$fecha_termino){
        $result= $this->db->query_select("select timestampdiff(month,'$fecha_inicio','$fecha_termino')");
        if (false == $result){
            return ['0'];
        }else{
            return $result[0];
        }

    }

    public function getAsistenciaTecnico($fecha){
        $sql="select t.codigo,if(ast.estado is null,'AUS',upper(substr(ast.estado,1,3))) asistencia from tbltecnicos t left join tblasistenciatecnico ast on t.id_tecnicos=ast.id_tecnico and CAST(ast.fechahora AS DATE)='$fecha' Order by t.codigo";
        return $this->db->query_select($sql);
    }
    public function getAsistenciaTecnicoResumen($fecha){
        $sql="select if(ast.estado is null,'AUS',upper(substr(ast.estado,1,3))) asistencia,count(t.codigo) cuenta from tbltecnicos t left join tblasistenciatecnico ast on t.id_tecnicos=ast.id_tecnico and CAST(ast.fechahora AS DATE)='$fecha' group by ast.estado";
        return $this->db->query_select($sql);
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
