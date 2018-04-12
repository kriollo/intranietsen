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

            if ($ext_doc<>'xls' and $ext_doc<>'xlsx') return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");

            $docname = 'cargaturno.'.$ext_doc;

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

                        $NUMERO_ORDEN = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
                        $RUT = substr($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getvalue(),0,12);
                        $COMUNA = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getvalue();

                        $objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2);
                        $ano=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getFormattedValue();
                        $krr = explode('-',$ano);
                        $FECHA_COMPROMISO = implode("",$krr);

                        $BLOQUE = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getvalue();
                        $ACTIVIDAD = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getvalue();
                        $TELEFONO = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getvalue();
                        $ANEXO1 = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getvalue();
                        $ANEXO2 = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getvalue();
                        $ANEXO3 = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getvalue();

                        $result = $this->db->query_select("select id from tblordenescierreseguro where n_orden='$NUMERO_ORDEN'");
                        if (false == $result){
                            $this->db->Insert('tmp_ordenes_cierre_seguro', array(
                                'n_orden'=>$NUMERO_ORDEN,
                                'rut_cliente'=>$RUT,
                                'comuna'=>$COMUNA,
                                'fecha_compromiso'=>$FECHA_COMPROMISO,
                                'bloque'=>$BLOQUE,
                                'actividad'=>$ACTIVIDAD,
                                'telefono'=>$TELEFONO,
                                'anexo1'=>$ANEXO1,
                                'anexo2'=>$ANEXO2,
                                'anexo3'=>$ANEXO3
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
                        'id_user' => $this->user['id_user']
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

                                    $sql="insert into tblordenescierreseguro(n_orden,rut_cliente,comuna,fecha_compromiso,bloque,actividad,telefono,anexo1,anexo2,anexo3,ejecutivo) value('".$value3['n_orden']."','".$value3['rut_cliente']."','".$value3['comuna']."','".$value3['fecha_compromiso']."','".$value3['bloque']."','".$value3['actividad']."','".$value3['telefono']."','".$value3['anexo1']."','".$value3['anexo2']."','".$value3['anexo3']."','".$value2['id_user']."')";
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

                                    $sql="update tblordenescierreseguro set ejecutivo='".$value2['id_user']."' where id='".$value3['id']."'";
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
                $json['aaData'][] = array($value['n_orden'],$value['rut_cliente'],$value['comuna'],$value['fecha_compromiso'],$value['bloque'],$value['actividad'],$value['telefono']);
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
        (select count(recha.id) from tblordenescierreseguro recha where recha.ejecutivo=asig.ejecutivo and recha.estado=3 and date(recha.fecha_carga)='$fecha') q_rechazado
        from tblordenescierreseguro asig inner join users u on asig.ejecutivo=u.id_user where date(asig.fecha_carga)='$fecha' and ejecutivo>0 group by asig.ejecutivo order by u.name";
        return $this->db->query_select($sql);
    }

    public function cargar_ordenes_cierre(){
        return $this->db->query_select("select * from tblordenescierreseguro where ejecutivo='".$this->user['id_user']."' and estado='1' order by prioridad asc");
    }
    public function guardar_cierre(){
        global $http;
        try {
            $id=$http->request->get('id');
            $norden=$http->request->get('norden');
            $rutcliente=$http->request->get('rutcliente');
            $comuna=$http->request->get('comuna');
            $fechacompromiso=$http->request->get('fecha_compromiso');
            $actividad=$http->request->get('actividad');
            $bloque=$http->request->get('bloque');
            $telefono=$http->request->get('telefono');

            $this->db->query_select("update tblordenescierreseguro set estado='2' where id='$id'");


            $this->db->insert('tblhistorico_cierre',array(
                'n_orden' => $norden,
                'id_orden' => $id,
                'id_user' => $this->user['id_user'],
                'estado'=>'2'
            ));

            return array('success' => 1, 'message'=>'Orden Cerrada');
        } catch (\Exception $e) {
            return array('success' => 0, 'message'=>'Error');
        }
    }
    public function cierre_desaprobado(){
        global $http;
        $id=$http->request->get('id');
        $norden=$http->request->get('norden');
        $rutcliente=$http->request->get('rutcliente');
        $comuna=$http->request->get('comuna');
        $fechacompromiso=$http->request->get('fecha_compromiso');
        $actividad=$http->request->get('actividad');
        $pri=$http->request->get('prioridad');
        $bloque=$http->request->get('bloque');
        $telefono=$http->request->get('telefono');
        $this->db->query_select("update tblordenescierreseguro set estado='3' where id='$id'");

        $this->db->insert('tblhistorico_cierre',array(
            'n_orden' => $norden,
            'id_orden' => $id,
            'id_user' => $this->user['id_user'],
            'estado'=>'3'
        ));
        return array('success' => 1, 'message'=>'Orden Cerrada');
    }
    public function modificar_prioridad(){
        global $http;
        try {
            $id=$http->request->get('id');
            $norden=$http->request->get('norden');
            $rutcliente=$http->request->get('rutcliente');
            $comuna=$http->request->get('comuna');
            $fechacompromiso=$http->request->get('fecha_compromiso');
            $actividad=$http->request->get('actividad');
            $bloque=$http->request->get('bloque');
            $telefono=$http->request->get('telefono');
            $pri=$http->request->get('prioridad');

            $this->db->query_select("update tblordenescierreseguro set prioridad=prioridad+1 where id='$id'");
            $this->db->insert('tblhistorico_cierre',array(
                'n_orden' => $norden,
                'id_orden' => $id,
                'id_user' => $this->user['id_user'],
                'estado'=>'4'
            ));

            return array('success' => 1, 'message'=>'Prioridad modificada');
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
        $norden=$http->request->get('norden');
        $rutcliente=$http->request->get('rutcliente');
        $comuna=$http->request->get('comuna');
        $fechacompromiso=$http->request->get('fecha_compromiso');
        $actividad=$http->request->get('actividad');
        $bloque=$http->request->get('bloque');
        $telefono=$http->request->get('telefono');
        $this->db->query_select("update tblordenescierreseguro set estado='1' where id='$id'");

        $this->db->insert('tblhistorico_cierre',array(
            'n_orden' => $norden,
            'id_orden' => $id,
            'id_user' => $this->user['id_user'],
            'estado'=>'1'
        ));
        return array('success' => 1, 'message'=>'Orden modificada');
    }


    public function select_filtro(){
        global $http;
        $opcion=$http->request->get('num');

        if($opcion==1){
            $html="<label>N° Orden:</label>
            <input type='text' id='textordenes' name='textordenes'>
            <a class='btn btn-primary' id='btnfiltrar' name='btnfiltrar' title='Buscar registro' data-toggle='tooltip'>
            Buscar Orden
            </a>";
            return array('success' => 1, 'html'=>$html);
        }elseif($opcion==0){
            $fecha=date('Y-m-d');
            $html="<label>Desde:</label>
            <input type='date' id='textdesde' name='textdesde' value=$fecha>
            <label>&nbsp;</label>
            <label>Hasta:</label>
            <input type='date' id='texthasta' name='texthasta' value=$fecha>
            <a class='btn btn-primary' id='btnfiltrarfecha' name='btnfiltrarfecha' title='Buscar registro' data-toggle='tooltip'>
            Filtrar Fecha
            </a>";
            return array('success' => 1, 'html'=>$html);
        }
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
