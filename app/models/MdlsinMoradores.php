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

class MdlsinMoradores extends Models implements IModels {
    /**
    * Característica para establecer conexión con base de datos.
    */
    use DBModel;
    protected $user = array();

    public function getQ_OrdenesSinDistribucion(){
        $result = $this->db->query_select("select count(*) cantidad from tblsinmoradores Where id_ejecutivo=0 and estado='PENDIENTE'");
        if (false != $result){
            return $result[0];
        }else {
            return array('cantidad' => '0');
        }
    }
    public function contar_ot(){
        $fecha = Date("Y-m-d");
        $result = $this->db->query_select("SELECT COUNT(*) FROM tblsinmoradores WHERE fecha='$fecha'");
        if (false != $result){
            return $result[0][0];
        }else {
            return array('0');
    }}
    public function get_orden_byId(int $id){
        return $this->db->query_select("SELECT * FROM tblsinmoradores WHERE id_sinmoradores ='$id' limit 1");
    }
    public function getOTsinmoradores(string $select = '*') {
            $usu=(new Model\Users)->getOwnerUser();
            $usu = $usu['id_user'];
        return $this->db->select($select,'tblsinmoradores',"id_user='$usu'");
    }
    public function buscar_ot_sinmoradores(): array {
        try {
            global $http;
            #Obtener los datos $_POST
            $norden = $http->request->get('orden');

            $comparacion = $this->db->query_select("SELECT * FROM tblsinmoradores WHERE id_orden ='$norden' limit 1");
            if ($comparacion == false ) {
                return array('success' => 0, 'message' => 'No Existe');
            }else {
                //$bloques = $this->carga_bloque();

                //$dato = $comparacion[0]['id_orden'];
                $usuario = $comparacion[0]['id_user'];
                $id_orden = $comparacion[0]['id_orden'];
                //$fecha = date("Y-m-d");

                $html="<label>Su orden se encuentra en el sistema</label>
                <h3>¿Desea reingresarla?</h3>";

                if ($comparacion) {
                    return array('success' => 2, 'message' => 'Orden ya Ingresada por: '.$usuario);
                }else {
                    return array('success' => 1, 'html' => $html, 'url' => 'sinmoradores/editar/'.$id_orden );
                }
            }
        }catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function eliminarorden($id){
        global $config;

        $this->db->query("DELETE FROM tblsinmoradores WHERE id_sinmoradores='$id';");

        $this->functions->redir($config['site']['url'] . 'sinmoradores/listar');

        return array('success' => 1, 'message' => "Registro eliminado");
    }

    public function nueva_ot_sinmoradores() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $fecha = Date("Y-m-d");
            $idorden = $http->request->get('idorden');
            $rut = $http->request->get('rut');
            $tecnico = $http->request->get('tecnico');
            $bloque = $http->request->get('bloque');
            $comuna = $http->request->get('comuna');

            # Verificar que no están vacíos
            if ($this->functions->e($idorden, $rut, $tecnico, $bloque, $comuna)) {
            throw new ModelsException('Ingresar datos donde campos faltantes');
            }
            # Registrar al actividad
            $this->db->insert('tblsinmoradores', array(
            'id_orden' => $idorden,
            'rut' => $rut,
            'tecnico' => $tecnico,
            'comuna' => $comuna,
            'id_user' => $this->user['id_user'],
            'bloque' => $bloque,
            'fecha' => $fecha
            ));

            return array('success' => 1, 'message' => 'Registrado con éxito.' );
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }
    public function update_ot_sinmoradores() : array {
        try {
            global $http;

            # Obtener los datos $_POST
            $rut = $http->request->get('rut');
            $tecnico = $http->request->get('tecnico');
            $bloque = $http->request->get('bloque');
            $comuna = $http->request->get('comuna');
            $id = $http->request->get('id');
            # Verificar que no están vacíos
            if ($this->functions->e( $rut, $tecnico, $bloque, $comuna)) {
            throw new ModelsException('Ingresar datos donde campos faltantes');
            }
            # Registrar al actividad
            $this->db->update('tblsinmoradores', array(
            'rut' => $rut,
            'tecnico' => $tecnico,
            'comuna' => $comuna,
            'bloque' => $bloque
            ),"id_sinmoradores='$id'");

            return array('success' => 1, 'message' => 'Modificado con éxito.' );
        } catch (ModelsException $e) {
            return array('success' => 0, 'message' => $e->getMessage());
        }
    }

    public function sinmoradores_des_marcar_ejecutivo(){
        global $http;

        $id_user = $http->request->get('id_user');
        $check =  $http->request->get('check');

        $this->db->query_select("Delete from tblejecutivosdistribucion_sinmoradores where id_user ='$id_user' ");

        if ('1' == $check) $this->db->query_select("insert into  tblejecutivosdistribucion_sinmoradores(id_user) value ('$id_user') ");
        return array('message' => '0','estado' => $check);
    }
    public function sinmoradores_quitar_Ordenes_ejecutivos(){
        global $http;
        $id_user = $http->request->get('id_user');

        $this->db->query_select("update tblsinmoradores Set id_ejecutivo=0 where id_ejecutivo='".$id_user."' and estado='PENDIENTE'");

        return array('success' => 1);
    }

    public function getEjecutivos(){
        return $this->db->query_select("SELECT u.id_user,u.name,e.id_user checked,(select count(o.id_ejecutivo) from tblsinmoradores o where o.id_ejecutivo=u.id_user and estado='PENDIENTE') cantidad FROM users u left join tblejecutivosdistribucion_sinmoradores e on u.id_user=e.id_user WHERE u.perfil LIKE '%CONFIRMACION%' and u.estado=1 order by u.name");
    }

        public function distribuir_ordenes(){
        try {
            $sql="select count(*) cantidad from tblsinmoradores where estado='PENDIENTE' and id_ejecutivo=0";
            $resumen=$this->db->query_select($sql);// extrae cantidad de ordenes por comuna
            if (false != $resumen){
                foreach ($resumen as $key => $value) {

                    $sql="Select count(*) q from tblejecutivosdistribucion_sinmoradores";
                    $count_users = $this->db->query_select($sql); //extrae cantidad de ejecutivos
                    if ($count_users[0]['q'] > 0){
                        $resultd=ceil($value['cantidad'] /$count_users[0]['q']); //extrae cantidad de ordenes por usuario
                        $i=($count_users[0]['q'])-1; //cantidad de paginas en limit

                        $sql="Select id_user from tblejecutivosdistribucion_sinmoradores";
                        $users_asiganacion = $this->db->query_select($sql); //extrae usuarios
                        foreach ($users_asiganacion as $key2 => $value2) {
                            $sql="select id_sinmoradores from tblsinmoradores where estado='PENDIENTE' and id_ejecutivo=0 limit $i,$resultd";
                            $ordenes_asiganacion = $this->db->query_select($sql); //extrae ordenes correspondientas para asignar segun limit
                            if (false != $ordenes_asiganacion){
                                foreach ($ordenes_asiganacion as $key3 => $value3) {

                                    $sql="update tblsinmoradores set id_ejecutivo='".$value2['id_user']."' where id_sinmoradores='".$value3['id_sinmoradores']."'";
                                    $this->db->query_select($sql);
                                }
                            }
                            $i--;
                        }
                    }
                }
            }

            return array('success' => 1,'message'=>'Ordenes Asignada','Distribucion OK');
        } catch (\Exception $e) {
            return array($e->getMessage() );
        }
    }
    public function sinmoradores_cerrar_ordenes_sin_asignar(){
        $this->db->query_select("Update tblsinmoradores set estado=4,observacion='NO REALIZADO' Where estado='PENDIENTE' and id_ejecutivo=0 ");
        return array('success' => 1, 'message'=>'Ordenes Cerrada como NO REALIZADO');
    }
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
