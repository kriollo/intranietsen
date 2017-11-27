/**
 * Ajax action to api rest
*/
function execute_accion_rrhh(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registra_nuevo_trabajador":
      title='Registro de Trabajador';
      break;
    case "update_trabajador":
      title='Actualiza Trabajador';
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
$('#register_personal').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nuevo_trabajador",'register_trabajador_form','reload');
});
$('#register_trabajador_form').keypress(function(e) {
    e.defaultPrevented;
    if(e.which == 13) {
        execute_accion_rrhh("POST","registra_nuevo_trabajador",'register_trabajador_form','reload');
        return false;
    }
});
$('#update_personal').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","update_trabajador",'update_trabajador_form','redirect','rrhh/listar_trabajadores');
});

