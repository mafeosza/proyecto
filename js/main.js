$(document).ready(function()
{
   //var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    $(".boton").click(function (){
           $(".error").remove();
           if( $(".name").val() == "" ){
               $(".name").focus().after("<span class='error'>Ingrese su nombre</span>");
                return false;
          }else if( $(".clave").val() == ""){
               $(".clave").focus().after("<span class='error'>Ingrese su clave</span>");
            return false;
        }
   });
    $(".name, .clave").keyup(function(){
        if( $(this).val() != "" ){
            $(".error").fadeOut();
            return false;
        }
    });

});

