
      
    <?php 
    include "connectBdd.php";
    include "formAjoutE.php";
        
    $sql= "INSERT into entreprise (raisonSociale,ville) values(:raisonSociale ,:ville )";
try{
  
    $resultat = $cnx->prepare($sql);
    $nblignes=$resultat->execute(array(":raisonSociale" => $_POST["raisonSociale"] , ":ville" => $_POST["ville"]));
    echo $nblignes. " lignes ajoutees " ;
   }
catch(PDOException $e){
echo "ERREUR dans l'ajout ".$e->getMessage();
}

?>
