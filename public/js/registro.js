$(document).ready(function(){
    $("#btn_registrar").click(function(){
        validator();
    });

    var validator = function(){
        $("#formRegistro").validate({
            rules: {
                "nombre": {
                    required: true,
                    minlength: 3,
                    maxlength: 15
                },
                "correo": {
                    required: true,
                    email: true
                },
                "password": {
                    required: true,
                    minlength: 6,
                    maxlength: 15
                },
                "password2": {
                    required: true,
                    minlength: 6,
                    maxlength: 15,
                    equalTo: "#password"
                }
            },
            messages: {
                "nombre": {
                    required: "Por favor ingrese su nombre",
                    minlength: "El nombre debe tener al menos 3 caracteres",
                    maxlength: "El nombre debe tener como maximo 15 caracteres"
                },
                "correo": {
                    required: "Por favor ingrese su correo",
                    email: "Por favor ingrese un correo valido"
                },
                "password": {
                    required: "Por favor ingrese su contraseña",
                    minlength: "La contraseña debe tener al menos 6 caracteres",
                    maxlength: "La contraseña debe tener como maximo 15 caracteres"
                },
                "password2": {
                    required: "Por favor ingrese su contraseña",
                    minlength: "La contraseña debe tener al menos 6 caracteres",
                    maxlength: "La contraseña debe tener como maximo 15 caracteres",
                    equalTo: "Las contraseñas no coinciden"
                }
            },
            ignore: [],
            errorClass: "invalid-feedback animated fadeInUp",
            errorElement: "div",
            errorPlacement: function(e, a) {
                jQuery(a).parents(".mb-3").append(e);
            },
            highlight: function(e) {
                jQuery(e).closest(".mb-3").removeClass("is-invalid").addClass("is-invalid");
            },
            success: function(e) {
                jQuery(e).closest(".mb-3").removeClass("is-invalid"), jQuery(e).remove();
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                var formData = new FormData($("#formRegistro")[0]);

                $.ajax({
                    url : base_url + '/registro-usuario',
                    type : 'POST',
                    data : formData,
                    dataType : 'JSON',
                    cache : false,
                    contentType : false,
                    processData : false,
                    beforeSend: function(data){
                        //$("#page-loader").fadeIn('fast');
                    },
                    success : function(data){
                        //$('#page-loader').fadeOut('fast');
                        if(data.respuesta === "si"){
                            $("#formRegistro")[0].reset();
                            $('#msjToastSuccess').html(data.mensaje);
                            $('#regUsuarioToast').toast('show');
                        }else if(data.respuesta === "no"){
                            $('#msjToastError').html(data.mensaje);
                            $('#errorUsuarioToast').toast('show');
                        }
                    }
                });
            }
        });
    }
});