
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/apprenants.css">
    <title>Apprenants-Gestion-Simplon</title>
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
      <li><a href="index.php">ACCUEIL</a></li>
      <li id="actif"><a href="apprenants.php">APPRENANTS</a></li>
      <li><a href="tuteurs.php">TUTEURS</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>

<div id="global">
  <div class="fils" id="liste">
  <h1 id="bienvenu">Liste des Apprenants</h1>
<div class="table-responsive-sm">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date naissance</th>
      <th scope="col">Ville Origine</th>
      <th scope="col">Formation</th>
      <th scope="col">Etablissement</th>
      <th scope="col">Tuteur</th>
      <th scope="col">Contact</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>
<div class="buttonap">
     <button type="button" class="btn btn-danger btn-valid">Imprimer</button>
     <button type="button" class="btn btn-danger btn-valid" onclick="afficher('formulaire')">Nouveau</button>
</div>
  </div>
<div class="fils" id="formulaire">
  <h1 id="bienvenu">Formulaire Apprenants</h1>
  <!-- <form>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input">Nom</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="input">Prenoms</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate">Date de naissance</label>
      <input type="date" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ville d'origine</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input">Formation</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="input">Etablissement</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input">Contact</label>
      <input type="tel" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Tuteur</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group row-md-6">
      <label for="input" class="photo-lab">Photo</label>
      <div id="photo"><img id="profil" class="iconapp" src="images/icon.jpg"></div>
    </div> 
  </div>
  <input type="file" class="form-controlb" id="inputPassword4" oninput="afficherPhoto(this,'profil')">
  <div class="buttonap">
    <button type="button" class="btn btn-danger">Ajouter</button>
    <button type="button" class="btn btn-danger" onclick="afficher('liste')">Annuler</button>
  </div>
  
  

    </form> -->
    <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div><br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
  </div><br><br>
  <div class="form-row">
    <div class="form-group row-md-6">
      <div id="photo"><img id="profil" class="iconapp" src="images/icon.jpg"></div>
    </div> 
  </div>
  <input type="file" class="form-controlb" id="inputPassword4" oninput="afficherPhoto(this,'profil')">
  <div class="buttonap">
    <button type="button" class="btn btn-danger">Ajouter</button>
    <button type="button" class="btn btn-danger" onclick="afficher('liste')">Annuler</button>
  </div>
</form>
    </div>
   <div class="fils" id="details"></div>
</div>
<div id="footer">
	<h4 style="color:white;">COPYRIGHT SIMPLON 2020</h4>
</div>
</div>
<script type="text/javascript" src="js/navigateur.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/details.js"></script>
</body>
</html>