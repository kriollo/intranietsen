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
use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Reader_Excel2007;
use PHPExcel_Style_NumberFormat;

/**
 * Modelo Mdlpersonal
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Mdlcierre extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;
    protected $user = array();
    // Asigna Comuna a Ejecutivo
    public function verOrdenes(string $select = '*'){
        return $this->db->select($select,'tblordenes','ubicacion="CIERRE" AND estado_orden= "1"');
    }

    public function cierre_asegurado(): array {
        try {
            global $http;
            $id = $http->request->get('id');
            $opcion = $http->request->get('opcion');
            $tec = $http->request->get('tec');
            $this->db->insert('tbl_cierre_asegurado', array(
                'n_orden' => $id,
                'hay_tec' => $tec,
                'cierre' => $opcion
            ));

            $this->db->update('tblordenes', array(
                'cierre_seguro' => '1'
            ),"n_orden='$id'");

                return array('success' => 1,'id' => $this->user['id_user']);

        } catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }

    public function tomar_orden($id) {
        global $http,$config;

        $this->db->query("UPDATE tblordenes SET id_ejecutivo_cierre='".$this->user['id_user']."' WHERE n_orden='$id' LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'despacho/listar_ordenes');
    }

    public function speed_test(): array{
        try{
        global $http;

            $id = $http->request->get('id');
            $img = $http->files->get('fileinput');
            $foto = 0;
            $img_name="";

            if (null !== $img && true == Files::is_image($img->getClientOriginalName()) ){
              $foto = 1;
              $ext_foto = $img->getClientOriginalExtension();
              $img_name = $id.'_st.'.$ext_foto;

              $img->move(API_INTERFACE . 'views/app/disco/speedtest/', $img_name);
              $this->db->update('tblordenes', array(
                'speed_test' => '1'
            ),"n_orden='$id'");
            }else{
            return array('success' => 2, 'message' => 'Falta la imagen');
            }
             return array('success' => 1,'id' => $id);
                }
                catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }

    public function certificacion(): array{
        try{
            global $http;

            $id = $http->request->get('id');
            $this->db->update('tblordenes', array(
                'certificacion' => '1'
            ),"n_orden='$id'");
            return array('success' => 1);
        }catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }

    public function finalizar($id) {
        global $config,$http;
        # Actualiza Estado
         $this->db->update('tblordenes', array(
                'ubicacion' => 'FINALIZADO'
            ),"n_orden='$id'");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'despacho/listar_ordenes');
    }
// ------------------------------------------------------------------------------------------------------
    public function cargar_excel(){
        global $http;

        $file = $http->files->get('excel');

        $docname="";
        if (null !== $file ){
            $ext_doc = $file->getClientOriginalExtension();

            if (strtolower($ext_doc)<>'xlsx') return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");

            $docname = 'cargaturno.'.strtolower($ext_doc);

            $file->move(API_INTERFACE . 'views/app/temp/', $docname);

            $archivo = API_INTERFACE . 'views/app/temp/'. $docname;
            //carga del excelname

            $objReader = new PHPExcel_Reader_Excel2007();
            $objPHPExcel = $objReader->load($archivo);

            $i=2;
            $param=0;
            $celdablanco = 0;

            $this->db->query_select('truncate tmp_ordenes_cierre_seguro');

            while($param==0){
                try {
                    //echo $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
                    if ($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue()!=NULL){

                        $cod_tecnico = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getvalue();
                        $despachador = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getvalue();
                        $ACTIVIDAD = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getvalue();

                        $COMUNA = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getvalue();
                        $NODO = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getvalue();
                        $RUT = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getvalue();

                        $result = $this->db->query_select("select id from tblordenescierreseguro where date(fecha_carga)=date(now()) and rut_cliente='$RUT'");
                        if (false == $result){
                            $this->db->Insert('tmp_ordenes_cierre_seguro', array(
                                'rut_cliente'=>$RUT,
                                'comuna'=>$COMUNA,
                                'actividad'=>$ACTIVIDAD,
                                'cod_tecnico'=>$cod_tecnico,
                                'despachador'=>$despachador,
                                'nodo'=> $NODO
                            ));
                        }
                        $celdablanco = 0;
                    }else{
                        $celdablanco++;
                    }
                    if ($celdablanco == 5) {
                        $param=1;
                    }
                    $i++;
                } catch (\Exception $e) {
                    if (Files::delete_file(API_INTERFACE . 'views/app/temp/'.$docname)){
                        return array('success' => 0, 'message' => $e->getMessage() );
                    }
                }
            }

            $result = $this->db->query_select("select count(id) cuenta from tmp_ordenes_cierre_seguro");
            if (false != $result){

                if ( $result[0]['cuenta'] > '0' ){

                    $this->db->Insert('tbl_historialarchivoscargados', array(
                        'app'=>'Carga de Cierre de ordenes',
                        'nombre_archivo'=> $file->getClientOriginalName(),
                        'id_user' => $this->user['id_user'],
                        'q_registros' => $result[0]['cuenta']
                    ));

                    if (Files::delete_file(API_INTERFACE . 'views/app/temp/'.$docname)){
                        return array('success' => 1, 'message' => $result[0]['cuenta']." Registros validos cargados Exitosamente..." );
                    }

                }else{
                    if (Files::delete_file(API_INTERFACE . 'views/app/temp/'.$docname)){
                        return array('success' => 0, 'message' => 'No se ha cargado ningun registro, es posible que ya se encuentren en la base de datos...');
                    }
                }
            }

        }else{
            return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");
        }
    }
    public function getEjecutivos(){
        return $this->db->query_select("SELECT u.id_user,u.name,e.id_user checked,(select count(o.ejecutivo) from tblordenescierreseguro o where o.ejecutivo=u.id_user and estado=1) cantidad FROM users u left join tblejecutivosdistribucion e on u.id_user=e.id_user WHERE u.perfil LIKE '%CONFIRMACION%' and u.estado=1 order by u.name");
    }
    public function cierreseguro_des_marcar_ejecutivo(){
        global $http;

        $id_user = $http->request->get('id_user');
        $check =  $http->request->get('check');

        $this->db->query_select("Delete from tblejecutivosdistribucion where id_user ='$id_user' ");

        if ('1' == $check) $this->db->query_select("insert into  tblejecutivosdistribucion(id_user) value ('$id_user') ");
        return array('message' => '0','estado' => $check);
    }
    public function getQ_OrdenesSinDistribucionTMP(){
        $result = $this->db->query_select("select count(*) cantidad from tmp_ordenes_cierre_seguro");
        if (false != $result){
            return $result[0];
        }else {
            return array('cantidad' => '0');
        }
    }
    public function getQ_OrdenesSinDistribucionPROD(){
        $result = $this->db->query_select("select count(*) cantidad from tblordenescierreseguro Where estado=1 and ejecutivo=0");
        if (false != $result){
            return $result[0];
        }else {
            return array('cantidad' => '0');
        }
    }
    public function cierreseguro_Distribuir_Ordenes(){
        global $http;

        $tabla = $http->request->get('tabla');
        $result = "";
        if ($tabla == 'TMP'){
            $result = $this->distribuir_ordenes_TMP();
        }elseif($tabla == 'PROD'){
            $result = $this->distribuir_ordenes_PROD();
        }

        return array('success' => '1','message'=> $result);
    }
    public function distribuir_ordenes_TMP(){
        try {
            $sql="select count(*) cantidad from tmp_ordenes_cierre_seguro";
            $resumen=$this->db->query_select($sql);// extrae cantidad de ordenes por comuna
            if (false != $resumen){
                foreach ($resumen as $key => $value) {

                    $sql="Select count(*) q from tblejecutivosdistribucion";
                    $count_users = $this->db->query_select($sql); //extrae cantidad de ejecutivos por comuna
                    if ($count_users[0]['q'] > 0){
                        $resultd=ceil($value['cantidad'] /$count_users[0]['q']); //extrae cantidad de ordenes por usuario
                        $i=($count_users[0]['q'])-1; //cantidad de paginas en limit

                        $sql="Select id_user from tblejecutivosdistribucion";
                        $users_asiganacion = $this->db->query_select($sql); //extrae usuarios asignados a comuna
                        foreach ($users_asiganacion as $key2 => $value2) {
                            $sql="select * from tmp_ordenes_cierre_seguro order by comuna limit $i,$resultd";
                            $ordenes_asiganacion = $this->db->query_select($sql); //extrae ordenes correspondientas para asignar segun limit
                            if (false != $ordenes_asiganacion){
                                foreach ($ordenes_asiganacion as $key3 => $value3) {

                                    $sql="insert into tblordenescierreseguro(cod_tecnico,rut_cliente,comuna,actividad,despachador,nodo,ejecutivo,fecha_carga) value('".$value3['cod_tecnico']."','".$value3['rut_cliente']."','".$value3['comuna']."','".$value3['actividad']."','".$value3['despachador']."','".$value3['nodo']."','".$value2['id_user']."',now())";
                                    $this->db->query_select($sql);

                                    $this->db->query_select("delete from tmp_ordenes_cierre_seguro where id='".$value3['id']."'");
                                }
                            }
                            $i--;
                        }
                    }
                }
            }
            //$this->db->query_select('truncate tmp_ordenes_cierre_seguro'); //borro temporal
            return array('Distribucion TMP OK');
        } catch (\Exception $e) {
            return array($e->getMessage() );
        }
    }
    public function distribuir_ordenes_PROD(){
        try {
            $sql="select count(*) cantidad from tblordenescierreseguro where estado=1 and ejecutivo=0";
            $resumen=$this->db->query_select($sql);// extrae cantidad de ordenes por comuna
            if (false != $resumen){
                foreach ($resumen as $key => $value) {

                    $sql="Select count(*) q from tblejecutivosdistribucion";
                    $count_users = $this->db->query_select($sql); //extrae cantidad de ejecutivos por comuna
                    if ($count_users[0]['q'] > 0){
                        $resultd=ceil($value['cantidad'] /$count_users[0]['q']); //extrae cantidad de ordenes por usuario
                        $i=($count_users[0]['q'])-1; //cantidad de paginas en limit

                        $sql="Select id_user from tblejecutivosdistribucion";
                        $users_asiganacion = $this->db->query_select($sql); //extrae usuarios asignados a comuna
                        foreach ($users_asiganacion as $key2 => $value2) {
                            $sql="select id from tblordenescierreseguro where estado=1 and ejecutivo=0 order by comuna limit $i,$resultd";
                            $ordenes_asiganacion = $this->db->query_select($sql); //extrae ordenes correspondientas para asignar segun limit
                            if (false != $ordenes_asiganacion){
                                foreach ($ordenes_asiganacion as $key3 => $value3) {

                                    $sql="update tblordenescierreseguro set ejecutivo='".$value2['id_user']."',fecha_carga=now() where id='".$value3['id']."'";
                                    $this->db->query_select($sql);
                                }
                            }
                            $i--;
                        }
                    }
                }
            }

            return array('Distribucion PROD OK');
        } catch (\Exception $e) {
            return array($e->getMessage() );
        }
    }
    public function cierreseguro_quitar_Ordenes_ejecutivos(){
        global $http;
        $id_user = $http->request->get('id_user');

        $this->db->query_select("update tblordenescierreseguro Set ejecutivo=0 where ejecutivo='".$id_user."' and estado=1");

        return array('success' => 1);
    }
    public function cierreseguro_getDatosOrdenesTMP(){

        $result= $this->db->query_select("select * from tmp_ordenes_cierre_seguro");

        if ($result === false){
            return array('success' => 0, 'message' => 'Sin Datos');
        }else{
            $json = array(
            "aaData"=>array(
            )
            );
            foreach ($result as $key => $value) {
                $json['aaData'][] = array($value['rut_cliente'],$value['comuna'],$value['actividad'],$value['despachador'],$value['cod_tecnico']);
            }
        }
        $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
        $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$this->user['id_user'].".dbj", 'w');
        fwrite($fh, $jsonencoded);
        fclose($fh);
        return array('success' => 1, 'message' => "result_cons_".$this->user['id_user'].".dbj" );
    }
    public function getResumenGestionDia($fecha){
        $sql="select asig.ejecutivo,u.name,asig.estado,count(asig.id) q_asignado,
        (select count(pend.id) from tblordenescierreseguro pend where pend.ejecutivo=asig.ejecutivo and pend.estado=1 and date(pend.fecha_carga)='$fecha') q_pendiente,
        (select count(aprob.id) from tblordenescierreseguro aprob where aprob.ejecutivo=asig.ejecutivo and aprob.estado=2 and date(aprob.fecha_carga)='$fecha') q_aprobado,
        (select count(recha.id) from tblordenescierreseguro recha where recha.ejecutivo=asig.ejecutivo and recha.estado=3 and date(recha.fecha_carga)='$fecha') q_rechazado,
        (select count(recha.id) from tblordenescierreseguro recha where recha.ejecutivo=asig.ejecutivo and recha.estado=5 and date(recha.fecha_carga)='$fecha') q_anuladas
        from tblordenescierreseguro asig inner join users u on asig.ejecutivo=u.id_user where date(asig.fecha_carga)='$fecha' and ejecutivo>0 group by asig.ejecutivo order by u.name";
        return $this->db->query_select($sql);
    }
    public function getOrdenesEjecutivoSeguimiento(){
        return $this->db->query_select("select * from tblordenescierreseguro where ejecutivo='".$this->user['id_user']."' and estado='1' order by prioridad asc");
    }
    public function getOrdenByID($id){
        $result = $this->db->query_select("select * from tblordenescierreseguro where id='".$id."'");
        return $result[0];
    }
    public function guardar_cierre(){
        global $http;
        try {
            $id=$http->request->get('id');
            $norden=$http->request->get('norden');
            $resul_orden = $this->getOrdenByID($id);
            $norden = $resul_orden['n_orden'];

            $this->db->query_select("update tblordenescierreseguro set estado='2',ultimo_contacto=now(),prioridad=prioridad+1 where id='$id'");

            $this->db->insert('tblhistorico_cierre',array(
                'n_orden' => $norden,
                'id_orden' => $id,
                'id_user' => $this->user['id_user'],
                'estado'=>'2'
            ));

            return array('success' => 1, 'message'=>'Orden Cerrada como Aprobada');
        } catch (\Exception $e) {
            return array('success' => 0, 'message'=>'Error');
        }
    }
    public function cierre_desaprobado(){
        global $http;
        $id=$http->request->get('id');
        $observacion=$http->request->get('observacion');
        $resul_orden = $this->getOrdenByID($id);
        $norden = $resul_orden['n_orden'];

        $this->db->query_select("update tblordenescierreseguro set estado='3',prioridad=prioridad+1, observacion='$observacion',ultimo_contacto=now() where id='$id'");

        $this->db->insert('tblhistorico_cierre',array(
            'n_orden' => $norden,
            'id_orden' => $id,
            'id_user' => $this->user['id_user'],
            'estado'=>'3',
            'observacion' => $observacion
        ));
        return array('success' => 1, 'message'=>'Orden Cerrada como rechazada');
    }
    public function modificar_prioridad(){
        global $http;
        try {
            $id=$http->request->get('id');


            $this->db->query_select("update tblordenescierreseguro set prioridad=prioridad+1,ultimo_contacto=now() where id='$id'");
            $resul_orden = $this->getOrdenByID($id);
            $norden = $resul_orden['n_orden'];

            $this->db->insert('tblhistorico_cierre',array(
                'n_orden' => $norden,
                'id_orden' => $id,
                'id_user' => $this->user['id_user'],
                'estado'=>'4'
            ));

            if ($resul_orden['prioridad'] >= 3){

                $this->db->insert('tblhistorico_cierre',array(
                    'n_orden' => $norden,
                    'id_orden' => $id,
                    'id_user' => $this->user['id_user'],
                    'estado'=>'5'
                ));
                $this->db->query_select("update tblordenescierreseguro set ultimo_contacto=now(),estado=5 where id='$id'");

                return array('success' => 2, 'message'=>'se ha llegado al limite de llamados, se procede a dejar nula la orden.');
            }
            return array('success' => 1, 'message'=>'Prioridad modificada');
        }catch (\Exception $e) {
            return array('success' => 0, 'message'=>'Error');
        }
    }
    public function cierreseguro_update_datos_orden(){
        global $http;
        try {
            $id=$http->request->get('id');
            $n_orden=$http->request->get('n_orden');
            $telefono=$http->request->get('telefono');
            $this->db->query_select("update tblordenescierreseguro set n_orden='$n_orden',telefono='$telefono' where id='$id'");
        }catch (\Exception $e) {
            return array('success' => 0, 'message'=>'Error');
        }
    }
    public function cargar_todas_ordenes_cierre(){
        return $this->db->query_select("select * from tblordenescierreseguro  order by prioridad asc");
    }
    public function select_modificar_orden_cerrada(){
        global $http;
        $id=$http->request->get('id');

        $this->db->query_select("update tblordenescierreseguro set estado='1',observacion='',prioridad=if(prioridad>0,prioridad-1,0) where id='$id'");

        $result = $this->db->query_select("select id from tblhistorico_cierre Where id_orden='$id'  order by id desc limit 1");
        $this->db->query_select("delete from tblhistorico_cierre Where id='".$result[0]['id']."' limit 1");

        return array('success' => 1, 'message'=>'Orden modificada a Pendiente');
    }


    public function select_filtro(){
        global $http;
        $opcion=$http->request->get('num');

        if($opcion==1){
            $html="<form id='form_filtrar_ordenes_supervisor' name='form_filtrar_ordenes_supervisor'>
            <label>N° Orden:</label>
            <input type='text' id='textordenes' name='textordenes'>
            <input type='hidden' id='opcion' name='opcion' value='orden'>
            <label>&nbsp;</label>
            <a class='btn btn-primary' id='btnfiltrar' name='btnfiltrar' onclick=\"filtrar_ordenes_supervisor('orden')\" title='Buscar registro' data-toggle='tooltip' onclick>
            Buscar Orden
            </a>
            <button type='button' onclick='location.reload();' class='btn btn-primary'>Quitar Filtro</button>
            <a class='btn btn-success btn-social' id='btnexportarexcel' onclick=\"exportarexcel('orden')\" title='Exportar a Excel' data-toggle='tooltip'>
            <i class='fa fa-arrow-down'></i> Exportar Excel
            </a>
            </form>";
        }elseif($opcion==0){
            $fecha=date('Y-m-d');
            $html="<form id='form_filtrar_ordenes_supervisor' name='form_filtrar_ordenes_supervisor'>
            <label>Desde:</label>
            <input type='date' id='textdesde' style='width:130px;' name='textdesde' value=$fecha>
            <label>&nbsp;</label>
            <label>Hasta:</label>
            <input type='date' id='texthasta' style='width:130px;' name='texthasta' value=$fecha>
            <input type='hidden' id='opcion' name='opcion' value='fechas'>
            <a class='btn btn-primary' id='btnfiltrarfecha' name='btnfiltrarfecha' onclick=\"filtrar_ordenes_supervisor('fechas');\" title='Buscar registro' data-toggle='tooltip'>
            Filtrar Fecha
            </a>
            <button type='button' onclick='location.reload();' class='btn btn-primary'>Quitar Filtro</button>
            <a class='btn btn-success btn-social' id='btnexportarexcel' onclick=\"exportarexcel('fecha')\" title='Exportar a Excel' data-toggle='tooltip'>
            <i class='fa fa-arrow-down'></i> Exportar Excel
            </a>
            </form>";

        }
        return array('success' => 1, 'html'=>$html);
    }
    public function getOrdenesFiltroSupervisor($fechadesde,string $fechahasta='',$opcion){
        if ($opcion == "fechas"){
            $filtro = "date(o.fecha_carga) BETWEEN '$fechadesde' and '$fechahasta'";
        }else{
            $filtro = "o.n_orden='$fechadesde'";
        }
        return $this->db->query_select("select o.id,n_orden,o.rut_cliente,o.comuna,o.actividad,o.telefono,o.cod_tecnico,o.despachador,o.nodo,o.estado,o.ejecutivo,o.prioridad,o.fecha_carga,o.observacion,o.ultimo_contacto,u.name from tblordenescierreseguro o inner join users u on o.ejecutivo=u.id_user where $filtro order by o.prioridad asc");
    }
    public function cierreseguro_filtrar_ordenes_supervisor(){
        global $http;
        $opcion=$http->request->get('opcion');

        if ($opcion == "fechas"){
            $fechadesde=$http->request->get('textdesde');
            $fechahasta=$http->request->get('texthasta');
            $registros= $this->getOrdenesFiltroSupervisor($fechadesde,$fechahasta,$opcion);
        }else{
            $orden=$http->request->get('textordenes');
            $registros= $this->getOrdenesFiltroSupervisor($orden,'',$opcion);
        }

        if ($registros == false){
            return array('success' => 0, 'message' => "Sin Datos");
        }else{
            $json = array(
                "aaData"=>array(
                )
            );
            try {
                $numero=0;
                foreach ($registros as $key => $value) {
                    $numero++;

                    if($value['estado']=='1'){
                        $opcion='PENDIENTE';
                        $html="<a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' disabled><i class='glyphicon glyphicon-edit'></i></a>";
                    }else if($value['estado']=='2'){
                        $opcion='APROBADO';
                        $html="<a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\" select_modificar_orden_cerrada('".$value['id']."')\"><i class='glyphicon glyphicon-edit'></i></a>";
                    }else if($value['estado']=='3'){
                        $opcion='CLI/RECHAZA';
                        $html="<a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\" select_modificar_orden_cerrada('".$value['id']."')\"><i class='glyphicon glyphicon-edit'></i></a><a data-toggle='tooltip' data-placement='top' id='btnver' name='btnver' title='Observacion' class='btn btn-primary btn-sm' onclick=\"verobservacion('".$value['id']."')\"><i class='glyphicon glyphicon-eye-open'></i></a>";
                    }else{
                        $opcion='S/CONTACTO';
                        $html="<a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\" select_modificar_orden_cerrada('".$value['id']."')\"><i class='glyphicon glyphicon-edit'></i></a>";
                    }

                    $json['aaData'][]= array($numero,$value['name'],$value['n_orden'],$value['rut_cliente'],$value['comuna'],$value['actividad'],$value['cod_tecnico'],$value['despachador'],$value['telefono'],$value['ultimo_contacto'],$value['prioridad'],$opcion,$html);
                }
                $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
                $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$this->user['id_user'].".dbj", 'w');
                fwrite($fh, $jsonencoded);
                fclose($fh);
                return array('success' => 1, 'message' => "result_cons_".$this->user['id_user'].".dbj" );
            } catch (\Exception $e) {
                return array('success' => 0, 'message' => "Error Inesperado" );
            }
        }
    }
    public function exporta_excel_ordenescierre(){
        global $http,$config;
        $opcion=$http->query->get('opcion');

        if ($opcion=='fecha'){
            $fechadesde=$http->query->get('desde');
            $fechahasta=$http->query->get('hasta');
            $registros= $this->getOrdenesFiltroSupervisor($fechadesde,$fechahasta,'fechas');
        }else{
            $orden=$http->query->get('orden');
            $registros= $this->getOrdenesFiltroSupervisor($orden,'','orden');
        }
        if ( $registros != false ){

            $objPHPExcel = new PHPExcel();

            //Informacion del excel
            $objPHPExcel->getProperties() ->setCreator("Jorge Jara H.")
                ->setLastModifiedBy("JJH")
                ->setTitle("listado_ordenes");
            //encabezado
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'N_ORDEN');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'RUT_CLIENTE');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'COMUNA');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'ACTIVIDAD');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'TELEFONO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'TECNICO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'DESPACHADOR');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', 'NODO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', 'EJECUTIVO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', 'LLAMADOS');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K1', 'FECHA GESTION');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L1', 'ESTADO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M1', 'OBSERVACION');


            $fila = 2;
            foreach ($registros as $value => $data) {
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['n_orden']);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila, $data['rut_cliente']);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['comuna']);
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['actividad'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['telefono'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['cod_tecnico'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$fila, $data['despachador'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$fila, $data['nodo'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$fila, $data['name'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$fila, $data['prioridad'] );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$fila, $data['ultimo_contacto'] );

                if ($data['estado'] == 1){
                    $estado='PENDIENTE';
                }elseif($data['estado'] == 2){
                    $estado='APROBADA';
                }elseif($data['estado'] == 3){
                    $estado='CLI/RECHAZA';
                }else{
                    $estado='S/CONTACTO';
                }
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$fila, $estado );
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$fila, $data['observacion'] );

                $fila++;
            }

            foreach(range('A','M') as $columnID)
            {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            $objPHPExcel->setActiveSheetIndex(0);

            $objPHPExcel->getActiveSheet()->setTitle('listado_ordenes');

            header('Content-Type: application/vnd.ms-excel');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="listado_ordenes.xlsx"');
            header('Cache-Control: max-age=0');


            header('Cache-Control: max-age=1');

            header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
            header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
            header ('Pragma: public');

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('php://output');
        }
        else{
            $this->functions->redir($config['site']['url'] . 'cierreseguro/seguimiento_super');
        }
    }
    public function formcierre(){
        $html="<label>Agregue Observacion</label>
        <br>
        <input type='text' class='form-control' id='textobservacion' name='textobservacion'>";

        return array('success' => 1, 'html' => $html );
    }
    public function verobservacion(){
        global $http;
        $id=$http->request->get('id');
        $observacion=$this->db->query_select("select observacion from tblordenescierreseguro where id='$id'");
        $mostrar=$observacion[0][0];
        $html="
        <input type='text' class='form-control' id='textobservacion' name='textobservacion' value='$mostrar' readonly>";

        return array('success' => 1, 'html' => $html );
    }
// ------------------------------------------------------------------------------------------------------
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
