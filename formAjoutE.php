

<?php include 'entete.html';?>
<section>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8">

                <form action="ajoutEntreprise.php"  method="POST">
                  <label> Raison Sociale</label>
                    <input type="text" name="raisonSociale" id="raisonSociale" ><br>
                    <label> Ville </label>
                    <input type="text" name="ville" id="ville"><br>
                    <button type="submit" name="valider">Valider</button>
                    <button type="reset" name="annuler">Annuler</button>
                </form>
            </body>
        </html>
    </div>
   </div>
</div>
</section>
<?php include 'pieddepage.html';?>
</body>
</html>


