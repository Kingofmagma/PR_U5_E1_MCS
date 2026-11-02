<?php

$empleados = [
    'Juan' => ['horas' => 40, 'tarifa' => 15],
    'Perico' => ['horas' => 20, 'tarifa' => 25],
    'Andrés' => ['horas' => 45]
];

function calculaSalario($horas, $tarifa = 10) {
    if ($horas > 40) {
        return 40 * $tarifa + ($horas - 40) * $tarifa * 1.25;
    } else {
        return $horas * $tarifa;
    }
}

foreach ($empleados as $nombre => $datos) {
    $tarifa = $datos['tarifa'] ?? 10;
    $salario = calculaSalario($datos['horas'], $tarifa);
    echo "$nombre cobra $salario €<br>";
}

?>