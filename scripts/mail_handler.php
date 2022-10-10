<?php 
if(isset($_POST['submit'])){
    $to = "alfonso.nava@extrategia.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $company = $_POST['company'];
    $subject = "Insight Research";
    $message = $name . " de " . $company . " completó el formulario";

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Gracias por haber dejado tus datos y por participar en la campaña de Giveaway de Insight Research by Extrategia Data & Insights";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
