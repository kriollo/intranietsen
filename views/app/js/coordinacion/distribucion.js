    function seleccionar_bloque(){
        if ($('#selectbloque').val()== '--' ){
            $('#select_bloque').html("")
        }else{
            $.ajax({
                type : 'POST',
                url : 'api/Mdlcoordinacion_seleccionar_bloque',
                data : $('#form_bloques').serialize(),
                success : function(json) {
                    if ( json.success == 1 ){
                        $('#select_bloque').html(json.message)
                    }else{
                        $('#select_bloque').html("")
                    }
                },
                error : function(xhr, status) {
                    msg_box_alert(99,'Error',xhr.responseText);
                }
            });
        }
    }
    function marcar_ejecutivo(marca){
        var formData = new FormData();
        formData.append('id_user',marca);
        if (true == document.getElementById('check-'+marca).checked) estado=1; else estado=0;
        formData.append('estado',estado)
        $.ajax({
            type : 'POST',
            url : 'api/Mdlcoordinacion_marcar_ejecutivo',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                //msg_box_alert(json.success,'Mensaje',json.message);
            },
            error : function(xhr, status) {
                msg_box_alert(99,'Error',xhr.responseText);
            }
        });
    }
    function distribuir_ordenes(){
        if ($('#selectbloque').val() != '--' ){
            var formData = new FormData();
            formData.append('bloque',$('#selectbloque').val())
            $.ajax({
                type : 'POST',
                url : 'api/Mdlcoordinacion_distribuir_ordenes',
                contentType:false,
                processData:false,
                data : formData,
                success : function(json) {
                    if ( json.success == 1 ){
                        $('#select_bloque').html(json.message)
                    }else{
                        $('#select_bloque').html("")
                    }
                },
                error : function(xhr, status) {
                    msg_box_alert(99,'Error',xhr.responseText);
                }
            });
        }
    }
