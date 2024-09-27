<?php
session_start();

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Lista Final de Compras</title>";
echo "</head>";
echo "<body>";
echo "<h2>Lista de Compras Finalizada</h2>";

// Muestra la lista de productos almacenados en la sesión
if (isset($_SESSION['productos']) && !empty($_SESSION['productos'])) {
    echo "<ul>";
    foreach ($_SESSION['productos'] as $producto) {
        echo "<li>" . htmlspecialchars($producto) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No se han agregado productos.</p>";
}

// Destruye la sesión para limpiar la lista de productos
session_unset();
session_destroy();

// Botón para regresar al formulario
echo '<br><a href="index.html">Agregar más productos</a>';
echo "</body>";
echo "</html>";
?>
