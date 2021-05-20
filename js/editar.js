function modaleditar(id_registrado)
{
        var modal = document.getElementById("tvesModal");
        var span = document.getElementsByClassName("close")[0];
        var body = document.getElementsByTagName("body")[0];
        modal.style.display = "block";
        body.style.height = "100%";
        body.style.overflow = "hidden";
		$.ajax({
			type: 'POST',
			url: 'controller/datos_usuario.php',
			data: {id_registrado:id_registrado}
			})
			.done(function(r)
			{
				$("#datosusuario").html(r);
				
			});
}

function cerrar1()
{
      var modal = document.getElementById("tvesModal");
      modal.style.display = "none";
      var body = document.getElementsByTagName("body")[0];
      modal.style.display = "block";
      modal.style.display = "none";
      body.style.position = "inherit";
      body.style.height = "auto";
      body.style.overflow = "visible";
 }
 function valida_edita()
 {
	 if($("#nombre-edit").val()=="")
		{
			toastr.error('Debe de capturar el nombre');
			$("#nombre-edit").focus();
		}
		else
		if($("#apellidop-edit").val()=="")
		{
			toastr.error('Debe de capturar el apellido paterno');
			$("#apellidop-edit").focus();
		}
		else
		if($("#apellidom-edit").val()=="")
		{
			toastr.error('Debe de capturar el  apellido materno');
			$("#apellidom-edit").focus();
		}
		else
		if($("#email-edit").val()=="")
		{
			toastr.error('Debe de capturar el email');
			$("#email-edit").focus();
		}
		{
			update();
		}
 }

 function update(){
      $.ajax({
          url: 'controller/editar_registrados.php',
          type: 'POST',
          dataType: 'json',
          data: {
			id_registrado: $("#id_registrado-edit").val(), 
            nombre: $("#nombre-edit").val().toUpperCase(),
            apellidop: $("#apellidop-edit").val().toUpperCase(),
            apellidom: $("#apellidom-edit").val().toUpperCase(),
            email: $("#email-edit").val()
          }
      })
      .done(function(json) {

         if(json.succes){
            alert(json.mensaje);            
            window.location.href = json.redireccion;           
         }else{
            alert(json.mensaje);
            window.location.href = json.redireccion; 
         }
            
      })

      .fail(function() {
         toastr.success("Usuario Actualizado correctamente");
		location.reload();
      })

      .always(function() {
      });
   }
   
   function borrar(id_registrado)
   {
	     var mensaje;
		 var opcion = confirm("Está seguro de borrar el registro");
		if (opcion == true)
		{
			  $.ajax({
          url: 'controller/borrar_registrado.php',
          type: 'POST',
          dataType: 'json',
          data: {
			id_registrado: id_registrado
          }
      })
      .done(function(json) {

         if(json.succes){
            toastr.success("Usuario borrado correctamente");
			location.reload();           
               
         }else{
            toastr.success("Usuario borrado correctamente");
			location.reload(); 
          
         }
            
      })

      .fail(function() {
         toastr.success("Usuario borrado correctamente");
		//location.reload();
      })

      .always(function() {
      });
   }
} 
   