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
            $speed_test = $http->request->get('speed_test');
            $certificacion = $http->request->get('certificacion');
            $cierre_asegurado = $http->request->get('cierre_asegurado');

            # Verificar que no están vacíos
            if ($this->functions->e($actividad)) {
            throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar al actividad
            $this->db->insert('tblactividad', array(
            'actividad' => strtoupper($actividad),
            'speed_test' => $speed_test,
            'certificacion' => $certificacion,
            'cierre_seguro' => $cierre_asegurado
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.' );
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
            $requerido = $http->request->get('requerido');

            # Verificar que no están vacíos
            if ($this->functions->e($comuna,$zona,$subzona,$territorio,$requerido)) {
                throw new ModelsException('Ingresar datos donde campos se especifica como Requerido');
            }
            # Registrar el bloque
            $this->db->insert('tblcomuna', array(
                'nombre' => strtoupper($comuna),
                'zona'=>strtoupper($zona),
                'cod_sub_zona'=>strtoupper($subzona),
                'territorio'=>strtoupper($territorio),
                'requerido'=>strtoupper($requerido)
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
            $speed_test = $http->request->get('speed_test');
            $certificacion = $http->request->get('certificacion');
            $cierre_asegurado = $http->request->get('cierre_seguro');
            if ($this->functions->e($actividad)) {
            throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblactividad',array(
            'actividad' => $actividad,
            'speed_test' => $speed_test,
            'certificacion' => $certificacion,
            'cierre_seguro' => $cierre_asegurado
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
            $requerido = $http->request->get('requerido');

            if ($this->functions->e($comuna,$zona,$subzona,$territorio,$requerido)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $this->db->update('tblcomuna',array(
            'nombre' => $comuna,
            'zona'=>strtoupper($zona),
            'cod_sub_zona'=>strtoupper($subzona),
            'territorio'=>strtoupper($territorio),
            'requerido'=>strtoupper($requerido)
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

    public function carga_comunas(){
        return $this->db->query_select("select * from tblcomuna where estado='1' order by nombre");
    }
    public function carga_resultado(){
        return $this->db->query_select("select * from tblresultado where estado='1'");
    }
    public function carga_bloque(){
        return $this->db->query_select("select id_bloque,bloque from tblbloque where estado='1' order by desde");
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

    public function getCuadranteById(int $id, string $select = '*') {
        return $this->db->select($select,'tblcuadrante',"id_cuadrante='$id'",'LIMIT 1');
    }
    public function verCuadrante(string $select = '*'){
        return $this->db->select($select,'tblcuadrante
        ');
    }
    public function update_estado_Cuadrante($id) {
        global $config;
        # Actualiza Estado
        $this->db->query("UPDATE tblcuadrante SET estado=if(estado=0,1,0) WHERE id_cuadrante=$id LIMIT 1;");
        # Redireccionar a la página principal del controlador
        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_cuadrante');
    }
    public function registra_nuevo_Cuadrante() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $nombre = strtoupper($http->request->get('nombre_cuadrante'));
            $nodo = $http->request->get('nodo');
            $comuna = $http->request->get('comuna');

            # Verificar que no están vacíos
            if ($this->functions->e($nombre,$nodo,$comuna)) {
                throw new ModelsException('El campo nodo debe ser un numero');
            }

            if (is_numeric($nodo)) {

                $result= $this->db->select('nodo', 'tblcuadrante', "cod_comuna='$comuna' and nodo=".$nodo, 'LIMIT 1');
                if (false !== $result){
                    return array('success' => 0, 'message' => 'El nodo ingresado ya ha sido asignado a cuadrante');
                }

                # Registrar el bloque
                $this->db->insert('tblcuadrante', array(
                'nombre' => $nombre,
                'nodo' => $nodo,
                'cod_comuna' => $comuna
                ));
            }
            return array('success' => 1, 'message' => 'Registrado con éxito.');
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function editar_Cuadrante(): array {
        try {
            global $http;
            #Obtener los datos $_POST
            $nombre = strtoupper($http->request->get('nombre_cuadrante'));
            $nodo = $http->request->get('nodo');
            $comuna = $http->request->get('comuna');
            $id_cuadrante = $http->request->get('id_cuadrante');

            if ($this->functions->e($nombre,$nodo,$comuna)) {
                throw new ModelsException('Todos los datos son necesarios');
            }
            $result= $this->db->select('nodo', 'tblcuadrante', "cod_comuna='$comuna' and nodo=".$nodo." and id_cuadrante<>". $id_cuadrante, 'LIMIT 1');
            if (false !== $result){
                return array('success' => 0, 'message' => 'El nodo ingresado ya ha sido asignado a cuadrante');
            }
            $this->db->update('tblcuadrante',array(
            'nombre' => $nombre,
            'nodo' => $nodo,
            'cod_comuna' => $comuna
            ),"id_cuadrante='$id_cuadrante'");
            //
            return array('success' => 1, 'message' => 'Modificacion de Resultado');
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }


    public function listar_ordenes($fecha_desde,$fecha_hasta,$idusuario,$filtropor){
        $sql_filtro="";
        if ($idusuario!="")
        {
            $sql_filtro=" and u.id_user='$idusuario'";
        }
        if($filtropor == '1'){
            $sql_fecha_filtro=' o.fecha_dia between "'.$fecha_desde.'"  and "'.$fecha_hasta.'"';
        }else{
            $sql_fecha_filtro=' o.fecha_compromiso between "'.$fecha_desde.'"  and "'.$fecha_hasta.'"';
        }

        return $this->db->query_select("select o.id_orden,o.n_orden,o.operador,o.reg,o.rut_cliente, DATE_FORMAT(o.fecha_compromiso, '%d-%m-%y') fecha_compromiso,o.bloque,o.motivo,o.comuna,o.actividad,tr.nombre desc_resultado,o.observacion,DATE_FORMAT(o.fecha_dia, '%d-%m-%y') fecha_dia,o.nodo,o.subnodo,tr.nombre, u.name,o.ubicacion,c.territorio,o.reagendamiento,cd.nombre cuadrante,fecha_dia_hora from (((tblordenes o inner join  tblresultado tr on tr.id_resultado=o.resultado) inner join users u on o.operador=u.id_user) inner join tblcomuna c on c.nombre=o.comuna) left join tblcuadrante cd on o.comuna=cd.cod_comuna and o.nodo=cd.nodo where ( $sql_fecha_filtro) $sql_filtro  order by o.id_orden");
    }

    // INGRESO - REINGRESO - MODIFICACION - ELIMINAR ORDEN
    public function ingresar_orden(){
        global $http;

        $orden=str_replace(".",'',$http->request->get('textidorden'));

        $operador=$http->request->get('textid');
        $reg=$http->request->get('textreg');
        $rutcliente=$http->request->get('textrutcliente');
        $fechacompromiso=$http->request->get('textfecha');
        $fechaot=$http->request->get('fechaot');
        $nodo=$http->request->get('textnodo');
        $subnodo=$http->request->get('textsubnodo');
        $bloque=$http->request->get('textbloque');
        $motivo=$http->request->get('textmotivo');
        $comuna=$http->request->get('textcomuna');
        $actividad=$http->request->get('textactividad');
        $resultado=$http->request->get('textresultado');
        $observacion=$http->request->get('textobservacion');
        $tipoorden=$http->request->get('texttipoorden');
        $reagendamiento=$http->request->get('reagendamiento');
        $fecha_dia=date('Y-m-d');

        if ($this->functions->e($fechaot,$orden,$rutcliente,$reagendamiento,$fechacompromiso,$bloque,$motivo,$comuna,$actividad,$resultado,$observacion,$subnodo,$nodo,$tipoorden)) {
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

        $prioridad = $this->getTipoOrdenById($tipoorden);

        if(is_numeric($nodo) == false || is_numeric($subnodo) == false){
            return array('success' => 0, 'message' => 'El nodo y subnodo deben ser numeros');
        }

        $this->db->insert('tblordenes', array(
            'n_orden'=>$orden,
            'operador'=> $operador,
            'reg'=>$reg,
            'rut_cliente'=>$rutcliente,
            'fecha_compromiso'=>$fechacompromiso,
            'fecha_ot'=>$fechaot,
            'bloque'=>$bloque,
            'motivo'=>$motivo,
            'reagendamiento' => $reagendamiento,
            'nodo' => $nodo,
            'subnodo' => $subnodo,
            'comuna'=>$comuna,
            'tipoorden'=>$tipoorden,
            'actividad'=>$actividad,
            'resultado'=>$resultado,
            'observacion'=>$observacion,
            'fecha_dia'=>$fecha_dia,
            'prioridad' => $prioridad[0]['prioridad']
        ));

        $datos = $this->db->select('*','tblordenes',"n_orden='$orden'");
        $this->db->insert('tblhistorico', array(
            'id_orden' => $datos[0]['id_orden'],
            'n_orden' => $orden,
            'fecha' => date('Y-m-d'),
            'accion' => 'INGRESO',
            'observacion' => $observacion,
            'id_user' => $operador,
            'reagendamiento' => $reagendamiento,
            'motivo_llamado' => $motivo,
            'bloque' => $bloque,
            'fecha_compromiso' => $fechacompromiso,
            'resultado' => $resultado
        ));

        return array('success' => 1, 'message' => 'Orden ingresada');

    }
    public function reingresar_orden(){
        global $http;



        $orden=str_replace('.','',$http->request->get('reordenid'));
        $id=$http->request->get('reordenid1');
        $operador=$http->request->get('reid');
        $rutcliente=$http->request->get('rerutcliente');
        $fechacompromiso=$http->request->get('refecha');
        $fechaot=$http->request->get('fechaot');
        $nodo=$http->request->get('renodo');
        $subnodo=$http->request->get('resubnodo');
        $bloque=$http->request->get('rebloque');
        $motivo=$http->request->get('remotivo');
        $comuna=$http->request->get('recomuna');
        $actividad=$http->request->get('reactividad');
        $resultado=$http->request->get('reresultado');
        $observacion=$http->request->get('reobservacion');
        $tipoorden=$http->request->get('retipoorden');
        $reagendamiento=$http->request->get('reagendamiento');
        $fecha_dia=date('Y-m-d');

        if ($this->functions->e($fechaot,$orden,$rutcliente,$fechacompromiso,$bloque,$motivo,$comuna,$actividad,$resultado,$observacion,$subnodo,$nodo,$tipoorden)) {
            return array('success' => 0, 'message' => 'Debe ingresar o seleccionar todas las opciones');
        }

        $datos=$this->db->query_select("select validate_rut('$rutcliente')");
        if($datos[0][0]==0){
            return array('success' => 0, 'message' => 'Rut no valido');
        }

        $prioridad = $this->getTipoOrdenById($tipoorden);

        if(is_numeric($nodo) == false || is_numeric($subnodo) == false){
            return array('success' => 0, 'message' => 'El nodo y subnodo deben ser numeros');
        }
        //$eliminar = $this->db->query("delete from tblordenes where id_orden='$id';");

        $this->db->update('tblordenes', array(
            'operador'=> $operador,
            'rut_cliente'=>$rutcliente,
            'fecha_compromiso'=>$fechacompromiso,
            'fecha_ot'=>$fechaot,
            'bloque'=>$bloque,
            'motivo'=>$motivo,
            'reagendamiento'=>$reagendamiento,
            'nodo' => $nodo,
            'subnodo' => $subnodo,
            'comuna'=>$comuna,
            'tipoorden'=>$tipoorden,
            'actividad'=>$actividad,
            'resultado'=>$resultado,
            'observacion'=>$observacion,
            'fecha_dia'=>$fecha_dia,
            'prioridad' => $prioridad[0]['prioridad'],
            'ubicacion' => 'CONFIRMACION',
            'estado_orden' => '1',
            'codigo_tecnico' => '0',
            'id_usuario_despacho' => '0',
        ),"id_orden='$id'");

        $datos = $this->db->select('*','tblordenes',"n_orden='$orden'");
        $this->db->insert('tblhistorico', array(
            'id_orden' => $datos[0]['id_orden'],
            'n_orden' => $orden,
            'fecha' => date('Y-m-d'),
            'accion' => 'REINGRESO',
            'observacion' => $observacion,
            'id_user' => $operador,
            'bloque' => $bloque,
            'motivo_llamado' => $motivo,
            'reagendamiento'=>$reagendamiento,
            'fecha_compromiso' => $fechacompromiso,
            'resultado' => $resultado
        ));

        return array('success' => 1, 'message' => 'Orden ingresada');

    }
    public function modificar_la_orden(){
        global $http;

        $modorden=str_replace('.','',$http->request->get('textmodidorden'));
        $modreg=$http->request->get('textmodreg');
        $modrutcliente=$http->request->get('textmodrutcliente');
        $modfechacompromiso=$http->request->get('textmodfecha');
        $fechaot=$http->request->get('fechaot');
        $modbloque=$http->request->get('textmodbloque');
        $modmotivo=$http->request->get('textmodmotivo');
        $modcomuna=$http->request->get('textmodcomuna');
        $modnodo=$http->request->get('textmodnodo');
        $reagendamiento=$http->request->get('reagendamiento');
        $modsubnodo=$http->request->get('textmodsubnodo');
        $modactividad=$http->request->get('textmodactividad');
        $modresultado=$http->request->get('textmodresultado');
        $modobservacion=$http->request->get('textmodobservacion');
        $tipoorden=$http->request->get('textmodtipoorden');
        $modfecha_dia=date('Y-m-d');
        $idorden=$http->request->get('ordenid');
        $operador=$http->request->get('textmodid');

        if ($this->functions->e( $fechaot,$modobservacion,$modorden,$modfechacompromiso,$modrutcliente,$modcomuna,$modbloque,$modmotivo,$modactividad,$modresultado,$tipoorden,$modnodo,$modsubnodo)){
            return array('success' => 0, 'message' => 'Debe ingresar o seleccionar todas las opciones');
        }else{
        $datos=$this->db->query_select("select validate_rut('$modrutcliente')");
        if($datos[0][0]==0){
            return array('success' => 0, 'message' => 'Rut no valido');
        }

            $prioridad = $this->getTipoOrdenById($tipoorden);
            $this->db->query("UPDATE tblordenes set n_orden='$modorden', rut_cliente='$modrutcliente',reg='$modreg', fecha_compromiso='$modfechacompromiso', fecha_ot='$fechaot', bloque='$modbloque', motivo='$modmotivo',
            comuna='$modcomuna',nodo='$modnodo',reagendamiento='$reagendamiento', subnodo='$modsubnodo', tipoorden='$tipoorden', actividad='$modactividad', resultado='$modresultado', observacion='$modobservacion', fecha_dia='$modfecha_dia', prioridad='".$prioridad[0]['prioridad']."'  WHERE id_orden='$idorden'");

            $this->db->insert('tblhistorico', array(
                'id_orden' => $idorden,
                'n_orden' => $modorden,
                'fecha' => date('Y-m-d'),
                'accion' => 'MODIFICACION',
                'observacion' => $modobservacion,
                'reagendamiento' => $reagendamiento,
                'motivo_llamado' => $modmotivo,
                'id_user' => $operador,
                'bloque' => $modbloque,
                'fecha_compromiso' => $modfechacompromiso,
                'resultado' => $modresultado
            ));


            return array('success' => 1, 'message' => 'Datos Modificados');
        }
    }
    public function eliminarorden($norden){
        global $config;

        $this->db->query("delete from tblordenes where id_orden='$norden';");
        $this->db->query("delete from tblhistorico where id_orden='$norden';");

        $this->functions->redir($config['site']['url'] . 'confirmacion/listar_allorden');

        return array('success' => 1, 'message' => "Registro eliminado");
    }

    public function vermod(){
        global $http;
        $desde=$http->query->get('btnmodificar');

        return array('success' => 1, 'message' => 'btnmodificar');
    }

    public function get_orden_byId(int $id){
        return $this->db->query_select("select tblordenes.*, users.name from
        tblordenes inner join users on tblordenes.operador=users.id_user where id_orden ='$id' limit 1");
    }
    public function get_orden_bynorden(string $norden){
        return $this->db->query_select("select o.id_orden,o.ubicacion,u.name from
        tblordenes o inner join users u on o.operador=u.id_user where o.n_orden ='$norden' limit 1");
    }

    // REAGENDAMIENTO ORDEN
    public function confirmacion_buscar_norden(): array {
        try {
            global $http;
            #Obtener los datos $_POST
            $norden = str_replace(".",'',$http->request->get('orden'));

            if(strlen($norden) != 9){
                return array('success' => 2, 'message' => 'Largo de numero de orden no valido ');
            }

            $comparacion = $this->get_orden_bynorden($norden);
            if ($comparacion == false ) {
                return array('success' => 0, 'message' => 'No Existe');
            }else {
                //$bloques = $this->carga_bloque();

                //$dato = $comparacion[0]['id_orden'];
                $ubicacion = $comparacion[0]['ubicacion'];
                $usuario = $comparacion[0]['name'];
                $id_orden = $comparacion[0]['id_orden'];
                //$fecha = date("Y-m-d");

                $html="<label>Su orden se encuentra en ".$ubicacion."</label>
                <h3>¿Desea reingresarla?</h3>";

                if ($ubicacion == 'DESPACHO') {
                    return array('success' => 2, 'message' => 'Orden ya Ingresada por: '.$usuario);
                }else {
                    return array('success' => 1, 'html' => $html, 'url' => 'confirmacion/reingresar_confirmacion/'.$id_orden );
                }
            }
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function confirmacion_reagendar() :array{
        try {
            global $http;


            $fecha = $http->request->get('fecha');
            $bloque = $http->request->get('bloque');
            $id = $http->request->get('id');
            $datos = $this->db->select('*','tblordenes',"n_orden='$id'");
            $usu=(new Model\Users)->getOwnerUser();

            if ('undefined' == $bloque){ return array('success' => 0, 'message' => 'Debe seleccionar Bloque'); }



            $this->db->update('tblordenes',array(
                'fecha_compromiso' => $fecha,
                'bloque' => $bloque,
                'ubicacion' => 'CONFIRMACION'
            ),"n_orden='$id'");

            $REAGENDA='Fecha Anterior: '.$datos[0]['fecha_compromiso'].' - Bloque: '.$datos[0]['bloque'].'  A  Fecha Nueva: '.$fecha.' - Bloque: '.$bloque;

            $this->db->insert('tblhistorico', array(
                'id_orden' => $datos[0]['id_orden'],
                'n_orden' => $id,
                'fecha' => date('Y-m-d'),
                'accion' => 'REAGENDAMIENTO',
                'observacion' => $REAGENDA,
                'id_user' => $usu[0][0]
            ));
            return array('success' => 1, 'bloque' => $bloque, 'id' => $id, 'fecha' => $fecha);
        } catch (\Exception $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function consultar_historico(){
        global $http;

        $norden = $http->request->get('norden');

        $datos = $this->db->query_select("SELECT
        h.hora,
        h.accion,
        h.observacion,
        h.bloque,
        h.motivo_llamado,
        h.fecha_compromiso,
        h.resultado,
        h.reagendamiento,
        h.id_user,
        r.nombre,
        u.name
         FROM ((tblhistorico h
         inner JOIN users u
         ON h.id_user = u.id_user)
         left JOIN tblresultado r
         ON h.resultado = r.id_resultado)
         WHERE h.n_orden = '$norden' ORDER BY fecha desc,hora desc");

            $html = '<div class="box-body">
                <table id="historico" class="table table-bordered">
                <thead>
                    <tr>
                    <th>Fecha registro</th>
                    <th>Accion</th>
                    <th>Reagendamientos</th>
                    <th>Observacion</th>
                    <th>Bloque</th>
                    <th>Motivo llamado</th>
                    <th>Fecha compromiso</th>
                    <th>Resultado</th>
                    <th>Usuario</th>
                    </tr>
                </thead>
              <tbody>';
              if (false != $datos) {
                foreach ($datos as $key => $value) {
                     $html .= '
                  <td>'.$value['hora'].'</th>
                  <td>'.$value['accion'].'</th>
                  <td>'.$value['reagendamiento'].'</th>
                  <td>'.$value['observacion'].'</th>
                  <td>'.$value['bloque'].'</th>
                  <td>'.$value['motivo_llamado'].'</th>
                  <td>'.$value['fecha_compromiso'].'</th>
                  <td>'.$value['nombre'].'</th>
                  <td>'.$value['name'].'</th></tr>';
                }
            }

            $html .=  '</tbody>
            </table>
            </div>
            <script>$("#historico").dataTable({
                        "language": {
                            "search": "Buscar:",
                            "zeroRecords": "No hay datos para mostrar",
                            "info": "Mostrando _END_ Registros, de un total de _TOTAL_ ",
                            "loadingRecords": "Cargando...",
                            "processing": "Procesando...",
                            "infoEmpty": "No hay entradas para mostrar",
                            "lengthMenu": "Mostrar _MENU_ Filas",
                            "paginate": {
                                "first": "Primera",
                                "last": "Ultima",
                                "next": "Siguiente",
                                "previous": "Anterior"
                            }
                        },
                        "autoWidth": true,
                        "scrollX": true,
                        "order": [[ 0, "desc" ]]
                    });</script>';
        return array('success' => 1, 'html' => $html);
    }

    // REPORTERIA---------------------------------------------------------------
    //Reporte Ordenes Agendadas
    function ObtenerBloqueActual(){
        $result= $this->db->query_select("select bloque from tblbloque where estado=1 and desde<=time(now()) and hasta>=time(now()) LIMIT 1");
        if ($result == false){
            $result= $this->db->query_select("select bloque from tblbloque where estado=1 order by desde asc LIMIT 1");
        }
        return $result[0];
    }
    public function confirma_informe($fecha){
        return $this->db->query_select("select o.bloque,b.limite_q_programacion requerido,count(o.id_orden) cantidad from ((tblordenes o inner join tblbloque b on o.bloque=b.bloque) inner join tblresultado r on o.resultado=r.id_resultado and grupo=1) where fecha_compromiso='$fecha' and (ubicacion='CONFIRMACION' OR ubicacion='DESPACHO') group by o.bloque order by b.desde asc");
    }
    public function datcomunas($fecha,$bloque){
        return $this->db->query_select("select tblcomuna.nombre,tblcomuna.requerido,count(tblordenes.id_orden) as cantidad from ((tblcomuna inner join tblordenes on tblcomuna.nombre=tblordenes.comuna) inner join tblresultado r on tblordenes.resultado=r.id_resultado and grupo=1) where tblordenes.fecha_compromiso='$fecha' and tblordenes.bloque='$bloque' and (ubicacion='DESPACHO' or ubicacion='CONFIRMACION') GROUP BY tblcomuna.nombre");
    }
    public function revisar_fecha(){
        global $http;
        $fechacompromiso=$http->request->get('calendariohoy');
        //agendamiento hoy---------------------------------------------------------------------------------------------------------------------------
        $datos=$this->confirma_informe($fechacompromiso);
        $html="<table class='table table-bordered table-responsive' id='tbldatos'>
        <thead>
            <th>Bloque</th>
            <th>Cliente Agendado</th>
            <th>Requerido</th>
            <th>Progreso</th>
            <th>%</th>
        </thead>
        <tbody>";
        if($datos!=false){
            $total_agendado = 0 ;
            $total_requerido = 0 ;
            foreach ($datos as $key => $value) {
                $html.="<tr>
                <td><a onclick=\"verbloque('".$value['bloque']."')\">".$value['bloque']."</a></td>
                <td>".$value['cantidad']."</td>
                <td>".$value['requerido']."</td>";
                $datos=round(($value['cantidad'] / $value['requerido'] * 100),1);
                $html.="<td><div class='progress progress-xs'>
                    <div class='progress-bar progress-bar-aqua' style='width:".$datos."%' role='progressbar' aria-valuenow=".$datos." aria-valuemin='0' aria-valuemax=".$value['requerido'].">
                        <span class='sr-only'>".$datos."%</span>
                    </div>
                </div></td>";
                $html.="<td>".$datos."%</td>
                </tr>";
                $total_agendado+=$value['cantidad'];
                $total_requerido+=$value['requerido'];
            }
            $html.="<tr>
                    <td>TOTAL</td>
                    <td>".$total_agendado."</td>
                    <td>".$total_requerido."</td>
                    <td>
                        <div class='progress progress-xs'>
                            <div class='progress-bar progress-bar-aqua' style='width: ".round(($total_agendado /$total_requerido * 100),1)."%' role='progressbar' aria-valuenow='".round(($total_agendado /$total_requerido * 100),1)."' aria-valuemin='0' aria-valuemax='".$total_requerido."'>
                                <span class='sr-only'>".round(($total_agendado /$total_requerido * 100),1)."% </span>
                            </div>
                        </div>
                    </td>
                    <td>".round(($total_agendado /$total_requerido * 100),1)."%</td>
                    </tr>";

            $html.="</tbody>
            </table>";
        }
        //--------------------------------------------------------------------------------------------------------------------------------------------
        //agendamiento posterior----------------------------------------------------------------------------------------------------------------------
        $fechacompromiso2=strtotime($fechacompromiso);
        $fechacompromiso3=date('Y-m-d',strtotime('+1 day',$fechacompromiso2));
        $posterior=$this->confirma_informe($fechacompromiso3);

          $html2="<div align='right' class='col-md-6'>
          <input type='text' class='form-control' id='calendariopost' name='calendariopost' value=".date('d-m-Y',strtotime('+1 day',$fechacompromiso2))." disabled>
          </div>
          <table class='table table-bordered table-responsive' id='tblposterior'>
          <thead>
              <th>Bloque</th>
              <th>Cliente Agendado</th>
              <th>Requerido</th>
              <th>Progreso</th>
              <th>%</th>
          </thead>
          <tbody>";
            if($posterior!=false){
                $total_agendado = 0 ;
                $total_requerido = 0 ;
                foreach ($posterior as $key => $post) {
                  $html2.="<tr>
                  <td>".$post['bloque']."</td>
                  <td>".$post['cantidad']."</td>
                  <td>".$post['requerido']."</td>";
                  $datospos=round(($post['cantidad'] / $post['requerido'] * 100),1);
                  $html2.="<td><div class='progress progress-xs'>
                          <div class='progress-bar progress-bar-aqua' style='width:".$datospos."%' role='progressbar' aria-valuenow=".$datospos." aria-valuemin='0' aria-valuemax=".$post['requerido'].">
                              <span class='sr-only'>".$datospos."%</span>
                          </div>
                      </div></td>";
                  $html2.="<td>".$datospos."%</td>
                  </tr>";
                  $total_agendado+=$post['cantidad'];
                  $total_requerido+=$post['requerido'];
                }
                $html2.="<tr>
                        <td>TOTAL</td>
                        <td>".$total_agendado."</td>
                        <td>".$total_requerido."</td>
                        <td>
                            <div class='progress progress-xs'>
                                <div class='progress-bar progress-bar-aqua' style='width: ".round(($total_agendado /$total_requerido * 100),1)."%' role='progressbar' aria-valuenow='".round(($total_agendado /$total_requerido * 100),1)."' aria-valuemin='0' aria-valuemax='".$total_requerido."'>
                                    <span class='sr-only'>".round(($total_agendado /$total_requerido * 100),1)."% </span>
                                </div>
                            </div>
                        </td>
                        <td>".round(($total_agendado /$total_requerido * 100),1)."%</td>
                        </tr>";
                $html2.="</tbody>
                </table>";
            }
        return array('success' => 1, 'html' => $html, 'html2' => $html2);
    }
    function revisar_bloque(){
        global $http;
        $bloque=$http->request->get('bloque');
        $fecha=$http->request->get('fecha');

        $cantcomunas=$this->datcomunas($fecha,$bloque);
        $html="<div class='box-header'>
            <h3 class='box-title col-xs-2'><label>Comunas</label></h3>
            <h3 class='box-title col-xs-3'><label>Bloque: ".$bloque."</label></h3>
        </div>
        <div class='box-body'>
            <table class='table table-bordered'>
                <thead>
                  <th>Comuna</th>
                  <th>Cantidad Gestion </th>
                  <th>Requerido</th>
                  <th>Progreso</th>
                  <th>%</th>
                </thead>
                <tbody>";

                if($cantcomunas!=false){
                    $total_agendado = 0 ;
                    $total_requerido = 0 ;
                    foreach ($cantcomunas as $cant => $cantcomuna) {
                      $html.="<tr>
                        <td>".$cantcomuna['nombre']."</td>
                        <td>".$cantcomuna['cantidad']."</td>
                        <td>".$cantcomuna['requerido']."</td>";
                        $consulta=round(($cantcomuna['cantidad'] / $cantcomuna['requerido'] * 100),1);
                        $html.="<td><div class='progress progress-xs'>
                                <div class='progress-bar progress-bar-aqua' style='width:".$consulta."%' role='progressbar' aria-valuenow=".$consulta." aria-valuemin='0' aria-valuemax=".$cantcomuna['requerido'].">
                                    <span class='sr-only'>".$consulta."%</span>
                                </div>
                            </div></td>";
                        $html.="<td>".$consulta."%</td>
                        </tr>";
                        $total_agendado+=$cantcomuna['cantidad'];
                        $total_requerido+=$cantcomuna['requerido'];
                  }
                  $html.="<tr>
                          <td>TOTAL</td>
                          <td>".$total_agendado."</td>
                          <td>".$total_requerido."</td>
                          <td>
                              <div class='progress progress-xs'>
                                  <div class='progress-bar progress-bar-aqua' style='width: ".round(($total_agendado /$total_requerido * 100),1)."%' role='progressbar' aria-valuenow='".round(($total_agendado /$total_requerido * 100),1)."' aria-valuemin='0' aria-valuemax='".$total_requerido."'>
                                      <span class='sr-only'>".round(($total_agendado /$total_requerido * 100),1)."% </span>
                                  </div>
                              </div>
                          </td>
                          <td>".round(($total_agendado /$total_requerido * 100),1)."%</td>
                          </tr>";
              }
            $html.="</tbody>
          </table>
      </div>";

      $fecha2=strtotime($fecha);
      $fecha3=date('Y-m-d',strtotime('+1 day',$fecha2));
      $posterior=$this->datcomunas($fecha3,$bloque);
      $html2="<div class='box-header'>
              <h3 class='box-title col-xs-2'><label>Comunas</label></h3>
              <h3 class='box-title col-xs-3'><label>Bloque: ".$bloque."</label></h3>
              <h3 class='box-title col-xs-4'><label>Fecha: ".date('d-m-Y',strtotime('+1 day',$fecha2))."</label></h3>
          </div>
          <div class='box-body'>
              <table class='table table-bordered'>
                  <thead>
                    <th>Comuna</th>
                    <th>Cantidad Gestion </th>
                    <th>Requerido</th>
                    <th>Progreso</th>
                    <th>%</th>
                  </thead>
                  <tbody>";
                  if($posterior!=false){
                      $total_agendado = 0 ;
                      $total_requerido = 0 ;
                      foreach ($posterior as $po => $poste) {
                        $html2.="<tr>
                          <td>".$poste['nombre']."</td>
                          <td>".$poste['cantidad']."</td>
                          <td>".$poste['requerido']."</td>";
                          $consposte=round(($poste['cantidad'] / $poste['requerido'] * 100),1);
                          $html2.="<td><div class='progress progress-xs'>
                                  <div class='progress-bar progress-bar-aqua' style='width:".$consposte."%' role='progressbar' aria-valuenow=".$consposte." aria-valuemin='0' aria-valuemax=".$poste['requerido'].">
                                      <span class='sr-only'>".$consposte."%</span>
                                  </div>
                              </div></td>";
                          $html2.="<td>".$consposte."%</td>
                          </tr>";
                          $total_agendado+=$poste['cantidad'];
                          $total_requerido+=$poste['requerido'];
                    }
                    $html2.="<tr>
                            <td>TOTAL</td>
                            <td>".$total_agendado."</td>
                            <td>".$total_requerido."</td>
                            <td>
                                <div class='progress progress-xs'>
                                    <div class='progress-bar progress-bar-aqua' style='width: ".round(($total_agendado /$total_requerido * 100),1)."%' role='progressbar' aria-valuenow='".round(($total_agendado /$total_requerido * 100),1)."' aria-valuemin='0' aria-valuemax='".$total_requerido."'>
                                        <span class='sr-only'>".round(($total_agendado /$total_requerido * 100),1)."% </span>
                                    </div>
                                </div>
                            </td>
                            <td>".round(($total_agendado /$total_requerido * 100),1)."%</td>
                            </tr>";
                }
              $html2.="</tbody>
            </table>
        </div>";
        return array('success' => 1, 'html' => $html, 'html2'=> $html2);
    }

    public function confirma_lista_por_fecha(){
        global $http;
        $fecha_desde=$http->request->get('fecha_desde');
        $fecha_hasta=$http->request->get('fecha_hasta');
        $filtropor=$http->request->get('filtropor');



        $result=$this->listar_ordenes($fecha_desde,$fecha_hasta,'',$filtropor);


        $usucompa=(new Model\Users)->getOwnerUser();

        if ($result === false){
            return array('success' => 0, 'message' => 'Para la fecha seleccionada no existen datos');
        }else{
            $json = array(
            "aaData"=>array(
            )
            );
            foreach ($result as $key => $value) {
                $html = "<a data-toggle='tooltip' data-placement='top' id='historicoorden' name='historicoorden' title='Historico Orden' class='btn btn-primary btn-sm' onclick=\"historico('".$value['n_orden']."');\">
                    <i class='glyphicon glyphicon-eye-open'></i>
                </a>";
                if ($value['ubicacion']=='CONFIRMACION'){
                    $html.='<a data-toggle="tooltip" data-placement="top" id="btnmodificar" name="btnmodificar" title="Modificar" class="btn btn-success btn-sm" href="confirmacion/editar_confirmacion/'.$value['id_orden'].'">
                        <i class="glyphicon glyphicon-edit"></i></a>
                        <a data-placement="top" name="btnlisteliminar" id="btnlisteliminar" title="Eliminar" onclick="Eliminar_OT('.$value['id_orden'].')" class="btn btn-danger btn-sm">                    <i class="glyphicon glyphicon-remove"></i>
                    </a>';
                }else{
                    $html.='<a data-toggle="tooltip" data-placement="top" id="btnmodificar" name="btnmodificar" title="Modificar" class="btn btn-success btn-sm" disabled >
                        <i class="glyphicon glyphicon-edit"></i></a>
                        <a data-placement="top" name="btnlisteliminar" id="btnlisteliminar" title="Eliminar" class="btn btn-danger btn-sm" disabled>                    <i class="glyphicon glyphicon-remove"></i>
                    </a>';
                }

                $json['aaData'][] = array($value['n_orden'],$value['name'],$value['rut_cliente'],$value['fecha_compromiso'],$value['bloque'],$value['motivo'],$value['reagendamiento'],$value['comuna'],$value['actividad'],$value['desc_resultado'],$value['observacion'], $html );
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
        $fecha_desde=$http->query->get('fecha_desde');
        $fecha_hasta=$http->query->get('fecha_hasta');
        $filtropor=$http->query->get('filtropor');

        $u=$this->listar_ordenes($fecha_desde,$fecha_hasta,'',$filtropor);

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
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L1', 'OPERADOR');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M1', 'FECHA_REGISTRO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N1', 'TERRITORIO');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O1', 'REAGENDAMIENTOS');
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P1', 'CUADRANTE');

            $fila = 2;
            foreach ($u as $value => $data) {

              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$fila, $data['n_orden']);
              $dif= 12 - strlen($data['rut_cliente']);
              $rut = str_repeat('0',$dif).$data['rut_cliente'];
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$fila, $rut);

              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$fila, $data['fecha_compromiso']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$fila, $data['bloque']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$fila, $data['motivo']);
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$fila, $data['comuna'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$fila, $data['nodo'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$fila, $data['subnodo'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$fila, $data['actividad'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$fila, $data['desc_resultado'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$fila, $data['observacion'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$fila, $data['name'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$fila, $data['fecha_dia_hora'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$fila, $data['territorio'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$fila, $data['reagendamiento'] );
              $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$fila, $data['cuadrante'] );

              $fila++;
            }

            //autisize para las columna
            foreach(range('A','P') as $columnID)
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
        return $this->db->query_select("select if(r.grupo = 0,'No Confirma','Confirma') Resultado,count(o.id_orden) cantidad from tblordenes o inner join tblresultado r on o.resultado=r.id_resultado where fecha_compromiso between '$desde' and '$hasta' group by r.grupo order by Resultado");
    }
    public function confirma_top_5_best_ejecutivo($desde,$hasta){
        return $this->db->query_select("select u.name,count(o.id_orden) cantidad from (tblordenes o inner join users u on o.operador=u.id_user) inner join tblresultado r on o.resultado=r.id_resultado and grupo=1 where fecha_dia between '$desde' and '$hasta' group by u.name order by cantidad desc");
    }
    public function confirma_top_5_bad_ejecutivo($desde,$hasta){
        return $this->db->query_select("select u.name,count(o.id_orden) cantidad from (tblordenes o inner join users u on o.operador=u.id_user) inner join tblresultado r on o.resultado=r.id_resultado and grupo=1 where fecha_dia between '$desde' and '$hasta' group by u.name order by cantidad asc limit 5");
    }
    public function confirma_resumen_x_comuna($desde,$hasta){
        return $this->db->query_select("select o.comuna,b.requerido requerido,count(o.id_orden) cantidad from ((tblordenes o inner join tblresultado r on o.resultado=r.id_resultado and r.grupo=1) inner join tblcomuna b on o.comuna=b.nombre)  where fecha_compromiso between '$desde' and '$hasta' group by o.comuna order by cantidad desc");
    }
    public function confirma_resumen_x_bloque($desde,$hasta){
        return $this->db->query_select("select o.bloque,b.limite_q_programacion requerido,count(o.id_orden) cantidad from ((tblordenes o  inner join tblresultado r on o.resultado=r.id_resultado and r.grupo=1) inner join tblbloque b on o.bloque=b.bloque) where fecha_compromiso between '$desde' and '$hasta' group by o.bloque order by b.desde asc");
    }

    // Reporte Productividad Ejecutivo
    public function calc_llamados($fecha){
        $fecha2=strtotime($fecha);
        $fecha3=date('Y-m',strtotime('-1 month',$fecha2)).'-25';
        $sql="select h.id_user,u.name,count(*) acum_total_sinconf,
        (select count(h2.id_user) from tblhistorico h2 INNER join tblresultado r2 on h2.resultado=r2.id_resultado and r2.grupo=1 where h2.id_user=h.id_user and h2.fecha between '$fecha3' and '$fecha' ) acum_total_conf,
        (select count(h3.id_user) from tblhistorico h3 INNER join tblresultado r3 on h3.resultado=r3.id_resultado and r3.grupo=1 where h3.id_user=h.id_user and h3.fecha = '$fecha') acum_hoy_conf,
        (select count(h4.id_user) from tblhistorico h4 where h4.id_user=h.id_user and h4.fecha = '$fecha') acum_hoy_total,
        (select count(vdt.fecha) cuenta from view_dias_trabajados vdt where vdt.id_user=h.id_user and vdt.fecha<='$fecha' group by vdt.id_user) dias_trab
        from tblhistorico h inner join users u on h.id_user=u.id_user where (accion='INGRESO' or accion='REINGRESO' or accion='MODIFICACION') and h.fecha between '$fecha3' and '$fecha'
        group by h.id_user
        order by acum_total_sinconf desc";

        $result= $this->db->query_select($sql);
        return $result;
    }
    public function getMetas(){
        $result= $this->db->query_select("select * from tblmetas where activo=1");
        return $result[0]['meta'];
    }
    public function refrescar_datos_produccion_ejecutivo_confirmacion(){
      global $http;
      $meta = $http->request->get('meta');
      $fecha = $http->request->get('fecha');
      $this->db->query("Update tblmetas set meta=$meta");

      $fecha2=strtotime($fecha);
      $fecha3=date('Y-m',strtotime('-1 month',$fecha2)).'-25';

      $html="<table class='table table-bordered' id='tblprod' name='tblprod'>
          <thead>
              <th colspan='2'></th>
              <th colspan='4' class='text-center'>Hoy -> $fecha </th>
              <th colspan='3' class='text-center'>Acumulado desde -> $fecha3</th>
          </thead>
           <thead>
               <th>Nombre</th>
               <th>Dias Trabajados</th>
               <th>Llamados</th>
               <th>Confirmados</th>
               <th>Progreso</th>
               <th>%</th>
               <th>Llamados</th>
               <th>Confirmados</th>
               <th>Prom Dia</th>
           </thead>

           <tbody>";

              $total=0;
              $total_confirmados=0;
              $cantllamados=$this->calc_llamados($fecha);
              foreach ($cantllamados as $key2 => $value2) {
                $html.="<tr>
                     <td>".$value2['name']."</td>
                     <td>".$value2['dias_trab']."</td>
                     <td>".$value2['acum_hoy_total']."</td>
                     <td>".$value2['acum_hoy_conf']."</td>";
                     $datores=round(($value2['acum_hoy_conf'] / $meta * 100),1);
                     $html.="<td class='col-lg-2'><div class='progress progress-xs'>
                             <div class='progress-bar progress-bar-aqua' style='width:".$datores."%' role='progressbar' aria-valuenow=".$datores." aria-valuemin='0' aria-valuemax=".$meta.">
                                 <span class='sr-only'>".$datores."% </span>
                             </div>
                         </div></td>
                     <td>".$datores."%</td>";
                     $total=$total + $value2['acum_hoy_total'];
                    $total_confirmados=$total_confirmados + $value2['acum_hoy_conf'];
                    $promdia=round(($value2['acum_total_conf'] / $value2['dias_trab']),1);
                    $html.="<td>".$value2['acum_total_sinconf']."</td>
                            <td>".$value2['acum_total_conf']."</td>
                            <td>".$promdia."</td>";

                $html.="<tr>";
              }
              $html.="<td colspan='2'>TOTAL:</td>
             <td>".$total."</td>
             <td>".$total_confirmados."</td>
           </tbody>
         </table>";

        return array('success' => 1, 'html' => $html);
    }
    public function cargar_grafico_llamadas(){
        global $http;
        $fecha = $http->request->get('fecha');

        $result = $this->calc_llamados($fecha);
        unset($pend_valores_test);
        foreach ($result as $key => $value) {
            $pend_valores_test[]=array("x" => $value['name'], "y" =>$value['acum_hoy_conf'],"z" => $value['acum_hoy_total'],"a" => $value['acum_total_conf'],"b" => $value['acum_total_sinconf']);
        }
        if (isset($pend_valores_test)){
            return $pend_valores_test;
        }
    }


    public function medir_cant_llamados($desde,$hasta){
        return $this->db->query_select("select  count(h.id_orden) as confirmados, fecha, (select count(h2.id_orden) from tblhistorico h2 where fecha BETWEEN '$desde' and '$hasta') llamados from tblhistorico h INNER join tblresultado on h.resultado=tblresultado.id_resultado where fecha BETWEEN '$desde' and '$hasta' and tblresultado.grupo='1' group by fecha" );
    }
    public function filtrar_fecha(){
        global $http;
        $desde=$http->request->get('desde');
        $hasta=$http->request->get('hasta');

        $filtro=$this->medir_cant_llamados($desde,$hasta);


        $html="<table class='table table-bordered'>
        <thead>
        <tr>
          <th>Fecha</th>
          <th>Llamados realizados</th>
          <th>Llamados confirmados</th>
        </thead>
        <tbody>";
        foreach ($filtro as $key => $value) {
        $html.=
               "<td>".$value['fecha']."</td>
               <td>".$value['llamados']."</td>
               <td>".$value['confirmados']."</td>
               </tr>";
        }
        $html.="

        </tbody>
        </table>";

        return array('success' => 1, 'html' => $html);
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
