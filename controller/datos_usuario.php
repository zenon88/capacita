<?php
include '../model/mnpBDsas.class.php';
$id_registrado=$_POST['id_registrado'];
$sql_registrados2="SELECT * FROM tbl_usuarios where Id_usuario='".$id_registrado."'";
$registrados2  = $bd->ExecuteE($sql_registrados2);
foreach ($registrados2 as &$registrado2) {
	$html=' <form id="form-registro" class="group" autocomplete="nope" action="" method="POST" onsubmit="return false;" accept-charset="utf-8">
								<div class="form-group">
								  <div class="col-md-12">
									<label class="col-form-label">Nombre</label>
									<input class="form-control" type="text" name="nombre-edit" id="nombre-edit" value="'.$registrado2['Nombre_usuario'].'">
								  </div>
									
								 </div>
								 <div class="form-group">
								  <div class="col-md-12">
									<label class="col-form-label">Apellido Paterno</label>
									<input class="form-control" type="text" name="apellidop-edit" id="apellidop-edit" value="'.$registrado2['Apellp_usuario'].'">
								  </div>

								  <div class="col-md-12">
									<label class="col-form-label">Apellido Materno</label>
									<input class="form-control" type="text" name="apellidom-edit" id="apellidom-edit" value="'.$registrado2['Apellm_usuario'].'">
								  </div>
								 </div>

								 <div class="form-group">
								   <div class="col-md-12">
									 <label class="col-form-label">Correo</label>
									 <input type="email" name="email-edit" id="email-edit" class="form-control" readonly value="'.$registrado2['Email_usuario'].'">
								   </div>
								 </div>
								 <input type="hidden" class="form-control" value="'.$registrado2['Id_usuario'].'" id="id_registrado-edit" name="id_registrado-edit" >
								 <div class="col-md-12" style="text-align:center">
								 	<button type="button" class="btn btn-primary" id="btn-editar" onclick="valida_edita()">Guardar</button>
									</div>
								</form>';
												
}
echo $html;
?>