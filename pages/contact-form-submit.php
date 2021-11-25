<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Load composer's autoloader for PHPMailer
    require '/var/www/vendor/autoload.php';

    // Process form data
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $email_body="Name: $name <br> Phone: $phone <br> Message: $message";


    // Attempt to send email via PHPMailer
    $mail = new PHPMailer(true);

    try {

        // Server settings
        $mail->isSMTP();
        $mail->Host       = (require '/var/www/config/cdl-mail-host.php');
        $mail->SMTPAuth   = true;
        $mail->Username   = (require '/var/www/config/cdl-mail-username.php');
        $mail->Password   = (require '/var/www/config/cdl-mail-secret.php');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('contact@cavalluzzidigital.com', 'Cavalluzzi Digital, LLC');
        $mail->addAddress($email_address);
        $mail->addReplyTo('contact@cavalluzzidigital.com', 'Cavalluzzi Digital, LLC');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $email_body;

        $mail->send();
        echo 'Message has been sent';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }

?>