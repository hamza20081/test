<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "ha.zaghloul08@gmail.com"; // Ersetze dies mit deiner E-Mail-Adresse
    $subject = "Neue Nachricht vom Friseurladen";
    $body = "Name: $name\nEmail: $email\nNachricht:\n$message";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Vielen Dank für Ihre Nachricht, $name! Wir werden uns bald bei Ihnen melden.";
    } else {
        echo "Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";
    }
} else {
    echo "Ungültige Anforderung.";
}
?>
