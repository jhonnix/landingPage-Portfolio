<?php
/*
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "portfolio_db"
);
$name = $_POST[`name`];
$Gmail = $_POST[`Gmail`];
$message = $_POST[`message`];

$sql = "INSERT INTO contacts(name, Gmail, message)
        VALUES('$name', '$Gmail', '$message')";

mysqli_query($conn, $sql);

echo "Message Sent Successfully!";
*/


if (%_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $Gmail = $_POST["Gmail"];
    $message = $_POST["message"];

    $to = "jhonnpetercapz@gmail.com"
    $subject = "New Contact from Message";
    $body = "Name: $name\nGmail: $Gmail\nMessage:\n$message";
    $headers = "From: $Gmail";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!"
    } else {
        echo "Failed to send message.";
    }
}

?>