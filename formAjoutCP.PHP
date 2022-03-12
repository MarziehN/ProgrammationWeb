<?php include 'entete.html';?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
   <form action="foAjoutCP.php" method="post">
      <h1>Ajout contact personnel</h1>
      <label>Nom</label>
      <input type="text" name="nom" id="nom" required ><br>
      <label>Mail</label>
      <input type="email" name="mail" id="mail" ><br>
      <label>Photo</label>
      <input type="file" id="photo" name="photo" accept="image/png, image/jpeg"><br><br> 
      
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