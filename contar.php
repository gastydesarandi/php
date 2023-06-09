<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición
$aNotas = array(9, 8, 9.50, 4, 7, 8);

$aEmpleados = array();
$aEmpleados[] = array("dni" => 33300123, "nombre" => "David García", "bruto" => 85000.30);
$aEmpleados[] = array("dni" => 40874456, "nombre" => "Ana Del Valle", "bruto" => 90000);
$aEmpleados[] = array("dni" => 67567565, "nombre" => "Andrés Perez", "bruto" => 90000);
$aEmpleados[] = array("dni" => 75744545, "nombre" => "Victoria Luz", "bruto" => 90000);

$aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array("nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);


function contar($aArray){
    $cont = 0;
    foreach($aArray as $item){
        $cont++;
    }
    return $cont;
}

//Uso
echo "Cantidad de productos: " . contar($aProductos) . "<br>";
echo "Cantidad de pacientes: " . contar($aEmpleados) . "<br>";
echo "Cantidad de notas: " . contar($aNotas);

?>