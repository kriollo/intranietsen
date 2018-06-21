
function cargarcom(codigo){
  document.getElementById('textcomunass').value=codigo;
}

function edcargarcom(edcodigo){
  document.getElementById('edtextcomunass').value=edcodigo;
}


function cargaropcion(res){
    document.getElementById('textopcion').value=res;
}

function edcargaropcion(edres){
    document.getElementById('edtextopcion').value=edres;
}

function edcargaestatus(edestatus){
    document.getElementById('edtextestatus').value=edestatus;
}

function cargaestatus(estatus){
    document.getElementById('textestatus').value=estatus;
}

$('#btnguardar').click(function(e){
  $.ajax({
      type : "POST",
      url : 'api/Mdlredes_guardardatos',
      data : $('#formfen').serialize(),
      success : function(json) {
        msg_box_alert(json.success,"Ingreso",json.message,"reload");
      },error : function(xhr, status) {
          msg_box_alert(99,'error',xhr.responseText);
      }
  });

});

$('#btnmodificar').click(function(e){
  $.ajax({
      type : "POST",
      url : 'api/Mdlredes_modificardatos',
      data : $('#edformfen').serialize(),
      success : function(json) {
        msg_box_alert(json.success,"Ingreso",json.message,"redirect","redes/listarfen");
      },error : function(xhr, status) {
          msg_box_alert(99,'error',xhr.responseText);
      }
  });

});

function eliminarfen(codigo){
  var formeli=new FormData();
  formeli.append('codigo', codigo);
  $.ajax({
      type : "POST",
      url : 'api/Mdlredes_eliminarfen',
      contentType:false,
      processData:false,
      data : formeli,
      success : function(json) {
          if(json.success == 1 ){
              msg_box_alert(json.success,"Eliminar Registro",json.message,"reload");
          }
      },error : function(xhr, status) {
          msg_box_alert(99,'error',xhr.responseText);
      }
  });

}

function filtrar_por_fecha(){
  var fechadesde=document.getElementById('fendesde').value;
  var fechahasta=document.getElementById('fenhasta').value;

  if(fechadesde>fechahasta){
    $.alert('Fechas mal ingresadas');
  }else{

  var formfe=new FormData();
  formfe.append('fechadesde', fechadesde);
  formfe.append('fechahasta', fechahasta);
  $.ajax({
      type : "POST",
      url : 'api/Mdlredes_filtrar_fecha',
      contentType:false,
      processData:false,
      data : formfe,
      success : function(json) {
        var table= $('#tablafen').DataTable();
        table.clear().draw();
          if(json.success == 1 ){
            var ruta="views/app/temp/" + json.message;
            var request = $.ajax( ruta , {dataType:'json'} );
            request.done(function (resultado) {
                table.rows.add(resultado.aaData).draw();
            });
          }else{
              msg_box_alert(99,'error',json.message);
          }
      },error : function(xhr, status) {
          msg_box_alert(99,'error',xhr.responseText);
      }
  });
}
}

$('#btn_exporta_excel').click(function(e) {


    var fecha_desde=document.getElementById('fendesde').value;
    var fecha_hasta=document.getElementById('fenhasta').value;

    location.href = 'redes/exporta_excel_fen?fecha_desde='+fecha_desde+'&fecha_hasta='+fecha_hasta;
});

function exportar_excel(){


    var fecha_desde=document.getElementById('fendesde').value;
    var fecha_hasta=document.getElementById('fenhasta').value;

    location.href = 'redes/exporta_excel_fen?fecha_desde='+fecha_desde+'&fecha_hasta='+fecha_hasta;
}

function exportar_excel2(){

   alert("datos");


    var fen=document.getElementById('textordenesfen').value;

    location.href = 'redes/exporta_excel_fen2?fen='+fen;
}


function seleccionar_opcion_fen(num){
    var forms=new FormData();
    forms.append('num',num);
    $.ajax({
        type : 'POST',
        url : 'api/Mdlredes_select_filtro_fen',
        contentType: false,
        processData: false,
        data: forms,
        success : function(json) {
            if(json.success==1){
                $('#divopciones_fen').html(json.html);
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
    });
}

function filtrar_fen(){
  var fen=document.getElementById('textordenesfen').value;

  var formtex=new FormData();
  formtex.append('fen', fen);
  $.ajax({
      type : "POST",
      url : 'api/Mdlredes_filtrar_fen',
      contentType:false,
      processData:false,
      data : formtex,
      success : function(json) {
        var table= $('#tablafen').DataTable();
        table.clear().draw();
          if(json.success == 1 ){
            var ruta="views/app/temp/" + json.message;
            var request = $.ajax( ruta , {dataType:'json'} );
            request.done(function (resultado) {
                table.rows.add(resultado.aaData).draw();
            });
          }else{
              msg_box_alert(99,'error',json.message);
          }
      },error : function(xhr, status) {
          msg_box_alert(99,'error',xhr.responseText);
      }
  });
}
