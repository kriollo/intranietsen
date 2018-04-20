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

class cierreseguroController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 2, 'access' => true]
        ));
        global $config;
        $op = '2';
        switch($this->method){
            case "cargaordenes":
                echo $this->template->render('cierreseguro/cargaordenes/cargaordenes', array(
                    'menu_op' => $op,
                    'db_archivos' => (new Model\Varios)->listar_archivos_cargados('Carga de Cierre de ordenes')
                ));
            break;
            case "distribuirordenes":
                echo $this->template->render('cierreseguro/distribucion/distribucion', array(
                    'menu_op' => $op,
                    'getEjecutivos' => (new Model\Mdlcierre)->getEjecutivos(),
                    'getQ_OrdenesSinDistribucionTMP' => (new Model\Mdlcierre)->getQ_OrdenesSinDistribucionTMP(),
                    'getQ_OrdenesSinDistribucionPROD' =>(new Model\Mdlcierre)->getQ_OrdenesSinDistribucionPROD()
                ));
            break;
            case 'seguimiento_user':
               echo $this->template->render('cierreseguro/seguimiento/seguimiento_user', array(
                   'menu_op' => $op,
                   'db_cierre'=>(new Model\Mdlcierre)->getOrdenesEjecutivoSeguimiento()
               ));
            break;
            case 'seguimiento_super':
               echo $this->template->render('cierreseguro/seguimiento/seguimiento_supervisores', array(
                   'menu_op' => $op,
                   'db_cierre_sup'=>(new Model\Mdlcierre)->getOrdenesFiltroSupervisor(date('Y-m-d'),date('Y-m-d'),'fechas')
               ));
            break;
            case "exporta_excel_ordenescierre":
                (new Model\Mdlcierre)->exporta_excel_ordenescierre();
            break;
            // -------------------------------------------------------------------------------------------------------------------------------------------------------
            default:
                echo $this->template->render('cierreseguro/cierreseguro', array(
                    'menu_op' => $op,
                    'getResumenGestionDia' => (new Model\Mdlcierre)->getResumenGestionDia(date('Y-m-d'))
                ));
            break;
        }

    }

}
