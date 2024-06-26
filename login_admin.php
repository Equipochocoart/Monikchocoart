<?php
// Verificar la clave del administrador
if (isset($_POST['clave']) && $_POST['clave'] === '12345') {
    // Redirigir al panel de administración si la clave es correcta
    header('Location: panel_admin.php');
    exit;
} else {
    // Si la clave es incorrecta, mostrar un mensaje de error
    echo '<h1>Clave incorrecta. Intenta nuevamente.</h1>';
}
?>

