<?php
			require("config.php"); ?>
<!DOCUMENTYPE HTML>
<html>
	<head>
		<title>Location des voitures</title>
		<meta charset="utf-8" /> 
		<link rel="stylesheet" href="css/style.css"/>
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" >
	    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" >
  		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		

	</head>
	
	<body>
		<div id="contenu">
			
			
			<?php
			
			include("header.php");
			include("nav.php");
				
 $req= $db->query("SELECT * FROM voiture where categorie='Affaires'"); // Je choisis de la base de donné login le champ login


while ($voiture=$req->fetch()) {
echo '<div id="vdo-8">';
echo '<p class="float">';
?>	
<img width="300" height="200" src="voitures/<?php echo $voiture['url']?>"> <?php echo '</p>';

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
