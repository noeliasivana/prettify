
<?php 
// Recibimos por POST los datos procedentes del formulario 

$nombr = $_POST["user"]; 
$nombre = strip_tags($nombr);    // Eliminamos la etiquetas que puedan existir 
$n_nombre = strlen($nombre);      // Contamos el numero de caracteres 

$pas = $_POST["pw"]; 
$pass = strip_tags($pas);        // Eliminamos la etiquetas que puedan existir 
$n_pass = strlen($pass);         // Contamos el numero de caracteres 

$total_car = $n_nombre * $n_pass;    // Si alguno de ellos vale 0, $total_car valdrá 0 

if ($total_car >= 1)  
{  
    // Abrimos la conexion a la base de datos 
    include("serv.php"); 
     
    $_GRABAR_SQL = "INSERT INTO admin (user,pw) VALUES ('$nombre','$pass')";  
    mysql_query($_GRABAR_SQL); 
     
    // Cerramos la conexion a la base de datos 
    include("cierra_conexion.php"); 
     
    // Confirmamos que el registro ha sido insertado con exito 
    echo '<script> alert("Usuario ha sido registrado con exito");</script>';
	echo '<script> window.location="ofertas.php"; </script>';
} 
else 
{ 
	echo '<script> alert("Los campos nombre y contraseña no pueden estar vacios.");</script>';
	echo '<script> window.location="registrar.php"; </script>';
} 
?>  