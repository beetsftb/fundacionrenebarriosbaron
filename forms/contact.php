<?php


$email_to = "fundacionrenebaron@gmail.com";
$email_subject = "Contacto desde el sitio web";
$email_from = $_GET['email']  ;


$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " .$_GET['name'] . "\n";
$email_message .= "Email: " .$_GET['email'] . "\n";
$email_message .= "Consulta: " .$_GET['message'] . "\n";



$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "�0�3El formulario se ha enviado con ��xito!";


header("Location: index.php");

?>

