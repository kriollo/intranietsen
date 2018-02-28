/**
 * Ajax action to api rest
*/
function cargarblo(bloque){
    document.formorden.textbloque.value=bloque;
}
function cargarmot(motivo){
    document.formorden.textmotivo.value=motivo;
}
function cargaract(actividad){
    document.formorden.textactividad.value=actividad;
}
function cargarcom(comuna){
    document.formorden.textcomuna.value=comuna;
}
function cargarres(resultado,cumplimiento){
    document.formorden.textresultado.value=resultado;
}
function cargartipoorden(tipooden){
    document.formorden.texttipoorden.value=tipooden;
}
function cargarmodtipoorden(tipooden){
    document.formmodorden.textmodtipoorden.value=tipooden;
}

function cargarmodblo(modbloque){
    document.formmodorden.textmodbloque.value=modbloque;
}
function cargarmodmot(modmotivo){
    document.formmodorden.textmodmotivo.value=modmotivo;
}
function cargarmodact(modactividad){
    document.formmodorden.textmodactividad.value=modactividad;
}
function cargarmodcom(modcomuna){
    document.formmodorden.textmodcomuna.value=modcomuna;
}
function cargarmodres(modresultado){
    document.formmodorden.textmodresultado.value=modresultado;
}
function cargarretipoorden(tipooden) {
    document.formreorden.retipoorden.value = tipooden;
}

function cargarreblo(modbloque) {
    document.formreorden.rebloque.value = modbloque;
}
function cargarremot(modmotivo) {
    document.formreorden.remotivo.value = modmotivo;
}
function cargarreact(modactividad) {
    document.formreorden.reactividad.value = modactividad;
}
function cargarrecom(modcomuna) {
    document.formreorden.recomuna.value = modcomuna;
}
function cargarreres(modresultado) {
    document.formreorden.reresultado.value = modresultado;
}
// CONFIRMACION JS HECTORELFATHER---------------------------------------------------------------
function execute_accion_confirmacion(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registra_nuevo_bloque":
      title='Registro de Bloque';
      break;
    case "registra_nueva_comuna":
      title='Registro de Comuna';
      break;
    case "registra_nuevo_motivocall":
      title='Registro de Motivo llamado';
      break;
    case "registra_nuevo_resultado":
      title='Registro de Resultado';
      break;
    case "editar_bloque":
      title='Modificar Bloque';
      break;
    case "editar_comuna":
      title='Modificar Comuna';
      break;
    case "editar_motivocall":
      title='Modificar Motivo llamado';
      break;
    case "editar_resultado":
      title='Modificar Resultado';
      break;
    case "registra_nuevo_tipoorden":
        title='Registrar Tipo de Orden';
        break;
    case "editar_tipoorden":
        title='Modificar Tipo de Orden';
        break;
    case "registra_nuevo_cuadrante":
        title = 'Registrar Cuadrante';
        break;
    case "editar_cuadrante":
        title = 'Modificar Cuadrante';
        break;
    // CASOS DE HECTOR EL HECTORelfather
    case "ingresar_orden":
      title='Ingresar Orden';
      break;
    case "modorden":
      title="Modificar Orden";
      break;
    case "modificar_la_orden":
      title="Modificacion en Orden";
      break;
    case "reingresar_orden":
        title = 'reIngresar Orden';
        break;
      // -------------------------------------------------------
  }
  $.ajax({
    type : method,
    url : 'api/'+api_rest,
    data : $('#'+ formulario).serialize(),
    success : function(json) {
      msg_box_alert(json.success,title,json.message,accion,accion_redirect);
    },
    error : function(xhr, status) {
      msg_box_alert(99,title,xhr.responseText);
    }
  });
}

$('#register_bloque').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","registra_nuevo_bloque",'register_bloque_form','redirect','confirmacion/listar_bloque');
});
$('#update_bloque').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","editar_bloque",'editar_bloque_form','redirect','confirmacion/listar_bloque');
});

$('#register_comuna').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","registra_nueva_comuna",'register_comuna_form','redirect','confirmacion/listar_comunas');
});
$('#update_comuna').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","editar_comuna",'editar_comuna_form','redirect','confirmacion/listar_comunas');
});

$('#register_motivo').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","registra_nuevo_motivocall",'register_motivo_form','redirect','confirmacion/listar_motivocall');
});
$('#update_motivocall').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","editar_motivocall",'editar_motivocall_form','redirect','confirmacion/listar_motivocall');
});

$('#register_resultado').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","registra_nuevo_resultado",'register_resultado_form','redirect','confirmacion/listar_resultado');
});
$('#update_resultado').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","editar_resultado",'editar_resultado_form','redirect','confirmacion/listar_resultado');
});

$('#register_tipoorden').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","registra_nuevo_tipoorden",'register_tipoorden_form','redirect','confirmacion/listar_tipoorden');
});
$('#update_tipoorden').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","editar_tipoorden",'editar_tipoorden_form','redirect','confirmacion/listar_tipoorden');
});
$('#register_cuadrante').click(function (e) {
    e.defaultPrevented;
    execute_accion_confirmacion("POST", "registra_nuevo_cuadrante", 'register_cuadrante_form', 'redirect', 'confirmacion/listar_cuadrante');
});
$('#update_cuadrante').click(function (e) {
    e.defaultPrevented;
    execute_accion_confirmacion("POST", "editar_cuadrante", 'editar_cuadrante_form', 'redirect', 'confirmacion/listar_cuadrante');
});
// CONFIRMACION JS HECTORELFATHER---------------------------------------------------------------

function Eliminar_OT(id) {
    $.confirm({
        escapeKey: 'cancel',
        icon: 'fa fa-warning',
        title: 'Eliminar OT!',
        content: '<h3>¿Esta seguro que desea eliminar esta orden?</h3>',
        type: 'red',
        buttons: {
            formSubmit: {
                text: 'Eliminar',
                btnClass: 'btn-red',
                action: function () {
                    location.href = 'confirmacion/eliminar_OT/' + id;
                    $("#btnbuscar").trigger("click");

                }
            },
            cancel: {
                text: 'Cancelar',
                action: function () {

                }
            }
        },

    })
}

$('#btningresar').click(function(e){
  e.defaultPrevented;
  execute_accion_confirmacion("post","ingresar_orden",'formorden','reload');
});
$('#btnreingresar').click(function (e) {
    e.defaultPrevented;
    execute_accion_confirmacion("post", "reingresar_orden", 'formreorden', 'reload');
});
$('#modbtningresar').click(function(e){
  e.defaultPrevented;
  execute_accion_confirmacion("post","modificar_la_orden",'formmodorden','back');
});

function revisar_por_fecha(){
    var formData = new FormData();
    formData.append('fecha',document.getElementById('revhasta').value);
    $.ajax({
        type: "POST",
        url: "api/confirma_lista_por_fecha",
        contentType:false,
        processData:false,
        data : formData,
        success : function(data){
            var table= $('#dataordenes').DataTable();
            table.clear().draw();
            if(data.success==1){
                var ruta="views/app/temp/" + data.message;
                var request = $.ajax( ruta , {dataType:'json'} );
                request.done(function (resultado) {
                    table.rows.add(resultado.aaData).draw();
                });
            }
        },
        error : function(xhr, status) {
          msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
        }
    });
}
$('#btn_exporta_excel_ordenes').click(function(e) {
    var fecha=document.getElementById('revhasta').value;

    location.href = 'confirmacion/exporta_excel_ordenes?fecha='+fecha;
});

$('#textidorden').focusout(function (event) {
    if (!!$('#textidorden').val().trim() != false) {
        var formData = new FormData();
        var id = $('#textidorden').val();
        formData.append('orden', id);
        $.ajax({
            type: "POST",
            url: "api/confirmacion_buscar_norden",
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                var bloque = data.bloque;
                if (data.success == 1) {
                    $.confirm({
                        escapeKey: 'cancel',
                        icon: 'fa fa-warning',
                        title: 'Orden Tecnica!',
                        content: data.html,
                        type: 'blue',
                        buttons: {
                            formSubmit: {
                                text: 'ReIngresar',
                                btnClass: 'btn-blue',
                                action: function () {
                                    location.href = 'confirmacion/reingresar_confirmacion/' + id;
                                }
                            },
                            cancel: {
                                text: 'Cancelar',
                                action: function () {
                                    $('#textidorden').val('');
                                    $('#textidorden').focus();
                                }
                            }
                        },
                    });
                } else if (data.success == 2) {
                    alert(data.message);
                    location.reload();
                }
            },
            error: function (xhr, status) {
                msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
            }
        });
    }
});


function registrar_actividad() {
    var formData = new FormData();
    var speed_test=0, certificacion=0, cierre_seguro=0;
    if ($('#speed_test').is(':checked')) {
        speed_test = 1;
    }
    if ($('#certificacion').is(':checked')) {
        certificacion = 1;
    }
    if ($('#cierre_seguro').is(':checked')) {
        cierre_seguro = 1;
    }
    formData.append('actividad', document.getElementById('actividad').value);
    formData.append('speed_test', speed_test);
    formData.append('certificacion', certificacion);
    formData.append('cierre_seguro', cierre_seguro);
    $.ajax({
        type: "POST",
        url: "api/registra_nueva_actividad",
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            if (data.success == 1) {
                $.confirm({
                    escapeKey: 'formSubmit',
                    icon: 'glyphicon glyphicon-ok',
                    title: 'Actividad',
                    content: '<h4>Actividad Ingresada con exito</h4>',
                    type: 'green',
                    buttons: {
                        formSubmit: {
                            text: 'Aceptar',
                            btnClass: 'btn-green',
                            action: function () {
                                var referrer = document.referrer;
                                window.location.href = referrer;
                            }
                        },
                    },
                });
            } else {
                $.confirm({
                    escapeKey: 'formSubmit',
                    icon: 'glyphicon glyphicon-remove',
                    title: 'Actividad',
                    content: '<h4>No se pudo ingresar la actividad</h4>',
                    type: 'red',
                    buttons: {
                        formSubmit: {
                            text: 'Aceptar',
                            btnClass: 'btn-green',
                            action: function () {
                            }
                        },
                    },
                });
            }
        },
        error: function (xhr, status) {
            msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
        }
    });
}
function editar_actividad(id) {
    var formData = new FormData();
    var speed_test = 0, certificacion = 0, cierre_seguro = 0;
    if ($('#speed_test').is(':checked')) {
        speed_test = 1;
    }
    if ($('#certificacion').is(':checked')) {
        certificacion = 1;
    }
    if ($('#cierre_seguro').is(':checked')) {
        cierre_seguro = 1;
    }
    formData.append('actividad', document.getElementById('actividad').value);
    formData.append('speed_test', speed_test);
    formData.append('certificacion', certificacion);
    formData.append('cierre_seguro', cierre_seguro);
    formData.append('id_actividad', id);
    $.ajax({
        type: "POST",
        url: "api/editar_actividad",
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            if (data.success == 1) {
                $.confirm({
                    escapeKey: 'formSubmit',
                    icon: 'glyphicon glyphicon-ok',
                    title: 'Actividad',
                    content: '<h4>Actividad editada con exito</h4>',
                    type: 'green',
                    buttons: {
                        formSubmit: {
                            text: 'Aceptar',
                            btnClass: 'btn-green',
                            action: function () {
                                var referrer = document.referrer;
                                window.location.href = referrer;
                            }
                        },
                    },
                });
            } else {
                $.confirm({
                    escapeKey: 'formSubmit',
                    icon: 'glyphicon glyphicon-remove',
                    title: 'Actividad',
                    content: '<h4>No se pudo editar la actividad</h4>',
                    type: 'red',
                    buttons: {
                        formSubmit: {
                            text: 'Aceptar',
                            btnClass: 'btn-green',
                            action: function () {
                            }
                        },
                    },
                });
            }
        },
        error: function (xhr, status) {
            msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
        }
    });
}

function historico(norden) {
    var formData = new FormData();
    formData.append('norden', norden);
    $.ajax({
        type: "POST",
        url: "api/consultar_historico",
        contentType: false,
        processData: false,
        data: formData,
        success: function (data) {
            if (data.success == 1) {
                $.confirm({
                    escapeKey: 'formSubmit',
                    icon: 'glyphicon glyphicon-list-alt',
                    columnClass: 'col-md-12',
                    title: 'Historial de OT',
                    content: data.html,
                    type: 'blue',
                    buttons: {
                        formSubmit: {
                            text: 'Aceptar',
                            btnClass: 'btn-default',
                            action: function () {

                            }
                        },
                    },
                });
            } else {
                $.confirm({
                    escapeKey: 'formSubmit',
                    icon: 'glyphicon glyphicon-remove',
                    title: 'Actividad',
                    content: '<h4>No se pudo editar la actividad</h4>',
                    type: 'red',
                    buttons: {
                        formSubmit: {
                            text: 'Aceptar',
                            btnClass: 'btn-green',
                            action: function () {}
                        },
                    },
                });
            }
        },
        error: function (xhr, status) {
            msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
        }
    });
}


//informes----------------------------------------------------------------------------------------------------------------------------
function revisarporfecha(){
  $.ajax({
    type : 'POST',
    url : 'api/Mdlconfirmacion_revisar_fecha',
    data : $('#forminforme').serialize(),
    success : function(json) {
        if(json.success==1){
            $('#tabla').html(json.html);
            $('#tablaposterior').html(json.html2);
        }
    },
    error : function(xhr, status) {
      msg_box_alert(99,'title',xhr.responseText);
    }
  });
  $.ajax({
    type : 'POST',
    url : 'api/Mdlconfirmacion_obtener_bloque',    
    success : function(json) {
        verbloque(json.bloque);
    },
    error : function(xhr, status) {
      msg_box_alert(99,'title',xhr.responseText);
    }
  });

}

function verbloque(bloque){
  var formData = new FormData();
  formData.append('bloque',bloque);
  formData.append('fecha',document.getElementById('calendariohoy').value)
  $.ajax({
    type : 'POST',
    url : 'api/Mdlconfirmacion_revisar_bloque',
    contentType: false,
    processData: false,
    data: formData,
    success : function(data) {
        if(data.success==1){
            $('#tablacomuna').html(data.html);
            $('#comunapos').html(data.html2);
        }
    },
    error : function(xhr, status) {
      msg_box_alert(99,'title',xhr.responseText);
    }
  });
}


//----------------------------------------------------------------------------------------------------------------------------
