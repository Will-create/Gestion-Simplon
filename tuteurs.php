
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
      <li id="actif"><a href="#">ACCUEIL</a></li>
      <li ><a href="#">APPRENANTS</a></li>
      <li><a href="#">TUTEURS</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>
<div id="global">
  <div class="fils" id="liste"></div>
  <div class="fils" id="formulaire"></div>
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