function cargaBloque(bloque) {
    $('#bloque').val(bloque);
}

function cargaComuna(comuna) {
    $('#comuna').val(comuna);
}

function sinmoradores(method, api_rest, formulario, accion, accion_redirect) {
    switch (api_rest) {
        case "nueva_ot_sinmoradores":
            title = "Registrar OT Sin Moradores";
            break;
        case "modificar_ot_sinmoradores":
            title = 'Modificar OT Sin Moradores';
            break;
            // -------------------------------------------------------
    }
    $.ajax({
        type: method,
        url: 'api/' + api_rest,
        data: $('#' + formulario).serialize(),
        success: function (json) {
            msg_box_alert(json.success, title, json.message, accion, accion_redirect);
        },
        error: function (xhr, status) {
            msg_box_alert(99, title, xhr.responseText);
        }
    });
}

$('#btningresar').click(function (e) {
    e.defaultPrevented;
    sinmoradores("POST", "nueva_ot_sinmoradores", 'formmotsm', 'redirect', 'sinmoradores/listar');
});
$('#btnmodificar').click(function (e) {
    e.defaultPrevented;
    sinmoradores("POST", "modificar_ot_sinmoradores", 'formModificarsm', 'redirect', 'sinmoradores/listar');
});
$('#idorden').focusout(function (event) {
    if (!!$('#idorden').val().trim() != false) {
        var formData = new FormData();
        var id = $('#idorden').val();
        formData.append('orden', id);
        $.ajax({
            type: "POST",
            url: "api/sinmoradores_buscar_norden",
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                var bloque = data.bloque;
                if (data.success == 1) {
                    $.confirm({
                        escapeKey: 'cancel',
                        icon: 'fa fa-warning',
                        title: 'Orden Tecnica!',
                        content: data.html,
                        type: 'blue',
                        buttons: {
                            formSubmit: {
                                text: 'ReIngresar',
                                btnClass: 'btn-blue',
                                action: function () {
                                    location.href = data.url;
                                }
                            },
                            cancel: {
                                text: 'Cancelar',
                                action: function () {
                                    $('#textidorden').val('');
                                    $('#textidorden').focus();
                                }
                            }
                        },
                    });
                } else if (data.success == 2) {
                    $.alert(data.message);
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                }
            },
            error: function (xhr, status) {
                msg_box_alert(99, 'Filtrar Ordenes', xhr.responseText);
            }
        });
    }
});

function des_marcar_ejecutivo(id) {
    contenido_div = $("#div-" + id).html();
    $("#div-" + id).html($("#cargador").html());
    var formData = new FormData();
    formData.append("id_user", id);
    formData.append("check", document.getElementById('check-' + id).checked ? 1 : 0);
    $.ajax({
        type: "POST",
        url: "api/sinmoradores_des_marcar_ejecutivo",
        contentType: false,
        processData: false,
        data: formData,
        success: function (json) {
            $("#div-" + id).html(contenido_div);
        },
        error: function (xhr, status) {
            $("#div-" + id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}

function quitar_Ordenes_ejecutivos(id) {
    $("#div-" + id).html($("#cargador").html());
    var formData = new FormData();
    formData.append("id_user", id);
    $.ajax({
        type: "POST",
        url: "api/sinmoradores_quitar_Ordenes_ejecutivos",
        contentType: false,
        processData: false,
        data: formData,
        success: function (json) {
            location.reload();
        },
        error: function (xhr, status) {
            $("#div-" + id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}

function cerrar_ordenes_sin_asignar() {
    div = 'div-distribuyePROD';
    $("#" + div).html($("#cargador").html());

    var formData = new FormData();
    $.ajax({
        type: "POST",
        url: "api/sinmoradores_cerrar_ordenes_sin_asignar",
        success: function (json) {
            msg_box_alert(json.success, "Mensaje", json.message, 'reload');
        },
        error: function (xhr, status) {
            $("#div-" + id).html(0);
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}

function distribuir_Ordenes() {
    div = 'div-distribuyePROD';
    $("#" + div).html($("#cargador").html());
    var formData = new FormData();

    $.ajax({
        type: "POST",
        url: "api/sinmoradores_Distribuir_Ordenes",
        success: function (json) {
            msg_box_alert(json.success, "Mensaje", json.message, 'reload');
        },
        error: function (xhr, status) {
            msg_box_alert(99, "Error", xhr.responseText);
        }
    });
}