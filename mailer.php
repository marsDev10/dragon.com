<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $sender = 'website@dragoncem.com';
        $phone = $_POST['tel'];
        $message = trim($_POST["message"]);
        $utmSource = $_POST['utmSource'];
        $utmMedium = $_POST['utmMedium'];

        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        $recipient = "dragoncem@in.parseur.com";

        $subject = "New contact from dragoncem.com";

        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Telefono: $phone\n\n";
        $email_content .= "Message:\n$message\n\n";
        $email_content .= "UTM Source: $utmSource\n";
        $email_content .= "UTM Medium: $utmMedium\n";

        $email_headers = "From: $name <$sender>";

        if (mail($recipient, $subject, $email_content, $email_headers)) {
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            http_response_code(500);
            echo "Oops! something was wrong.";
        }

    } else {
        http_response_code(403);
        echo "Something was wrong with your data, please! try again.";
    }

?>
