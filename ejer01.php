<?php
// almacenar en un array las notas de un alumno. Visualizar las notas superiores a la media. 

// Array para almacenar las notas del alumno

$notasAlumno = array(7, 8, 9, 6, 8, 7);

// Función para calcular la media de un array

function Media($notas) {
    $totalNotas = count($notas);
    $sumaNotas = array_sum($notas);

    if ($totalNotas > 0) {
        return $sumaNotas / $totalNotas;
    } else {
        return 0;
    }
}



// Calcular la media de las notas
$media = Media($notasAlumno);

// Mostrar las notas superiores a la media
echo "Notas superiores a la media ($media): ";

foreach ($notasAlumno as $nota) {
    if ($nota > $media) {
        echo "$nota ";
    }
}

?>
