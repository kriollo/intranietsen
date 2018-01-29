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


/**
* Modelo Mdlpersonal
*
* @author Jorge Jara H. <jjara@wys.cl>
*/

class Mdlconfirmacion extends Models implements IModels {
    /**
    * Característica para establecer conexión con base de datos.
    */
    use DBModel;

    // Contenido del modelo...

    public function verActividades(string $select = '*'){
        return $this->db->select($select,'tblactividad');
    }
    public function verBloques(string $select = '*'){
        return $this->db->select($select,'tblbloque');
    }
    public function verComunas(string $select = '*'){
        return $this->db->select($select,'tblcomuna');
    }
    public function verMotivocall(string $select = '*'){
        return $this->db->select($select,'tblmotivollamado');
    }
    public function verResultado(string $select = '*'){
        return $this->db->select($select,'tblresultado');
    }

    public function getActividadesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblactividad',"id_actividad='$id'",'LIMIT 1');
    }
    public function getBloquesById(int $id, string $select = '*') {
        return $this->db->select($select,'tblbloque',"id_bloque='$id'",'LIMIT 1');
    }
    public function getComunasById(int $id, string $select = '*') {
        return $this->db->select($select,'tblcomuna',"id_comuna='$id'",'LIMIT 1');
    }
    public function getMotivocallById(int $id, string $select = '*') {
        return $this->db->select($select,'tblmotivollamado',"id_motivo='$id'",'LIMIT 1');
    }
    public function getResultadoById(int $id, string $select = '*') {
        return $this->db->select($select,'tblresultado',"id_resultado='$id'",'LIMIT 1');
    }

    public function update_estado_actividad($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblactividad SET estado=if(estado=0,1,0) WHERE id_actividad=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_actividades');
    }
    public function update_estado_bloque($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblbloque SET estado=if(estado=0,1,0) WHERE id_bloque=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_bloque');
    }
    public function update_estado_comuna($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblcomuna SET estado=if(estado=0,1,0) WHERE id_comuna=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_comunas');
    }
    public function update_estado_motivocall($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblmotivollamado SET estado=if(estado=0,1,0) WHERE id_motivo=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_motivocall');
    }
    public function update_estado_resultado($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblresultado SET estado=if(estado=0,1,0) WHERE id_resultado=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_resultado');
    }
    public function registra_nueva_actividad() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $actividad = $http->request->get('actividad');

            # Verificar que no están vacíos
            if ($this->functions->e($actividad)) {
            throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar al actividad
            $this->db->insert('tblactividad', array(
            'actividad' => strtoupper($actividad)
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function registra_nuevo_bloque() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $bloque = $http->request->get('bloque');
            $desde = $http->request->get('desde');
            $hasta = $http->request->get('hasta');

            # Verificar que no están vacíos
            if ($this->functions->e($bloque)) {
            throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblbloque', array(
            'bloque' => strtoupper($bloque),
            'desde' => $desde,
            'hasta' => $hasta
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function registra_nueva_comuna() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $comuna = $http->request->get('comuna');
            $zona = $http->request->get('zona');
            $subzona = $http->request->get('cod_sub_zona');
            $territorio = $http->request->get('territorio');

            # Verificar que no están vacíos
            if ($this->functions->e($comuna,$zona,$subzona,$territorio)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblcomuna', array(
                'nombre' => strtoupper($comuna),
                'zona'=>strtoupper($zona),
                'cod_sub_zona'=>strtoupper($subzona),
                'territorio'=>strtoupper($territorio)
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function registra_nuevo_motivocall() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $motivo = $http->request->get('motivo');

            # Verificar que no están vacíos
            if ($this->functions->e($motivo)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblmotivollamado', array(
            'motivo' => strtoupper($motivo)
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function registra_nuevo_resultado() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre = $http->request->get('nombre');
            $cumplimiento = $http->request->get('cumplimiento');
            $grupo = $http->request->get('grupo');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre, $cumplimiento, $grupo)) {
            throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblresultado', array(
            'nombre' => strtoupper($nombre),
            'cumplimiento' => $cumplimiento,
            'grupo' => $grupo
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_actividad(): array {
        try {
            global $http;


            #Obtener los datos $_POST
            $actividad = $http->request->get('actividad');
            $id_actividad = $http->request->get('id_actividad');

            if ($this->functions->e($actividad)) {
            throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblactividad',array(
            'actividad' => $actividad,
            ),"id_actividad='$id_actividad'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Actividad exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_bloque(): array {
        try {
            global $http;


            #Obtener los datos $_POST
            $bloque = $http->request->get('bloque');
            $id_bloque = $http->request->get('id_bloque');
            $limit = $http->request->get('limit');
            $desde = $http->request->get('desde');
            $hasta = $http->request->get('hasta');

            if ($this->functions->e($bloque)) {
            throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblbloque',array(
            'bloque' => $bloque,
            'limite_q_programacion' => $limit,
            'desde' => $desde,
            'hasta' => $hasta
            ),"id_bloque='$id_bloque'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Bloque exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_comuna(): array {
        try {
            global $http;

            #Obtener los datos $_POST
            $comuna = $http->request->get('comuna');
            $id_comuna = $http->request->get('id_comuna');
            $zona = $http->request->get('zona');
            $subzona = $http->request->get('cod_sub_zona');
            $territorio = $http->request->get('territorio');

            if ($this->functions->e($comuna,$zona,$subzona,$territorio)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblcomuna',array(
            'nombre' => $comuna,
            'zona'=>strtoupper($zona),
            'cod_sub_zona'=>strtoupper($subzona),
            'territorio'=>strtoupper($territorio)
            ),"id_comuna='$id_comuna'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Comuna exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_motivocall(): array {
        try {
            global $http;


            #Obtener los datos $_POST
            $motivo = $http->request->get('motivo');
            $id_motivo = $http->request->get('id_motivo');

            if ($this->functions->e($motivo)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblmotivollamado',array(
            'motivo' => strtoupper($motivo),
            ),"id_motivo='$id_motivo'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Motivo exitosa');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_resultado(): array {
        try {
            global $http;
            #Obtener los datos $_POST
            $nombre = $http->request->get('nombre');
            $cumplimiento = $http->request->get('cumplimiento');
            $grupo = $http->request->get('grupo');
            $id_resultado = $http->request->get('id_resultado');

            if ($this->functions->e($nombre, $cumplimiento, $grupo)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblresultado',array(
            'nombre' => $nombre,
            'cumplimiento' => $cumplimiento,
            'grupo' => $grupo,
            ),"id_resultado='$id_resultado'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Resultado');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    // --------------------------------------------------------------------------MODELO HECTORELFATHER
    public function carga_comunas(){
        return $this->db->query_select("select * from tblcomuna where estado='1'");
    }
    public function carga_resultado(){
        return $this->db->query_select("select * from tblresultado where estado='1'");
    }
    public function carga_bloque(){
        return $this->db->query_select("select id_bloque,bloque from tblbloque where estado='1'");
    }
    public function carga_motivo(){
        return $this->db->query_select("select id_motivo, motivo from tblmotivollamado where estado='1'");
    }
    public function carga_actividad(){
        return $this->db->query_select("select * from tblactividad where estado='1'");
    }
    public function carga_tipoorden(){
        return $this->db->query_select("select * from tbltipoorden where estado='1'");
    }
    public function listar_ordenes($fecha,$idusuario){
        $sql_filtro="";
        if ($idusuario!="")
        {
            $sql_filtro=" and u.id_user='$idusuario'";
        }
        return $this->db->query_select("select o.id_orden,o.n_orden,o.operador,o.reg,o.rut_cliente, DATE_FORMAT(o.fecha_compromiso, '%d-%m-%y') fecha_compromiso,o.bloque,o.motivo,o.comuna,o.actividad,tr.nombre desc_resultado,o.observacion,DATE_FORMAT(o.fecha_dia, '%d-%m-%y') fecha_dia,o.nodo,o.subnodo,tr.nombre, u.name,o.ubicacion from (tblordenes o inner join  tblresultado tr on tr.id_resultado=o.resultado) inner join users u on o.operador=u.id_user where o.fecha_dia='$fecha' $sql_filtro");
    }
    public function ingresar_orden(){
        global $http;

        $orden=$http->request->get('textidorden');
        $operador=$http->request->get('textid');
        $reg=$http->request->get('textreg');
        $rutcliente=$http->request->get('textrutcliente');
        $fechacompromiso=$http->request->get('textfecha');
        $nodo=$http->request->get('textnodo');
        $subnodo=$http->request->get('textsubnodo');
        $bloque=$http->request->get('textbloque');
        $motivo=$http->request->get('textmotivo');
        $comuna=$http->request->get('textcomuna');
        $actividad=$http->request->get('textactividad');
        $resultado=$http->request->get('textresultado');
        $observacion=$http->request->get('textobservacion');
        $tipoorden=$http->request->get('texttipoorden');
        $fecha_dia=date('Y-m-d');

        if ($this->functions->e($orden,$rutcliente,$fechacompromiso,$bloque,$motivo,$comuna,$actividad,$resultado,$observacion,$subnodo,$nodo,$tipoorden)) {
            return array('success' => 0, 'message' => 'Debe ingresar o seleccionar todas las opciones');
        }

        $consulta=$this->db->query_select("select n_orden from tblordenes where n_orden='$orden'");
        if($consulta!=false){
            return array('success' => 0, 'message' => 'No se puede ingresar ya que existe ese número de orden');
        }

        $datos=$this->db->query_select("select validate_rut('$rutcliente')");
        if($datos[0][0]==0){
            return array('success' => 0, 'message' => 'Rut no valido');
        }

        $this->db->insert('tblordenes', array(
            'n_orden'=>$orden,
            'operador'=> $operador,
            'reg'=>$reg,
            'rut_cliente'=>$rutcliente,
            'fecha_compromiso'=>$fechacompromiso,
            'bloque'=>$bloque,
            'motivo'=>$motivo,
            'nodo' => $nodo,
            'subnodo' => $subnodo,
            'comuna'=>$comuna,
            'tipoorden'=>$tipoorden,
            'actividad'=>$actividad,
            'resultado'=>$resultado,
            'observacion'=>$observacion,
            'fecha_dia'=>$fecha_dia
        ));
        return array('success' => 1, 'message' => 'Orden ingresada');

    }
    public function vermod(){
        global $http,$config;
        $desde=$http->query->get('btnmodificar');

        return array('success' => 1, 'message' => 'btnmodificar');
    }
    public function get_orden_byId(int $id){
        return $this->db->query_select("select tblordenes.*, users.name from
        tblordenes inner join users on tblordenes.operador=users.id_user where id_orden ='$id' limit 1");
    }
    public function modificar_la_orden(){
        global $http;

        $modorden=$http->request->get('textmodidorden');
        $modreg=$http->request->get('textmodreg');
        $modrutcliente=$http->request->get('textmodrutcliente');
        $modfechacompromiso=$http->request->get('textmodfecha');
        $modbloque=$http->request->get('textmodbloque');
        $modmotivo=$http->request->get('textmodmotivo');
        $modcomuna=$http->request->get('textmodcomuna');
        $modnodo=$http->request->get('textmodnodo');
        $modsubnodo=$http->request->get('textmodsubnodo');
        $modactividad=$http->request->get('textmodactividad');
        $modresultado=$http->request->get('textmodresultado');
        $modobservacion=$http->request->get('textmodobservacion');
        $tipoorden=$http->request->get('textmodtipoorden');
        $modfecha_dia=date('Y-m-d');
        $idorden=$http->request->get('ordenid');


        if ($this->functions->e($modorden,$modfechacompromiso,$modrutcliente,$modcomuna,$modbloque,$modmotivo,$modactividad,$modresultado,$tipoorden)){
            return array('success' => 0, 'message' => 'Debe ingresar o seleccionar todas las opciones');
        }else{
            $this->db->query("UPDATE tblordenes set n_orden='$modorden', rut_cliente='$modrutcliente',reg='$modreg', fecha_compromiso='$modfechacompromiso', bloque='$modbloque', motivo='$modmotivo',
            comuna='$modcomuna',nodo='$modnodo', subnodo='$modsubnodo', tipoorden='$tipoorden', actividad='$modactividad', resultado='$modresultado', observacion='$modobservacion', fecha_dia='$modfecha_dia'  WHERE id_orden='$idorden'");
            return array('success' => 1, 'message' => 'Datos Modificados');
        }
    }
    public function eliminarorden(){
        global $http;

        $norden=$http->request->get('textlisteliminar');
        $clave2=$this->db->query_select("select name,pass from users where perfil='HD_SUPERVISOR'");
        $this->db->query("delete from tblordenes where id_orden='$norden';");
        return array('success' => 1, 'message' => "Registro eliminado");
    }
    // --------------------------------------------------------------------------MODELO HECTORELFATHER
    // --------------------------------------------------------------------------MODELO JJARA
    public function getTipoOrdenById(int $id, string $select = '*') {
        return $this->db->select($select,'tbltipoorden',"id_tipoorden='$id'",'LIMIT 1');
    }
    public function verTipoOrden(string $select = '*'){
        return $this->db->select($select,'tbltipoorden
        ');
    }
    public function update_estado_TipoOrden($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tbltipoorden SET estado=if(estado=0,1,0) WHERE id_tipoorden=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_tipoorden');
    }
    public function registra_nuevo_TipoOrden() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre = $http->request->get('nombre');
            $prioridad = $http->request->get('prioridad');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre,$prioridad)) {
            throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tbltipoorden', array(
            'descripcion' => strtoupper($nombre),
            'prioridad' => $prioridad
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_TipoOrden(): array {
        try {
            global $http;
            #Obtener los datos $_POST
            $nombre = $http->request->get('nombre');
            $prioridad = $http->request->get('prioridad');
            $id_tipoorden = $http->request->get('id_tipoorden');

            if ($this->functions->e($nombre,$prioridad)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tbltipoorden',array(
            'descripcion' => $nombre,
            'prioridad' => $prioridad
            ),"id_tipoorden='$id_tipoorden'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Resultado');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function confirma_lista_por_fecha(){
        global $http;
        $fecha=$http->request->get('fecha');
        $result=$this->listar_ordenes($fecha,'');

        $usucompa=(new Model\Users)->getOwnerUser();

        if ($result === false){
            return array('success' => 0, 'message' => $fecha);
        }else{
            $json = array(
            "aaData"=>array(
            )
            );
            foreach ($result as $key => $value) {
                if ($value['ubicacion']=='CONFIRMACION'){
                    $html='<a data-toggle="tooltip" data-placement="top" id="btnmodificar" name="btnmodificar" title="Modificar" class="btn btn-success btn-sm" href="confirmacion/editar_confirmacion/'.$value['id_orden'].'">
                        <i class="glyphicon glyphicon-edit"></i></a>
                        <a data-placement="top" name="btnlisteliminar" id="btnlisteliminar" title="Eliminar" onclick="asignardato('.$value['id_orden'].')" class="btn btn-danger btn-sm">                    <i class="glyphicon glyphicon-remove"></i>
                    </a>';
                }else{
                    $html='<a data-toggle="tooltip" data-placement="top" id="btnmodificar" name="btnmodificar" title="Modificar" class="btn btn-success btn-sm" href="confirmacion/editar_confirmacion/'.$value['id_orden'].'" disabled >
                        <i class="glyphicon glyphicon-edit"></i></a>
                        <a data-placement="top" name="btnlisteliminar" id="btnlisteliminar" title="Eliminar" onclick="asignardato('.$value['id_orden'].')" class="btn btn-danger btn-sm" disabled>                    <i class="glyphicon glyphicon-remove"></i>
                    </a>';
                }

                $json['aaData'][] = array($value['n_orden'],$value['name'],$value['rut_cliente'],$value['fecha_compromiso'],$value['bloque'],$value['motivo'],$value['comuna'],$value['actividad'],$value['desc_resultado'],$value['observacion'], $html );
            }
        }
        $jsonencoded = json_encode($json,JSON_UNESCAPED_UNICODE);
        $fh = fopen(API_INTERFACE . "views/app/temp/result_cons_".$usucompa['id_user'].".dbj", 'w');
        fwrite($fh, $jsonencoded);
        fclose($fh);
        return array('success' => 1, 'message' => "result_cons_".$usucompa['id_user'].".dbj" );
    }
    public function exporta_excel_ordenes() {

        global $http,$config;
        $fecha=$http->query->get('fecha');

        $u=$this->listar_ordenes($fecha,'');

        if ( $u != false ){

            $objPHPExcel = new PHPExcel();

            //Informacion del excel
            $objPHPExcel->getProperties() ->setCreator("Jorge Jara H.")
                                          ->setLastModifiedBy("JJH")
                                          ->setTitle("listado_ordenes_confirmacion");
            //encabezado
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', 'NMRO_ORDEN');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B1', 'RUT_CLIENTE');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C1', 'FECHA_COMPROMISO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', 'BLOQUE');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', 'MOTIVO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F1', 'COD_COMUNA');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G1', 'NODO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H1', 'SUBNODO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I1', 'ACTIVIDAD');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J1', 'RESULTADO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K1', 'OBSERVACION');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L1', 'MOTIVO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M1', 'OPERADOR');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N1', 'FECHA_REGISTRO');

            $fila = 2;
            foreach ($u as $value => $data) {

              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['n_orden']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila, $data['rut_cliente']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['fecha_compromiso']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['bloque']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['motivo']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['comuna'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$fila, $data['nodo'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$fila, $data['subnodo'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$fila, $data['actividad'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$fila, $data['desc_resultado'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$fila, $data['observacion'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$fila, $data['motivo'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$fila, $data['name'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$fila, $data['fecha_dia'] );

              $fila++;
            }

            //autisize para las columna
            foreach(range('A','N') as $columnID)
            {
                $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            $objPHPExcel->setActiveSheetIndex(0);

            $objPHPExcel->getActiveSheet()->setTitle('listado_ordenes_confirmacion');

            // Redirect output to a client’s web browser (Excel2007)
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="listado_ordenes_confirmacion.xlsx"');
            header('Cache-Control: max-age=0');
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
            $this->functions->redir($config['site']['url'] . 'confirmacion/listar_allorden');
        }
    }
    public function confirma_q_ordenes_gestionadas($desde,$hasta){
        $result = $this->db->query_select("select count(*) cantidad from tblordenes where fecha_dia between '$desde' and '$hasta'");
        if (false != $result){
            return $result[0]['cantidad'];
        }else {
            return array('0');
        }
    }
    public function confirma_q_orden_x_estado_confirmacion($desde,$hasta){
        return $this->db->query_select("select if(r.grupo = 0,'No Confirma','Confirma') Resultado,count(o.id_orden) cantidad from tblordenes o inner join tblresultado r on o.resultado=r.id_resultado where fecha_dia between '$desde' and '$hasta' group by r.grupo order by Resultado");
    }
    public function confirma_top_5_best_ejecutivo($desde,$hasta){
        return $this->db->query_select("select u.name,count(o.id_orden) cantidad from tblordenes o inner join users u on o.operador=u.id_user where fecha_dia between '$desde' and '$hasta' group by u.name order by cantidad desc limit 5");
    }
    public function confirma_top_5_bad_ejecutivo($desde,$hasta){
        return $this->db->query_select("select u.name,count(o.id_orden) cantidad from tblordenes o inner join users u on o.operador=u.id_user where fecha_dia between '$desde' and '$hasta' group by u.name order by cantidad asc limit 5");
    }
    public function confirma_resumen_x_comuna($desde,$hasta){
        return $this->db->query_select("select comuna,count(id_orden) cantidad from tblordenes where fecha_dia between '$desde' and '$hasta' group by comuna order by cantidad desc");
    }
    public function confirma_resumen_x_bloque($desde,$hasta){
        return $this->db->query_select("select bloque,count(id_orden) cantidad from tblordenes where fecha_dia between '$desde' and '$hasta' group by bloque order by cantidad desc");
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
