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
 * Controlador plataforma/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class plataformaController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 1, 'access' => true]
        ));

        $op = '10';
        switch($this->method){
            case 'mantenedores_crud_masters':
                echo $this->template->render('plataforma/mantenedores_crud_masters/mantenedores_crud_masters', array(
                    'menu_op' => $op
                ));
            break;
            case 'listar_motivos':
                 echo $this->template->render('plataforma/mantenedores_crud_masters/motivos_casilleros/listar_motivos', array(
                    'menu_op' => $op,
                    'motivos_db' => (new Model\MdlPlataformaMaestros)->getMotivosCasilleros('*')
                 ));
            break;
            case 'nuevo_motivos':
                 echo $this->template->render('despacho/estado/nuevo_estado', array(
                     'menu_op' => $op,
                     'db_ubicacion' => $Ubicacion
                 ));
            break;
            case 'editar_motivos':
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
            case 'estado_motivos':
                 (new Model\Mdldespacho)->update_estado_estado($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            default:
                echo $this->template->render('plataforma/plataforma', array(
                    'menu_op' => $op
                ));
            break;
        }

    }

}
