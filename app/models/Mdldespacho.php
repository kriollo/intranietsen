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

    public function ordenes(){
        $datusu=$this->user;

        $limit = $this->db->query_select("SELECT count(*) cantidad FROM tbl_coordinacion_despacho_tecnico where id_despacho='".$datusu['id_user']."'");
        if ($limit == false){ $limit=0; }else{$limit = $limit[0]['cantidad']; }
        return $this->db->query_select("select o.id_orden,o.n_orden,o.rut_cliente,o.fecha_compromiso,o.bloque,o.bloque,o.comuna,t.nombre,o.codigo_tecnico,o.estado_orden,eo.descripcion desc_estado_orden,ton.descripcion desctipoorden from ((tblordenes o left join tbltecnicos t on t.id_tecnicos=o.codigo_tecnico) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado) inner join tbltipoorden ton on ton.id_tipoorden=o.tipoorden where o.id_usuario_despacho='".$datusu['id_user']."' and o.ubicacion='DESPACHO' order by o.codigo_tecnico desc,ton.prioridad asc,o.comuna,o.nodo,o.subnodo limit $limit");
    }

    public function tecnicos(){
        $usuario=$this->user;
        return $this->db->query_select("select tbl_coordinacion_despacho_tecnico.*, tbltecnicos.nombre from tbl_coordinacion_despacho_tecnico inner join tbltecnicos on tbl_coordinacion_despacho_tecnico.id_tecnico=tbltecnicos.id_tecnicos where tbl_coordinacion_despacho_tecnico.id_despacho='".$usuario['id_user']."'");
    }

    public function asignar_tecnico(){
        global $http;
        $id_tecnico=$http->request->get('tecnicos');
        $n_orden=$http->request->get('orden');

        $consulta=$this->db->query_select("select codigo_tecnico from tblordenes where codigo_tecnico='$id_tecnico' and ubicacion='DESPACHO' and n_orden<>'$n_orden'");
        if(false != $consulta){
            return array('success' => 0, 'message' => 'Tecnico ya tiene orden asignada', 'message2'=>$n_orden);
        }else{
            $this->db->query_select("update tblordenes set codigo_tecnico=$id_tecnico, estado_orden='2' where id_orden='$n_orden'");
            return array('success' => 1,'message2'=>$n_orden);
        }
    }
    public function cantidad_ordenes(){
        $fecha=date('Ymd');
        $datusu=$this->user;
        return $this->db->query_select("select comuna,count(id_orden) as cantidad from tblordenes where id_usuario_despacho='".$datusu['id_user']."' and ubicacion='DESPACHO' group by comuna order by comuna");
    }
    public function comunas_asignadas(){
        $datusu=$this->user;
        return $this->db->query_select("select comuna from tbl_coordinacion_ejecutivo_comuna where id_usuario='".$datusu['id_user']."'");
    }
    public function carga_tecnicos(){
        $datusu=$this->user;
        return $this->db->query_select("select ct.id_tecnico,t.nombre,t.codigo , o.n_orden, o.bloque, o.estado_orden, eo.descripcion desc_estado_orden,o.comuna FROM ((tbl_coordinacion_despacho_tecnico ct left join tblordenes o on ct.id_tecnico=o.codigo_tecnico and ubicacion='DESPACHO') inner join tbltecnicos t on ct.id_tecnico=t.id_tecnicos) left join tbl_estado_orden eo on o.estado_orden=eo.id_estado WHERE ct.id_despacho='".$datusu['id_user']."'");
    }
    public function cargar_estados(){
        return $this->db->query_select("select id_estado,descripcion from tbl_estado_orden where ubicacion='DESPACHO' And estado=1");
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
    // MANTENEDORES -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
    // MANTENEDORES -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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
