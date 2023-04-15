<?php
function concatenar ($cadena1, $cadena2){
    return "$cadena1 $cadena2";
}
$resultado = concatenar("Arsenal "," De Sarandi ");
echo $resultado;

function saludar($nombre,$apellido=""){
return "Hola $nombre $apellido";
}
$saludo=saludar("Gaston", "Bundio");
echo $saludo;

?>