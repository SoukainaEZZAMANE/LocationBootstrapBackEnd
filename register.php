<?php 
    require("config.php");
    if(!empty($_POST)) 
    { 
        // S'assurer que les champs sont remplis
        if(empty($_POST['login'])) 
        { die("S'il vous plaît entrer un Login."); } 
        if(empty($_POST['password'])) 
        { die("S'il vous plaît entrer un mot de passe."); }
        if(empty($_POST['nom'])) 
        { die("S'il vous plaît entrer un nom."); } 
        if(empty($_POST['prenom'])) 
        { die("S'il vous plaît entrer un prénom."); } 
        if(empty($_POST['tel'])) 
        { die("S'il vous plaît entrer un téléphone."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { die("E-Mail adresse non valide"); } 
        if(empty($_POST['adresse'])) 
        { die("S'il vous plaît entrer une adresse."); }  
        
         
        // vérifier si le login est existe déjà
        $query = " 
            SELECT 
                1 
            FROM client 
            WHERE 
                login = :login 
        "; 
        $query_params = array( ':login' => $_POST['login'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Erreur dans la requête: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("le login est existe déjà"); } 
        $query = " 
            SELECT 
                1 
            FROM client 
            WHERE 
                email = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Erreur dans la requête: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("Cet email existe déjà"); } 
         
        // insérer la ligne 
        $query = " 
            INSERT INTO client ( 
                login, 
                password, 
                nom,
                prenom,
                tel, 
                email,
                adresse 
            ) VALUES ( 
                :login, 
                :password, 
                :nom,
                :prenom,
                :tel, 
                :email,
                :adresse 
            ) 
        "; 

        $query_params = array( 
            ':login' => $_POST['login'], 
            ':password' => $_POST['password'], 
            ':nom' => $_POST['nom'], 
            ':prenom' => $_POST['prenom'], 
            ':tel' => $_POST['tel'], 
            ':email' => $_POST['email'],
            ':adresse' => $_POST['adresse']
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Erreur dans la requête: " . $ex->getMessage()); } 
        header("Location: index.php"); 
        die("Redirecting to index.php"); 
    } 
?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Location des voitures</title>
    
    <script src="js/jquery.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body { background: url(images/bglight.png); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
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
          <li><a href="index.php">Retour à la page d'accueil</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container hero-unit">
    <h1>Inscription</h1> <br /><br />
    <form action="register.php" method="post"> 
        <label>Login:</label> 
        <input type="text" name="login" value="" /> 
        <label>Email: <strong style="color:darkred;">*</strong></label> 
        <input type="text" name="email" value="" /> 
        <label>Password:</label> 
        <input type="password" name="password" value="" />
        <label>Nom:</label> 
        <input type="text" name="nom" value="" /> 
        <label>Prénom:</label> 
        <input type="text" name="prenom" value="" /> 
        <label>Téléphone:</label> 
        <input type="tel" name="tel" value="" /> 
        <label>Adresse:</label> 
        <input type="text" name="adresse" value="" />  <br /><br />
        <p style="color:darkred;">* Email obligatoire.</p><br />
        <input type="submit" class="btn btn-info" value="Inscrire" /> 
    </form>
</div>

</body>
</html>