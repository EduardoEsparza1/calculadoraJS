<?php

$operacion = $_GET['operacion'];
$resultado = $_GET['resultado'];

//echo $operacion;
//echo $resultado;
//echo $operacion === "" ? "Vacio": $var;
//echo $resultado === "" ? "Vacio": $var;

$user = "root";
$pass = "";
$host = "localhost";
$connection = mysqli_connect($host, $user, $pass);

if(!$connection) {
    echo "No se ha podido conectar con el servidor";
}else{
    echo "Hemos conectado al servidor" ;
}

$datab = "ejemplo";
$db = mysqli_select_db($connection,$datab);

/*if (!$db){
    echo "No se ha podido encontrar la Tabla";
}else{
    echo "Tabla seleccionada" ;
}*/

echo $operacion;

$insercion = "INSERT INTO calculadora (operacion,resultado) VALUES ('$operacion','$resultado')";
$result = mysqli_query($connection,$insercion);

if(!$result) {
    echo "No se ha podido realizar la insercion";
}
mysqli_close($connection);
echo "Fuera" ;
echo "Haciendo commits a lo we jjjsajsajs" ;
?>