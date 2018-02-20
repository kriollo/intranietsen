<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

/**
 * Controlador rrhh/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class despachoController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 7, 'access' => true]
        ));
        global $config;
        $op = '7';

        $Ubicacion=array('DESPACHO','REDES','SUPERVISOR','OTROS','ANULADA');

        switch($this->method){
            case 'seguimiento':
                //$cantidad=(new Model\Mdldespacho)->cantidad_ordenes();
                $id_usuario = (new Model\Users)->getOwnerUser();
                echo $this->template->render('despacho/seguimiento', array(
                    'menu_op' => $op,
                    'db_comunas'=> (new Model\Mdldespacho)->comunas_asignadas($id_usuario['id_user']),
                    'db_tipoorden'=>(new Model\Mdlconfirmacion)->carga_tipoorden(),
                    //'db_cantidad_por_comuna'=> (new Model\Mdldespacho)->cantidad_ordenes(),
                    //'db_tbltecnicos'=> (new Model\Mdldespacho)->carga_tecnicos($id_usuario['id_user']),
                    'db_estados'=> (new Model\Mdldespacho)->cargar_estados(),
                    'db_ordeneshoy' => (new Model\Mdldespacho)->listar_todas_ordenes()
                ));
            break;
            case 'mantenedores_crud_masters':
                echo $this->template->render('despacho/mantenedores_crud_masters', array(
                   'menu_op' => $op
                ));
           break;
           case 'listar_estados':
                echo $this->template->render('despacho/estado/listar_estado', array(
                   'menu_op' => $op,
                   'estado_db' => (new Model\Mdldespacho)->verEstadoss()
                ));
           break;
           case 'nuevo_estado':
                echo $this->template->render('despacho/estado/nuevo_estado', array(
                    'menu_op' => $op,
                    'db_ubicacion' => $Ubicacion
                ));
           break;
           case 'editar_estado':
                if($this->isset_id and false !== ($data = (new Model\Mdldespacho)->getEstadosById($router->getId()))) {
                    echo $this->template->render('despacho/estado/editar_estado', array(
                       'menu_op' => $op,
                       'db_ubicacion' => $Ubicacion,
                       'db_estado' => $data[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'despacho/&error=true');
                }
           break;
           case 'estado_estado':
                (new Model\Mdldespacho)->update_estado_estado($router->getId(true));
           break;
           case 'listar_ordenes':
                $user = (new Model\Users)->getOwnerUser();
                echo $this->template->render('despacho/cierre/listar_ordenes', array(
                    'menu_op' => $op,
                    'ordenes_db' => (new Model\Mdlcierre)->verOrdenes(),
                    'id_user' => $user['id_user']
                ));
            break;
            case 'finalizar':
                (new Model\Mdlcierre)->finalizar($router->getId(true));
            break;
            case 'tomar_orden':
                (new Model\Mdlcierre)->tomar_orden($router->getId(true));
            break;
            case 'listar_ordenes_ejecutivo':
                $user = (new Model\Users)->getOwnerUser();
                echo $this->template->render('despacho/supervisor/listado_ot', array(
                    'menu_op' => $op,
                    'personal_db' => (new Model\Mdlcoordinacion)->db_ejecutivos_despacho(),
                    'id_user' => $user['id_user']
                ));
            break;
            case 'visor_supervisor':
                echo $this->template->render('despacho/supervisor/visor_supervisor', array(
                    'menu_op' => $op,
                    'personal_db' => (new Model\Mdlcoordinacion)->db_ejecutivos_despacho()
                ));
            break;
            default:
                echo $this->template->render('despacho/despacho', array(
                    'menu_op' => $op
                ));
            break;
        }

    }

}
