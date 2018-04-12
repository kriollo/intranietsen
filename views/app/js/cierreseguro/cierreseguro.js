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
function select_cerrar_orden(id,n_orden,rut_cliente,comuna,fecha_compromiso,actividad,bloque,telefono){
    var formc= new FormData();
    formc.append('id',id);
    formc.append('norden',n_orden);
    formc.append('rutcliente',rut_cliente);
    formc.append('comuna',comuna);
    formc.append('fecha_compromiso',fecha_compromiso);
    formc.append('actividad',actividad);
    formc.append('bloque',bloque);
    formc.append('telefono',telefono);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_guardar_cierre',
        contentType: false,
        processData: false,
        data: formc,
        success : function(json) {
            if(json.success==1){
                msg_box_alert(json.success,'datos',json.message,'reload');
            }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'title',xhr.responseText);
        }
    });
}
function select_volver_llamar(id,n_orden,rut_cliente,comuna,fecha_compromiso,actividad,prioridad,bloque,telefono){
    var forml= new FormData();
    forml.append('id',id);
    forml.append('norden',n_orden);
    forml.append('rutcliente',rut_cliente);
    forml.append('comuna',comuna);
    forml.append('fecha_compromiso',fecha_compromiso);
    forml.append('actividad',actividad);
    forml.append('prioridad',prioridad);
    forml.append('bloque',bloque);
    forml.append('telefono',telefono);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_modificar_prioridad',
        contentType: false,
        processData: false,
        data: forml,
        success : function(json) {
            if(json.success==1){
                msg_box_alert(json.success,'datos',json.message,'reload');
            }
        },
        error : function(xhr, status) {
        msg_box_alert(99,'title',xhr.responseText);
    }
    });
}
function select_orden_rechazada(id,n_orden,rut_cliente,comuna,fecha_compromiso,actividad,bloque,telefono){
    var formm= new FormData();
    formm.append('id',id);
    formm.append('norden',n_orden);
    formm.append('rutcliente',rut_cliente);
    formm.append('comuna',comuna);
    formm.append('fecha_compromiso',fecha_compromiso);
    formm.append('actividad',actividad);
    formm.append('bloque',bloque);
    formm.append('telefono',telefono);
    $.ajax({
        type : 'POST',
        url : 'api/cierreseguro_cierre_desaprobado',
        contentType: false,
        processData: false,
        data: formm,
        success : function(json) {
        if(json.success==1){
            msg_box_alert(json.success,'datos',json.message,'reload');
        }
        },
        error : function(xhr, status) {
            msg_box_alert(99,'title',xhr.responseText);
        }
    });
}
function select_modificar_orden_cerrada(id,n_orden,rut_cliente,comuna,fecha_compromiso,actividad,bloque,telefono,estado){
    var formm= new FormData();
    formm.append('id',id);
    formm.append('norden',n_orden);
    formm.append('rutcliente',rut_cliente);
    formm.append('comuna',comuna);
    formm.append('fecha_compromiso',fecha_compromiso);
    formm.append('actividad',actividad);
    formm.append('bloque',bloque);
    formm.append('telefono',telefono);
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
            msg_box_alert(99,'title',xhr.responseText);
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
            msg_box_alert(99,'title',xhr.responseText);
        }
    });
}
