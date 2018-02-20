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

            $this->quitar_ordenes_ejecutivo_comuna($usuario,$comuna);

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
                return array('success' => 1, 'tecnicosAsignados' => $tecnicoAsignado,'tecnicosNoAsignados' => $tecnicoNoAsignado);
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
// DISTRIBUCION------------------------------------------------------------------------------------------
    public function getResumenOrdenesEjecutarBloques($fecha){
        return $this->db->query_select("select o.comuna,b.bloque,count(*) cantidad from tblordenes o inner join tblbloque b on o.bloque=b.bloque where o.fecha_compromiso<='$fecha' group by o.comuna,o.bloque order by b.desde");
    }
    public function db_resumen_ejecutivo_comuna(){
        return $this->db->query_select("Select comuna,count(*) cantidad from tbl_coordinacion_ejecutivo_comuna  group by comuna");
    }
    public function db_detalle_ejecutivo_comuna(){
        return $this->db->query_select("Select u.id_user,u.name,comuna from tbl_coordinacion_ejecutivo_comuna ec inner join users u on u.id_user=ec.id_usuario order by name");
    }
    public function db_ejecutivos_despacho(){
        return $this->db->query_select("Select u.id_user,u.name from users u where perfil like '%DESPACHO%' order by name");
    }


    public function seleccionar_bloque(string $bloque_ref='0'){

        if ($bloque_ref == '0' ) {global $http; $bloque = $http->request->get('selectbloque');}else{ $bloque= $bloque_ref; }

        $datos=$this->db->query_select("Select u.id_user,u.name,ec.estado from tbl_coordinacion_ejecutivo_comuna ec inner join users u on u.id_user=ec.id_usuario group by u.id_user,u.name order by u.name");

        $html="
        <div class='row'>
            <div class='col-md-6'>
                <form id='formusuarios' name='formusuarios'>
                    <div class='box box-primary'>
                        <div class='box-body'>";
                            $html.= "<div class='col-md-12'>";
                                if (false != $datos){
                                    $html.="<table class='table table-bordered table-responsive'><thead><th>Ejecutivo</th><th>Cantidad Asignada</th><th>Operaciones</th></thead><tbody>";
                                    foreach ($datos as $key => $value) {
                                        $html.="<tr><td colspan='3'><label><input type='checkbox' id='check-".$value['id_user']."' onchange=\"marcar_ejecutivo('".$value['id_user']."')\" ";
                                        // if ($value['estado'] == '1' ){
                                        //     $html.=" checked";
                                        // }
                                        $html.=">&nbsp;".$value['name']."</label></td></tr>";
                                        $comuna=$this->db->query_select("select comuna from tbl_coordinacion_ejecutivo_comuna where id_usuario=".$value['id_user']." order by comuna");
                                        foreach ($comuna as $key2 => $value2) {
                                            $cantidad=0;
                                            $q_ordenes=$this->db->query_select("select count(*) cantidad from tblordenes where ubicacion='DESPACHO' and id_usuario_despacho=".$value['id_user']." and comuna='".$value2['comuna']."' and bloque='".$bloque."'");
                                            if (false != $q_ordenes){
                                                $cantidad=$q_ordenes[0]['cantidad'];
                                            }
                                            $html.="<tr><td><li>".$value2['comuna']."</li></td><td class='text-right'>".$cantidad."</td><td><a data-placement='top' title='Quitar Ordenes sin Gestionar'  class='btn btn-warning btn-sm' onclick=\"quitar_ordenes('quitar_ordenes','".$value2['comuna']."','".$value['id_user']."','".$bloque."')\" ><i class='fa fa-arrow-right'></i></a>&nbsp;<a data-placement='top' title='Quitar Comuna'  class='btn btn-danger btn-sm' onclick=\"quitar_ordenes('quitar_comuna','".$value2['comuna']."','".$value['id_user']."')\" ><i class='fa fa-user-times'></i></a></td></tr>";
                                        }
                                        //$html.="</td>";
                                    }
                                    $html.="</tbody></table>";
                                }
                                $html.="</div>
                        </div>
                    </div>
                </form>
            </div>";


        $html.="<div class='col-md-6'>
                    <div class='box box-primary'>
                        <div class='box-header'>
                            <h3 class='box-title'>Resumen Ordenes a Ejecutar</h3>
                        </div>
                        <div id='bloque_resumen_ordenes' class='box-body'>
                            <button class='btn btn-sm btn-success' id='distribuir' name='distribuir' onclick='distribuir_ordenes()'>Distribuir Ordenes</button>
                            <table class='table table-bordered table-responsive'>
                            <thead>
                                <th>Comuna</th>
                                <th>Cantidad</th>
                            </thead>
                            <tbody>";
                            $resumen=$this->db->query_select("select comuna, count(comuna) cantidad from tblordenes where fecha_compromiso<='".date('Ymd')."' and bloque='".$bloque."' and ubicacion='CONFIRMACION' group by comuna order by comuna");
                            if (false == $resumen){
                                $html.="<tr>";
                                $html.="</tr>";
                            }else{
                                foreach ($resumen as $key2 => $value2) {
                                    $html.="<tr>";
                                    $html.="<td>".$value2['comuna']."</td>";
                                    $html.="<td>".$value2['cantidad']."</td>";
                                    $html.="</tr>";
                                }
                            }
                    $html.="</tbody></table>";
                $html.="</div>
                    </div>
                </div>
        </div>";
        if ($bloque_ref == '0' ) {return array('success' => 1, 'message' => $html);}else{return $html;}

    }
    public function marcar_ejecutivo(){
        global $http;

        $id_user = $http->request->get('id_user');
        $estado = $http->request->get('estado');

        $this->db->update('tbl_coordinacion_ejecutivo_comuna',array(
            'estado' => $estado,
        ),"id_usuario='$id_user'");

    }
    public function distribuir_ordenes(){

        global $http;
        $bloque = $http->request->get('bloque');

        $sql="select comuna, count(comuna) cantidad from tblordenes where fecha_compromiso<='".date('Ymd')."' and bloque='".$bloque."' and ubicacion='CONFIRMACION' group by comuna order by comuna";
        $resumen=$this->db->query_select($sql);// extrae cantidad de ordenes por comuna
        if (false != $resumen){
            foreach ($resumen as $key => $value) {
                $sql="Select count(*) q from tbl_coordinacion_ejecutivo_comuna where estado=1 and comuna='".$value['comuna']."'";
                $count_users = $this->db->query_select($sql); //extrae cantidad de ejecutivos por comuna
                if ($count_users[0]['q'] > 0){
                    $resultd=ceil($value['cantidad'] /$count_users[0]['q']); //extrae cantidad de ordenes por usuario
                    $i=($count_users[0]['q'])-1; //cantidad de paginas en limit

                    $sql="Select id_usuario from tbl_coordinacion_ejecutivo_comuna where estado=1 and comuna='".$value['comuna']."'";
                    $users_asiganacion = $this->db->query_select($sql); //extrae usuarios asignados a comuna
                    foreach ($users_asiganacion as $key2 => $value2) {
                        $sql="select id_orden from tblordenes where fecha_compromiso<='".date('Ymd')."' and bloque='".$bloque."' and comuna='".$value['comuna']."' and ubicacion='CONFIRMACION' order by comuna,nodo,subnodo limit $i,$resultd";
                        $ordenes_asiganacion = $this->db->query_select($sql); //extrae ordenes correspondientas para asignar segun limit
                        if (false != $ordenes_asiganacion){
                            foreach ($ordenes_asiganacion as $key3 => $value3) {
                                $sql="Update tblordenes Set id_usuario_despacho='".$value2['id_usuario']."',ubicacion='DESPACHO' where id_orden='".$value3['id_orden']."'";
                                $this->db->query_select($sql);
                            }
                        }
                        $i--;
                    }
                }
            }
        }
        return array('success' => 1, 'message' => $this->seleccionar_bloque($bloque));
    }
    public function quitar_ordenes_ejecutivo_comuna(string $ejecutivo='',string $comuna=''){
        $strBloque="";
        if ($ejecutivo == '' ) {
            global $http;
            $ejecutivo = $http->request->get('usuario');
            $comuna = $http->request->get('comuna');
            $strBloque = "and bloque = '".$http->request->get('bloque')."'";
        }

        $this->db->query_select("Update tblordenes Set id_usuario_despacho='0',ubicacion='CONFIRMACION' where id_usuario_despacho='".$ejecutivo."' and comuna='".$comuna."' and ubicacion='DESPACHO' and estado_orden=1 $strBloque");
        return array('success' => 1);
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
