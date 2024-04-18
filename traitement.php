<?php
// Inclure le fichier d'autoload
require 'path/to/PHPMailerAutoload.php';

// Créer une nouvelle instance de PHPMailer
$mail = new PHPMailer;

// Configurer les paramètres SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'antoinedapaz@gmail.com';
$mail->Password = 'T@inou1004';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Destinataire, expéditeur, sujet, corps de l'e-mail
$mail->setFrom('votre@email.com', 'Votre Nom');
$mail->addAddress('destinataire@email.com', 'Destinataire');
$mail->Subject = 'Sujet de l\'e-mail';
$mail->Body = 'Contenu de l\'e-mail';

// Envoyer l'e-mail
if(!$mail->send()) {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
} else {
    echo 'E-mail envoyé avec succès';
}