<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_complet = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Mettez ici votre adresse e-mail où vous souhaitez recevoir les messages
    $destinataire = "embiteye01@gmail.com";

    $sujet = "Formulaire de contact neolean academy";

    $contenu = "Nom Complet: " . $nom_complet . "\n";
    $contenu .= "E-mail: " . $email . "\n";
    $contenu .= "Message: \n" . $message;

    // Vous pouvez ajouter des en-têtes supplémentaires pour spécifier le format du message, l'expéditeur, etc.
    $headers = "From: " . $email . "\r\n";

    // Envoyer l'e-mail
    $envoi_email = mail($destinataire, $sujet, $contenu, $headers);

    // Préparer la réponse JSON
    $response = array();
    if ($envoi_email) {
        $response['success'] = true;
        $response['message'] = "Votre message a été envoyé avec succès.";
    } else {
        $response['success'] = false;
        $response['message'] = "Une erreur s'est produite lors de l'envoi du message.";
    }

    // Envoyer la réponse JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

