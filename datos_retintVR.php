<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Formatear los datos
    $datos = "Nombre: $nombre, Apellido: $apellido, Correo: $email, Teléfono: $telefono\n";

    // Guardar los datos en un archivo de texto
    $archivo = "datos_contacto.txt";  // Archivo de texto donde se guardarán los datos
    file_put_contents($archivo, $datos, FILE_APPEND);  // Añadir los nuevos datos al final del archivo

    // Mensaje de éxito
    echo "Gracias por enviarnos tus datos.";
}
?>
