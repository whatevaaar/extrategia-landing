<?php
if (isset($_POST['submit'])) {
    $to = "alfonso.nava@extrategia.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $subject = "Insight Research";
    $message = $name . " de " . $company . " completó el formulario\n Contacto: " . $phone;

    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);
    echo " Gracias por tu interés en nuestro reporte EXTRATEGIA '10 tendencias de comunicación para sobresalir este 2023'. En breve lo recibirás por correo electrónico";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}
