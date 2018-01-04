<?php


namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Files;
use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Reader_Excel2007;
use PHPExcel_Style_NumberFormat;

/**
 * Modelo Areas
 *
 * @author Jorge Jara H. <jjara@wys.cl>
 */

class Turnos extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

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
        $rut="";
        while($param==0){
            try {
              //echo $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
                if ($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue()!=NULL)
                {

                    $rut = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getvalue();
                    $servicio = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getvalue();
                    
                    
                    
                    $objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDD2);
                    $ano=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getFormattedValue();
					$krr = explode('-',$ano);
					$fecha = implode("",$krr);
                    
                    
                    $hora_ingreso= $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getvalue();
                    $hora_salida= $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getvalue();
                    $n_semana= $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getvalue();
                    $horas_turno= $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getvalue();
                    $hora_colacion= $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getvalue();
                    $horario_colacion= $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getvalue();
                    $break1= $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getvalue();
                    $break2= $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getvalue();
                    
					$this->db->query_select("Delete from tblturnos Where Rut='$rut' And fecha=$fecha");

                    $this->db->Insert('tblturnos', array(
                      'rut'=>$rut,
                      'servicio'=>$servicio,
                      'fecha'=>$fecha,
                      'hora_ingreso'=>$hora_ingreso,
                      'hora_salida'=>$hora_salida,
                      'n_semana'=>$n_semana,
                      'hora_turnos'=>$horas_turno,
                      'horario_colacion'=>$hora_colacion,
                      'hora_colacion'=>$horario_colacion,
                      'break_1'=>$break1,
                      'break_2'=>$break2
                    ));
                }else{
                  $param=1;
                  $this->db->Insert('tbl_historialarchivoscargados', array(
                      'app'=>'Carga de Turnos',
                      'nombre_archivo'=> $file->getClientOriginalName()
                    ));
                  return array('success' => 1, 'message' => "Datos cargados" );
                }
                $i++;
            } catch (\Exception $e) {
                return array('success' => 0, 'message' => $e->getMessage() );

            }
        }
    }else{
        return array('success' => 0, 'message' => "Debe seleccionar un archivo valido...");
    }

}

public function cargar_turnos($datos){
  return $this->db->query_select("select @rownum:=@rownum+1 as rownum,t.rut,p.nombres,servicio,hora_ingreso,hora_salida,hora_turnos,hora_colacion,horario_colacion,break_1,break_2,n_semana,if(hora_turnos=0,'LIBRE',(Select tipo_ausencia From tblausencias a  Where a.rut=t.rut And a.desde<='$datos' And a.hasta>='$datos')) asistencia from (select @rownum:=0) r,(tblturnos t inner join tblpersonal p on t.rut=p.rut and p.estado=1 ) where fecha='$datos' order by hora_ingreso,hora_salida,servicio,p.nombres");
}

public function cargar_turno_propio(){
  $fechadia=date('Y-m-d');
  $rutusu=(new Model\Users)->getOwnerUser();
  $rutusuario=$rutusu['rut_personal'];
  return $this->db->query_select("select * from tblturnos where rut='$rutusuario' and fecha >= '$fechadia' order by fecha limit 15");
}

public function cargar_super(){
  $idusu=(new Model\Users)->getOwnerUser();
  $idusuario=$idusu['rut_personal'];
  $t=$this->db->query_select("select tblturnos.rut, tblpersonal.id_super, users.name from tblturnos inner join tblpersonal on tblturnos.rut=tblpersonal.rut inner join users on tblpersonal.id_super=users.id_user where tblturnos.rut='$idusuario' limit 1");
  return $t[0];
}

public function revisar_turno_por_fecha(){
  global $http;
  $usucompa = (new Model\Users)->getOwnerUser();
  $fechaturno=$http->request->get('fechaturno');
  $consultaturno=$this->cargar_turnos($fechaturno);
    if ($consultaturno===false){
        return array('success' => 0, 'message' => "datos erroneos");
    }else{
        $json = array(
        "aaData"=>array(
        )
        );
        foreach ($consultaturno as $key => $value) {
           $html= '<td><a data-toggle="tooltip" data-placement="top" title="Modificar" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-edit"></i></td>';
           $json['aaData'][]=array($value['rownum'],$value['nombres'],$value['servicio'],$value['hora_ingreso'],$value['hora_salida'],$value['hora_turnos'],$value['hora_colacion'],$value['horario_colacion'],$value['break_1'],$value['break_2'],$value['asistencia'],$html);
        }
        $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
        $fh = fopen(API_INTERFACE . "views/app/temp/result_cons2_".$usucompa['id_user'].".dbj", 'w');
        fwrite($fh, $jsonencoded);
        fclose($fh);
        return array('success' => 1, 'message' => "result_cons2_".$usucompa['id_user'].".dbj" );
    }
}

public function verturnomes(){
    global $http;

    $rutcliente=$http->request->get('textrutoculto');
    $fechadeturno=$http->request->get('textfechaoculto');

    $usuario=$usucompa = (new Model\Users)->getOwnerUser();
    $consultaturno=$this->db->query_select("select * from tblturnos where rut='$rutcliente' and fecha like '%$fechadeturno%'");
    if ($consultaturno===false){
        return array('success' => 0, 'message' => "datos erroneos");
    }else{
        $json = array(
        "aaData"=>array(
        )
        );
        foreach ($consultaturno as $key => $value) {
        $json['aaData'][]=array($value['rut'],$value['servicio'],$value['fecha'],$value['hora_ingreso'],$value['hora_salida'],$value['n_semana'],$value['hora_turnos'],$value['hora_colacion'],$value['horario_colacion'],$value['break_1'],$value['break_2']);
    }
    $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
    $fh = fopen(API_INTERFACE . "views/app/temp/result_cons2_".$usucompa['id_user'].".dbj", 'w');
    fwrite($fh, $jsonencoded);
    fclose($fh);
    return array('success' => 1, 'message' => "result_cons2_".$usucompa['id_user'].".dbj" );

    }
}

public function meses(){
    $fechadia=date('Y');
    $rutusu=(new Model\Users)->getOwnerUser();
    $rutusuario=$rutusu['rut_personal'];
    return $this->db->query_select("select * from tblturnos where rut='$rutusuario' and fecha like '%$fechadia%'");
}

public function exportar_excel_turno_plataforma(){
    global $config;
    global $http;
    
    $fecha=$http->query->get('fecha');
    $t = $this->cargar_turnos($fecha);
    
    if ( $t != false ){
        $objPHPExcel = new PHPExcel();
        //Informacion del excel
        $objPHPExcel->getProperties() ->setCreator("Hector Gutierrez")
                                    ->setLastModifiedBy("HG")
                                    ->setTitle("Turnos_usuarios");
        //encabezado
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'N°Semana');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'Rut');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'Nombres');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'Servicio');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'Hora_Ingreso');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'Hora_Salida');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'Horas_Turno');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', 'Hora_Colacion');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', 'Min_Colacion');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', 'Break_1');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K1', 'Break_2');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L1', 'Asistencia');



        $fila = 2;
        foreach ($t as $value => $data) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['n_semana']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila, $data['rut']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['nombres']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['servicio']);
            
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['hora_ingreso']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['hora_salida']);
            
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$fila, $data['hora_turnos']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$fila, $data['hora_colacion']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$fila, $data['horario_colacion']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$fila, $data['break_1']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$fila, $data['break_2']);
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$fila, $data['asistencia']);
            $fila++;
        }

        //autisize para las columna
        foreach(range('A','L') as $columnID)
        {
            $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
        }

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->setTitle('turnos_plataforma');

        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="turnos_plataforma.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
    }else{
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'rrhh/revisar_turnos');
    }
}

public function getUsers(string $select = '*',string $filtro) {
    return $this->db->select($select,'tblturnos',$filtro);
}

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
