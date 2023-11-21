<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];

    // Correo al que se enviarán los datos
    $destinatario = "tu_correo@example.com";

    // Asunto del correo
    $asunto = "Nuevo formulario de contacto";

    // Mensaje del correo
    $mensaje = "Correo: $correo\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Teléfono: $telefono\n";

    // Cabeceras del correo
    $cabeceras = "From: $correo";

    // Enviar el correo
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Puedes redirigir a una página de confirmación si lo deseas
    header("Location: confirmacion.html");
    exit();
}
?>