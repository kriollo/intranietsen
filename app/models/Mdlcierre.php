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

class Mdlcierre extends Models implements IModels {
    /**
      * Característica para establecer conexión con base de datos.
    */
    use DBModel;

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
            $user = (new Model\Users)->getOwnerUser();
            $this->db->insert('tbl_cierre_asegurado', array(
                'n_orden' => $id,
                'hay_tec' => $tec,
                'cierre' => $opcion
            ));

            $this->db->update('tblordenes', array(
                'cierre_seguro' => '1'
            ),"n_orden='$id'");

                return array('success' => 1,'id' => $user['id_user']);

        } catch (Exception $e) {
            return array('success' => 0, 'message' => 'Datos no encontrados');
        }
    }

    public function tomar_orden($id) {
        global $http,$config;

        $user = (new Model\Users)->getOwnerUser();
        $usi = $user['id_user'];
        $this->db->query("UPDATE tblordenes SET id_ejecutivo_cierre='$usi' WHERE n_orden='$id' LIMIT 1;");
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

              $img->move(API_INTERFACE . 'views/app/images/speedtest/', $img_name);
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
            $img = $http->files->get('fileinput');
            $foto = 0;
            $img_name="";

            if (null !== $img && true == Files::is_image($img->getClientOriginalName()) ){
              $foto = 1;
              $ext_foto = $img->getClientOriginalExtension();
              $img_name = $id.'_cert.'.$ext_foto;

              $img->move(API_INTERFACE . 'views/app/images/certificacion/', $img_name);
               $this->db->update('tblordenes', array(
                'certificacion' => '1'
            ),"n_orden='$id'");
            }else{
            return array('success' => 2, 'message' => 'Falta la imagen');
            }



             return array('success' => 1);
                }
                catch (Exception $e) {
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
