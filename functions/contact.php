<?php
if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    //Post data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //mail settings
    $to = "shuvo0904@gmail.com";
    $subject = $subject . "(Personal Portfolio)";
    $headers = 'From: '.$email. "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $body = "Name: $name \\r\
 Email: $email \\r\
 Message: $message";

    if (mail($to, $subject, $body, $headers)) {
        $feedback = '*Message sent! You will receive a reply shortly!';
    } else {
        $feedback = '*Message failed to send';
    }
} else {
    $feedback = 'Missing Params';
}

echo $feedback;