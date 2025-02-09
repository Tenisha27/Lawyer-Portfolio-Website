<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'nithinkamath111@gmail.com'; 
        $mail->Password = 'ccox sihp qsgu rlmc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('nithinkamath111@gmail.com', 'Contact Form');
        $mail->addAddress('maythrispoojary@gmail.com'); 

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";
        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

        $mail->send();
        $status = "success";
        $message = "Message has been sent successfully.";
    } catch (Exception $e) {
        $status = "error";
        $message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        error_log("Mailer Error: {$mail->ErrorInfo}"); // Log the error
    }
} else {
    $status = "error";
    $message = "Invalid request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Message Status</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Belleza:regular');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Belleza', sans-serif;
}

body {
    display: grid;
    place-items: center;
    min-height: 100vh;
    background-color: #0e0e0e;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    width: 400px;
    aspect-ratio: 1;
    border: 2px solid #fff;
    text-align: center;
    padding: 4rem 0;
    color: #fff;
    border-radius: 1rem;
    box-shadow: 0 0 .7rem rgba(0, 0, 0, 0.2);
    background: #fff;
}

.card i {
    font-size: 8rem;
}

.success {
    background-image: linear-gradient(to top right, #9acd32, #00ffaa);
    box-shadow: 0 0 .7rem rgba(0, 255, 0, 0.6);
    color: #fff;
}

.error {
    background-image: linear-gradient(to top right, #ff5773, #ff0000);
    box-shadow: 0 0 .7rem rgba(255, 0, 0, 0.6);
    color: #fff;
}

.card h2 {
    font-size: 3rem;
    text-transform: uppercase;
    letter-spacing: .5rem;
    margin: 1rem 0;
}

.card p {
    font-size: 1.3rem;
}

.card a.button {
    display: inline-block;
    margin-top: 1rem;
    font-size: 1.2rem;
    background-color: #fff;
    color: #000;
    text-decoration: none;
    border: 2px solid;
    padding: .7rem 2rem;
    border-radius: 100vw;
    cursor: pointer;
    font-weight: 600;
    letter-spacing: .1rem;
    text-transform: uppercase;
    transition: 200ms ease-in-out background-color, 200ms ease-in-out color, 200ms ease-in-out border-color;
}

.success .button {
    border-color: #00a500;
}

.error .button {
    border-color: #ff0000;
}

.card a.button:hover {
    color: #fff;
    border-color: #fff;
}

.success .button:hover {
    background-color: #9acd32;
}

.error .button:hover {
    background-color: #ff0000;
}

    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="card <?php echo $status; ?>">
            <i class="fas <?php echo $status == 'success' ? 'fa-smile-beam' : 'fa-frown'; ?>"></i>
            <h2><?php echo ucfirst($status); ?>!</h2>
            <p><?php echo $message; ?></p>
            <a href="contact.php" class="button">Go Back</a>
        </div>
    </div>
</body>
</html>
