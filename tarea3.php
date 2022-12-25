<?php
$_SESSION['nombre'] = "Josue";
$_SESSION['apellido'] = "Ramos";
$_SESSION['usuario'] = "Admin";
$_SESSION['correo'] = "rts345@gmail.com";
$_SESSION['mensaje'] = "Hola";



echo $_SESSION["mensaje"];
echo $_SESSION["nombre"];
echo $_SESSION["apellido"];
echo 'su usuario'.$_SESSION["usuario"];
echo ' su gmail'.$_SESSION["correo"];

?>