<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = strip_tags(trim($_POST["name"]));
	// 			$name = str_replace(array("\r","\n"),array(" "," "),$name);
    //     $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    //     $phone = trim($_POST["tel"]);
    //     $message = trim($_POST["message"]);

    //     if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         http_response_code(400);
    //         echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    //         exit;
    //     }
    //     $recipient = "lalfaro@dragoncem.com";

    //     $subject = "New contact from $name";

    //     $email_content = "Name: $name\n";
    //     $email_content .= "Email: $email\n\n";
    //     $email_content .= "Telefono: $phone\n\n";
    //     $email_content .= "Message:\n$message\n";

    //     $email_headers = "From: $name <$email>";

    //     if (mail($recipient, $subject, $email_content, $email_headers)) {
    //         http_response_code(200);
    //         echo "Thank You! Your message has been sent.";
    //     } else {
    //         http_response_code(500);
    //         echo "Oops! Something went wrong and we couldn't send your message.";
    //     }

    // } else {
    //     http_response_code(403);
    //     echo "There was a problem with your submission, please try again.";
    // }

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $telefono = $_POST['tel'];
    $comentarios = $_POST['message'];
    $asunto = "Lead generado en sitio web";

    $header = 'From: dragoncem.com' . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8";

    $message = "Cuerpo del mensaje: \r\n\r\n";
    $message .= "Sitio Web DragonCEM \r\n";
    $message .= "-------Datos del lead------- \r\n";
    $message .= "Nombre: " . $nombre . " \r\n";
    $message .= "Email: " . $email . " \r\n";
    $message .= "Telefono: " . $telefono . " \r\n";
    $message .= "Comentarios: " . $comentarios . " \r\n";
    $message .= "Datos enviados desde el formulario de contacto en el sitio web de DRAGONCEM";

    $para = 'lalfaro@dragoncem.com';

    mail($para, $asunto, utf8_decode($message), $header);
    echo '<script type="text/javascript">
    alert("Lead registrado correctamente.");
    window.location.href="thanks.html";
    </script>'; 

?>
