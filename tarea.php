<?php
$numeros = array(12, 34, 554, 123);
$suma = 0;
foreach ($numeros as $numero) {
    $suma += $numero;
}
// Obtener longitud
$cantidadDeElementos = count($numeros);
// Dividir, y listo
$promedio = $suma / $cantidadDeElementos;
echo "Promedio: $promedio";
?>