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

class Mdldespacho extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;


    public function ordenes(){
        $datusu=(new Model\Users)->getOwnerUser();

        $limit = $this->db->query_select("SELECT count(*) cantidad FROM tbl_coordinacion_despacho_tecnico where id_despacho='".$datusu['id_user']."'");
        if ($limit == false){ $limit=0; }else{$limit = $limit[0]['cantidad']; }
        return $this->db->query_select("select o.id_orden,o.n_orden,o.rut_cliente,o.fecha_compromiso,o.bloque,o.bloque,o.comuna,t.nombre,o.codigo_tecnico,eo.descripcion desc_estado_orden from (tblordenes o left join tbltecnicos t on t.id_tecnicos=o.codigo_tecnico) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado where o.id_usuario_despacho='".$datusu['id_user']."' and o.ubicacion='DESPACHO' order by o.codigo_tecnico desc,o.comuna,o.nodo,o.subnodo limit $limit");
    }

    public function tecnicos(){
        $datusu=(new Model\Users)->getOwnerUser();
        $usuario=$datusu['id_user'];
        return $this->db->query_select("select tbl_coordinacion_despacho_tecnico.*, tbltecnicos.nombre from tbl_coordinacion_despacho_tecnico inner join tbltecnicos on tbl_coordinacion_despacho_tecnico.id_tecnico=tbltecnicos.id_tecnicos where tbl_coordinacion_despacho_tecnico.id_despacho='$usuario'");
    }

    public function asignar_tecnico(){
      //try {
        global $http;
        $id_tecnico=$http->request->get('tecnicos');
        $n_orden=$http->request->get('orden');

        $consulta=$this->db->query_select("select * from tblordenes where codigo_tecnico='$id_tecnico'");
        $id_tec =  $consulta[0]['codigo_tecnico'];
        $codtec = $this->db->query_select("SELECT codigo_tecnico from tblordenes where codigo_tecnico <> 0");
        if($consulta==true){
          return array('success' => 0, 'message' => 'La orden ya tiene tecnico asignado', 'message2'=>$n_orden, 'codtec' => $codtec);
        }else{
          $this->db->query_select("update tblordenes set codigo_tecnico=$id_tecnico, estado_orden='1' where id_orden='$n_orden'");
            return array('success' => 1, 'message' => 'La orden ya tiene tecnico asignado','message2'=>$n_orden);
        }
      }
    public function cantidad_ordenes(){
        $fecha=date('Ymd');
        $datusu=(new Model\Users)->getOwnerUser();
        return $this->db->query_select("select comuna,count(id_orden) as cantidad from tblordenes where fecha_compromiso='$fecha' and id_usuario_despacho='".$datusu['id_user']."' and ubicacion='DESPACHO' group by comuna order by comuna");
    }
    public function comunas_asignadas(){
        $datusu=(new Model\Users)->getOwnerUser();
        return $this->db->query_select("select comuna from tbl_coordinacion_ejecutivo_comuna where id_usuario='".$datusu['id_user']."'");
    }
    public function carga_tecnicos(){
        $datusu=(new Model\Users)->getOwnerUser();
        $usuario=$datusu['id_user'];
        return $this->db->query_select("select ct.id_tecnico,t.nombre,t.codigo , o.n_orden, o.bloque, o.estado_orden,o.comuna FROM (tbl_coordinacion_despacho_tecnico ct left join tblordenes o on ct.id_tecnico=o.codigo_tecnico and ubicacion='DESPACHO') inner join tbltecnicos t on ct.id_tecnico=t.id_tecnicos WHERE ct.id_despacho='$usuario'");
    }
    public function cargar_estados(){
        //return $this->db->query_select("select * from tbl_estado_ordenes");
    }
    public function cambiar_estado(){
        global $http;
        try {
            $numorden=$http->request->get('orden');
            $estado=$http->request->get('estado');

            $consulta=$this->db->query_select("update tblordenes set estado_orden='$estado' where id_orden='$numorden'");
        } catch (\Exception $e) {
            return array('success' => 0, 'message' => 'Ha surgido un error');
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
