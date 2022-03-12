<?php include "entete.html";
      include "connectBdd.php"
?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8">
        <form action="vueVille.php" method="POST">
    <select name="listeVille"> 
    <?php
         
    $sql=" SELECT distinct ville from entreprise " ;// on écrit la requête sous forme de chaine de caractères
    try{
        $resultat = $cnx->query($sql); // on exécute la requête qui renvoie un curseur 
         // lecture du curseur $résultat  dans un tableau associatif 
        $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);                   
            foreach($tabloResultat as $ligne)   {
                
                echo "<option value='".$ligne["ville"]."'>".$ligne["ville"]."</option>";
                    }
               
      
    }
    catch(PDOException $e) {   // gestion des erreurs
            echo"ERREUR PDO  " . $e->getMessage();
    }
   ?> 
         
    </select>
    <button type="submit" name="Valider">Valider</button>
	<button type="reset" name="Annuler">Annuler</button>
</form>

    
    </div>
   </div>
</div>
</section>
<?php include 'pieddepage.html';?>
</body>
</html>

