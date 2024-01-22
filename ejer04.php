<?php
// dado un numero de una variable, alterar el conenido de esa variable por el opuesto. con una funcion. num=5 sera num=-5
$numero=10;
//funciones
function Proceso (&$num) {
    $num = $num*(-1);
    return $num;
}

function Visualizar ($dato){
    echo $dato;
}
//Programa principal
Proceso ($numero);
Visualizar (Proceso($numero));



?>