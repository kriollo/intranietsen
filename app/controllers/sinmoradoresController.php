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
 * Controlador administracion/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class sinmoradoresController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'only_admin' => true
        ));
        global $config;

        // $u = new Model\Mdlsinmoradores($router);
        $op = '8';
        switch($this->method){
            case 'listar':
                echo $this->template->render('sinmoradores/seguimiento/listar', array(
                    'menu_op' => $op,
                    'OT' =>(new Model\MdlsinMoradores)->getOTsinmoradores()
                ));
            break;
            case 'listar_all':
                echo $this->template->render('sinmoradores/seguimiento/listar_all', array(
                    'menu_op' => $op,
                    'OT' =>(new Model\MdlsinMoradores)->getOTsinmoradores()
                ));
            break;
            case 'nuevaorden':
                echo $this->template->render('sinmoradores/seguimiento/nuevaot', array(
                    'menu_op' => $op,
                    'comunas_db' => (new Model\Mdlconfirmacion)->verComunas(),
                    'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                ));
            break;
            case "editar":
                if($this->isset_id and false !== ($orden=(new Model\MdlsinMoradores)->get_orden_byId($router->getId(true)))){
                    echo $this->template->render('sinmoradores/seguimiento/editar', array(
                        'menu_op' => $op,
                        'orden'=>$orden[0],
                        'comunas_db' => (new Model\Mdlconfirmacion)->verComunas(),
                        'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case "eliminar":
                if($this->isset_id and false !== ($orden=(new Model\MdlsinMoradores)->eliminarorden($router->getId(true)))){
                }
            break;
            case "distribuir":
                echo $this->template->render('sinmoradores/distribucion/distribucion', array(
                    'menu_op' => $op,
                    'getEjecutivos' => (new Model\MdlsinMoradores)->getEjecutivos(),
                    'getQ_OrdenesSinDistribucion' =>(new Model\MdlsinMoradores)->getQ_OrdenesSinDistribucion()
                ));
            break;
            default:
                echo $this->template->render('sinmoradores/seguimiento/sinmoradores',array(
                    'menu_op' => $op,
                    'numero_ot' => (new Model\MdlsinMoradores)->contar_ot()
                ));
            break;
        }
    }

}
