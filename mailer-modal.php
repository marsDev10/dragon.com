<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = $_POST['tel'];
        $message = trim($_POST["message"]);

        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        $recipient = "dragoncem@in.parseur.com";

        $subject = "Nuevo contacto de dragoncem.com";

        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Telefono: $phone\n\n";
        $email_content .= "Message:\n$message\n";

        $email_headers = "From: $name <$email>";

        if (mail($recipient, $subject, $email_content, $email_headers)) {
            http_response_code(200);
            // echo "Thank You! Your message has been sent.";
            header("Location: thanks.html");
            exit();
        } else {
            http_response_code(500);
            echo "Oops! Algo salio mal con el envio de tus datos.";
        }

    } else {
        http_response_code(403);
        echo "Algo salio mal con el envio de tus datos, intentalo de nuevo.";
    }

?>