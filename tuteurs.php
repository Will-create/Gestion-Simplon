
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/tuteurs.css">
    <title>Tuteurs-Gestion-Simplon</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="menu-nav">
      <li ><a href="index.php">ACCUEIL</a></li>
      <li ><a href="apprenants.php">APPRENANTS</a></li>
      <li id="actif"><a href="tuteurs.php">TUTEURS</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>
<div id="global">
  <div class="fils" id="liste"> 
  <h1 id="bienvenu" id="p2">Liste des Tuteurs</h1>
<div class="table-responsive-sm">
<table class="table stable table-bordered">
  <thead class="stable">
    <tr  class="stable1" >
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Profession</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>OUEDRAOGO</td>
      <td>Salif</td>
      <td>Douanier</td>
      <td>00593215</td>

    </tr>
    <tr>
      <td>2</td>
      <td>NABALOUM</td>
      <td>Ali</td>
      <td>Enseignant</td>
      <td>00632255</td>
    </tr>
    <tr>
      <td >3</td>
      <td>BEOGO </td>
      <td>Louis</td>
      <td>Musicien</td>
      <td>03212255</td>
    </tr>
  </tbody>
</table>
</div>
<div class="sbouton1"> 
<button type="button" class="btn btn-danger sbouton2">Imprimer</button>
<button type="button" onclick="afficher('formulaire')" class="btn btn-danger sbouton2">Nouveau</button>
</div>
  
  </div>
<div class="fils" id="formulaire">

  <h1 id="bienvenu">Formulaire des tuteurs</h1>

<form>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Profession">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact">
  </div>
</form>
<div class="sbouton1"> 
<button type="button" class="btn btn-danger sbouton2" >Ajouter</button>
<button type="button" class="btn btn-danger sbouton2"onclick="afficher('list')">Annuler</button>
</div>


  </div>

   <div class="fils" id="details"></div>
</div>
<div id="footer">
	<h4 style="color:white;">COPYRIGHT SIMPLON 2020</h4>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/navigateur.js"></script>
</body>
</html>