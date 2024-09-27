<?php
$numero = $_POST['num'];
for ($i = 1; $i <= 10; $i++) {
    echo "$numero * " . $i . " = " . $numero * $i . "<br>";
}
