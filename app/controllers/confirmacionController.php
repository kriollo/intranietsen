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

class confirmacionController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router,array(
            'users_logged' => true,
            'access_menu' => ['id_menu' => 1, 'access' => true]
        ));
        global $config;
        $op = '1';
        switch($this->method){
            case 'mantenedores_crud_masters':
                echo $this->template->render('confirmacion/mantenedores_crud_masters', array(
                    'menu_op' => $op
                ));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_actividades':
                echo $this->template->render('confirmacion/actividad/listar_actividad', array(
                    'menu_op' => $op,
                    'actividades_db' => (new Model\Mdlconfirmacion)->verActividades()
                ));
            break;
            case 'nueva_actividad':
                echo $this->template->render('confirmacion/actividad/nueva_actividad', array(
                    'menu_op' => $op
            ));
            break;
            case 'editar_actividad':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getActividadesById($router->getId()))) {
                    echo $this->template->render('confirmacion/actividad/editar_actividad', array(
                        'menu_op' => $op,
                        'db_actividad' => $data[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_actividad':
                (new Model\Mdlconfirmacion)->update_estado_actividad($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_bloque':
                echo $this->template->render('confirmacion/bloque/listar_bloque', array(
                    'menu_op' => $op,
                    'bloques_db' => (new Model\Mdlconfirmacion)->verBloques()
                ));
            break;
            case 'nuevo_bloque':
                echo $this->template->render('confirmacion/bloque/nuevo_bloque', array(
                    'menu_op' => $op
                ));
            break;
            case 'editar_bloque':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getBloquesById($router->getId()))) {
                    echo $this->template->render('confirmacion/bloque/editar_bloque', array(
                        'menu_op' => $op,
                        'db_bloque' => $data[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_bloque':
                (new Model\Mdlconfirmacion)->update_estado_bloque($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_comunas':
                echo $this->template->render('confirmacion/comuna/listar_comuna', array(
                    'menu_op' => $op,
                    'comunas_db' => (new Model\Mdlconfirmacion)->verComunas()
                ));
            break;
            case 'nueva_comuna':
                echo $this->template->render('confirmacion/comuna/nueva_comuna', array(
                    'menu_op' => $op
                ));
            break;
            case 'editar_comuna':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getComunasById($router->getId()))) {
                echo $this->template->render('confirmacion/comuna/editar_comuna', array(
                'menu_op' => $op,
                'db_comuna' => $data[0]
                ));
                } else {
                $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_comuna':
                (new Model\Mdlconfirmacion)->update_estado_comuna($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_motivocall':
                echo $this->template->render('confirmacion/motivocall/listar_motivocall', array(
                    'menu_op' => $op,
                    'motivocall_db' => (new Model\Mdlconfirmacion)->verMotivocall()
                ));
            break;
            case 'nuevo_motivocall':
                echo $this->template->render('confirmacion/motivocall/nuevo_motivocall', array(
                    'menu_op' => $op
                ));
            break;
            case 'editar_motivocall':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getMotivocallById($router->getId()))) {
                    echo $this->template->render('confirmacion/motivocall/editar_motivocall', array(
                    'menu_op' => $op,
                    'db_motivocall' => $data[0]
                ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_motivocall':
                (new Model\Mdlconfirmacion)->update_estado_motivocall($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_resultado':
                echo $this->template->render('confirmacion/resultado/listar_resultado', array(
                    'menu_op' => $op,
                    'resultado_db' => (new Model\Mdlconfirmacion)->verResultado()
                ));
            break;
            case 'nuevo_resultado':
                echo $this->template->render('confirmacion/resultado/nuevo_resultado', array(
                    'menu_op' => $op
                ));
            break;
            case 'editar_resultado':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getResultadoById($router->getId()))) {
                    echo $this->template->render('confirmacion/resultado/editar_resultado', array(
                        'menu_op' => $op,
                        'resultado_db' => $data[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_resultado':
                (new Model\Mdlconfirmacion)->update_estado_resultado($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_tipoorden':
                echo $this->template->render('confirmacion/tipoorden/listar_tipoorden', array(
                    'menu_op' => $op,
                    'resultado_db' => (new Model\Mdlconfirmacion)->verTipoOrden()
                ));
            break;
            case 'nuevo_tipoorden':
                echo $this->template->render('confirmacion/tipoorden/nuevo_tipoorden', array(
                    'menu_op' => $op
                ));
            break;
            case 'editar_tipoorden':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->gettipoordenById($router->getId()))) {
                    echo $this->template->render('confirmacion/tipoorden/editar_tipoorden', array(
                        'menu_op' => $op,
                        'resultado_db' => $data[0]
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_tipoorden':
                (new Model\Mdlconfirmacion)->update_estado_tipoorden($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'listar_cuadrante':
                echo $this->template->render('confirmacion/cuadrante/listar_cuadrante', array(
                    'menu_op' => $op,
                    'cuadrante_db' => (new Model\Mdlconfirmacion)->verCuadrante()
                ));
            break;
            case 'nuevo_cuadrante':
                echo $this->template->render('confirmacion/cuadrante/nuevo_cuadrante', array(
                    'menu_op' => $op,
                    'comuna' => (new Model\Mdlconfirmacion)->verComunas()
                ));
            break;
            case 'editar_cuadrante':
                if($this->isset_id and false !== ($data = (new Model\Mdlconfirmacion)->getCuadranteById($router->getId()))) {
                    echo $this->template->render('confirmacion/cuadrante/editar_cuadrante', array(
                        'menu_op' => $op,
                        'resultado_db' => $data[0],
                        'comuna' => (new Model\Mdlconfirmacion)->verComunas()
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case 'estado_cuadrante':
                (new Model\Mdlconfirmacion)->update_estado_cuadrante($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case "programacion":
                echo $this->template->render('confirmacion/programacion/programacion', array(
                    'menu_op' => $op,
                    'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                    'db_motivo'=>(new Model\Mdlconfirmacion)->carga_motivo(),
                    'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas(),
                    'db_actividad'=>(new Model\Mdlconfirmacion)->carga_actividad(),
                    'db_resultado'=>(new Model\Mdlconfirmacion)->carga_resultado(),
                    'db_tipoorden'=>(new Model\Mdlconfirmacion)->carga_tipoorden()
                ));
            break;
            case "reingresar_confirmacion":
                if($this->isset_id and false !== ($orden=(new Model\Mdlconfirmacion)->get_orden_bynorden($router->getId(true)))){
                    echo $this->template->render('confirmacion/programacion/reingresar_confirmacion', array(
                        'menu_op' => $op,
                        'db_modorden'=>$orden[0],
                        'db_motivo'=>(new Model\Mdlconfirmacion)->carga_motivo(),
                        'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                        'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas(),
                        'db_actividad'=>(new Model\Mdlconfirmacion)->carga_actividad(),
                        'db_resultado'=>(new Model\Mdlconfirmacion)->carga_resultado(),
                        'db_tipoorden'=>(new Model\Mdlconfirmacion)->carga_tipoorden()
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case "listar_ordenes":
                $carusu=(new Model\Users)->getOwnerUser();
                $usuario=$carusu['id_user'];
                echo $this->template->render('confirmacion/programacion/listar_ordenes', array(
                    'menu_op' => $op,
                    'db_ordenes'=>(new Model\Mdlconfirmacion)->listar_ordenes(date('Y-m-d'),$usuario)
                ));
            break;
            case "listar_allorden":
                echo $this->template->render('confirmacion/programacion/listar_allorden', array(
                    'menu_op' => $op,
                    'db_ordenes'=>(new Model\Mdlconfirmacion)->listar_ordenes(date('Y-m-d'),'')
                ));
            break;
            case "editar_confirmacion":
                if($this->isset_id and false !== ($orden=(new Model\Mdlconfirmacion)->get_orden_byId($router->getId(true)))){
                    echo $this->template->render('confirmacion/programacion/editar_confirmacion', array(
                        'menu_op' => $op,
                        'db_modorden'=>$orden[0],
                        'db_motivo'=>(new Model\Mdlconfirmacion)->carga_motivo(),
                        'db_bloque'=>(new Model\Mdlconfirmacion)->carga_bloque(),
                        'db_comuna'=>(new Model\Mdlconfirmacion)->carga_comunas(),
                        'db_actividad'=>(new Model\Mdlconfirmacion)->carga_actividad(),
                        'db_resultado'=>(new Model\Mdlconfirmacion)->carga_resultado(),
                        'db_tipoorden'=>(new Model\Mdlconfirmacion)->carga_tipoorden()
                    ));
                } else {
                    $this->functions->redir($config['site']['url'] . 'confirmacion/&error=true');
                }
            break;
            case "exporta_excel_ordenes":
                (new Model\Mdlconfirmacion)->exporta_excel_ordenes();
            break;
            case "listar_ejecutivos":
                echo $this->template->render('confirmacion/programacion/listar_ejecutivos', array(
                    'menu_op'=>$op,
                    'db_ejecutivos'=>(new Model\Mdlconfirmacion)->listar_ejecutivos()
                ));
            break;
            case 'eliminar_OT':
                (new Model\Mdlconfirmacion)->eliminarorden($router->getId(true));
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            case 'report_agendamiento':
                
            break;
            // ------------------------------------------------------------------------------------------------------------------------------------------
            default:
                echo $this->template->render('confirmacion/confirmacion', array(
                    'menu_op' => $op,
                    'confirma_q_ordenes_gestionadas' => (new Model\Mdlconfirmacion)->confirma_q_ordenes_gestionadas(date('Y-m-d'),date('Y-m-d')),
                    'confirma_q_orden_x_estado_confirmacion' => (new Model\Mdlconfirmacion)->confirma_q_orden_x_estado_confirmacion(date('Y-m-d'),date('Y-m-d')),
                    'confirma_top_5_best_ejecutivo' => (new Model\Mdlconfirmacion)->confirma_top_5_best_ejecutivo(date('Y-m-d'),date('Y-m-d')),
                    'confirma_top_5_bad_ejecutivo' => (new Model\Mdlconfirmacion)->confirma_top_5_bad_ejecutivo(date('Y-m-d'),date('Y-m-d')),
                    'confirma_resumen_x_comuna' => (new Model\Mdlconfirmacion)->confirma_resumen_x_comuna(date('Y-m-d'),date('Y-m-d')),
                    'confirma_resumen_x_bloque' => (new Model\Mdlconfirmacion)->confirma_resumen_x_bloque(date('Y-m-d'),date('Y-m-d'))
                ));
            break;
        }

    }

}
