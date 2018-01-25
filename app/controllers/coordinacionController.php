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
 * Controlador confirmacion/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class coordinacionController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 6, 'access' => true]
        ));
        global $config;
        $op = '6';
        switch($this->method){
            case 'mantenedores_crud_masters':
                echo $this->template->render('coordinacion/mantenedores_crud_masters', array(
                'menu_op' => $op
            ));
        break;
        case "listar_coordinadores":
            echo $this->template->render('coordinacion/listar_coordinadores', array(
                'menu_op' => $op
            ));
        break;
        case "asignar_comuna":
            echo $this->template->render('coordinacion/asignar_comuna/asignar_comuna', array(
                'menu_op' => $op,
                'ejecutivos' => (new Model\Mdlcoordinacion)->getejecutivos()
            ));
        break;
        // -------------------------------------------------------------------------------------------------------------------------------------------------------
        default:
            echo $this->template->render('coordinacion/coordinacion', array(
                'menu_op' => $op
            ));
        break;
        }

    }

}
