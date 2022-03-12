
      <?php
      // Connexion à la BDD, instanciation de l’objet $cnx
      include "connectBdd.php"; 
      include "formAjoutCP.php";
      $sql="INSERT into contact(nom,mail,photo) values(:nom,:mail,:photo)";
      try {
         $resultat = $cnx->prepare($sql);
         $nbLignes= $resultat->execute(array(":nom"=> $_POST["nom"], ":mail"=> $_POST["mail"], ":photo"=> $_POST["photo"]));
         echo $nbLignes." ligne ajoutée";
      }
      catch(PDOException $e) { // gestion des erreurs
         echo"ERREUR dans l'ajout ".$e->getMessage();
      }
      ?>
