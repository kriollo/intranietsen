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

class rrhhController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 2, 'access' => true]
        ));
        global $config;
        $op = '2';
        $r = new Model\Horasextra($router);

        switch($this->method){
          case 'mantenedores_crud_masters':
              echo $this->template->render('rrhh/mantenedores_crud_masters', array(
                'menu_op' => $op
              ));
              break;
// Personal------------------------------------------------------------------------------------------------------------------------
          case 'listar_trabajadores':
              echo $this->template->render('rrhh/listar_trabajadores', array(
                'menu_op' => $op,
                'personal_db' => (new Model\Mdlpersonal)->getPersonalAll()
              ));
              break;
          case 'nuevo_trabajador':
              echo $this->template->render('rrhh/nuevo_trabajador', array(
                'menu_op' => $op,
                'cargos_db' => (new Model\Mdlpersonal)->getCargos(),
                'areas_db' => (new Model\Mdlpersonal)->getAreas()
              ));
              break;
          case 'editar_trabajadores':
              if($this->isset_id and false !== ($data = (new Model\Mdlpersonal)->getTrabajadorById($router->getId(true)))) {
                echo $this->template->render('rrhh/editar_trabajadores', array(
                  'menu_op' => $op,
                  'db_trabajador' => $data[0],
                  'cargos_db' => (new Model\Mdlpersonal)->getCargos(),
                  'areas_db' => (new Model\Mdlpersonal)->getAreas()
                ));
              } else {
                $this->functions->redir($config['site']['url'] . 'rrhh/&error=true');
              }
              break;
          case 'estado_trabajador':
              (new Model\Mdlpersonal)->update_estado_trabajador($router->getId(true));
              break;
// Personal------------------------------------------------------------------------------------------------------------------------
// Horas Extras---------------------------------------------------------------------------------------------------------------------
          case 'horasextra':
            $user = (new Model\Users)->getOwnerUser();
            echo $this->template->render('rrhh/horasextra/ingreso_horas_extra', array(
              'menu_op' => $op,
              'fecha' => date('Y-m-d'),
              'tiempo' => date('H:m'),
              'db_users'=>($r)->getdatos('*','estado=1'),
              'horas_extras' => ($r)->gethxtmp($user['id_user'])
             ));
              break;
          case 'pedir_hora_extra':
            echo $this->template->render('rrhh/horasextra/pedir_hora_extra', array(
              'menu_op' => $op,
              'fecha' => date('Y-m-d'),
              'tiempo' => date('H:m')
             ));
             break;
          case 'mostrar_hora_extra':
            if($this->isset_id and false != ($dato=$r->gethxid($router->getId(true)))){
            echo $this->template->render('rrhh/horasextra/mostrar_hora_extra', array(
              'menu_op' => $op,
              'horas_extras' => ($r)->gethx(),
              'id' => $dato[0]
                ));
              }
              break;
          case 'revisar_horas_extras_pendientes':
            echo $this->template->render('rrhh/horasextra/revisar_horas_extras_pendientes', array(
             'menu_op' => $op,
             'horas_extras' => ($r)->gethx('*',"estatus='Pendiente'"),

            ));
              break;
// Horas Extras---------------------------------------------------------------------------------------------------------------------
// Asigna Ejecutivo-----------------------------------------------------------------------------------------------------------------           
          case 'asignar_ejecutivo':
            echo $this->template->render('rrhh/asignar_ejecutivo/asignar_ejecutivo', array(
             ));
              break;
// Asigna Ejecutivo-----------------------------------------------------------------------------------------------------------------           
// ausencias------------------------------------------------------------------------------------------------------------------------
          case 'revisarausencias':
              echo $this->template->render('rrhh/ausencias/revisarausencias', array(
              'menu_op' => $op,
              'db_inasistencias' => (new Model\Ausencias)->mostrar_datos(),
              'db_nuevo'=>(new Model\Ausencias)->getarea(),
              ));
              break;
          case 'ausencias':
              echo $this->template->render('rrhh/ausencias/ausencias', array(
              'menu_op' => $op,
              'db_users'=>(new Model\Ausencias)->getdatospersonal('*','estado=1'),
              'db_area'=>(new Model\Ausencias)->getarea()
              ));
              break;
          case 'modificarausencia':
                if($this->isset_id and false !== ($dato=(new Model\Ausencias)->get_ausencia_byId($router->getId(true)))){
                   echo $this->template->render('rrhh/ausencias/modificarausencia', array(
                   'menu_op' => $op,
                   'db_modifica'=> $dato[0]
                   ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'rrhh/&error=true');
                }
              break;
          case "exporta_excel_ausencias":
              (new Model\Ausencias)->exporta_excel_ausencias();
              break;
//-------------------------------------------------------------------------------------------------------------------------------   
          default:
            echo $this->template->render('rrhh/rrhh', array(
              'menu_op' => $op
            ));
            break;
        }

    }

}
