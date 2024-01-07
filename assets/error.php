
<!DOCTYPE html>
<html>
<head>
  <style>
    /* Définir l'image d'arrière-plan pour le corps du document */
    body {
      background-image: url("world.png"); /* Remplacer img.jpg par le nom de votre image */
      background-repeat: no-repeat; /* Ne pas répéter l'image */
      background-size: cover; /* Adapter la taille de l'image à la taille de l'écran */
    }

 
  /* Définir le style du conteneur */
  .container {
    text-align: center; /* Centrer les éléments */

  }

  /* Définir le style du texte */
  .text {
    
    margin: 20px; /* Définir les marges */
    height: 500%;
    
  }

  /* Définir le style de l'icône */
  .icon {
   
    margin: 165px; /* Définir les marges */
     
  }
  </style>
</head>
<body>
 <div class="container"> <!-- Le conteneur des éléments -->
  <div class="text"> <!-- Le texte "Try again" -->
    <h2>Error!!!</h2>
    <p>An unexpected server error has occurred, we are working to fix this. <br> Please try again later.</p>
  </div>
  <div class="icon"> <!-- L'icône de rechargement -->
    <a href="assets-1.php"> <!-- Le lien vers la page à relancer -->
      <img src="th.jpg" alt="Recharger"> <!-- L'image de l'icône -->
    </a>
  </div>
</div>
</body>

</body>
</html>