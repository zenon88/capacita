<?php
include '../model/mnpBDsas.class.php';
$sql_registrados2="SELECT * FROM tbl_usuarios";
$registrados2  = $bd->ExecuteE($sql_registrados2);
$html1='<table id="example" class="display nowrap responsive" style="width:100%">
		<thead>
			<tr>
				<th>#</th>
				<th>Correo</th>
				<th>Nombre</th>
				<th>Apellido paterno</th>
				<th>Apellido materno</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>';
		$html="";
foreach ($registrados2 as &$registrado2) {
	$html.='<tr>
			<td>'.$registrado2['Id_usuario'].'</td>
			<td>'.$registrado2['Email_usuario'].'</td>
			<td>'.$registrado2['Nombre_usuario'].'</td>
			<td>'.$registrado2['Apellp_usuario'].'</td>
			<td>'.$registrado2['Apellm_usuario'].'</td>
			<td><a class="btn btn-info" href="#" style="padding-left:10px" onclick=modaleditar('.$registrado2['Id_usuario'].')>Editar</a><a  style="padding-left:10px"  class="btn btn-info" href="#" onclick=borrar('.$registrado2['Id_usuario'].')>Borrar</a></td>
			</tr>';
	
	
}
$html2='</tbody>
	</table>';
echo $html1.$html.$html2;
?>