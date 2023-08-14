<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $messageText = $_POST["message"];

    // Envoi de l'e-mail
    $to = "embiteye01@gmail.com"; // Remplacez par l'adresse e-mail du destinataire
    $subject = "Formulaire de contact Neolean";
    $message = "Un nouveau message a été envoyé :\n\n";
    $message .= "Nom : $nom\n";
    $message .= "E-mail : $email\n";
    $message .= "Message : $messageText\n";

    $headers = "From: innovation@neolean.digital"; // Remplacez par l'adresse e-mail de l'expéditeur

    // Envoyer l'e-mail
    $success = mail($to, $subject, $message, $headers);

    // Retourner une réponse JSON
    echo json_encode(["success" => $success]);
}
?>
