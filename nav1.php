<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Location des voitures</title>
  
    <script src="js/jquery.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style type="text/css">
        body { background: url(images/bglight.png); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
        form label {
    font-size: 18px;
}


    </style>
</head>

<body>

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand">Location des voitures</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li><a href="register.php">S'inscrire</a></li>
          <li class="divider-vertical"></li>
          <li><a href="logout.php">Déconnexion</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container hero-unit">
    <h2>Bienvenue <?php echo htmlentities($_SESSION['user']['login'], ENT_QUOTES, 'UTF-8'); ?>, sur la page d'administration !</h2>


<div class="container">
    <div class="navbar navbar" >
        <div class="navbar-inner">
            <div class="container">
                <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>
                <a href="accueil.php" class="brand">Administration</a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                        <li><a href="Ajout_voiture.php">Ajouter voiture</a></li>
                        <li><a href="reservation.php">Afficher réservations</a></li>
                        <li><a href="client.php">Liste des clients</a></li>
                        <li><a href="vehicule.php">Liste des véhicules</a></li>

                    </ul>
                    <form action="" class="navbar-search pull-left" style="float:right;">
                        <input type="text" placeholder="Recherche" class="search-query" style="height:28px;">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>