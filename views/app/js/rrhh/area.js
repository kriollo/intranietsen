
function execute_accion_area(method,api_rest,formulario,accion,accion_redirect){
switch(api_rest){
  case "guardar_area":
     title="Guardar Area";
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
$("#btnnuvarea").click(function(e) {
  $.ajax({
     type : 'POST',
     url : 'api/guardar_area',
     data : $('#formarea').serialize(),
     success : function(json) {
         if ( json.success == 1 ){
         msg_box_alert(json.success,"Registro Guardado",json.message,"reload");
         }else{
           msg_box_alert(json.success,"Error",json.message);
         }
     },
     error : function(xhr, status) {
       msg_box_alert(99,title,xhr.responseText);
     }
   });
 });

 function cargadatosarea(id,descripcion){
      document.formmodificaarea.modareaid.value=id;
      document.formmodificaarea.modarea.value=descripcion;
 }

 $("#btnmodarea").click(function(e) {
   $.ajax({
      type : 'POST',
      url : 'api/modificar_area',
      data : $('#formmodificaarea').serialize(),
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
