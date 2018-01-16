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
            case 'revisar_horas_extra':
                echo $this->template->render('rrhh/horasextra/revisar_horas_extra', array(
                    'menu_op' => $op,
                    'opcion' => 'RRHH',
                    'horas_extras' => (new Model\Horasextra)->rev_hx(),
                ));
            break;
            case 'registra_horasextra':
                $user = (new Model\Users)->getOwnerUser();
                echo $this->template->render('rrhh/horasextra/ingreso_horas_extra', array(
                    'menu_op' => $op,
                    'db_users'=>(new Model\Horasextra)->getdatos('*','estado=1'),
                    'horas_extras' => (new Model\Horasextra)->gethxtmp($user['id_user']),
                    'ultimo_id' => (new Model\Horasextra)->get_lastid($user['id_user'])
                ));
            break;
            case 'modificar':
                if($this->isset_id and false != ($dato=(new Model\Horasextra)->gethxid($router->getId()))){
                    echo $this->template->render('rrhh/horasextra/modificar_solicitud_hora_extra', array(
                        'menu_op' => $op,
                        'horas_extras' => (new Model\Horasextra)->get_hx_users(),
                        'db_users'=> (new Model\Horasextra)->getdatos('*','estado=1'),
                        'modifica_hx' => $dato[0])
                    );
                }
            break;

            case 'mostrar_hora_extra':
                if($this->isset_id and false != ($dato=(new Model\Horasextra)->gethxid($router->getId()))){
                    echo $this->template->render('rrhh/horasextra/mostrar_hora_extra', array(
                        'opcion' => 'RRHH',
                        'horas_extras' => (new Model\Horasextra)->get_hx_users(),
                        'id' => $dato[0]
                    ));
                }
            break;
            case 'revisar_horas_extras_pendientes':
                echo $this->template->render('rrhh/horasextra/revisar_horas_extras_pendientes', array(
                    'opcion' => 'RRHH',
                    'horas_extras' => (new Model\Horasextra)->gethx('*',"estado='Pendiente'"),
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
//Listar Cargos y Areas------------------------------------------------------------------------------------------------------------
            case 'listar_cargos':
                echo $this->template->render('rrhh/cargos/listarcargo', array(
                    'menu_op' => $op,
                    'db_cargos'=>(new Model\Cargos)->getCargos()
                ));
            break;
            case 'listar_areas':
                echo $this->template->render('rrhh/areas/listararea', array(
                    'menu_op' => $op,
                    'db_areas'=>(new Model\Areas)->getAreas()
                ));
            break;
//-------------------------------------------------------------------------------------------------------------------------------
//Turnos ------------------------------------------------------------------------------------------------------------------------
            case 'cargar_turnos':
                echo $this->template->render('rrhh/turnos/carga_de_turnos', array(
                    'menu_op' => $op,
                    'db_archivos' => (new Model\Varios)->listar_archivos_cargados('Carga de Turnos')
                ));
            break;
            case 'revisar_turnos':
                echo $this->template->render('rrhh/turnos/revisar_turnos', array(
                    'menu_op' => $op,
                    'cargar_turnos'=>(new Model\Turnos)->cargar_turnos(date('Y-m-d'))
                ));
            break;
            case 'exportar_turnos_plataforma_excel':
                (new Model\Turnos)->exportar_excel_turno_plataforma();
            break;
            case 'revisar_turno_propio':
                $actual = strtotime(date('d-m-Y'));
                for ($i=0; $i<=4; $i++){
                    if ($i != 0 ) $actual = strtotime("-1 month", $actual);
                    $fecha[]=array('mesano_print' => date("m-Y", $actual),'mesano' => date("mY", $actual), 'ano' =>date("Y", $actual) );
                }

                $u = (new Model\Users)->getOwnerUser();
                $mesano = date('mY');
                $ano = date('Y');
                echo $this->template->render('rrhh/turnos/turno_propio', array(
                    'menu_op' => $op,
                    'fecha'=>date('Y-m-d'),
                    'carga_turno'=>$t->cargar_turno_propio(),
                    'super'=>$t->cargar_super(),
                    'fechas_db'=>$fecha
                ));
            break;
//-------------------------------------------------------------------------------------------------------------------------------
//Tecnicos-----------------------------------------------------------------------------------------------------------------------
            case 'listar_tecnicos':
                echo $this->template->render('rrhh/tecnicos/listar_tecnicos', array(
                    'menu_op' => $op,
                    'tecnicos_db' => (new Model\Mdltecnicos)->verTecnicos()
                ));
            break;
            case 'nuevo_tecnico':
                echo $this->template->render('rrhh/tecnicos/nuevo_tecnico', array(
                    'menu_op' => $op
                ));
            break;
            case 'importar_tecnico':
                echo $this->template->render('rrhh/tecnicos/importar_tecnico', array(
                    'menu_op' => $op,
                    'db_archivos' => (new Model\Varios)->listar_archivos_cargados('Carga de Tecnicos')
                ));
            break;
            case 'editar_tecnico':
                if($this->isset_id and false !== ($data = (new Model\Mdltecnicos)->getTecnicosById($router->getId()))) {
                    echo $this->template->render('rrhh/tecnicos/editar_tecnicos', array(
                        'menu_op' => $op,
                        'db_tecnico' => $data[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'rrhh/&error=true');
                }
            break;
            case 'estado_tecnico':
                (new Model\Mdltecnicos)->update_estado_tecnico($router->getId(true));
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
