<?php
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $message .= "<br><br>Mail wysłany z adresu: $email";
    $to = "daniel.milkiewicz@outlook.com";
    $subject = "Fotografia ślubna - wiadomość";
    $code = "confirm";
    $headers = 'Content-Type: text/html; charset=UTF-8';
    mail($to, $subject, $message, $headers);
    header("Location: http://bartekulatowski.pl?code=" . urlencode($code));
?>