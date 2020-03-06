
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/liste_apprenants.css">
    <title>Accueil-Gestion-Simplon</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="menu-nav">
      <li> <a href="#">ACCUEIL</a></li>
      <li><a href="#">APPRENANTS</a></li>
      <li id="actif"><a href="#">TUTEURS</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>

<h1 id="bienvenu">Liste des Tuteurs</h1>
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
<button type="button" class="btn btn-danger sbouton2">Nouveau</button>
</div>
<div id="footer">
	<h4 style="color:white;" id="sfoot">COPYRIGHT SIMPLON 2020</h4>
</div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>