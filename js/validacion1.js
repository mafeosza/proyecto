$(document).ready(function()
{
   $('#name').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#name').addClass('error_jquery'); 
      	$('#error1').html('El nombre es requerido'); 
      }else{
      	
      	$('#name').removeClass('error_jquery');
      	$('#error1').empty();
      }
  });

   	$('#pass').blur(function(){
		  	
	var pass = $(this).val();			
	
      if(pass==''){
      	
        $('#pass').addClass('error_jquery'); 
      	$('#errorp').html('La clave es requerida'); 
      }else{
      	
      	$('#pass').removeClass('error_jquery');
      	$('#errorp').empty();
      }
  });
//-------------------------------------------
   	//validacion capos registro producto
//-------------------------------------------
   	$('#urlFoto').blur(function(){
		  	
	var pass = $(this).val();			
	
      if(pass==''){
      	
        $('#urlFoto').addClass('error_jquery'); 
      	$('#ep1').html('La foto es requerida'); 
      }else{
      	
      	$('#urlFoto').removeClass('error_jquery');
      	$('#ep1').empty();
      }
  });

   	$('#nombre').blur(function(){
		  	
	var pass = $(this).val();			
	
      if(pass==''){
      	
        $('#nombre').addClass('error_jquery'); 
      	$('#ep2').html('El nombre es requerido'); 
      }else{
      	
      	$('#nombre').removeClass('error_jquery');
      	$('#ep2').empty();
      }
  });

   	$('#precio').blur(function(){
		  	
	var pass = $(this).val();			
	
      if(pass==''){
      	
        $('#precio').addClass('error_jquery'); 
      	$('#ep3').html('El precio es requerido'); 
      }else{
      	
      	$('#precio').removeClass('error_jquery');
      	$('#ep3').empty();
      }
  });

   	$('#usuario').blur(function(){
		  	
	var pass = $(this).val();			
	
      if(pass==''){
      	
        $('#usuario').addClass('error_jquery'); 
      	$('#ep4').html('El usuario es requerido'); 
      }else{
      	
      	$('#usuario').removeClass('error_jquery');
      	$('#ep4').empty();
      }
  });

   	$('#fechaCierre').blur(function(){
		  	
	var pass = $(this).val();			
	
      if(pass==''){
      	
        $('#fechaCierre').addClass('error_jquery'); 
      	$('#ep5').html('El usuario es requerido'); 
      }else{
      	
      	$('#fechaCierre').removeClass('error_jquery');
      	$('#ep5').empty();
      }
  });
});

