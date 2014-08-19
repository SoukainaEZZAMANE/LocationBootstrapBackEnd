<?php
    require("config.php");
     if(isset($_POST['modifier'])){
if(isset($_POST['id']) ){
    
     $id = $_POST['id'];}
     $requete = $db->query("SELECT * FROM reservation where id='$id'  ");
while ($donnees =$requete->fetch())
{
	$depart=$donnees['depart'];
	$retour=$donnees['retour'];
	$categorie=$donnees['categorie'];
	$imma=$donnees['immatriculation'];
	echo "modification";
}	}?>
	<html>
<form action="reservation.php" method="post"> 
		<input type="hidden" name="id" value="<?php echo $id;?>">
		Départ : <input type="date" name="depart" value="<?php echo $depart;?>"><br/>
		Retour : <input type="date" name="retour" value="<?php echo $retour;?>" ><br/>
		Catégorie : <input type="text" name="categorie" value="<?php echo $categorie;?>" ><br/>
		Immatriculation : <input type="text" name="immat" value="<?php echo $imma;?>" ><br/>
		<input name="envoi" type="submit" value="Modifier">
</form>
</html>

