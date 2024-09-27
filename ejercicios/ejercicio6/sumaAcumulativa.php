<?php
$numero = $_POST['numero'];
$resultado = 0;
for ($i = 0; $i <= $numero; $i++) {
    $resultado += $i;
}
print($resultado);
