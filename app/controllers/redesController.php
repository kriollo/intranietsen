<?php


namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

/**
 * Controlador Despacho/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class redesController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        global $config;
        $op = '9';
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => $op, 'access' => true]
        ));

        switch($this->method){
            case "registrofen":
                echo $this->template->render('redes/registrofen', array(
                    'menu_op' => $op,
                    'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas()
                ));
            break;
            case "listarfen":
                echo $this->template->render('redes/listar_fen', array(
                    'menu_op' => $op,
                    'db_fen'=>(new Model\Mdlredes)->listar_fen(date('Y-m-d'),date('Y-m-d'))
                ));
            break;
            case "editar_fen":
                if($this->isset_id and false !== ($orden=(new Model\Mdlredes)->get_orden_byId($router->getId(true)))){
                    echo $this->template->render('redes/editar_fen', array(
                        'menu_op' => $op,
                        'db_fen'=>$orden[0],
                        'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas()
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case "exporta_excel_fen":
                (new Model\Mdlredes)->exporta_excel_fen();
            break;
            case "exporta_excel_fen2":
                (new Model\Mdlredes)->exporta_excel_fen2();
            break;
            default:
                echo $this->template->render('redes/redes',array(
                    'menu_op' => $op
                ));
            break;
        }
    }
}






 ?>
