$(document)
    .ready(function() {
        $("#enviar")
            .click(function() {
                $.ajax({
                    url: "conexion.php",
                    method: "POST",
                    headers: {
                        'Access-Control-Allow-Origin': '*'
                    },
                    data: $("#formulario").serialize(),
                    success: function(respuesta) {
                        alert("Perfecto, los datos se han enviado correctamente!");
                    }
                });
            });
    });