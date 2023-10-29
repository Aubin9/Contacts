<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Adresse e-mail de destination
  $to = 'peraubcorps@email.com';

  // Sujet de l'e-mail
  $subject = 'Nouveau message du formulaire de contact';

  // Corps de l'e-mail
  $body = "Nom: $name\n\nEmail: $email\n\nMessage:\n$message";

  // Entêtes de l'e-mail
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Envoyer l'e-mail
  if (mail($to, $subject, $body, $headers)) {
    echo 'Votre message a été envoyé avec succès.';
  } else {
    echo 'Une erreur est survenue lors de l\'envoi du message. Veillez svp verrifier vos informations et reeseiller';
  }
}
?>