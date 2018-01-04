
function subirarchivoexcel(){
    $("#div_cargando").html($("#cargador").html());
    var formData = new FormData();
    formData.append('excel',document.getElementById('imagefile').files[0]);
    $.ajax({
        type : 'POST',
        url : 'api/cargar_excel',
        contentType:false,
        processData:false,
        data : formData,
        success : function(json) {
            if ( json.success == 1 ){
                msg_box_alert(json.success,"Registro Guardado",json.message,'reload');
            }else{
                msg_box_alert(json.success,"Error",json.message);
                $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
            }
        },
        error : function(xhr, status) {
            $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
          msg_box_alert(99,"Error",xhr.responseText);
        }
    });
}
function revisar_turno_por_fecha(){
    $.ajax({
        type: "POST",
        url: "api/revisar_turno_por_fecha",
        data : $('#formbuscaturno').serialize(),
        success : function(data){
            var table= $('#dataTables3').DataTable();
            table.clear().draw();
            if(data.success==1){
                var ruta="views/app/temp/"+data.message;
                var request = $.ajax(ruta,{dataType:'json'});
                request.done(function (resultado) {
                    table.rows.add(resultado.aaData).draw();
                });
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,"Error",xhr.responseText);
        }
    });
}



$('#btn_exporta_excel_turno_plataforma').click(function(e) {
    var fecha=document.getElementById('fechaturno').value;
    location.href = 'rrhh/exportar_turnos_plataforma_excel?fecha='+fecha;
});




function verturnomes(rutcliente,mesano,ano){

   $("a > i").removeClass("rojo");
   $("#"+mesano).addClass("rojo");
   document.formturnopropio.textrutoculto.value=rutcliente;
   document.formturnopropio.textfechaoculto.value=mesano;



  $.ajax({
    type: "POST",
    url: "api/verturnomes",
    data : $('#formturnopropio').serialize(),
    success : function(data){
       var table= $('#dataTables4').DataTable();
       table.clear().draw();
      if(data.success==1){
       var ruta="views/app/temp/"+data.message;
       var request = $.ajax(ruta,{dataType:'json'});
       request.done(function (resultado) {
       table.rows.add(resultado.aaData).draw();
     });
   }
   },
    error : function(xhr, status) {
      msg_box_alert(99,"Error",xhr.responseText);
    }
 });
 }
