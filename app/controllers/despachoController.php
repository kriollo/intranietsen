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
            default:
                echo $this->template->render('despacho/despacho', array(
                    'menu_op' => $op
                ));
            break;
        }

    }

}
