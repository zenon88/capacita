<?php 
include '../model/mnpBDsas.class.php';
$id_registrado=$_POST['id_registrado'];

class respuesta {
 public $success;
 public $id_registrado;
 public $mensaje;
 public $exito;
}
$respuesta = new respuesta();

 
 $usr=new mnpBD('tbl_usuarios');
 
  
  
  if ($usr->delete("Id_usuario=".$id_registrado)) {
    $respuesta->success = true;
    $respuesta->id_registrado = $id_registrado;
	 $respuesta->mensaje="Usuario borrado correctamente";
    $respuesta->exito = 1;
  }else{
    $respuesta->success = false;
    $respuesta->id_pregunta = $id_registrado;
    $respuesta->exito = 0;
  }
                
echo json_encode($respuesta);

?>