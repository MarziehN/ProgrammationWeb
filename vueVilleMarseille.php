


<?php include 'entete.html';?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    
    </div>
    <div class="col-sm-8">
    <?php 
//include "entete.html";
// Connexion à la BDD, instanciation de l’objet $cnx
include "connectBdd.php";  
echo "<h2>Liste des contacts sur marseille : </h2>";
$sql=" SELECT * from entreprise join contact on contact.idEntreprise=entreprise.id   where ville=:ville" ;


try{
   $resultat = $cnx->prepare($sql);
   $resultat ->execute(array(":ville"=>"Marseille")); //// on exécute la requête qui renvoie un curseur 
   $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);// lecture de $résultat récupéré dans un tableau associatif 
   foreach($tabloResultat as $ligne)   { 
       echo "<p>".$ligne["nom"]."<br>".$ligne["mail"]."</p>";
       echo " <img  src=".$ligne["photo"]." width=50 >"; 
       echo "<option value='".$ligne["ville"]."'>".$ligne["ville"]."</option>";
  }
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
<?php include 'pieddepage.html';?>
</body>
</html>