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

    protected $user = array();
    // SEGUIMIENTO--------------------------------------------------------------
    public function listar_todas_ordenes_sin_asignar(string $idusuario=""){

        return $this->db->query_select("select o.id_orden,o.n_orden,o.rut_cliente,DATE_FORMAT(o.fecha_compromiso, '%d-%m-%Y') fecha_compromiso,o.bloque,o.bloque,o.comuna,o.codigo_tecnico,o.estado_orden,eo.descripcion desc_estado_orden,ton.descripcion desctipoorden,o.prioridad,o.speed_test,o.actividad from (((tblordenes o inner join tbl_coordinacion_ejecutivo_comuna ec on ec.id_usuario='$idusuario' and ec.comuna=o.comuna) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado) inner join tbltipoorden ton on ton.id_tipoorden=o.tipoorden) inner join tblbloque b on b.bloque=o.bloque where  o.ubicacion='CONFIRMACION' order by o.codigo_tecnico desc,o.fecha_compromiso asc,b.desde,o.prioridad asc,o.comuna");

    }
    public function listar_todas_ordenes(string $comuna="*",string $idusuario="",int $limit=0){

        $sql_comuna="";
        if ($comuna != "*"){
            $sql_comuna=" And o.comuna='$comuna'";
        }

        if ($limit > 0 ){
            $limit =" limit ".$limit;
        }else{
            $limit ="";
        }

        $sql_idusuario="";
        if ($idusuario != ""){
            $sql_idusuario =" and o.id_usuario_despacho='$idusuario'";
        }

        return $this->db->query_select("select o.id_orden,o.n_orden,o.rut_cliente,DATE_FORMAT(o.fecha_compromiso, '%d-%m-%Y') fecha_compromiso,o.bloque,o.bloque,o.comuna,t.nombre,o.codigo_tecnico,o.estado_orden,eo.descripcion desc_estado_orden,ton.descripcion desctipoorden,o.prioridad,o.speed_test,o.actividad from (((tblordenes o left join tbltecnicos t on t.id_tecnicos=o.codigo_tecnico) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado) inner join tbltipoorden ton on ton.id_tipoorden=o.tipoorden) inner join tblbloque b on b.bloque=o.bloque where  o.ubicacion='DESPACHO' $sql_idusuario $sql_comuna order by o.codigo_tecnico desc,o.fecha_compromiso asc,b.desde,o.prioridad asc,o.comuna $limit");

    }

    public function tecnicos(string $comuna){
        $usuario=$this->user;
        return $this->db->query_select("select cdt.id_tecnico,t.nombre from (tbl_coordinacion_despacho_tecnico cdt inner join tbltecnicos t on cdt.id_tecnico=t.id_tecnicos) inner join tbl_comuna_tecnico ct on cdt.id_tecnico=ct.id_tecnico where cdt.id_despacho='".$usuario['id_user']."' and ct.comuna='$comuna' order by t.nombre");
    }
    public function asignar_tecnico(){
        global $http;
        $id_tecnico=$http->request->get('tecnicos');
        $n_orden=$http->request->get('orden');

        $consulta=$this->db->query_select("select codigo_tecnico from tblordenes where codigo_tecnico='$id_tecnico' and ubicacion='DESPACHO' and n_orden<>'$n_orden' and codigo_tecnico<>'0'");
        if(false != $consulta){
            return array('success' => 0, 'message' => 'Tecnico ya tiene orden asignada', 'message2'=>$n_orden);
        }else{
            if ($id_tecnico !=0 ){
                $this->db->query_select("update tblordenes set codigo_tecnico=$id_tecnico, estado_orden='2',fecha_hora_asigna='".date('Y-m-d H:i')."' where id_orden='$n_orden'");
            }else{
                $this->db->query_select("update tblordenes set codigo_tecnico=$id_tecnico, estado_orden='1' where id_orden='$n_orden'");
            }
            return array('success' => 1,'message2'=>$n_orden);
        }
    }
    public function cantidad_ordenes($idusuario){
        $fecha=date('Ymd');
        return $this->db->query_select("select o.comuna,t.descripcion,count(o.id_orden) as cantidad from (tblordenes o inner join tbltipoorden t on o.tipoorden=t.id_tipoorden) where id_usuario_despacho='".$idusuario."' and ubicacion='DESPACHO' group by o.comuna,o.tipoorden order by o.comuna");
    }
    public function comunas_asignadas(string $idusuario){
        return $this->db->query_select("select comuna from tbl_coordinacion_ejecutivo_comuna where id_usuario='".$idusuario."'");
    }
    public function carga_tecnicos(string $idusuario){
        return $this->db->query_select("select ct.id_tecnico,t.nombre,t.codigo , tc.comuna comunaasignada, o.n_orden, o.id_orden, o.bloque, o.estado_orden, eo.descripcion desc_estado_orden,o.comuna,o.fecha_hora_asigna,o.actividad,at.estado,at.fechahora FROM ((((tbl_coordinacion_despacho_tecnico ct left join tblordenes o on ct.id_tecnico=o.codigo_tecnico and ubicacion='DESPACHO') inner join tbltecnicos t on ct.id_tecnico=t.id_tecnicos) left join tbl_comuna_tecnico  tc on t.id_tecnicos=tc.id_tecnico ) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado) left join tblasistenciatecnico at on ct.id_tecnico=at.id_tecnico and CAST(at.fechahora AS DATE)='".date('Y-m-d')."' WHERE ct.id_despacho='".$idusuario."' order by t.nombre");
    }
    public function cargar_estados(string $opcion='DESPACHO'){
        return $this->db->query_select("select id_estado,descripcion from tbl_estado_orden where ubicacion='$opcion' And estado=1");
    }
    public function cambiar_estado(){
        global $http;
        $numorden=$http->request->get('orden');
        $estado=$http->request->get('estado');

        $this->db->query_select("update tblordenes set estado_orden='$estado' where id_orden='$numorden'");

        return array('success' => 1, 'message' => 'Cambio OK');
    }

    public function guardar_comuna_tecnico(){
        global $http;
        $idtecnico=$http->request->get('tecnico');
        $comuna=$http->request->get('comuna');

        $consulta=$this->db->query_select("select * from tbl_comuna_tecnico where id_tecnico='$idtecnico'");

        if($consulta!=false){
            $this->db->query_select("update tbl_comuna_tecnico set comuna='$comuna' where id_tecnico='$idtecnico'");

        }else{
            $this->db->insert('tbl_comuna_tecnico', array(
                'id_tecnico' => $idtecnico,
                'comuna' => $comuna
            ));
        }
    }
    public function guardar_asistenca_tecnico(){
        global $http;
        $idtecnico=$http->request->get('tecnico');
        $estado=$http->request->get('estado');

        $this->db->query_select("delete from tblasistenciatecnico where id_tecnico='$idtecnico' and CAST(fechahora AS DATE)='".date('Y-m-d')."'");


        $this->db->insert('tblasistenciatecnico', array(
            'id_tecnico' => $idtecnico,
            'id_user' => $this->user['id_user'],
            'estado' => $estado
        ));

    }

    public function cargar_tabla_seguimiento(){
        global $http;
        $comuna=$http->request->get('comuna');
        $datusu=$this->user;

        $limit =false; //$this->db->query_select("SELECT count(*) cantidad FROM (tbl_coordinacion_despacho_tecnico cdt inner join tbl_comuna_tecnico ct on cdt.id_tecnico=ct.id_tecnico) where id_despacho='".$datusu['id_user']."' and ct.comuna='$comuna'");
        if ($limit == false){ $limit=0; }else{$limit = $limit[0]['cantidad']; }

        $result =  $this->listar_todas_ordenes($comuna,$datusu['id_user'],$limit);

        //$result= $this->db->query_select("select o.id_orden,o.n_orden,o.rut_cliente,o.fecha_compromiso,o.bloque,o.bloque,o.comuna,t.nombre,o.codigo_tecnico,o.estado_orden,eo.descripcion desc_estado_orden,ton.descripcion desctipoorden,o.prioridad from ((tblordenes o left join tbltecnicos t on t.id_tecnicos=o.codigo_tecnico) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado) inner join tbltipoorden ton on ton.id_tipoorden=o.tipoorden where o.id_usuario_despacho='".$datusu['id_user']."' and o.comuna='$comuna' and o.ubicacion='DESPACHO' order by o.codigo_tecnico desc,o.prioridad asc,o.nodo,o.subnodo limit $limit");


        if ($result===false){
            return array('success' => 0, 'message' => "datos erroneos");
        }else{
            $json = array(
            "aaData"=>array(
            )
            );

            foreach ($result as $key => $value) {
                // Tecnicos
                $html_select ='<select id="id-'.$value['id_orden'].'" name="select_tecnicos" onchange=\'asignar("'.$value['id_orden'].'")\'>';
                if ($value['codigo_tecnico'] == '0'){
                    $html_select .='<option value="0" selected="selected">Sin Asignar</option>';
                }else{
                    $html_select.='<option value="0">Sin Asignar</option>';
                }
                $tecnicos = $this->tecnicos($comuna);

                $html_tecnicos="";
                if ($tecnicos != false){
                    foreach ($tecnicos as $key2 => $value2) {
                        if($value['codigo_tecnico'] == $value2['id_tecnico']){
                            $html_tecnicos.='<option value="'.$value2['id_tecnico'].'"  selected="selected">'.$value2['nombre'].'</option>';
                        }else{
                            $html_tecnicos.='<option value="'.$value2['id_tecnico'].'">'.$value2['nombre'].'</option>';
                        }
                    }
                    $html_select .= $html_tecnicos;
                    $html_select .='</select>';
                }
                //Estados
                if ($value['codigo_tecnico'] == '0'){
                    $html_select2 ='<select id="idasignar-'.$value['id_orden'].'" name="select_estados" onchange=\'asignarestado("'.$value['id_orden'].'")\' disabled>';
                }else{
                    $html_select2 ='<select id="idasignar-'.$value['id_orden'].'" name="select_estados" onchange=\'asignarestado("'.$value['id_orden'].'")\'>';
                }
                $estados = $this->cargar_estados();
                $html_estados="";
                if ($estados != false){
                    foreach ($estados as $key2 => $value2) {
                        if($value['estado_orden'] == $value2['id_estado']){
                            $html_estados.='<option value="'.$value2['id_estado'].'"  selected="selected">'.strtoupper($value2['descripcion']).'</option>';
                        }else{
                            $html_estados.='<option value="'.$value2['id_estado'].'">'.strtoupper($value2['descripcion']).'</option>';
                        }
                    }

                    $html_select2.=$html_estados;
                    $html_select2 .='</select>';
                }
                //OPERACIONES
                if ($value['codigo_tecnico'] == '0'){
                    $html_select3 ='<select id="idoperacion-'.$value['id_orden'].'" name="idoperacion-'.$value['id_orden'].'" onchange=\'seleccionaroperacion("'.$value['id_orden'].'","'.$value['n_orden'].'","'.$value['codigo_tecnico'].'")\' disabled>';
                }else{
                    $html_select3 ='<select id="idoperacion-'.$value['id_orden'].'" name="idoperacion-'.$value['id_orden'].'" onchange=\'seleccionaroperacion("'.$value['id_orden'].'","'.$value['n_orden'].'","'.$value['codigo_tecnico'].'")\'>';
                }


                $html_select3.='<option value="OPCIONES">Opciones</option>
                    <option value="REDES">Escalado a redes</option>
                    <option value="OTROS">Escalado a otros</option>
                    <option value="ANULADA">Anular</option>
                    <option value="CIERRE">Cierre Seguro</option>
                    <option value="FINALIZADO">Finalizar</option>
                </select>';

                if ($value['speed_test'] == 0){
                    $html_select4="<a data-toggle='tooltip' data-placement='top' id='btnspeedtest' name='btnspeedtest' title='Speed Test' class='btn btn-warning btn-sm' onclick=\"subir_st('".$value['n_orden']."','seguimiento')\">
                        <i class='glyphicon glyphicon-open'></i>
                    </a>";
                }else{
                    $html_select4="<a data-toggle='tooltip' data-placement='top' id='btnspeedtest' name='btnspeedtest' title='Speed Test' class='btn btn-success btn-sm' onclick=\"mostrar_st('".$value['n_orden']."','seguimiento')\">
                        <i class='glyphicon glyphicon-open'></i>
                    </a>";
                }


                $json['aaData'][]=array($value['desctipoorden'],$value['actividad'],$value['n_orden'],$value['rut_cliente'],$value['fecha_compromiso'],$value['bloque'],$html_select,$html_select2,$html_select3,$html_select4);
            }
            $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
            $fh = fopen(API_INTERFACE . "views/app/temp/result_cons2_".$datusu['id_user'].".dbj", 'w');
            fwrite($fh, $jsonencoded);
            fclose($fh);
            return array('success' => 1, 'message' => "result_cons2_".$datusu['id_user'].".dbj" );
        }

    }
    public function recargar_tabla_resumen_tecnico(){
        global $http;
        $idusuario=$http->request->get('idusuario');
        $opcion=$http->request->get('opcion');

        $tabla=$this->carga_tecnicos($idusuario);
        $html="<table class='table table-bordered'>
        <thead>
        <tr>
        <th>N°</th>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Estado Actual</th>
        <th>Comuna asignada</th>
        <th>Orden asignada</th>
        <th>Actividad</th>
        <th>Bloque Orden</th>
        <th>Estado de orden</th>
        <th>Comuna</th>
        <th>Fecha y Hora Asignación</th>
        </tr>
        </thead>
        <tbody>";
        $num=0;$estado=array('Ausente','Presente','Vacaciones','Licencia','Permiso Sindical');
        if (false != $tabla){
            foreach ($tabla as $key => $value) {
                $num++;
                $html.=" <tr>";
                $html.="<td>".$num."</td>";
                $html.="<td>".$value['codigo']."</td>";
                $html.="<td>".$value['nombre']."</td>";
                $html.="<td>";
                    if ($opcion == 'usuario'){
                        $html.="<select id='select_estado_tecnico-".$value['id_tecnico']."' onchange=\"guardar_asistencia_tecnico('".$value['id_tecnico']."')\">";
                            for ($i=0; $i < 5 ; $i++) {
                                if ($estado[$i] != $value['estado']) {
                                    $html.="<option value=".$estado[$i].">".$estado[$i]."</option>";
                                }else{
                                    $html.="<option value=".$estado[$i]." selected>".$estado[$i]."</option>";
                                }
                            }
                        $html.="</select>";
                    }else{
                        $estado=strtoupper(substr($value['estado'],0,3));
                        if (NULL == $value['estado'] || $estado=='AUS'){
                            $html.="<span class='label label-danger'>AUS</span>- ".substr($value['fechahora'],-8);
                        }elseif($estado == 'PRE' ){
                            $html.="<span class='label label-success'>".$estado."</span> - ".substr($value['fechahora'],-8);
                        }else{
                            $html.="<span class='label label-warning'>".$estado."</span> - ".substr($value['fechahora'],-8);
                        }
                    }
                $html.="</td>";
                $html.="<td>";
                    if ($opcion=='usuario'){
                        if ($value['id_orden']== false) {
                            $html.="<select id='select_comuna-".$value['id_tecnico']."' name='select_comuna-".$value['id_tecnico']."' onchange=\"guardar_comuna_tecnico('".$value['id_tecnico']."')\">";
                        }else{
                            $html.="<select id='select_comuna-".$value['id_tecnico']."' name='select_comuna-".$value['id_tecnico']."' disabled>";
                        }
                        //if ($value['comunaasignada'] == NULL){
                            $html.="<option value='0' selected='selected'>--</option>";
                        //}
                        $comuna = $this->comunas_asignadas($idusuario);
                        foreach ($comuna as $key2 => $value2) {
                            if ($value['comunaasignada'] == $value2['comuna']){
                                $html.="<option value='".$value2['comuna']."' selected='selected'>".$value2['comuna']."</option>";
                            }else{
                                $html.="<option value='".$value2['comuna']."'>".$value2['comuna']."</option>";
                            }
                        }
                    }else{
                        $html.=$value['comunaasignada'];
                    }
                $html.="</td>";

                if ($value['id_orden']== false) {
                    $html.="<td>Sin orden asignada</td>";
                }else{
                    $html.="<td>".$value['n_orden']."</td>";
                }
                $html.="<td>".$value['actividad']."</td>";
                $html.="<td>".$value['bloque']."</td>";
                $html.="<td>".strtolower($value['desc_estado_orden'])."</td>";
                $html.="<td>".$value['comuna']."</td>";
                $html.="<td>".$value['fecha_hora_asigna']."</td>";
                $html.="</tr>";
            }
        }
        $html.="</tbody>";
        $html.="</table>";

        return array('success' => 1, 'message' => $html);
    }
    public function recargar_tabla_resumen_ordenes(){
        global $http;
        $idusuario=$http->request->get('idusuario');
        $opcion=$http->request->get('opcion');

        $tipoorden=(new Model\Mdlconfirmacion)->carga_tipoorden();
        $comunasasignadas=$this->comunas_asignadas($idusuario);
        $cantidadporcomuna=$this->cantidad_ordenes($idusuario);

        if ($tipoorden!=false){
            $html=" ";
            $html="
            <table class='table table-bordered table-responsive' id='tbldatos'>
            <thead>
                <th>COMUNA</th>";
                foreach ($tipoorden as $key => $value) {
                    $html.="<th class='text-center'>".$value['descripcion']."</th>";
                }
                $html.="<th class='text-center'>TOTAL</th>
            </thead>
            <tbody>";
                if (false != $comunasasignadas and false!=$cantidadporcomuna){
                    foreach ($comunasasignadas as $key2 => $value2) {
                        $html.="<tr>
                        <td>".$value2['comuna']."</td>";
                        $total_fila=0;
                        foreach ($tipoorden as $key3 => $value3){
                            $break_for = false;
                            foreach ($cantidadporcomuna as $key4 => $value4) {
                                if ($break_for == false){
                                    if($value2['comuna']==$value4['comuna'] and $value3['descripcion']==$value4['descripcion']){
                                        $html.="<td class='text-center'>".$value4['cantidad']."</td>";
                                        $total_fila += $value4['cantidad'];
                                        $break_for=true;
                                    }
                                }
                            }
                            if ($break_for == false){
                                $html.="<td class='text-center'>0</td>";
                            }
                        }
                        $html.="<td class='text-center'><a class='btn' onclick=\"mover_tab_3('".$idusuario."','".$value2['comuna']."','".$opcion."')\">$total_fila</a></td>
                        </tr>";
                    }
                }
            $html.="</tbody>";
        }
        return array('success' => 1, 'html' => $html);
    }

    public function actualizar_tabla_ordenes(){
        global $http;
        $comuna=$http->request->get('comuna');
        $idusuario=$http->request->get('idusuario');
        $result=$this->listar_todas_ordenes($comuna,$idusuario);

        if ($result == false){
            return array('success' => 0, 'message' => "Sin Datos" );
        }else{
            $json = array(
                "aaData"=>array(
                )
            );
            try {
                $numero=0;
                foreach ($result as $key => $value) {
                    $numero++;
                    $json['aaData'][] = array($numero,$value['desctipoorden'],$value['actividad'],$value['n_orden'],$value['rut_cliente'],$value['fecha_compromiso'],$value['bloque'],$value['comuna'],$value['nombre'],$value['desc_estado_orden']);
                }
                $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
                $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$idusuario.".dbj", 'w');
                fwrite($fh, $jsonencoded);
                fclose($fh);
                return array('success' => 1, 'message' => "result_cons_".$idusuario.".dbj" );

            } catch (\Exception $e) {
                return array('success' => 0, 'message' => "Error Inesperado" );
            }
        }
    }
    public function actualizar_tabla_ordenes_super(){
        global $http;
        $comuna=$http->request->get('comuna');
        $idusuario=$http->request->get('idusuario');
        $result=$this->listar_todas_ordenes($comuna,$idusuario);

        if ($result == false){
            return array('success' => 0, 'message' => "Sin Datos" );
        }else{
            $json = array(
                "aaData"=>array(
                )
            );
            try {
                $numero=0;$opciones=array('0','1','2','3','4','5');
                foreach ($result as $key => $value) {
                    $numero++;

                    $html="<a data-toggle='tooltip' data-placement='top' name='btnasigna' title='Cambiar Ejecutivo' class='btn btn-success btn-sm' onclick=\"cambiar_ejecutivo(".$value['n_orden'].",'".$idusuario."','".$comuna."')\">
                                <i class='glyphicon glyphicon-send'></i>
                            </a>";
                    $html_prioridad = "<select id='".$value['n_orden']."'  class='form-control' onchange='cambiar_prioridad(".$value['n_orden'].");'>";
                        for ($i=0; $i < 6 ; $i++) {
                            if ($opciones[$i] != $value['prioridad']) {
                                $html_prioridad.="<option value=".$opciones[$i].">".$opciones[$i]."</option>";
                            }else{
                                $html_prioridad.="<option value=".$opciones[$i]." selected>".$opciones[$i]."</option>";
                            }
                        }
                    $html_prioridad.="</select>";
                    $json['aaData'][] = array($numero,$value['desctipoorden'],$value['actividad'],$value['n_orden'],$value['rut_cliente'],$value['fecha_compromiso'],$value['bloque'],$value['comuna'],$value['nombre'],$value['desc_estado_orden'],$html_prioridad,$html);
                }
                $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
                $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$idusuario.".dbj", 'w');
                fwrite($fh, $jsonencoded);
                fclose($fh);
                return array('success' => 1, 'message' => "result_cons_".$idusuario.".dbj" );

            } catch (\Exception $e) {
                return array('success' => 0, 'message' => "Error Inesperado" );
            }
        }
    }
    public function actualizar_tabla_ordenes_sin_asignar(){
        global $http;
        $idusuario=$http->request->get('idusuario');
        $result=$this->listar_todas_ordenes_sin_asignar($idusuario);

        if ($result == false){
            return array('success' => 0, 'message' => "Sin Datos" );
        }else{
            $json = array(
                "aaData"=>array(
                )
            );
            try {
                $numero=0;
                foreach ($result as $key => $value) {
                    $numero++;

                    $html="<a data-toggle='tooltip' data-placement='top' name='btnasigna' title='Cambiar Ejecutivo' class='btn btn-success btn-sm' onclick=\"asignar_ejecutivo('".$value['n_orden']."','".$idusuario."')\">
                                <i class='glyphicon glyphicon-plus'></i>
                            </a>";
                    $json['aaData'][] = array($numero,$value['desctipoorden'],$value['actividad'],$value['n_orden'],$value['rut_cliente'],$value['fecha_compromiso'],$value['bloque'],$value['comuna'],strtolower($value['desc_estado_orden']),$html);
                }
                $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
                $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$idusuario.".dbj", 'w');
                fwrite($fh, $jsonencoded);
                fclose($fh);
                return array('success' => 1, 'message' => "result_cons_".$idusuario.".dbj" );

            } catch (\Exception $e) {
                return array('success' => 0, 'message' => $e->getMessage() );
            }
        }
    }
    // ESCALAMIENTOS -----------------------------------------------------------
    public function escalar(){
        try {
            global $http;
            $orden=$http->request->get("orden");
            $opcion=$http->request->get("opcion");
            $cierre=$this->cargar_estados($opcion);//db->query_select("select * from tbl_estado_orden where ubicacion='$opcion'");

            if ($orden == false ) {
                return array('success' => 0, 'message' => 'No Existe');
            }else {
                $html=" ";
                if($opcion=="CIERRE"){
                    $html="<div>
                    <label>Desea Cerrar la orden?</label>";

                    return array('success' => 1, 'html' => $html, 'message'=>$opcion);
                }elseif($opcion=="FINALIZADO"){
                    $html="<div>
                    <label>Desea Finalizar la orden?</label>";
                    return array('success' => 1, 'html' => $html, 'message'=>$opcion);
                }else{
                    $html=" ";
                    $html="<div
                    <form id='formmodal' name='formmodal'>
                    <br>
                    <input typw='text' id='textobservacion' class='form-control'
                    name='textobservacion'>
                    <label for='textobservacion'>Observacion</label>
                    <br>
                    <br>
                    <select id='selectopcion' name='selectopcion' class='form-control' onchange='selectopcion()'
                    <br>";
                    foreach ($cierre as $key => $value) {
                        $html.="<option value=".$value['id_estado'].">".$value['descripcion']."</option>";
                    }
                    $html.=" </form> </div>";
                    return array('success' => 1, 'html' => $html, 'message'=>$opcion);
                }
            }
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $estados[0][0]);
        }
    }
    public function guardar_escalamiento(){
        global $http;
        try {
            $datusu=$this->user;
            $idorden=$http->request->get('idorden');
            $norden=$http->request->get('n_orden');
            $fecha=date('Y-m-d');
            $opcion=$http->request->get('opcion');
            $observacion=$http->request->get('observacion');
            $opcioncombo=$http->request->get('valopcion');
            $id_tecnico=$http->request->get('id_tecnico');
            if($opcion=="CIERRE"){
                $observacion="Orden cerrada";
            }else if($opcion=="FINALIZADO"){
                $observacion="Orden Finalizada";
            }


            $this->db->insert('tblhistorico', array(
                'id_orden' => $idorden,
                'n_orden' => $norden,
                'fecha' => $fecha,
                'accion' => $opcion,
                'observacion' => $observacion,
                'id_estado' => $opcioncombo,
                'id_tecnico' => $id_tecnico,
                'id_user' => $datusu['id_user']
            ));

            if($opcion=="CIERRE"){
                $this->db->query_select("update tblordenes set estado_orden='1', ubicacion='$opcion' where id_orden='$idorden'");
                return array('success' => 1, 'message' => 'Orden ESCALADA a proceso de CIERRE');
            }elseif($opcion=="FINALIZADO"){
                $resultado=$this->db->query_select("select actividad from tblordenes where id_orden='$idorden'");
                $res=$resultado[0][0];
                $consulta=$this->db->query_select("select * from tblactividad where (cierre_seguro='1' and  actividad='$res' ) OR (certificacion='1' and  actividad='$res') OR (speed_test='1' and  actividad='$res')");
                if($consulta!=false){
                  $this->db->query_select("update tblordenes set estado_orden='1', ubicacion='CIERRE' where id_orden='$idorden'");
                  return array('success' => 1, 'message' => 'Orden Requiere proceso de CIERRE y ha sido ESCALADA');
                }else{
                    $this->db->query_select("update tblordenes set estado_orden='1', ubicacion='$opcion' where id_orden='$idorden'");
                    return array('success' => 1, 'message' => 'Orden FINALIZADA');
                }
            }else{
                $this->db->query_select("update tblordenes set estado_orden=$opcioncombo, ubicacion='$opcion' where id_orden='$idorden'");
                return array('success' => 1, 'message' => 'Orden Escalada a '.$opcion);
            }
        } catch (\Exception $e) {
            return array('success' => 0, 'message' => 'Ha ocurrido un error');
        }
    }
    //--------------------------------------------------------------------------
    // MANTENEDORES ------------------------------------------------------------
    public function registra_nuevo_estado() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $ubicacion = $http->request->get('ubicacion');
            $descripcion = $http->request->get('descripcion');
            $grupo = $http->request->get('grupo');

            # Verificar que no están vacíos
            if ($this->functions->e($ubicacion,$descripcion)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar al actividad
            $this->db->insert('tbl_estado_orden', array(
                'ubicacion' => $ubicacion,
                'descripcion' => $descripcion,
                'grupo' => $grupo
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function verEstadoss(string $select = '*'){
        return $this->db->select($select,'tbl_estado_orden');
    }
    public function getEstadosById(int $id, string $select = '*') {
        return $this->db->select($select,'tbl_estado_orden',"id_estado='$id'",'LIMIT 1');
    }
    public function update_estado_estado($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tbl_estado_orden SET estado=if(estado=0,1,0) WHERE id_estado=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'despacho/listar_estados');
    }
    public function modificar_estado(): array {
        try {
            global $http;

            #Obtener los datos $_POST
            $ubicacion = $http->request->get('ubicacion');
            $descripcion = $http->request->get('descripcion');
            $grupo = $http->request->get('grupo');
            $id = $http->request->get('id_estado');

            if ($this->functions->e($ubicacion,$descripcion)) {
                throw new ModelsException('Todos los datos son necesarios');
            }

            $this->db->update('tbl_estado_orden',array(
                'ubicacion' => $ubicacion,
                'descripcion' => $descripcion,
                'grupo' => $grupo
            ),"id_estado='$id'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Bloque exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    //--------------------------------------------------------------------------
    // Visor supervisor---------------------------------------------------------
    public function db_ejecutivos(): array{
        try {
            global $http;
            $id = $http->request->get('n_ord');
            $html =  "<form id='formeje' name='formeje' class='form-signin'><h2><select class='form-control' name='tec' id='tec'>";

            $ejecutivos =(new Model\Mdlcoordinacion)->db_ejecutivos_despacho();//$this->db->query_select("Select * from users u where perfil like '%DESPACHO%' order by name");

            if ($ejecutivos != FALSE){
                foreach ($ejecutivos as $key => $value) {
                    $html .=         "<option value='".$value['id_user']."'>".$value['name']."</option>";
                }
                $html .=         "</select></h2><input type='hidden' value='$id' id='n_orden' name='n_orden'></form>";
                return array('success' => 1,'msg' => $html,'id'=>$id);
            }
            return array('success' => 1,'msg' => $ejecutivos);
        }catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
    public function cambiar_ejecutivos(): array{
        try {
            global $http;
            $tec = $http->request->get('tec');
            $n_orden = $http->request->get('n_orden');

            $this->db->update('tblordenes',array(
                            'id_usuario_despacho' => $tec,
                            'ubicacion' => 'DESPACHO',
                        ),"n_orden='$n_orden'");
            return array('success' => 1,'msg' => 'Actualizado con exito');
        }catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
    public function cambiar_prioridad(): array{
        try {
            global $http;
            $id = $http->request->get('id');
            $prio = $http->request->get('prio');

            $this->db->update('tblordenes',array(
                            'prioridad' => $prio,
                        ),"n_orden='$id'");

            return array('success' => 1,'msg' => 'Actualizado con exito');
        }catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }
    //--------------------------------------------------------------------------
    //consultas y reportes------------------------------------------------------
    

    //--------------------------------------------------------------------------
    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        $this->startDBConexion();
        $this->user=(new Model\Users)->getOwnerUser();
    }

    /**
      * __destruct()
    */
    public function __destruct() {
        parent::__destruct();
        $this->endDBConexion();
    }
}
