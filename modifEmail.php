
      
<?php 
include "connectBdd.php";
include "formModifEmail.php";


// Connexion à la BDD, instanciation de l’objet $cnx

try{
    $sql= " UPDATE contact set mail=:mail where nom=:nom" ;
    $resultat= $cnx->prepare($sql);
    $nbLignes=$resultat->execute(array(":mail"=> $_POST["mail"] , ":nom"=> $_POST["listeContact"]));
    echo $nbLignes. " ligne modofie" ;
}


catch(PDOException $e) { // gestion des erreurs
    echo"ERREUR dans la modification " . $e->getMessage();
 }



 ?>