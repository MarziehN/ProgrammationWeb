<?php include 'entete.html';?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
    <form action="modifEmail.php" method="post">
    <h1>Modifier une adresse mail</h1>
    <label>Adresse mail</label>
    <input type="email" name="mail" id="mail" ><br><br>
    <label>Nom</label>
    <select name="listeContact"> 
      <?php
      include "connectBdd.php";     
      $sql="SELECT DISTINCT nom FROM contact";// on écrit la requête sous forme de chaine de caractères
      try{
      $resultat = $cnx->query($sql); // on exécute la requête qui renvoie un curseur 
      // lecture du curseur $résultat  dans un tableau associatif 
      $tabloResultat=$resultat->fetchAll(PDO::FETCH_ASSOC);                   
      foreach($tabloResultat as $ligne)   {
        echo "<option value='".$ligne["nom"]."'>".$ligne["nom"]."</option>";
      }
      }
      catch(PDOException $e) {   // gestion des erreurs
        echo"ERREUR PDO  " . $e->getMessage();
      }
      ?>           
    </select>
    <br><br>
    <button type="submit">Envoyer</button>
    <button type="reset"> Annuler</button><br><br>
  </form>
  </div>
   </div>
</div>
</section>
<?php 'pieddepage.html'; ?>
</body>
</html> 