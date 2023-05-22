<?php

define("RECAPTCHA_V3_SECRET_KEY", '6LeTJyomAAAAACkj192VipevCdn8Zo0zLlzsmLtw');
if (isset($_POST['email']) && $_POST['email']) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
} else {
    // set error message and redirect back to form... 
    header('location: ../index.html');
    exit;
}

$token = $_POST['token'];
$action = $_POST['action'];
// call curl to POST request 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
// verify the response 
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    // valid submission 
    // go ahead and do necessary stuff 

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $comentarios = $_POST['message'];

    $header = 'From: dragoncem.com' . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8";

    $message = "Cuerpo del mensaje: \r\n\r\n";
    $message .= "Sitio Web DragonCEM \r\n";
    $message .= "-------Datos del lead------- \r\n";
    $message .= "Nombre: " . $nombre . " \r\n";
    $message .= "Email: " . $correo . " \r\n";
    $message .= "Telefono: " . $telefono . " \r\n";
    $message .= "Comentarios: " . $comentarios . " \r\n";
    $message .= "Datos enviados desde el formulario de contacto en el sitio web de DRAGONCEM";

    $para = 'lalfaro@dragoncem.com';

    mail($para, $asunto, utf8_decode($message), $header);

} else {
    // spam submission 
    // show error message 
}

?>