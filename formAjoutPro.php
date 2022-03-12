<?php include 'entete.html';?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
   <form action="ajoutPro.php" method="post">
      <h1>Ajout contact professionnel</h1>
      <label>nom</label>
      <input type="text" name="nom" id="nom" required ><br>
      <label>mail</label>
      <input type="email" name="mail" id="mail" > <br>
      <label>Photo</label>
      <input type="file" name="photo" id="photo" > <br>
      <label>Entreprise</label>
      <select name="contactPro">
          <?php
          include "connectBdd.php" ;
          
          try{
              $sql=" SELECT id , raisonSociale from entreprise" ;
              $Resultat=$cnx->query($sql);
              $tableauResultat=$Resultat->fetchAll(PDO::FETCH_ASSOC);
              foreach ($tableauResultat as $ligne) {

                echo "<option value='".$ligne["id"]."'>".$ligne["raisonSociale"]."</option>";
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