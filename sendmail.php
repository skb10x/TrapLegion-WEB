<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'traplegion@solargentinotv.com.ar';
    $subject = 'Nuevo mensaje desde el formulario de contacto';
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo 'El mensaje se envió correctamente';
    } else {
        echo 'Hubo un error al enviar el mensaje';
    }
}
?>