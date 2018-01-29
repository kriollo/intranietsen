function execute_accion_distribucion(method,api_rest,formulario,accion,accion_redirect){
  switch(api_rest) {
    case "seleccionar_bloque":
      title='Seleccionar Bloque';
    break;
    case "distribuir_ordenes":
      title='Ordenes Distribuidas';
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
  function seleccionar_bloque(){
    $.ajax({
        type : 'POST',
        url : 'api/Mdlcoordinacion_seleccionar_bloque',
        data : $('#formusuarios').serialize(),
        success : function(json) {
        if ( json.success == 1){
               $('#select_bloque').html(json.message)

        }else{
            $('#select_bloque').html("")
        }
    },
        error : function(xhr, status) {
            msg_box_alert(99,title,xhr.responseText);
        }
    });
  }
  function marcar(marca){
       document.form2.textoculto.value=marca;
       $.ajax({
         type : 'POST',
         url : 'api/Mdlcoordinacion_marcar_opcion',
         data : $('#form2').serialize(),
         success : function(json) {
           msg_box_alert(json.success,'Mensaje',json.message);
         },
         error : function(xhr, status) {
           msg_box_alert(99,title,xhr.responseText);
         }
       });

  }
  function distribuir_ordenes(){
    execute_accion_distribucion("POST","Mdlcoordinacion_distribuir_ordenes",'formusuarios', 'reload');
  }
