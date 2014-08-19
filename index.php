
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
				?>
			<section>
				<aside>
					<h3>Nous Contacter</h3>
					<p class="centrer"><img src="images/contact.jpg" alt="Map Contact"/></p>
					<p>Code postal: 50122<br />Pays: Etats-Unis<br />Téléphone: +354 5635600<br />Fax: +354 5635610</p>
					<h5>Divers info :</h5>
					<p>Sed ut perspiciatis unde omnis iste erreur Natus s'asseoir voluptatem accusantium doloremque laudantium, Totam rem aperiam, Eaque ipsa quae ab illo inventore veritatis et quasi architecto Beatae vitae dicta sunt explicabo.</p>
				</aside>
				<article>
					<form method="post" action="traitement.php">
						<p>
							<label>Nom : </label> <input type="text" name="nom" required autofocus/>
						</p>
						<p>
							<label>Prénom : </label> <input type="text" name="prenom" required/>
						</p>
						<p>
							<label>Email : </label> <input type="email" name="email" required/>
						</p>
						<p>
							<label>Téléphone : </label> <input type="tel" name="telephone" required/>
						</p>
						<p>
							<label>Adresse : </label> <input type="text" name="adresse" />
						</p>
						<p>
							<label>Ville : </label> <input type="text" name="ville" />
						</p>
						<p>
							<label>Date d'arrivée : </label> <input type="date" name="date_arrivee" required/>
						</p>
						<p>
							<label>Date départ : </label> <input type="date" name="date_depart" required/>
						</p>
						<p>
							<label>Nombre de chambre : </label> <input type="number" name="nbre_chambre" required/>
						</p>
						<p>
							<label>Info supplémentaire : </label> <textarea ame="nbre_chambre" rows="10" cols="30" max="3"></textarea>
						</p>
						<p class="action">
							<input type="reset" name="annuler" value="Annuler" />
							<input type="submit" name="valider" value = "Valider" />
					</form>
				</article>
			</section>
			 
			 <?php
			 include("footer.php");
			 ?>
		</div>
	</body>
</html>