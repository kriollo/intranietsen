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
    document.formorden.textcumplimiento.value=cumplimiento;
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
// CONFIRMACION JS HECTORELFATHER---------------------------------------------------------------
function execute_accion_confirmacion(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registra_nueva_actividad":
      title='Registro de Actividad';
      break;
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
    case "editar_actividad":
      title='Modificar Actividad';
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
    case "eliminarorden":
      title="Eliminar Orden";
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
$('#register_actividad').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","registra_nueva_actividad",'register_actividad_form','redirect','confirmacion/listar_actividades');
});
$('#update_actividad').click(function(e) {
  e.defaultPrevented;
  execute_accion_confirmacion("POST","editar_actividad",'editar_actividad_form','redirect','confirmacion/listar_actividades');
});

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
// CONFIRMACION JS HECTORELFATHER---------------------------------------------------------------
$('#btningresar').click(function(e){
  e.defaultPrevented;
  execute_accion_confirmacion("post","ingresar_orden",'formorden','redirect','confirmacion/listar_ordenes');

});

function modorden(orden){
    execute_accion_confirmacion("post","modorden",'formorden','redirect', 'confirmacion/confirmacion');
}
$('#modbtningresar').click(function(e){
  e.defaultPrevented;
  execute_accion_confirmacion("post","modificar_la_orden",'formmodorden','redirect', 'confirmacion/listar_ordenes');
});
function asignardato(ordeneliminar){
    $('#textlisteliminar').val(ordeneliminar);
}
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
