
      
<?php 
include "connectBdd.php";
include "formAjoutPro.php";

// Connexion à la BDD, instanciation de l’objet $cnx

    
try{
    $sql="INSERT into contact(nom,mail,photo,idEntreprise) values(:nom,:mail,:photo,:idEntreprise)";
    $resultat = $cnx->prepare($sql);
    $nbLignes=$resultat->execute(array(":nom"=> $_POST["nom"], ":mail"=> $_POST["mail"], ":photo"=> $_POST["photo"] , ":idEntreprise"=> $_POST["id"]));
    echo $nbLignes. " lignes ajoutees " ;
}


catch(PDOException $e) { // gestion des erreurs
     echo"ERREUR dans la modification " . $e->getMessage();
 }
?>