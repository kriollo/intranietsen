function cierre_asegurado(id) {
  $.confirm({
    theme: 'supervan',
     icon: 'fa fa-phone',
     title: 'Cierre Asegurado!',
     content:  '<form id="Formcierre" name="Formcierre" class="form-signin" >'+
     '<select class="form-control" name="tec" id="tec">'+
       '<option value="sin tecnico en el domicilio">SIN TECNICO EN EL DOMICILIO</option>'+
       '<option value="con tecnico en el domicilio">CON TECNICO EN EL DOMICILIO</option>'+
     '</select>'+
         '<select class="form-control" name="opcion" id="opcion">'+
           '<option value="ok cierre">CIERRE OK</option>'+
           '<option value="no acepta ivr">NO ACEPTA IVR</option>'+
           '<option value="ivr caido">IVR CAIDO</option>'+
         '</select>'+
         '<input type="hidden" id="id" name="id" value='+id+'>'+
     '</form>',
     type: 'purple',
     typeAnimated: true,
     buttons: {
       formSubmit: {
         text: 'Cerrar',
         btnClass: 'btn-blue',
         action: function () {
           $.ajax({
               type: "POST",
               url: "api/Mdlcierre_cierre_asegurado",
               data : $('#Formcierre').serialize(),
               success : function(data){
                   if(data.success==1){
                     // INGRESAR QUE WEA
                     $.alert('ORDEN CERRADA DE MANERA SEGURA')
                     location.reload();

                   }
                   else {
                     $.alert('No se logro hacer un cierre seguro');
                   }
               },
               error : function(xhr, status) {
                 msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
               }
           });
         }
       },
       cancel: {
         text: 'Cancelar',
         action: function () {
           location.reload();
           //close
         }
       }
     },
  });
}
function subir_certificacion(id){
  var div = '<label for="file">Seleccione la foto de la certificacion</label>' +
    '<input style="border-radius:15px;" type="file" id="fileinput" accept=".jpg, .jpeg, .png" class="form-control"/><br>'+
  '<iframe width="1050" height="450" style="position:relative;" src="https://docs.google.com/forms/d/e/1FAIpQLSf8Dic333KU_BmMmZmr9_r4PQcuPw6j5A6_SeESg1ak_q5TuA/formResponse" frameborder="0" allowfullscreen></iframe>';
$.confirm({
  theme: 'supervan',
    icon: 'glyphicon glyphicon-scale',
    title: 'Certificacion!',
    type: 'purple',
  columnClass: 'col-md-12',
    typeAnimated: true,
    content: div,
    buttons: {
        confirmar: function () {
           var formData = new FormData();
           formData.append('fileinput', document.getElementById('fileinput').files[0]);
           formData.append('id', id);
                $.ajax({
                  type: "POST",
                  url: "api/Mdlcierre_certificacion",
                  contentType: false,
                  processData: false,
                  data: formData,
                  success: function (data) {
                    if (data.success == 1) {
                      // INGRESAR QUE WEA
                      location.reload();
                    } else{
                      $.alert('Es necesario subir una imagen ');
                    }
                  },
                  error: function (xhr, status) {
                    msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
                  }
                });

              },
        cancelar: function () {
        },
    }
});
}
function subir_st(id){
  var div = '<label for="file">Seleccione la foto del speed test</label>'+
  '<input style="border-radius:15px;" type="file" id="fileinput" accept=".jpg, .jpeg, .png" class="form-control"/>';

    $.confirm({
    theme: 'supervan',
    icon: 'glyphicon glyphicon-camera',
    title: 'Subir Speed Test',
    type: 'purple',
    typeAnimated: true,
    content: div,
    buttons: {
        confirmar: function () {
          var formData = new FormData();
          formData.append('fileinput', document.getElementById('fileinput').files[0]);
          formData.append('id', id);
          $.ajax({
            type: "POST",
            url: "api/Mdlcierre_speed_test",
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
            if(data.success== 1){
            // INGRESAR QUE WEA
              location.reload();
            }else {
            $.alert('No se logro subir el speed test');
            }
            },
            error: function (xhr, status) {
            msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
            }
          });
        },
        cancelar: function () {
        },
    }

});
}
