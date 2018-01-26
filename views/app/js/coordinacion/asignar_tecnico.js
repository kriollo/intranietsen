
$('#select_ejecutivo').on('change', function select_ejecutivo(){

    $('#form_usuario').remove();
    $('#tecnicosNoAsignados').remove();
    $('#tecnicosAsignados').remove();
    $('#resultado option').remove();
    $('#boton_asignar').remove();
    $('#usuario').remove();
    $('#caja_secundaria').remove();
    $('#ejecutivos').append('<option>--</option>')

    $.ajax({
        type: 'POST',
        url: 'api/Mdlcoordinacion_select_ejecutivo',
        data: $('#select_ejecutivo').serialize(),
        success: function(json) {
            if (json.success == 1) {
                var mes = json.message;
                var but = $('<input type="button" id="boton_asignar" title="revisar" class="btn-success btn-md animated fadeIn" value="Asignar Tecnico">');
                var inp = $('<form id="form_usuario" name="form_usuario"><input type="hidden" id="usuario" name="usuario"><input type="hidden" id="name" name="name"></form>')

                for (var i = 0; i < mes.length; i++) {
                    $('#ejecutivos').append('<option class="opcion animated fadeIn" value="' + mes[i][0] + '">' + mes[i][1] + '</option>');
                }
                $('#resultado').append(inp);
                $('#form_opciones').append(but);
                $('#ejecutivos').on('change', function() {
                    $('#ejecutivos option:selected').each(function() {
                        var str = "";
                        var nme = "";
                        nme += $(this).text();
                        str += $(this).val();
                        $('#usuario').val(str);
                        $('#name').val(nme);
                    });
                })
            } else {
                // $('#mostrarDatos').remove();
                // $('#mostrardatosdiv').append('<div id="mostrarDatos"></div>');

            }
        },error: function( /*xhr, status*/ ) {
            msg_box_alert(xhr.responsetext);
        }
    });
});

// seleccion de cargo
$('#select_ejecutivo').one('click', function crear_select() {
    var sel = $('<select class="form-control"></select>');
    var lab = $('<label><strong>Asignar Tecnicos a Ejecutivos</strong></label><br>');
    $('#resultado').append(lab);
    $('#resultado').append(sel);
    sel.attr('id', 'ejecutivos');
    $('#ejecutivos').append('<option>--</option>')
});


if ($('#caja_secundaria').length > 0) {
    $('#caja_secundaria').remove();
} else {
    $(document).on('click', '#boton_asignar', function traer_tecnicos() {
        var select = $('#ejecutivos option:selected').text();
        if (select == '--') {
            msg_box_alert('0', 'Seleccione un ejecutivo', 'No hay ejecutivos seleccionados');
        } else {
            $.ajax({
                type: 'POST',
                url: 'api/Mdlcoordinacion_traer_tecnicos',
                data: $('#form_usuario').serialize(),
                success: function(json) {
                    if (json.success == 1) {
                        var tecnicosNoAsignados = json.tecnicosNoAsignados;
                        var tecnicosAsignados = json.tecnicosAsignados;
                        var user = $('#name').val();
                        var mostrarTodo = $('<!-- Default box --><div class="animated fadeIn" id="caja_secundaria"><!-- Custom Tabs (Pulled to the right) --><div class="nav-tabs-custom"><ul class="nav nav-tabs pull-rigth"><li class="active"><a href="#tab_2-2" data-toggle="tab"><label for="">' + user + '</label></a></li><li class="pull-left header"></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_1-1"><div class="row">  <div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios no asignados</label><table id="tecnicosNoAsignados" class="table table-bordered"><form id="idBtn"></table></div><div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios asignados</label><table id="tecnicosAsignados" class="table table-bordered"></table><form></div></div></div><!-- /.tab-pane --></div></div></div>');
                        if ($('#caja_secundaria').length > 0) {
                            $('#caja_secundaria').remove();
                            $('#mostrarDatos').prepend(mostrarTodo);
                        } else {
                            $('#mostrarDatos').prepend(mostrarTodo);
                        }
                        var user_id = $('#usuario').val();
                        for (var i = 0; i < tecnicosNoAsignados.length; i++) {
                            $('#tecnicosNoAsignados').append('<tr><td><a data-placement="top" title="Asignar Supervisión" id='+tecnicosNoAsignados[i]['nombre']+' onclick=\'asignar_tecnico("' +tecnicosNoAsignados[i]['id_tecnicos'] +'","' +user_id +'")\' class="btn btn-success btn-md" ><i class="fa fa-user-plus" ></i></a></td><td class="opcion" value="' + tecnicosNoAsignados[i]['nombre'] + '">' + tecnicosNoAsignados[i]['nombre'] + '</td></tr>');
                        }
                        if (tecnicosAsignados != undefined) {
                            for (var i = 0; i < tecnicosAsignados.length; i++) {
                                $('#tecnicosAsignados').append('<tr><td><a data-placement="top" title="Quitar Supervisión"  class="btn btn-danger btn-md btnDesasignar" id="' + tecnicosAsignados[i][0] + '"  onclick=\'quitar_tecnico("' +tecnicosAsignados[i]['id_tecnicos'] +'","' +user_id +'")\' ><i class="fa fa-user-times"></i></a></td><td class="opcion" value="' + tecnicosAsignados[i][0] + '">' + tecnicosAsignados[i][0] + '</td></tr> ');
                            }
                        }
                        // AQUI PONER EL ELSE DE LA WEA
                    }
                },error: function(xhr, status) {
                    msg_box_alert(xhr.responsetext);
                }
            });
        }
    });
}

function quitar_tecnico(tecnico,usuario) {
    var formData = new FormData();
    formData.append('tecnico', tecnico);
    formData.append('usuario', usuario);

    $.ajax({
        type: 'POST',
        url: 'api/Mdlcoordinacion_quitar_tecnico',
        contentType: false,
        processData: false,
        data: formData,
        success: function(json) {
            if (json.success == 1) {
                $('#caja_secundaria').remove();
                $('#tecnicosAsignados').remove();
                $('#tecnicosNoAsignados').remove();
                $("#boton_asignar").trigger('click');
            } else {
                msg_box_alert('Error');
            }
        }
    });
}

function asignar_tecnico(tecnico,usuario) {
    var formData = new FormData();
    formData.append('tecnico', tecnico);
    formData.append('usuario', usuario);

    $.ajax({
        type: 'POST',
        url: 'api/Mdlcoordinacion_asignar_tecnico',
        contentType: false,
        processData: false,
        data: formData,
        success: function(json) {
            if (json.success == 1) {
                $('#caja_secundaria').remove();
                $("#boton_asignar").trigger('click');
            } else {
                msg_box_alert('Error');
            }
        }
    });
}
