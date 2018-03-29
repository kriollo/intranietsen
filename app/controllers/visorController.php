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
 * Controlador redes/
 *
 * @author Jorge Jara H. <jjara@wys.cl>
*/

class visorController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => false
        ));
        switch($this->method){
            case 'report_agendamiento':
                $bloque=(new Model\Mdlconfirmacion)->ObtenerBloqueActual();
                echo $this->template->render('visor/visor_agendamiento', array(
                   'fecha'=>date('Y-m-d'),
                   'fecha2'=>date('d-m-Y',strtotime('+1 day')),
                   'bloque'=>($bloque['bloque']),
                   'informe_hoy'=>(new Model\Mdlconfirmacion)->confirma_informe(date('Y-m-d')),
                   'cantcomunas'=>(new Model\Mdlconfirmacion)->datcomunas(date('Y-m-d'),$bloque['bloque']),
                   'comunapos'=>(new Model\Mdlconfirmacion)->datcomunas(date('Y-m-d',strtotime('+1 day')),$bloque['bloque']),
                   'informe_posterior'=>(new Model\Mdlconfirmacion)->confirma_informe(date('Y-m-d',strtotime('+1 day'))),
                ));
            break;
            case 'confirmacion_produccion_dia':
                echo $this->template->render('visor/confirmacion_produccion_dia', array(
                    'metas'=>(new Model\Mdlconfirmacion)->getMetas(),
                    'confirma_resumen_llamados_ejecutivos'=>(new Model\Mdlconfirmacion)->calc_llamados(date('Y-m-d'),'acum_hoy_conf')
                ));
            break;
            default:
                echo $this->template->render('visor/asistencia_tecnicos', array(
                    'db_asistencia_tecnico' => (new Model\Varios)->getAsistenciaTecnico(date('Y-m-d')),
                    'db_asistencia_tecnico_Resumen' => (new Model\Varios)->getAsistenciaTecnicoResumen(date('Y-m-d'))
                ));
            break;
        }

    }

}
