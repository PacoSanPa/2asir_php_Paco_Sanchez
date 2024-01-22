<?php
// declarar en un array asosciativo las tres notas de un alumno. visualizar la media.


// Array asociativo con las notas del alumno
$notasAlumno = array(
    'nota1' => 7,
    'nota2' => 8,
    'nota3' => 9
);

// Calcular la media de las notas
$media = array_sum($notasAlumno) / count($notasAlumno);

// Mostrar la media
echo "La media de las notas es: $media";

?>
