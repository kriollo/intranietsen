/**
 * Ajax action to api rest
*/
function execute_accion_rrhh(method,api_rest,formulario,accion,accion_redirect){
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
  execute_accion_rrhh("POST","registra_nueva_actividad",'register_actividad_form','reload');
});
$('#update_actividad').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","editar_actividad",'editar_actividad_form','reload');
});

$('#register_bloque').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nuevo_bloque",'register_bloque_form','reload');
});
$('#update_bloque').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","editar_bloque",'editar_bloque_form','reload');
});

$('#register_comuna').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nueva_comuna",'register_comuna_form','reload');
});
$('#update_comuna').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","editar_comuna",'editar_comuna_form','reload');
});

$('#register_motivo').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nuevo_motivocall",'register_motivo_form','reload');
});
$('#update_motivocall').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","editar_motivocall",'editar_motivocall_form','reload');
});
