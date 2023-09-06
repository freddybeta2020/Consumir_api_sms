let type = "text/javascript";
$(document).ready(function () {
    $("#btn_enviar").click(function (event) {
        event.preventDefault();
        var numero = $("#numeroCelular").val();
        var mensaje = $("#mensaje").val();

        var datos = new FormData;
        datos.append('numero' , numero);
        datos.append('mensaje', mensaje);

        $.ajax({
            type : "POST",
            url : "../../hablame/php/enviar.php",
            data : datos,
            contentType: false,
            processData: false,            
            success: function (response) {
                console.log(response);
              if (response == 1) {
                Swal.fire({
                    icon: "success",
                    title: "Envio Exitoso",
                    showConfirmButton: false,
                    timer: 1200,
                  }).then(function () {              
                    $("#formulario").submit();                                      
                  });
              }else if (response == 'Error al procesar envio') {
                Swal.fire({
                  icon: "error",
                  text: "Error al enviar el archivo.",
                });
              }  
            }
        })
        
    })
    
})