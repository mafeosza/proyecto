$(document).ready(function()
{
   $('#name').blur(function(){
		  	
	var name = $(this).val();			
	
      if(name==''){
      	
        $('#name').addClass('error_jquery'); 
      	$('#error1').html('El campo Nombre es requerido'); 
      }else{
      	
      	$('#name').removeClass('error_jquery');
      	$('#error1').empty();
      }
      	
  });
});

