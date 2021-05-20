function obtienedatos()
{
$.ajax({
	type:'POST',
	url:'controller/obtienedatos.php',
	success:function(r)
	{
		$("#datos").html(r);
		
	}
	});	
}
window.onload=obtienedatos();