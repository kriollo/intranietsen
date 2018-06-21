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

class Mdlredes extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;
    protected $user = array();

    public function cargar_tecnicoredes(){
        global $http;
        $tecnico=$http->request->get('tecnico');

        $nombretecnico=$this->db->query_select("select nombre from tbltecnicos where codigo='$tecnico'");

        return array('success' => 0, 'message' => $nombretecnico[0][0]);
    }


    public function guardar_tecnicos(){

        global $http;

        $fen=$http->request->get('textfen');
        $fecha=$http->request->get('fechafen');
        $comuna=$http->request->get('textcomunass');
        $fechainicio=$http->request->get('feninicio');
        $fechafinal=$http->request->get('fenfinal');
        $turno=$http->request->get('fenturnos');
        $escalado=$http->request->get('fenescalado');
        $estado=$http->request->get('fenestado');
        $motivo=$http->request->get('textmotivo');
        $direccion=$http->request->get('textdir');
        $alarma=$http->request->get('textalarma');
        $ac=$http->request->get('acfen');
        $ad=$http->request->get('adfen');
        $numerotango=$http->request->get('tangofen');
        $numeroot=$http->request->get('infofen');
        $opciones=$http->request->get('textopcion');
        $ruttitular=$http->request->get('rutfen');
        $codigotecnico=$http->request->get('fentecnico');
        $nombretecnico=$http->request->get('tecnicofen');
        $observacion=$http->request->get('observacionfen');
        $estatus=$http->request->get('textestatus');
        $datusu=$this->user;

        $consultafen=$this->db->query_select("select fen from tblfen where fen='$fen'");
        if($consultafen!=false){
            return array('success' => 0, 'message' => 'No se puede ingresar ya que existe el numero de FEN');
        }

        $valrut=$this->db->query_select("select validate_rut('$ruttitular')");
        if($valrut[0][0]==0){
            return array('success' => 0, 'message' => 'Rut no valido');
        }

        $this->db->insert('tblfen', array(
            'fen'=>$fen,
            'fecha'=>$fecha,
            'comuna'=>$comuna,
            'fechainicio'=>$fechainicio,
            'fechafinal'=>$fechafinal,
            'turno'=>$turno,
            'escalado'=>$escalado,
            'estado' => $estado,
            'motivo' => $motivo,
            'direccion' => $direccion,
            'alarma'=>$alarma,
            'ac'=>$ac,
            'ad'=>$ad,
            'numerotango'=>$numerotango,
            'numeroot'=>$numeroot,
            'opciones'=>$opciones,
            'rut_titular'=>$ruttitular,
            'codigo_tecnico'=>$codigotecnico,
            'nombre_tecnico' => $nombretecnico,
            'observacion'=>$observacion,
            'estatus'=>$estatus,
            'id_user'=>$datusu['id_user']
        ));

        return array('success' => 1, 'message' => "Datos Ingresados correctamente" );
    }
    public function modificar_datos(){

        global $http;

        $edid=$http->request->get('edid');
        $edfechainicio=$http->request->get('edfeninicio');
        $edfechafinal=$http->request->get('edfenfinal');
        $edturno=$http->request->get('edfenturnos');
        $edescalado=$http->request->get('edfenescalado');
        $edestado=$http->request->get('edfenestado');
        $edmotivo=$http->request->get('edtextmotivo');
        $eddireccion=$http->request->get('edtextdir');
        $edalarma=$http->request->get('edtextalarma');
        $edac=$http->request->get('edacfen');
        $edad=$http->request->get('edadfen');
        $ednumerotango=$http->request->get('edtangofen');
        $ednumeroot=$http->request->get('edinfofen');
        $edruttitular=$http->request->get('edrutfen');
        $edcodigotecnico=$http->request->get('fentecnico');
        $ednombretecnico=$http->request->get('tecnicofen');
        $edobservacion=$http->request->get('edobservacionfen');
        $eddatusu=$this->user;
        $edcomuna=$http->request->get('edtextcomunass');
        $edopciones=$http->request->get('edtextopcion');
        $edestatus=$http->request->get('edtextestatus');

        if ($this->functions->e($edfechainicio,$edfechafinal,$edturno,$edescalado,$edestado,$edmotivo,$eddireccion,$edalarma,$edac,$edad,$ednumerotango,$ednumeroot,$edruttitular,$edobservacion)) {
            return array('success' => 0, 'message' => 'Debe ingresar todos los datos requeridos');
        }
        $edvalrut=$this->db->query_select("select validate_rut('$edruttitular')");
        if($edvalrut[0][0]==0){
            return array('success' => 0, 'message' => 'Rut no valido');
        }
        if ($this->functions->e($edcomuna)) {

        }else {
            $this->db->update('tblfen', array(
                'comuna'=> $edcomuna
            ),"id_fen='$edid'");
        }

        if ($this->functions->e($edopciones)) {

        }else {
            $this->db->update('tblfen', array(
                'opciones'=>$edopciones
            ),"id_fen='$edid'");
        }
        if ($this->functions->e($edestatus)) {

        }else {
            $this->db->update('tblfen', array(
                'estatus'=>$edestatus
            ),"id_fen='$edid'");
        }
        if ($this->functions->e($edcodigotecnico)) {

        }else {
            $this->db->update('tblfen', array(
                'codigo_tecnico'=>$edcodigotecnico
            ),"id_fen='$edid'");
        }
        if ($this->functions->e($ednombretecnico)) {

        }else {
            $this->db->update('tblfen', array(
                'nombre_tecnico' => $ednombretecnico
            ),"id_fen='$edid'");
        }


        $this->db->update('tblfen', array(
        'fechainicio'=>$edfechainicio,
        'fechafinal'=>$edfechafinal,
        'turno'=>$edturno,
        'escalado'=>$edescalado,
        'estado' => $edestado,
        'motivo' => $edmotivo,
        'direccion' => $eddireccion,
        'alarma'=>$edalarma,
        'ac'=>$edac,
        'ad'=>$edad,
        'numerotango'=>$ednumerotango,
        'numeroot'=>$ednumeroot,
        'rut_titular'=>$edruttitular,
        'observacion'=>$edobservacion,
        'id_user'=>$eddatusu['id_user']
        ),"id_fen='$edid'");
        return array('success' => 1, 'message' => "Datos Modificados correctamente" );
    }
    public function eliminarfen(){
        global $http;
        $codigo=$http->request->get('codigo');

        return $this->db->query_select("delete from tblfen where id_fen='$codigo'");

        return array('success' => 1, 'message' => 'Registro Eliminado' );
    }
    public function get_orden_byId(int $id){
        return $this->db->query_select("select *, tblcomuna.nombre,u.name from (tblfen inner join tblcomuna on tblfen.comuna=tblcomuna.id_comuna) inner join users u on tblfen.id_user=u.id_user where id_fen ='$id' limit 1");
    }

    public function listar_fen($fechainicio,$fechafinal) {

        return $this->db->query_select("select tblcomuna.nombre, id_fen,fen,usuario,fecha,comuna,fechainicio,fechafinal, case turno when 0 then '--' when 1 then 'AM' when 2 then 'PM'
        when 3 then 'NOCHE' end as turno, case escalado when 0 then '--' when 1 then 'OPERADOR' when 2 then 'NNOC'
        when 3 then 'SDMH' end as escalado, case tblfen.estado when 0 then '--' when 1 then 'PENDIENTE' when 2 then 'EJECUTANDO'
        when 3 then 'CONDICIONANDO AL ESTATUS' end as estado,motivo,direccion,alarma,ac,ad,numerotango,numeroot,opciones,rut_titular,codigo_tecnico,nombre_tecnico,observacion,estatus,id_user from tblfen inner join tblcomuna on tblfen.comuna=tblcomuna.id_comuna where fecha between '$fechainicio' and '$fechafinal' ");
    }



    

    public function filtrar_fecha(){
        global $http;

        $fechadesde=$http->request->get('fechadesde');
        $fechahasta=$http->request->get('fechahasta');
        $resultado= $this->listar_fen($fechadesde,$fechahasta);

        if ($resultado === false){
            return array('success' => 0, 'message' => 'Para la fecha seleccionada no existen datos');
        }else{
            $json = array(
            "aaData"=>array(
            )
            );
            $num=0;
            foreach ($resultado as $key => $value) {
                $num++;
                $html="<td><a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href='redes/editar_fen/".$value['id_fen']."'>
                <i class='glyphicon glyphicon-edit'></i>
                </a>
                <a data-placement='top' name='btnlisteliminar' id='btnlisteliminar' title='Eliminar' onclick='eliminar(".$value['id_fen'].")' class='btn btn-danger btn-sm'>
                <i class='glyphicon glyphicon-remove'></i>
                </a></td>";
                $html.="</tr>";

                $json['aaData'][] = array($num,$value['fen'],$value['usuario'],$value['fecha'],$value['nombre'],$value['fechainicio'],$value['fechafinal'],$value['escalado'],$value['estado'],$value['rut_titular'],$value['direccion'],$value['numerotango'],$value['numeroot'],$value['codigo_tecnico'], $html );
            }
        }
        $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
        $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$this->user['id_user'].".dbj", 'w');
        fwrite($fh, $jsonencoded);
        fclose($fh);
        return array('success' => 1, 'message' => "result_cons_".$this->user['id_user'].".dbj" );
    }
    public function exporta_excel_fen() {

        global $http,$config;
        $fecha_desde=$http->query->get('fecha_desde');
        $fecha_hasta=$http->query->get('fecha_hasta');

        return array('success' => 1, 'message' =>  $fecha_desde." ".$fecha_hasta);

        $u=$this->listar_fen($fecha_desde,$fecha_hasta);

        if ( $u != false ){

            $objPHPExcel = new PHPExcel();

            //Informacion del excel
            $objPHPExcel->getProperties() ->setCreator("Jorge Jara H.")
                                          ->setLastModifiedBy("JJH")
                                          ->setTitle("listado_ordenes_FEN");
            //encabezado
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'N°FEN');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'USUARIO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'FECHA');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'COMUNA');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'FECHA_INICIO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'FECHA_FINAL');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'ESCALADO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', 'RUT_TITULAR');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', 'DIRECCION');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', 'NUMERO_TANGO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K1', 'NUMERO_OT');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L1', 'CODIGO_TECNICO');



            $fila = 2;
            foreach ($u as $value => $data) {

              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['fen']);
              $dif= 12 - strlen($data['rut_cliente']);
              $rut = str_repeat('0',$dif).$data['rut_cliente'];
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila,$data['usuario']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['fecha']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['comuna']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['fechainicio']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['fechafinal'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$fila, $data['escalado'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$fila, $rut );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$fila, $data['direccion'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$fila, $data['numerotango'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$fila, $data['numeroot'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$fila, $data['codigo_tecnico'] );
              $fila++;
            }

            //autisize para las columna
            foreach(range('A','L') as $columnID)
            {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            $objPHPExcel->setActiveSheetIndex(0);

            $objPHPExcel->getActiveSheet()->setTitle('listado_ordenes_FEN');

            // Redirect output to a client’s web browser (Excel2007)
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="listado_ordenes_gestiones.xlsx"');
            header('Cache-Control: max-age=0');
            header('Content-Length: 9999999999');
            // If you're serving to IE 9, then the following may be needed
            header('Cache-Control: max-age=1');

            // If you're serving to IE over SSL, then the following may be needed
            header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
            header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
            header ('Pragma: public'); // HTTP/1.0

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('php://output');
        }
        else{
            # Redireccionar a la página principal del controlador
            $this->functions->redir($config['site']['url'] . 'redes/listar_fen');
        }
    }
    public function exporta_excel_fen2() {

        global $http,$config;
        $fen=$http->query->get('fen');


        return array('success' => 1, 'message' =>  $fen);

        $u=$this->listar_por_fen($fen);

        if ( $u != false ){

            $objPHPExcel = new PHPExcel();

            //Informacion del excel
            $objPHPExcel->getProperties() ->setCreator("Jorge Jara H.")
                                          ->setLastModifiedBy("JJH")
                                          ->setTitle("listado_ordenes_FEN");
            //encabezado
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'N°FEN');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'USUARIO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'FECHA');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'COMUNA');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'FECHA_INICIO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'FECHA_FINAL');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'ESCALADO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', 'RUT_TITULAR');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', 'DIRECCION');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', 'NUMERO_TANGO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K1', 'NUMERO_OT');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L1', 'CODIGO_TECNICO');



            $fila = 2;
            foreach ($u as $value => $data) {

              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['fen']);
              $dif= 12 - strlen($data['rut_cliente']);
              $rut = str_repeat('0',$dif).$data['rut_cliente'];
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila,$data['usuario']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['fecha']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['comuna']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['fechainicio']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['fechafinal'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$fila, $data['escalado'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$fila, $rut );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$fila, $data['direccion'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$fila, $data['numerotango'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$fila, $data['numeroot'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$fila, $data['codigo_tecnico'] );
              $fila++;
            }

            //autisize para las columna
            foreach(range('A','L') as $columnID)
            {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            $objPHPExcel->setActiveSheetIndex(0);

            $objPHPExcel->getActiveSheet()->setTitle('listado_ordenes_FEN');

            // Redirect output to a client’s web browser (Excel2007)
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="listado_ordenes_gestiones.xlsx"');
            header('Cache-Control: max-age=0');
            header('Content-Length: 9999999999');
            // If you're serving to IE 9, then the following may be needed
            header('Cache-Control: max-age=1');

            // If you're serving to IE over SSL, then the following may be needed
            header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
            header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
            header ('Pragma: public'); // HTTP/1.0

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
            $objWriter->save('php://output');
        }
        else{
            # Redireccionar a la página principal del controlador
            $this->functions->redir($config['site']['url'] . 'redes/listar_fen');
        }
    }
    public function select_filtro_fen(){
        global $http;
        $opcion=$http->request->get('num');

        if($opcion==1){
            $html="<label>N° FEN:</label>
            <input type='text' id='textordenesfen' name='textordenesfen'>
            <label>&nbsp;</label>
            <a class='btn btn-primary' id='btnfiltrarfen' name='btnfiltrarfen' onclick=\"filtrar_fen()\" title='Buscar FEN' data-toggle='tooltip'>
            Buscar FEN
            </a>
            <button type='button' onclick='location.reload();' class='btn btn-primary'>Quitar Filtro</button>
            <a class='btn btn-success btn-social' id='btn_exporta_excel2' onclick=\"exportar_excel2()\" title='Exportar a Excel' data-toggle='tooltip'>
            <i class='fa fa-arrow-down'></i> Exportar Excel
            </a>";
        }elseif($opcion==0){
            $fecha=date('Y-m-d');
            $html="<label>Fecha:</label>
              <label>&nbsp;</label>
            <input type='date' id='fendesde' style='width:130px;' name='fendesde' value=$fecha>
            <label>&nbsp;</label>
            <input type='date' id='fenhasta' style='width:130px;' name='fenhasta' value=$fecha>
            <button type='button' name='btnbuscar' id='btnbuscar' onclick=\"filtrar_por_fecha()\" class='btn btn-primary'>Aplicar Filtrar</button>
            </a>
            <button type='button' onclick='location.reload();' class='btn btn-primary'>Quitar Filtro</button>
            <a class='btn btn-success btn-social' id='btn_exporta_excel' onclick=\"exportar_excel()\" title='Exportar a Excel' data-toggle='tooltip'>
            <i class='fa fa-arrow-down'></i> Exportar Excel
            </a>";
        }
        return array('success' => 1, 'html'=>$html);
    }

    public function listar_por_fen($fen) {
        return $this->db->query_select("select tblcomuna.nombre, id_fen,fen,usuario,fecha,comuna,fechainicio,fechafinal, case turno when 0 then '--' when 1 then 'AM' when 2 then 'PM'
        when 3 then 'NOCHE' end as turno, case escalado when 0 then '--' when 1 then 'OPERADOR' when 2 then 'NNOC'
        when 3 then 'SDMH' end as escalado, case tblfen.estado when 0 then '--' when 1 then 'PENDIENTE' when 2 then 'EJECUTANDO'
        when 3 then 'CONDICIONANDO AL ESTATUS' end as estado,motivo,direccion,alarma,ac,ad,numerotango,numeroot,opciones,rut_titular,codigo_tecnico,nombre_tecnico,observacion,estatus,id_user from tblfen inner join tblcomuna on tblfen.comuna=tblcomuna.id_comuna where fen='$fen'");
    }
    public function filtrar_fen(){
        global $http;

        $fen=$http->request->get('fen');
        $resultado= $this->listar_por_fen($fen);

        if ($resultado === false){
            return array('success' => 0, 'message' => 'Para la fecha seleccionada no existen datos');
        }else{
            $json = array(
                "aaData"=>array(
                )
            );
            $num=0;
            foreach ($resultado as $key => $value) {
                $num++;
                $html="<td><a data-toggle='tooltip' data-placement='top' id='btnmodificar' name='btnmodificar' title='Modificar' class='btn btn-success btn-sm' href='redes/editar_fen/".$value['id_fen']."'>
                <i class='glyphicon glyphicon-edit'></i>
                </a>
                <a data-placement='top' name='btnlisteliminar' id='btnlisteliminar' title='Eliminar' onclick='eliminar(".$value['id_fen'].")' class='btn btn-danger btn-sm'>
                <i class='glyphicon glyphicon-remove'></i>
                </a></td>";
                $html.="</tr>";

                $json['aaData'][] = array($num,$value['fen'],$value['usuario'],$value['fecha'],$value['nombre'],$value['fechainicio'],$value['fechafinal'],$value['escalado'],$value['estado'],$value['rut_titular'],$value['direccion'],$value['numerotango'],$value['numeroot'],$value['codigo_tecnico'], $html );
            }
        }
        $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
        $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$this->user['id_user'].".dbj", 'w');
        fwrite($fh, $jsonencoded);
        fclose($fh);
        return array('success' => 1, 'message' => "result_cons_".$this->user['id_user'].".dbj" );
    }

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
