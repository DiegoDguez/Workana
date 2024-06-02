<?php

$servidor="localhost"; //127.0.0.1
$baseDeDatos="workana";
$usuario = "root";
$password= "";

try {
    $conexion= new PDO("mysql:host=$sevidor;dbname=$baseDeDatos",$usuario,$password);
}catch(Exception $ex){
    echo $ex->getMessage();
}


?>