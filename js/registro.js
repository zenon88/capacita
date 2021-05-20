$(function(){
    $("#btn-registro").click(function()
	{
		if($("#nombre").val()=="")
		{
			toastr.error('Debe de capturar el nombre');
			$("#nombre").focus();
		}
		else
		if($("#apellidop").val()=="")
		{
			toastr.error('Debe de capturar el apellido paterno');
			$("#apellidop").focus();
		}
		else
		if($("#apellidom").val()=="")
		{
			toastr.error('Debe de capturar el  apellido materno');
			$("#apellidom").focus();
		}
		else
		if($("#email-registro").val()=="")
		{
			toastr.error('Debe de capturar el email');
			$("#email-registro").focus();
		}
		else
		if(validarEmail($("#email-registro").val())==0){
			toastr.error('Email incorrecto');
			$("#email-registro").focus();
		}
		else
		{
			inserta();
		}
    });
});
function inserta(){
      $.ajax({
          url: 'controller/guardar_registrado.php',
          type: 'POST',
          dataType: 'json',
          data: {
            nombre: $("#nombre").val().toUpperCase(),
            apellidop: $("#apellidop").val().toUpperCase(),
            apellidom: $("#apellidom").val().toUpperCase(),
            email: $("#email-registro").val()
          }
      })
      .done(function(json) {

         if(json.id_registrado!=0){
           
            toastr.success(json.mensaje);
         }else{
            toastr.error(json.mensaje);
         }
            
      })

      .fail(function() {
        toastr.success("Usuario agregado correctamente");
		location.reload();
      })

      .always(function() {
         
      });
   }

function validarEmail(email)
{
      var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
      return re.test(email);
}


