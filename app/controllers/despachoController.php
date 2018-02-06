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

        switch($this->method){
            case 'seguimiento':
                $cantidad=(new Model\Mdldespacho)->cantidad_ordenes();
                echo $this->template->render('despacho/seguimiento', array(
                    'menu_op' => $op,
                    'db_comunas'=> (new Model\Mdldespacho)->comunas_asignadas(),
                    'db_cantidad_por_comuna'=> (new Model\Mdldespacho)->cantidad_ordenes(),
                    'db_ordenes'=> (new Model\Mdldespacho)->ordenes(),
                    'db_tecnicos'=> (new Model\Mdldespacho)->tecnicos(),
                    'db_tbltecnicos'=> (new Model\Mdldespacho)->carga_tecnicos(),
                    'db_estados'=> (new Model\Mdldespacho)->cargar_estados()
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
