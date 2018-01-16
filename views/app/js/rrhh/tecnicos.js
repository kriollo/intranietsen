function execute_accion_rrhh(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "registra_nuevo_tecnico":
      title='Registro de Tecnico';
      break;
    case "editar_tecnico":
      title='Modificar datos tecnico';
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

$('#register_tecnico').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","registra_nuevo_tecnico",'register_tecnico_form','redirect','rrhh/listar_tecnicos');
});
$('#update_tecnico').click(function(e) {
  e.defaultPrevented;
  execute_accion_rrhh("POST","editar_tecnico",'editar_tecnico_form','reload');
});

function subirarchivoexcel(){
    $("#div_cargando").html($("#cargador").html());
    var formData = new FormData();
    formData.append('excel',document.getElementById('imagefile').files[0]);
    $.ajax({
        type : 'POST',
        url : 'api/cargar_excel_tecnicos',
        contentType:false,
        processData:false,
        data : formData,
        success : function(json) {
            if ( json.success == 1 ){
                msg_box_alert(json.success,"Registro Guardado",json.message);
            }else{
                msg_box_alert(json.success,"Error",json.message);
            }
            $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
        },
        error : function(xhr, status) {
            $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
          msg_box_alert(99,"Error",xhr.responseText);
        }
    });
}
