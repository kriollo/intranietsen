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

    // Asigna Comuna a Ejecutivo
    public function verComuna(string $select = '*'){
        return $this->db->select($select,'tblcomuna');
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
        }else{
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
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

            $usuario = $http->request->get('usuario');
            $comuna = $http->request->get('comuna');

            $this->db->query_select("DELETE FROM tbl_coordinacion_ejecutivo_comuna WHERE id_usuario='$usuario' AND comuna='$comuna'");

            return array('success' => 1, 'men' => $usuario);
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function asignar_comuna(): array {
        try {
            global $http;
            $usuario = $http->request->get('usuario');
            $comuna = $http->request->get('comuna');
            $this->db->insert('tbl_coordinacion_ejecutivo_comuna',array(
                'id_usuario' => $usuario,
                'comuna' => $comuna
            ));
            return array('success' => 1, 'men' => $usuario);
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    // Asigna Tecnico a Ejecutivo
    public function traer_tecnicos(): array {
        try {
            global $http;
            $id_personal = $http->request->get('usuario');

            $tecnicoNoAsignado = $this->db->query_select("SELECT codigo,nombre,id_tecnicos FROM tbltecnicos WHERe estado='1' and id_tecnicos not in (select id_tecnico from tbl_coordinacion_despacho_tecnico)");
            $tecnicoAsignado = $this->db->query_select("SELECT nombre,id_tecnicos FROM tbltecnicos WHERe estado='1' and id_tecnicos in (select id_tecnico from tbl_coordinacion_despacho_tecnico where id_despacho='$id_personal')");

            if ($tecnicoNoAsignado != true) {
                return array('success' => 1,'tecnicosNoAsignados' => $tecnicoNoAsignado);
            }else {
                return array('success' => 1, 'tecnicosAsignados' => $tecnicoAsignado, 'tecnicosNoAsignados' => $tecnicoNoAsignado);
            }

        } catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
    public function quitar_tecnico(): array {
        try {
            global $http;

            $usuario = $http->request->get('usuario');
            $tecnico = $http->request->get('tecnico');

            $this->db->query_select("DELETE FROM tbl_coordinacion_despacho_tecnico WHERE id_despacho='$usuario' AND id_tecnico='$tecnico'");

            return array('success' => 1, 'men' => $usuario);
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function asignar_tecnico(): array {
        try {
            global $http;

            $usuario = $http->request->get('usuario');
            $tecnico = $http->request->get('tecnico');
            $this->db->insert('tbl_coordinacion_despacho_tecnico',array(
                'id_despacho' => $usuario,
                'id_tecnico' => $tecnico
            ));
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
