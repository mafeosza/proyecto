$(document).ready(function()
{
   $('#name').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#name').addClass('error_jquery'); 
      	$('#e1').html('El nombre es requerido'); 
      }else{
      	
      	$('#name').removeClass('error_jquery');
      	$('#e1').empty();
      }
  });

   $('#cedula').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#cedula').addClass('error_jquery'); 
      	$('#e2').html('La cedula es requerida'); 
      }else{
      	
      	$('#cedula').removeClass('error_jquery');
      	$('#e2').empty();
      }
  });

   $('#usuario').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#usuario').addClass('error_jquery'); 
      	$('#e3').html('El usuario es requerido'); 
      }else{
      	
      	$('#usuario').removeClass('error_jquery');
      	$('#e3').empty();
      }
  });

    $('#clave').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#clave').addClass('error_jquery'); 
      	$('#e4').html('La clave es requerida'); 
      }else{
      	
      	$('#clave').removeClass('error_jquery');
      	$('#e4').empty();
      }
  });

     $('#email').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#email').addClass('error_jquery'); 
      	$('#e6').html('El correo es requerido'); 
      }else{
      	
      	$('#email').removeClass('error_jquery');
      	$('#e6').empty();
      }
  });

//---------------------------------------
//Validacion registro de una empresa
//---------------------------------------

     $('#nombreEmp').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#nombreEmp').addClass('error_jquery'); 
      	$('#er1').html('El nombre es requerido'); 
      }else{
      	
      	$('#nombreEmp').removeClass('error_jquery');
      	$('#er1').empty();
      }
  });

     $('#usuarioEmp').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#usuarioEmp').addClass('error_jquery'); 
      	$('#er2').html('El usuario es requerido'); 
      }else{
      	
      	$('#usuarioEmp').removeClass('error_jquery');
      	$('#er2').empty();
      }
  });

      $('#claveEmp').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#claveEmp').addClass('error_jquery'); 
      	$('#er3').html('La clave es requerida'); 
      }else{
      	
      	$('#claveEmp').removeClass('error_jquery');
      	$('#er3').empty();
      }
  });

$('#telefonoEmp').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#telefonoEmp').addClass('error_jquery'); 
      	$('#er4').html('El telefono es requerido'); 
      }else{
      	
      	$('#telefonoEmp').removeClass('error_jquery');
      	$('#er4').empty();
      }
  });  

  $('#emailEmp').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#emailEmp').addClass('error_jquery'); 
      	$('#er5').html('El correo es requerido'); 
      }else{
      	
      	$('#emailEmp').removeClass('error_jquery');
      	$('#er5').empty();
      }
  });  

  $('#nombreResp').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#nombreResp').addClass('error_jquery'); 
      	$('#er6').html('El nombre del responsable es requerido'); 
      }else{
      	
      	$('#nombreResp').removeClass('error_jquery');
      	$('#er6').empty();
      }
  });
});
