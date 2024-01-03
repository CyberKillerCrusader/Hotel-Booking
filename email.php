<?php 
    session_start();
    $Email = $_SESSION['usermail'];
    $Room = $_SESSION['roomtypee'];
    $amount = $_SESSION['Razorpay'];
    $Name = $_SESSION['namee'];
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings for Gmail
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'celestialpalace0@gmail.com';     // SMTP username
    $mail->Password   = 'belm tifd omgj bfsk';            // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, 'ssl' also accepted
    $mail->Port       = 587;                              // TCP port to connect to

    // Recipient
    $mail->setFrom('celestialpalace0@gmail.com', 'Celestial Palace');
    $mail->addAddress($Email, $Name);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the email';
    $mail->Body = "<p>Your room is booked!</p>
               <p>Room Type: $Room</p>
               <p>Payment done: $amount</p>
               <p>Thank you $Name for choosing Celestial Palace.</p>";
    $mail->AltBody = 'This is the plain text version for non-HTML mail clients';

    // Send the email
    $mail->send();
    echo "<script>window.location.href = '/home.php';</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
