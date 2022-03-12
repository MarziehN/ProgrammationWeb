<?php

?>
<section>
    <div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-12">
            <?php
// Connexion à la BDD, instanciation de l’objet $cnx
include "connectBdd.php";  
echo "<p> Liste des contacts de ".$_POST["listeVille"]." </p>";
$sql=" SELECT distinct c.nom, c.mail , c.photo , e.ville  from entreprise e join contact c on c.idEntreprise=e.id   where ville=:ville" ;


try{
   $resultat = $cnx->prepare($sql);
   $resultat ->execute(array(":ville"=>$_POST["listeVille"])); //// on exécute la requête qui renvoie un curseur 
   $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);// lecture de $résultat récupéré dans un tableau associatif 
   foreach($tabloResultat as $ligne)   { 
       echo "<p>".$ligne["nom"]."<br>"."</p>";
       echo "<p>".$ligne["mail"]."<br>"."</p>";
       echo " <img  src=".$ligne["photo"]." width=50 >"; 
       echo "<option value='".$ligne["ville"]."'>".$ligne["ville"]."</option>";
  }
  echo "Nombre de contacts: ".count($tabloResultat);
$resultat->closeCursor();       // on ferme le curseur des résultats
}
catch(PDOException $e) {   // gestion des erreurs
    echo"ERREUR PDO  " . $e->getMessage();
 }
 
?>
</div>
</div>
</div>
</section>
<?php include 'pieddepage.html>' ;?>
