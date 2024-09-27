<?php
session_start();

// Verifica si el array de productos está inicializado en la sesión
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = array();
}

// Si el botón 'Agregar Producto' ha sido presionado
if (isset($_POST['agregar'])) {
    $producto = $_POST['producto'];
    if (!empty($producto)) {
        // Añade el producto al array de productos en la sesión
        $_SESSION['productos'][] = htmlspecialchars($producto);
    }
    // Redirige de vuelta al formulario para seguir agregando productos
    header("Location: listaCompra.html");
    exit;
}

// Si el botón 'Finalizar' ha sido presionado
if (isset($_POST['finalizar'])) {
    // Redirige a la página que muestra la lista final
    header("Location: mostrarLista.php");
    exit;
}
?>
