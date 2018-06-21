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
$app->post('/registra_nuevo_cuadrante', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->registra_nuevo_cuadrante());
});
$app->post('/editar_cuadrante', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->editar_cuadrante());
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
$app->post('/reingresar_orden', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->reingresar_orden());
});
$app->post('/consultar_historico', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->consultar_historico());
});
//REPORTERIA
$app->post('/Mdlconfirmacion_revisar_fecha', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->revisar_fecha());
});
$app->post('/Mdlconfirmacion_revisar_bloque', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->revisar_bloque());
});
$app->post('/Mdlconfirmacion_obtener_bloque', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->ObtenerBloqueActual());
});
$app->post('/Mdlconfirmacion_refrescardatos', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->refrescar_datos_produccion_ejecutivo_confirmacion());
});
$app->post('/Mdlconfirmacion_filtrar_fecha', function() use($app) {
    $e = new Model\Mdlconfirmacion;
    return $app->json($e->filtrar_fecha_llamados());
});
$app->post('/confirma_lista_por_fecha_gestiones', function() use($app) {
    $u = new Model\Mdlconfirmacion;
    return $app->json($u->confirma_lista_por_fecha_gestiones());
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
$app->post('/Mdlcoordinacion_cargar_cuadrante', function() use($app) {
    $u = new Model\Mdlcoordinacion;
    return $app->json($u->cargar_cuadrante());
  });
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
//DESPACHO SEGUIMIENTO----------------------------------------------------------
$app->post('/Mdldespacho_asignar_tecnico', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->asignar_tecnico());
});
$app->post('/Mdldespacho_cambiar_estado', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->cambiar_estado());
});
$app->post('/Mdldespacho_guardar_escalamiento', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->guardar_escalamiento());
});
$app->post('/Mdldespacho_escalar', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->escalar());
});
$app->post('/Mdldespacho_recargar_tabla_resumen_tecnico', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->recargar_tabla_resumen_tecnico());
});
$app->post('/Mdldespacho_recargar_tabla_resumen_ordenes', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->recargar_tabla_resumen_ordenes());
});
$app->post('/Mdldespacho_carga_ordenes_comuna_seguimiento', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->cargar_tabla_seguimiento());
});
$app->post('/Mdldespacho_actualizar_tabla_ordenes', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->actualizar_tabla_ordenes());
});
$app->post('/Mdldespacho_actualizar_tabla_ordenes_super', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->actualizar_tabla_ordenes_super());
});
$app->post('/Mdldespacho_actualizar_tabla_ordenes_sin_asignar', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->actualizar_tabla_ordenes_sin_asignar());
});
$app->post('/Mdldespacho_guardar_comuna_tecnico', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->guardar_comuna_tecnico());
});
$app->post('/Mdldespacho_guardar_asistencia_tecnico', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->guardar_asistenca_tecnico());
});
//DESPACHO SEGUIMIENTO----------------------------------------------------------
//DESPACHO MANTENEDORES---------------------------------------------------------
$app->post('/Mdldespacho_registra_nuevo_estado', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->registra_nuevo_estado());
});
$app->post('/Mdldespacho_modificar_estado', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->modificar_estado());
});
//------------------------------------------------------------------------------
//DESPACHO VISOR SUPER----------------------------------------------------------
$app->post('/Mdldespacho_traer_eje', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->db_ejecutivos());
});
$app->post('/Mdldespacho_cambiar_eje', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->cambiar_ejecutivos());
});
$app->post('/Mdldespacho_cambiar_prioridad', function() use($app) {
    $u = new Model\Mdldespacho;
    return $app->json($u->cambiar_prioridad());
});
//------------------------------------------------------------------------------
//DESPACHO CIERRE--------------------------------------------------------------
$app->post('/cargar_excel_cierreseguro', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cargar_excel());
});
$app->post('/Mdlcierre_cierre_asegurado', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierre_asegurado());
});
$app->post('/Mdlcierre_speed_test', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->speed_test());
});
$app->post('/Mdlcierre_certificacion', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->certificacion());
});
$app->post('/cierreseguro_des_marcar_ejecutivo', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_des_marcar_ejecutivo());
});
$app->post('/cierreseguro_Distribuir_Ordenes', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_Distribuir_Ordenes());
});
$app->post('/cierreseguro_quitar_Ordenes_ejecutivos', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_quitar_Ordenes_ejecutivos());
});
$app->post('/cierreseguro_getDatosOrdenesTMP', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_getDatosOrdenesTMP());
});
$app->post('/cierreseguro_guardar_cierre', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->guardar_cierre());
  });
$app->post('/cierreseguro_modificar_prioridad', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->modificar_prioridad());
});
$app->post('/cierreseguro_select_modificar_orden_cerrada', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->select_modificar_orden_cerrada());
});
$app->post('/cierreseguro_cierre_desaprobado', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierre_desaprobado());
});
$app->post('/cierreseguro_select_filtro', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->select_filtro());
});
$app->post('/cierreseguro_filtrar_ordenes_supervisor', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_filtrar_ordenes_supervisor());
});
$app->post('/cierreseguro_formcierre', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->formcierre());
});
$app->post('/cierreseguro_ver_observacion', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->verobservacion());
});
$app->post('/cierreseguro_update_datos_orden', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_update_datos_orden());
});
$app->post('/cierreseguro_sg', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_sg());
});
$app->post('/cierreseguro_cerrar_ordenes_sin_asignar', function() use($app) {
    $u = new Model\Mdlcierre;
    return $app->json($u->cierreseguro_cerrar_ordenes_sin_asignar());
});
//------------------------------------------------------------------------------
//DESPACHO SIN MORADORES--------------------------------------------------------
$app->post('/nueva_ot_sinmoradores', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->nueva_ot_sinmoradores());
});
$app->post('/modificar_ot_sinmoradores', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->update_ot_sinmoradores());
});
$app->post('/sinmoradores_buscar_norden', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->buscar_ot_sinmoradores());
});
$app->post('/sinmoradores_des_marcar_ejecutivo', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->sinmoradores_des_marcar_ejecutivo());
});
$app->post('/sinmoradores_des_marcar_ejecutivo', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->sinmoradores_des_marcar_ejecutivo());
});
$app->post('/sinmoradores_cerrar_ordenes_sin_asignar', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->sinmoradores_cerrar_ordenes_sin_asignar());
});
$app->post('/sinmoradores_Distribuir_Ordenes', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->distribuir_ordenes());
});
$app->post('/sinmoradores_quitar_Ordenes_ejecutivos', function() use($app) {
    $u = new Model\MdlsinMoradores;
    return $app->json($u->sinmoradores_quitar_Ordenes_ejecutivos());
});
//------------------------------------------------------------------------------
$app->post('/Mdlredes_tecnico', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->cargar_tecnicoredes());
});
$app->post('/Mdlredes_guardardatos', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->guardar_tecnicos());
});
$app->post('/Mdlredes_eliminarfen', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->eliminarfen());
});
$app->post('/Mdlredes_modificardatos', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->modificar_datos());
});
$app->post('/Mdlredes_filtrar_fecha', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->filtrar_fecha());
});
$app->post('/Mdlredes_select_filtro_fen', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->select_filtro_fen());
});
$app->post('/Mdlredes_filtrar_fen', function() use($app) {
    $u = new Model\Mdlredes;
    return $app->json($u->filtrar_fen());
});
