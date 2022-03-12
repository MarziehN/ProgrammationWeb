



<?php include 'entete.html';?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    
    </div>
    <div class="col-sm-8">
    <?php
	include "connectBdd.php"; 
	$sql="SELECT c.nom, c.mail, e.raisonSociale, e.ville FROM contact c Natural join entreprise e ";
	echo"<table border='5'>";
	echo"<tr><td> Nom </td><td> Mail </td><td> Raison sociale <td> Ville </td></td></tr>";
	try{
	    $resultat = $cnx->query($sql); //// on exécute la requête qui renvoie un curseur 
	    $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);// lecture de $résultat récupéré dans un tableau associatif 
	    foreach($tabloResultat as $ligne)   { 
			echo"<tr><td>".$ligne["nom"]."</td>"."<td>".$ligne["mail"]."</td>"."<td>".$ligne["raisonSociale"]."<td>".$ligne["ville"]."</td>"."</td>"."</tr>";
	    }
		echo "Nombre de contacts: ".count($tabloResultat);
	$resultat->closeCursor();       // on ferme le curseur des résultats
	}
	catch(PDOException $e) {   // gestion des erreurs
		echo"ERREUR PDO  " . $e->getMessage();
	}
	echo"</table>";
?>
    </div>
   </div>
</div>
</section>
<?php include 'pieddepage.html';?>
</body>
</html>
