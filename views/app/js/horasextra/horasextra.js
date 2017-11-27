/**
 * Ajax action to api rest
*/
function execute_accion_solicitudes_horas_extra(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "hora_extra":
      title='Hora Extra';
      break;
    case "revisar":
      title='Revisar Solicitud'
      break;
    case "modificar":
      title='Modificar Solicitud'
      break;
    case "aprobar":
      title='Aprobar Solicitud'
      break;
    case "rechazar":
      title='Rechazar Solicitud'
      break;
    case "eliminar":
      title='Eliminar Solicitud'
      break;
    case "buscar_coincidencia":
      title='buscar_coincidencia'
      break;
    case "tmp_hora_extra":
      title='Peticion horas extra temporal'
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
      msg_box_alert(99,title,'Ha ocurrido un problema.'+ xhr.responsetext);
    }
  });
}
$('#btn_horaextra').click(function(e){
  e.defaultPrevented;
  execute_accion_solicitudes_horas_extra("POST","hora_extra",'form_horax','redirect','rrhh/horasextra')
});
$('#btn_tmp_horaextra').click(function(e){
  e.defaultPrevented;
  execute_accion_solicitudes_horas_extra("POST","tmp_hora_extra",'form_horax','redirect','rrhh/horasextra')
});
$('#btn_modificar').click(function(e){
  e.defaultPrevented;
  execute_accion_solicitudes_horas_extra("POST","modificar",'form_modificar','redirect','rrhh/horasextra')
});
$('#btn_aprobar').click(function(e){
  e.defaultPrevented;
  execute_accion_solicitudes_horas_extra("POST","aprobar",'form_respuesta','redirect','rrhh/revisar_horas_extras_pendientes')
});
$('#btn_rechazar').click(function(e){
  e.defaultPrevented;
  execute_accion_solicitudes_horas_extra("POST","rechazar",'form_respuesta','redirect','rrhh/revisar_horas_extras_pendientes')
});
function eliminar_solicitud(id){
if(window.confirm("¿Esta seguro que desea eliminar la solicitud?")){
  document.getElementById("id_solicitudhx").value = id;
  execute_accion_solicitudes_horas_extra("POST",'eliminar','form_id','redirect','rrhh/horasextra')
}else{
  alert("No eliminado");
  }
}
function modal_responder_solicitud(id){
  $('#modal_responder_solicitud').modal('show');
  document.getElementById('id_respuesta').value=id
}
function buscar_coincidencia(){
if (busca.value != '') {
  $.ajax({
    type : 'POST',
    url : 'api/buscar_coincidencia',
    data : $('#form_buscar').serialize(),
    success : function(json) {
      if (json.success==1){
        $('#rut').attr("placeholder",json.message);
        $('#nombre').attr("placeholder",json.message);
      }
     else{
       $('#rut').val(json.rut);
       $('#nombre').val(json.nombre);
     }
    },
    error : function(/*xhr, status*/) {
      msg_box_alert(xhr.responsetext);
    }
  });
}
}
