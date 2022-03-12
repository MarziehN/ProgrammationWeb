<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mon site avec Bootstrap 4 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/1f7457abdb.js"></script>
  <style>
  </style>
</head>
<body>
  <!-- ENTETE -->
  <header>
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h3>bienvenue sur le resultat de TD5</h3>
      <p>Gestion des contacts</p> 
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="vueContacts.php">Les Contacts</a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link" href="formVille.php">Par ville</a>
            </li> 
         
          <li class="nav=item">
            <a class="nav-link" href="VueContactsEntreprise.php">Par entreprise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formCnx.php" >Admin </a>
              </li>
        </ul>
        </div>  
      </nav>
  </head