<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8" /> 
		<title>
		Site de location des voitures
		</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>
 
	<body > 
	
		<div id="all">
		 	 	
			<?php include("header.php"); 
			include("nav.php");
			?>	
<div class="lateral">
<h2>Luxe</h2>
<?php 
	try
{
    $bdd = new PDO('mysql:host=localhost;dbname=location_voiture', 'root', '');
}
catch (Exception $e) // Si erreur
{
        die('Erreur : ' . $e->getMessage());
}
 $req= $bdd->query("SELECT * FROM voiture where categorie='Luxe'"); // Je choisis de la base de donné login le champ login


while ($voiture=$req->fetch()) {
echo '<div id="vdo-8">';
echo '<p class="float">';
?>	
<img width="300" height="200" src="img/<?php echo $voiture['url']?>"> <?php echo '</p>';

	echo '</br> Marque: : '.$voiture['marque'].'</br>';
 echo 'Immatriculation:  '.$voiture['immat'].'</br>';
echo ' Version :   '.$voiture['version'].'</br>';
echo 'Nombre de portes :  '.$voiture['nbr_porte'].'</br>';
echo 'Climatisation : '.$voiture['climatisation'].'</br>';
echo 'Nombre de passagers : '.$voiture['nbr_passagers'].'</br>'; 
echo 'Capacité des bagages : '.$voiture['cap_bagage'].'</br>';
echo 'Age min Conducteur : '.$voiture['age_min_cond'];
echo 'Air Bag : '.$voiture['airbag'].'</br>';
?>
<p><button style="text-shadow: 1px 1px 10px #CDBE9F, 0 0 1.3em #BEAE8C, 0 0 0.2em #b6a684;padding: 5px 10px 6px;background:    -moz-linear-gradient(#cccccc,#999999);color: white;text-align:center;font: 2em 'Tempus Sans ITC';font-weight:bold;font-size:20px;display: inline-block;padding: 5px 10px 6px;cursor: pointer;" >Réserver</button></p><?php

echo '</div>';
}
 
echo '</div>';
echo '</br></br>';

?>


<?php
	include("footer.php");
	?>
	</div>
</body>
</html> 


