    function execute_accion_despacho(method,api_rest,formulario,accion,accion_redirect){
        switch(api_rest) {
            case "registra_nueva_actividad":
                title='Registro de Actividad';
            break;
            case "registra_nuevo_bloque":
                title='Registro de Bloque';
            break;
        }
        $.ajax({
            type : method,
            url : 'api/'+api_rest,
            data : $('#'+ formulario).serialize(),
            success : function(json) {
                msg_box_alert(json.success,title,json.message,accion,accion_redirect);
            },error : function(xhr, status) {
                msg_box_alert(99,title,xhr.responseText);
            }
        });
    }
    function asignar(dat){
        num="id-"+dat;
        num2=document.getElementById(num).value

        var formData=new FormData();
        formData.append('orden',dat);
        formData.append('tecnicos',num2);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_asignar_tecnico',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                if(json.success==1){
                    var dax= json.message2

                    // $("#idasignar-"+dax+" option:contains('Sin Asignar')").text("Asignado");
                    // $("#idasignar-"+dax).prop("disabled",true);
                    $("#idasignar-"+dax).val(1);
                    $("#idasignar-"+dax).prop('disabled',false);
                }else{
                    msg_box_alert(json.success,'Atencion',json.message);
                    var dax=json.message2;
                    $("#id-"+dax).val('0');
                    //$.alert("TECNICO EJECUTANDO ORDEN")
                }
            },error : function(xhr, status) {
                msg_box_alert(99,title,xhr.responseText);
            }
        });
    }
    function asignarestado(asig){
        asignar="idasignar-"+asig;
        asignacion=document.getElementById(asignar).value

        var formData=new FormData();
        formData.append('orden', asig);
        formData.append('estado', asignacion);
        $.ajax({
            type : "POST",
            url : 'api/Mdldespacho_cambiar_estado',
            contentType:false,
            processData:false,
            data : formData,
            success : function(json) {
                msg_box_alert(json.success,'datos',json.message);
            },error : function(xhr, status) {
                msg_box_alert(99,'error',xhr.responseText);
            }
        });
    }
