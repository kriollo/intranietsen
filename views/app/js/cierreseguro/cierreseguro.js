function subirarchivoexcel() {
    $("#div_cargando").html($("#cargador").html());
    var formData = new FormData();
    formData.append("excel", document.getElementById("blindfile").files[0]);
    $.ajax({
        type: "POST",
        url: "api/cargar_excel_cierreseguro",
        contentType: false,
        processData: false,
        data: formData,
        success: function (json) {
            if (json.success == 1) {
                msg_box_alert(json.success, "Registro Guardado", json.message, "reload");
            } else {
                msg_box_alert(json.success, "Error", json.message);
                $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
            }
        },
        error: function (xhr, status) {
            $("#div_cargando").html('<a class="btn btn-success btn-social" title="Exportar a Excel" data-toggle="tooltip" onclick="subirarchivoexcel()"><i class="fa fa-arrow-up"></i> Cargar Turnos</a>');
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}
function des_marcar_ejecutivo(id){
    contenido_div = $("#div-"+id).html();
    $("#div-"+id).html($("#cargador").html());
    var formData = new FormData();
    formData.append("id_user", id);
    formData.append("check", document.getElementById('check-'+id).checked?1:0);
    $.ajax({
        type: "POST",
        url: "api/cierreseguro_des_marcar_ejecutivo",
        contentType: false,
        processData: false,
        data: formData,
        success: function (json) {
            $("#div-"+id).html(contenido_div);
        },
        error: function (xhr, status) {
            $("#div-"+id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}
function Distribuir_Ordenes(tabla){
    if (tabla == 'TMP'){
        div = 'div-distribuyeTMP';
    }else if(tabla == 'PROD'){
        div = 'div-distribuyePROD';
    }
    $("#"+div).html($("#cargador").html());

    var formData = new FormData();
    formData.append("tabla", tabla);
    $.ajax({
        type: "POST",
        url: "api/cierreseguro_Distribuir_Ordenes",
        contentType: false,
        processData: false,
        data: formData,
        success: function (json) {
            msg_box_alert(json.success, "Mensaje", json.message,'reload');
        },
        error: function (xhr, status) {
            $("#div-"+id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}
function cerrar_ordenes_sin_asignar(){
    div = 'div-distribuyePROD';
    $("#"+div).html($("#cargador").html());

    var formData = new FormData();
    $.ajax({
        type: "POST",
        url: "api/cierreseguro_cerrar_ordenes_sin_asignar",
        success: function (json) {
            msg_box_alert(json.success, "Mensaje", json.message,'reload');
        },
        error: function (xhr, status) {
            $("#div-"+id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}
function quitar_Ordenes_ejecutivos(id){
    $("#div-"+id).html($("#cargador").html());
    var formData = new FormData();
    formData.append("id_user", id);
    $.ajax({
        type: "POST",
        url: "api/cierreseguro_quitar_Ordenes_ejecutivos",
        contentType: false,
        processData: false,
        data: formData,
        success: function (json) {
            location.reload();
        },
        error: function (xhr, status) {
            $("#div-"+id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}
function carga_modal_datos_tmp_ordenes(){
    $.ajax({
        type: "POST",
        url: "api/cierreseguro_getDatosOrdenesTMP",
        success : function(data){
            var table= $('#table_datos_tmp').DataTable();
            table.clear().draw();
            if(data.success==1){
                var ruta="views/app/temp/" + data.message;
                var request = $.ajax( ruta , {dataType:'json'} );
                request.done(function (resultado) {
                    table.rows.add(resultado.aaData).draw();
                });
            }else{
                $.alert(data.message);
            }
        },
        error : function(xhr, status) {
          msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
        }
    });
}
function select_cerrar_orden(id){
    n_orden = document.getElementById('n_orden-'+id).value;
    telefono = document.getElementById('telefono-'+id).value;
    if (n_orden == 0 || telefono == ""){
        msg_box_alert(0,'Alerta','Debe Ingresar los datos antes de guardar');
    }else{
        var formc= new FormData();
        formc.append('id',id);
        $.ajax({
            type : 'POST',
            url : 'api/cierreseguro_guardar_cierre',
            contentType: false,
            processData: false,
            data: formc,
            success : function(json) {
                if(json.success==1){
                    msg_box_alert(json.success,'Orden Aprobada',json.message,'reload');
                }else if (json.success == 0){
                    msg_box_alert(99,'Error',json.message);
                }
            },
            error : function(xhr, status) {
                msg_box_alert(99,'Error',xhr.responseText);
            }
        });
    }
}
function select_orden_sg(id){

    var formc= new FormData();
    formc.append('id',id);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_sg',
        contentType: false,
        processData: false,
        data: formc,
        success : function(json) {
            if(json.success==1){
                if (json.message == 1){
                    $("#btncierresg-"+id).removeClass("btn-primary");
                    $("#btncierresg-"+id).addClass("btn-warning");
                }else if(json.message == 0){
                    $("#btncierresg-"+id).removeClass("btn-warning");
                    $("#btncierresg-"+id).addClass("btn-primary");
                }
            }else if (json.success == 0){
                msg_box_alert(99,'Error',json.message);
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
    });

}
function select_volver_llamar(id){
    n_orden = document.getElementById('n_orden-'+id).value;
    telefono = document.getElementById('telefono-'+id).value;
    if (n_orden == 0 || telefono == ""){
        msg_box_alert(0,'Alerta','Debe Ingresar los datos antes de guardar');
    }else{
        var forml= new FormData();
        forml.append('id',id);
        $.ajax({
            type : 'POST',
            url : 'api/cierreseguro_modificar_prioridad',
            contentType: false,
            processData: false,
            data: forml,
            success : function(json) {
                if(json.success==1){
                    msg_box_alert(json.success,'Volver a Llamar',json.message,'reload');
                }else{
                    $.alert({
                      typeAnimated: true,
                      icon: "glyphicon glyphicon-warning-sign",
                      type: "red",
                      title: "Volver a LLamar",
                      content: json.message,
                      autoClose: "ok|3000",
                      buttons: {
                          ok: {
                              text: "ok",
                              btnClass: "btn-red",
                              action: function(){
                                  location.reload();
                              }
                          }
                      }
                    });

                }
            },
            error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
        });
    }
}
function select_orden_rechazada(id){
    n_orden = document.getElementById('n_orden-'+id).value;
    telefono = document.getElementById('telefono-'+id).value;
    if (n_orden == 0 || telefono == ""){
        msg_box_alert(0,'Alerta','Debe Ingresar los datos antes de guardar');
    }else{
        var formm= new FormData();
        formm.append('id',id);
        $.ajax({
            type : 'POST',
            url : 'api/cierreseguro_formcierre',
            data : $('#formcierre').serialize(),
            success : function(json) {
                if(json.success==1){
                    $.confirm({
                        title: 'Desea rechazar la orden?',
                        content: json.html,
                        type: 'blue',
                        buttons: {
                            formSubmit: {
                                text: 'Aceptar',
                                btnClass: 'btn-green',
                                action: function () {
                                    observacion=document.getElementById('textobservacion').value;
                                    formm.append('observacion',observacion);
                                    $.ajax({
                                        type : 'POST',
                                        url : 'api/cierreseguro_cierre_desaprobado',
                                        contentType: false,
                                        processData: false,
                                        data: formm,
                                        success : function(json) {
                                            if(json.success==1){
                                                msg_box_alert(json.success,'Cliente Rechaza',json.message,'reload');
                                            }
                                        },
                                        error : function(xhr, status) {
                                            msg_box_alert(99,'Error',xhr.responseText);
                                        }
                                    });
                                }
                            },cancel: {
                                text: 'Cancelar',
                                action: function () {
                                }
                            }
                        }
                    });
                }
            },
            error : function(xhr, status) {
                msg_box_alert(99,'malo',xhr.responseText);
            }
        });
    }
}
function select_modificar_orden_cerrada(id){
    var formm= new FormData();
    formm.append('id',id);
    $.ajax({
    type : 'POST',
    url : 'api/cierreseguro_select_modificar_orden_cerrada',
    contentType: false,
    processData: false,
    data: formm,
    success : function(json) {
        if(json.success==1){
            msg_box_alert(json.success,'datos',json.message,'reload');
        }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
    });
}
function seleccionar_opcion(num){
    var forms=new FormData();
    forms.append('num',num);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_select_filtro',
        contentType: false,
        processData: false,
        data: forms,
        success : function(json) {
            if(json.success==1){
                $('#divopciones').html(json.html);
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
    });
}
function filtrar_ordenes_supervisor(){
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_filtrar_ordenes_supervisor',
        data : $('#form_filtrar_ordenes_supervisor').serialize(),
        success : function(json) {
            var table= $('#datacierre').DataTable();
            table.clear().draw();
            if(json.success==1){
                var ruta="views/app/temp/" + json.message;
                var request = $.ajax( ruta , {dataType:'json'} );
                request.done(function (resultado) {
                    table.rows.add(resultado.aaData).draw();
                });
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Filtrar Ordenes',xhr.responseText);
        }
    });
}
function exportarexcel(opcion) {
    if(opcion == 'fecha'){
        var desde=document.getElementById('textdesde').value;
        var hasta=document.getElementById('texthasta').value;

        location.href = 'cierreseguro/exporta_excel_ordenescierre?desde='+desde+'&hasta='+hasta+'&opcion='+opcion;
    }else{
        var orden=document.getElementById('textordenes').value;
        location.href = 'cierreseguro/exporta_excel_ordenescierre?orden='+orden+'&opcion='+opcion;
    }
}
function verobservacion(id){
    var formve=new FormData();
    formve.append('id',id);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_ver_observacion',
        contentType: false,
        processData: false,
        data: formve,
        success : function(json) {
            $.confirm({
                title: 'Observacion',
                content: json.html,
                type: 'blue',
                buttons: {
                    formSubmit: {
                        text: 'Aceptar',
                        btnClass: 'btn-green',
                        action: function () {
                        }
                    }
                }
            });
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
    });
}
function update_datos_orden(id){
    var formve=new FormData();
    formve.append('id',id);
    formve.append('n_orden',document.getElementById('n_orden-'+id).value);
    formve.append('telefono',document.getElementById('telefono-'+id).value);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_update_datos_orden',
        contentType: false,
        processData: false,
        data: formve,
        success : function(json) {
            if (json.success == 0){
                msg_box_alert(99,'Error',json.message);
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'Error',xhr.responseText);
        }
    });
}
