<?php
$edad = $_POST['age'];
if ($edad < 12) {
    echo "Infante";
} elseif ($edad >= 12 && $edad <= 17) {
    echo "Adolescente";
} elseif ($edad >= 18 && $edad <= 60) {
    echo "Adulto";
} else {
    echo "Anciano";
}
