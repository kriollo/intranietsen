
function execute_accion_cargo(method,api_rest,formulario,accion,accion_redirect){
switch(api_rest){
  case "registrar_cargo":
     title='Registrar Cargo';
  break;
  case "guardar_cargo":
     title="Guardar Cargo";
  break;
}
$.ajax({
  type:method,
  url: 'api/'+api_rest,
  data: $('#'+ formulario).serialize(),
  succes:function(json){
    msg_box_alert(json.succes,title,json.message,action,action__redirect);
  },
  error: function(xhr, status){
    msg_box_alert(99,title,xhr.responseText);
  }
});
}
$("#btnnuvcargo").click(function(e) {
  $.ajax({
     type : 'POST',
     url : 'api/guardar_cargo',
     data : $('#formcargo').serialize(),
     success : function(json) {
         if ( json.success == 1 ){
         msg_box_alert(json.success,"Registro Guardado",json.message,"reload");
         }else{
           msg_box_alert(json.success,"Error",json.message);
         }
     },
     error : function(xhr, status) {
       msg_box_alert(99,"Error",xhr.responseText);
     }
   });
 });


 function cargadatos(id,descripcion){
      document.formmodificacargo.modid.value=id;
      document.formmodificacargo.modcargo.value=descripcion;
 }

 $("#btnmodcargo").click(function(e) {
   $.ajax({
      type : 'POST',
      url : 'api/modificar_cargo',
      data : $('#formmodificacargo').serialize(),
      success : function(json) {
          if ( json.success == 1 ){
          msg_box_alert(json.success,"Registro Modificado",json.message,"reload");
          }else{
            msg_box_alert(json.success,"Error",json.message);
          }
      },
      error : function(xhr, status) {
        msg_box_alert(99,"Error",xhr.responseText);
      }
    });
  });
