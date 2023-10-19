<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please complete the form correctly.";
        exit;
    }

    $to = "samuel24titan@gmail.com";
    $subject = "Portfolio Contact: $name";
    $headers = "From: $name <$email>";

    mail($to, $subject, $message, $headers);
    echo "Thank you! Your message has been sent.";
} else {
    echo "There was a problem with your submission. Please try again.";
}
?>
