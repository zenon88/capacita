<?php
include '../model/mnpBDsas.class.php';
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$email=$_POST['email'];
$campos="Email_usuario,Nombre_usuario,Apellp_usuario,Apellm_usuario";
$valores= array(
    $email,
    $nombre,
    $apellidop,
    $apellidom
);


//-------------
class datos {
 public $success;
 public $id_registrado;
 public $mensaje;
}
 
$respuesta = new datos();

$sql_registrados2="SELECT * FROM tbl_usuarios WHERE Email_usuario='".$email."'";
$registrados2  = $bd->ExecuteE($sql_registrados2);
foreach ($registrados2 as &$registrado2) {}

if (!empty($registrado2)) {
    $respuesta->success = false;
    $respuesta->id_registrado = 0;
    $respuesta->mensaje="El correo que trata de registrar, ya fue registrado anteriormente, intente con otro correo.";
}else{

    $usr= new mnpBD("tbl_usuarios");
    if ($usr->insertar($campos,$valores))
	{
        $respuesta->success = true;
        $respuesta->id_registrado = 1;
        $respuesta->mensaje="Tu registro se realizo exitosamente.";
        
        

    }else{
        $respuesta->success = false;
        $respuesta->id_registrado = 0;
        $respuesta->mensaje="Error al registrarse, intente nuevamente si el error sigue enviar un correo a marco.gonzalez@grupolahe.com";
    }
}

echo json_encode($respuesta);
?>