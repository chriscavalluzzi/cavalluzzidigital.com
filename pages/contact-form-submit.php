<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // load composer's autoloader for PHPMailer
    require '/var/www/vendor/autoload.php';

    // constants
    define("SENDER_NAME","Cavalluzzi Digital, LLC");
    define("SENDER_ADDRESS","contact@cavalluzzidigital.com");

    // retrieve and sanitize form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email_address = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);

    // PHPMailer object to handle sending email
    $mail = new PHPMailer(true);

    try {

        // build HTML email body
        $bodyHTML   = <<<HEREDOC
        <html>
            <body style="font-family:arial;font-size:18px;background-color:hsl(0,0%,10%);color:hsl(0,0%,100%);margin:0;padding-left:15%;padding-right:15%;">
                <div style="max-width:800px;margin:auto;padding:3em 0;">
                    <img style="display:block;margin:auto;margin-bottom:2em;" src="https://cavalluzzidigital.com/images/logos/CDL-Icon-38px.png">
                    <div style="text-align:center;font-size:1.5em;font-weight:600;margin-top:18px;margin-bottom:36px;">
                        Thank you for contacting Cavalluzzi Digital, LLC!
                    </div>
                    <div style="text-align:left;margin-bottom:36px;">
                        We will respond within 24 hours. Feel free to reply to this message if you would like to add any additional information in the meantime.
                    </div>
                    <div style="border-bottom:1px solid hsl(0,0%,50%);margin-bottom:36px;"></div>
                    <div style="font-weight:600">$name</div>
        HEREDOC;
        if (! empty($phone)) {
            $bodyHTML .= '<div>' . $phone . '</div>';
        }
        $bodyHTML .= <<<HEREDOC
                    <br>
                    <div>$message</div>
                </div>
            </body>
        </html>
        HEREDOC;

        // build plain-text email body
        $bodyPlain = <<<HEREDOC
        Thank you for contacting Cavalluzzi Digital, LLC!
        
        We will respond within 24 hours. Feel free to reply to this message if you would like to add any additional information in the meantime.
        
        $name
        $phone

        $message
        HEREDOC;

        // server settings
        $mail->isSMTP();
        $mail->Host = (require '/var/www/config/cdl-mail-host.php');
        $mail->SMTPAuth = true;
        $mail->Username = (require '/var/www/config/cdl-mail-username.php');
        $mail->Password = (require '/var/www/config/cdl-mail-secret.php');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port  = 465;

        // recipients
        $mail->setFrom(SENDER_ADDRESS, SENDER_NAME);
        $mail->addAddress($email_address);
        $mail->addReplyTo(SENDER_ADDRESS, SENDER_NAME);
        $mail->addBCC(SENDER_ADDRESS);

        // content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $bodyHTML;
        $mail->AltBody = $bodyPlain;

        // send email
        $mail->send();

        // serve success page
        header("LOCATION: https://cavalluzzidigital.com/contact-success");
        include 'contact-success.php';

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }

?>