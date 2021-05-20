<?php
include '../model/mnpBDsas.class.php';
$id_registrado=$_POST['id_registrado'];
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$email=$_POST['email'];
//-------------
class datos {
 public $success;
}
 
$respuesta = new datos();
$campos="Nombre_usuario,Apellp_usuario,Apellm_usuario,Email_usuario";
$valores=array($nombre,$apellidop,$apellidom,$email);
$condicion=" Id_usuario=".$id_registrado;
$act=new mnpBD('tbl_usuarios');
if($act->actualizar($campos,$valores,$condicion)) {
     
    $respuesta->success = true;
    $respuesta->mensaje="Datos actualizados correctamente.";
    $respuesta->redireccion="index.php";                

}else{
        $respuesta->success = false;
        $respuesta->mensaje="Error al actualizar";
        $respuesta->redireccion="";
    }


echo json_encode($respuesta);
?>