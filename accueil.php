<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>

<?php include("nav1.php"); ?>

<p> Vous êtes sur la page de l'administration , Bienvenue !!!</p>
<p><img src="images/BMW.jpg" title="BMW" alt="BMW" class="center" /></p>
