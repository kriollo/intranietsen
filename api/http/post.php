<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

use app\models as Model;

/**
    * Inicio de sesión
    *
    * @return json
*/
$app->post('/login', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->login());
});

/**
    * Modifica password usuario
    *
    * @return json
*/
$app->post('/resetpass', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->resetpass());
});

/**
    * Inicio de sesión
    *
    * @return json
*/
$app->post('/logout', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->logout());
});

/**
    * Registro de un usuario
    *
    * @return json
*/
$app->post('/registra_nuevo_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->registra_nuevo_usuario());
});
/**
    * Registro de un usuario
    *
    * @return json
*/
$app->post('/update_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_usuario());
});
/**
    * Recuperar contraseña perdida
    *
    * @return json
*/
$app->post('/lostpass', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->lostpass());
});

/**
    * Recuperar contraseña perdida
    *
    * @return json
*/
$app->post('/registra_nuevo_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->registra_nuevo_perfil());
});
/**
    * Elimina perfil seleccionado
    *
    * @return json
*/
$app->post('/delete_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->delete_perfil());
});
/**
    * Elimina perfil seleccionado
    *
    * @return json
*/
$app->post('/reset_pass_user', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->resetpass());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/update_peril_usuario', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_peril_usuario());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/mostar_datos_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->mostar_datos_perfil());
});
/**
    * Actualiza perfil de usuario modificado directamente
    *
    * @return json
*/
$app->post('/update_perfil', function() use($app) {
    $u = new Model\Users;

    return $app->json($u->update_perfil());
});
/**
    * Actualiza perfil datos de empresa
    *
    * @return json
*/
$app->post('/update_empresa', function() use($app) {
    $e = new Model\Empresa;

    return $app->json($e->update_empresa());
});

//////// CONTROLER RRHH ////////////////
//Personal---------------------------------------------------------------------
$app->post('/registra_nuevo_trabajador', function() use($app) {
    $e = new Model\Mdlpersonal;

    return $app->json($e->registra_nuevo_trabajador());
});
$app->post('/update_trabajador', function() use($app) {
    $e = new Model\Mdlpersonal;

    return $app->json($e->update_trabajador());
});
//Personal---------------------------------------------------------------------


/// HORAS EXTRAS
$app->post('/buscar_coincidencia', function() use($app) {
    $e = new Model\Horasextra;

    return $app->json($e->buscar_coincidencia());
});
$app->post('/hora_extra', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->hora_extra());
});
$app->post('/tmp_hora_extra', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->tmp_hora_extra());
});
$app->post('/revisar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->revisar());
});
$app->post('/modificar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->modificar());
});
$app->post('/agregar_usuario_he', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->agregar_usuario());
});
$app->post('/aprobar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->aprobar());
});
$app->post('/rechazar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->rechazar());
});
$app->post('/eliminar', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar());
});
$app->post('/eliminar_solicitud_mod', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar_solicitud_mod());
});
$app->post('/eliminar_peticiones', function() use($app) {
    $u = new Model\Horasextra;

    return $app->json($u->eliminar_peticiones());
});

//ausencias---------------------------------------------------------------------
$app->post('/registrar_ausencia', function() use($app) {
    $u = new Model\Ausencias;
    return $app->json($u->registrar_ausencia());
});
$app->post('/modificar_ausencia', function() use($app) {
    $u = new Model\Ausencias;

    return $app->json($u->modificar_ausencia());
});
$app->post('/verdatos', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->ver_observacion_ausencias());

});
$app->post('/validacion_eliminar', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->validacion_eliminar());

});
$app->post('/buscar_rut', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->buscar_rut());

});
$app->post('/revisar_por_fecha', function() use($app) {

    $u = new Model\Ausencias;

    return $app->json($u->revisar_por_fecha());

});
//ausencias---------------------------------------------------------------------
//Cargos------------------------------------------------------------------------
$app->post('/guardar_cargo', function() use($app) {
    $u = new Model\Cargos;
    return $app->json($u->guardar_cargo());
});
$app->post('/modificar_cargo', function() use($app) {
    $u = new Model\Cargos;
    return $app->json($u->modificar_cargo());
});
//Cargos------------------------------------------------------------------------
//Areas-------------------------------------------------------------------------
$app->post('/guardar_area', function() use($app) {
    $u = new Model\Areas;
    return $app->json($u->guardar_area());
});
$app->post('/modificar_area', function() use($app) {
    $u = new Model\Areas;
    return $app->json($u->modificar_area());
});
//Areas-------------------------------------------------------------------------
//Turnos------------------------------------------------------------------------
$app->post('/cargar_excel_turnos', function() use($app) {

    $u = new Model\Turnos;

    return $app->json($u->cargar_excel());
});
$app->post('/revisar_turno_por_fecha', function() use($app) {

    $u = new Model\Turnos;

    return $app->json($u->revisar_turno_por_fecha());
});
$app->post('/mensaje', function() use($app) {

    $u = new Model\Turnos;

    return $app->json($u->mensaje());
});
$app->post('/verturnomes', function() use($app) {

    $u = new Model\Turnos;

    return $app->json($u->verturnomes());
});
//Turnos------------------------------------------------------------------------
//Tecnicos----------------------------------------------------------------------
$app->post('/registra_nuevo_tecnico', function() use($app) {
    $e = new Model\Mdltecnicos;

    return $app->json($e->registra_nuevo_tecnico());
});
$app->post('/editar_tecnico', function() use($app) {
    $e = new Model\Mdltecnicos;

    return $app->json($e->editar_tecnico());
});
$app->post('/cargar_excel_tecnicos', function() use($app) {

    $u = new Model\Mdltecnicos;

    return $app->json($u->cargar_excel());
});
//Tecnicos----------------------------------------------------------------------
//ASignacion de Ejecutivo a Supervisor------------------------------------------
$app->post('/Asignaejecutivo_select_perfil', function() use($app) {
    $au = new Model\Asignaejecutivo;
    return $app->json($au->select_perfil());
});
$app->post('/Asignaejecutivo_traer_usuarios', function() use($app) {
    $au = new Model\Asignaejecutivo;
    return $app->json($au->traer_usuarios());
});
$app->post('/Asignaejecutivo_quitar_supervision', function() use($app) {
    $au = new Model\Asignaejecutivo;
    return $app->json($au->quitar_supervision());
});
$app->post('/Asignaejecutivo_asignar_supervision', function() use($app) {
    $au = new Model\Asignaejecutivo;
    return $app->json($au->asignar_supervision());
});
//ASignacion de Ejecutivo a Supervisor------------------------------------------
//Maestros Confirmacion---------------------------------------------------------
$app->post('/registra_nueva_actividad', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nueva_actividad());
});
$app->post('/editar_actividad', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_actividad());
});
$app->post('/registra_nuevo_bloque', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nuevo_bloque());
});
$app->post('/editar_bloque', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_bloque());
});
$app->post('/registra_nueva_comuna', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nueva_comuna());
});
$app->post('/editar_comuna', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_comuna());
});
$app->post('/registra_nuevo_motivocall', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nuevo_motivocall());
});
$app->post('/editar_motivocall', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_motivocall());
});
$app->post('/registra_nuevo_resultado', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nuevo_resultado());
});
$app->post('/editar_resultado', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_resultado());
});
$app->post('/registra_nuevo_tipoorden', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nuevo_tipoorden());
});
$app->post('/editar_tipoorden', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_tipoorden());
});
//Maestros Confirmacion---------------------------------------------------------
//Orden Confirmacion------------------------------------------------------------
$app->post('/ingresar_orden', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->ingresar_orden());
});
$app->post('/modificar_la_orden', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->modificar_la_orden());
});
$app->post('/eliminarorden', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->eliminarorden());
});
$app->post('/confirma_lista_por_fecha', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->confirma_lista_por_fecha());
});
// reagendamiento Orden
$app->post('/confirmacion_buscar_norden', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->confirmacion_buscar_norden());
});
$app->post('/confirmacion_reagendar', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->confirmacion_reagendar());
});
//Orden Confirmacion------------------------------------------------------------
//Coordinacion Asigna Ejecutivo Comuna------------------------------------------
$app->post('/Mdlcoordinacion_select_ejecutivo', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->select_ejecutivo());
});
$app->post('/Mdlcoordinacion_traer_ejecutivos', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->traer_ejecutivos());
});
$app->post('/Mdlcoordinacion_traer_comuna', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->traer_comuna());
});
$app->post('/Mdlcoordinacion_asignar_comuna', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->asignar_comuna());
});
$app->post('/Mdlcoordinacion_quitar_comuna', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->quitar_comuna());
});
//Coordinacion Asigna Ejecutivo Comuna------------------------------------------
//Coordinacion Asigna Tecnico a Ejecutivo---------------------------------------
$app->post('/Mdlcoordinacion_traer_tecnicos', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->traer_tecnicos());
});
$app->post('/Mdlcoordinacion_asignar_tecnico', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->asignar_tecnico());
});
$app->post('/Mdlcoordinacion_quitar_tecnico', function() use($app) {
    $e = new Model\Mdlcoordinacion;
    return $app->json($e->quitar_tecnico());
});
//Coordinacion Asigna Tecnico a Ejecutivo---------------------------------------
//Coordinacion Distribuir Ordenes-----------------------------------------------
$app->post('/Mdlcoordinacion_seleccionar_bloque', function() use($app) {
    $u = new Model\Mdlcoordinacion;
    return $app->json($u->seleccionar_bloque());
});
$app->post('/Mdlcoordinacion_marcar_ejecutivo', function() use($app) {
    $u = new Model\Mdlcoordinacion;
    return $app->json($u->marcar_ejecutivo());
});
$app->post('/Mdlcoordinacion_distribuir_ordenes', function() use($app) {
    $u = new Model\Mdlcoordinacion;
    return $app->json($u->distribuir_ordenes());
});
$app->post('/Mdlcoordinacion_quitar_ordenes_comuna_ejecutivo', function() use($app) {
    $u = new Model\Mdlcoordinacion;
    return $app->json($u->quitar_ordenes_ejecutivo_comuna());
});
//Coordinacion Distribuir Ordenes-----------------------------------------------
