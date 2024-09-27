<?php
$km = $_POST['km'];
$speed = $_POST['speed'];
$solucion = $km / $speed;
echo "Tardarás en recorrer " . $km . "km a " . $speed . "km/h tardarás $solucion horas";
