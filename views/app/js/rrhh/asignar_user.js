$('#select_perfil').on('change', function select_perfil() {
    $('#form_usuario').remove();
    $('#comunasNoAsignadas').remove();
    $('#comunasAsignadas').remove();
    $('#resultado option').remove();
    $('#boton_asignar').remove();
    $('#usuario').remove();
    $('#caja_secundaria').remove();
    $('#ejecutivos').append('<option>--</option>')
    $.ajax({
        type: 'POST',
        url: 'api/Asignaejecutivo_select_perfil',
        data: $('#select_perfil').serialize(),
        success: function(json) {
            if (json.success == 1) {
                var mes = json.message;
                var but = $('<input type="button" id="boton_asignar" title="revisar" class="btn-success btn-md animated fadeIn" value="Asignar Usuarios">');
                var inp = $('<form id="form_usuario" name="form_usuario"><input type="hidden" id="cargo" name="cargo"><input type="hidden" id="usuario" name="usuario"><input type="hidden" id="name" name="name"></form>')
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
                        $('#cargo').val($('#select_perfil').val());
                    });
                })
            }
        },error: function(xhr, status) {
            msg_box_alert(xhr.responsetext);
        }
    });
});
$('#select_perfil').one('click', function crear_select() {
    var sel = $('<select class="form-control"></select>');
    var lab = $('<label><strong>Asignar ejecutivos a Supervisor</strong></label>');
    $('#resultado').append(lab);
    $('#resultado').append(sel);
    sel.attr('id', 'ejecutivos');
    $('#ejecutivos').append('<option>--</option>')
});

if ($('#caja_secundaria').length > 0) {
    $('#caja_secundaria').remove();
} else {
    $(document).on('click', '#boton_asignar', function traer_usuarios() {
        var select = $('#ejecutivos option:selected').text();
        if ( select == '--') {
            msg_box_alert('0','Seleccione un ejecutivo','No hay ejecutivos seleccionados');
        }else {
            $.ajax({
                type: 'POST',
                url: 'api/Asignaejecutivo_traer_usuarios',
                data: $('#form_usuario').serialize(),
                success: function(json) {
                    if (json.success == 1) {
                        var usuariosNoAsignados = json.usuariosNoAsignados;
                        var usuariosAsignados = json.usuariosAsignados;
                        var valor = json.valor;
                        var user = $('#name').val();
                        var mostrarTodo = $('<!-- Default box --><div class="animated fadeIn" id="caja_secundaria"><!-- Custom Tabs (Pulled to the right) --><div class="nav-tabs-custom"><ul class="nav nav-tabs pull-rigth"><li class="active"><a href="#tab_2-2" data-toggle="tab"><label for="">' + user + '</label></a></li><li class="pull-left header"></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_1-1"><div class="row">  <div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios no asignados</label><table id="usuariosNoAsignados" class="table table-bordered"><form id="idBtn"></table></div><div class="col-md-2"></div><div class="col-md-4"><label for="">Usuarios asignados</label><table id="usuariosAsignados" class="table table-bordered"></table><form></div></div></div><!-- /.tab-pane --></div></div></div>');
                        if ($('#caja_secundaria').length > 0) {
                            $('#caja_secundaria').remove();
                            $('#mostrarDatos').prepend(mostrarTodo);
                        } else {
                            $('#mostrarDatos').prepend(mostrarTodo);
                        }
                        var user_id = $('#usuario').val();
                        for (var i = 0; i < usuariosNoAsignados.length; i++) {
                            $('#usuariosNoAsignados').append('<tr><td><a data-placement="top" title="Asignar Supervisión" id="' + usuariosNoAsignados[i][0] + '" onclick="asignar_supervision('+ usuariosNoAsignados[i][0] +',' + user_id + ')" class="btn btn-success btn-md" ><i class="fa fa-user-plus" ></i></a></td><td class="opcion" value="' + usuariosNoAsignados[i][2] + '">' + usuariosNoAsignados[i][2] + '</td></tr>');
                        }
                        if (usuariosAsignados != undefined) {
                            for (var i = 0; i < usuariosAsignados.length; i++) {
                                $('#usuariosAsignados').append('<tr><td><a data-placement="top" title="Quitar Supervisión"  class="btn btn-danger btn-md btnDesasignar" id="' + usuariosAsignados[i][0] + '" onclick="quitar_supervision('+ usuariosAsignados[i][0] +')" ><i class="fa fa-user-times"></i></a></td><td class="opcion" value="' + usuariosAsignados[i][2] + '">' + usuariosAsignados[i][2] + '</td></tr> ');
                            }
                        }
                    }
                },error: function(xhr, status) {
                    msg_box_alert(xhr.responsetext);
                }
            });
        }
    });
}

function quitar_supervision(id) {
    var formData = new FormData();
    formData.append('mandoId',id);

    $.ajax({
        type: 'POST',
        url: 'api/Asignaejecutivo_quitar_supervision',
        contentType:false,
        processData:false,
        data: formData,
        success: function(json) {
            if (json.success == 1) {
                $('#caja_secundaria').remove();
                $("#boton_asignar").trigger('click');
            } else {
                msg_box_alert('CAGO ESTA WEA');
            }
        }
    })
}
function asignar_supervision(id,id_super) {
    var formData = new FormData();
    formData.append('mandoId',id);
    formData.append('mandoIdSuper',id_super);

    $.ajax({
        type: 'POST',
        url: 'api/Asignaejecutivo_asignar_supervision',
        contentType:false,
        processData:false,
        data: formData,
        success: function(json) {
            if (json.success == 1) {
                $('#caja_secundaria').remove();
                $("#boton_asignar").trigger('click');
            } else {
                msg_box_alert('CAGO ESTA WEA');
            }
        }
    })
}
