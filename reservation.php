<?php
    require("config.php");
   if(isset($_POST['supprimer'])){
if(isset($_POST['id']) ){
    
    $id = $_POST['id'];
    
    $result = $db->query("DELETE FROM reservation WHERE id =$id ");
}
}
if (isset($_POST['depart'])){
	
?>
<?php	
	$id = $_POST['id'];
	$depa=$_POST['depart'];
	$reto=$_POST['retour'];
	$catego=$_POST['categorie'];
	$imma=$_POST['immat'];
	echo "Vous avez entrer : $depa, $reto, $catego, $imma";
	$rq="UPDATE reservation SET depart='$depa' ,retour='$reto',categorie='$catego', immatriculation='$imma' WHERE id='$id'";
	$result = $db->query($rq);	
	
}?>
 <?php include("nav1.php"); ?>
    <p>Afficher réservations !</p>



    <table class="table  table-hover ">
 <tr>
<th>ID</th>
<th>Départ</th>
<th>Retour</th>
<th>Catégorie</th>
<th>KM</th>
<th>Age</th>
<th>Paiement</th>
<th>Immatriculation</th>
<th>Login du client</th>
<th>Opération</th>

</tr>

<?php
$requete = $db->query('SELECT * FROM reservation   ');
while ($donnees =$requete->fetch())
{
?>

<tr>
<td><?php echo $donnees['id']; ?></td>
<td><?php echo $donnees['depart']; ?></td>
<td><?php echo $donnees['retour']; ?></td>
<td><?php echo $donnees['categorie']; ?></td>
<td><?php echo $donnees['km']; ?></td>
<td><?php echo $donnees['age']; ?></td>
<td><?php echo $donnees['paiement']; ?></td>
<td><?php echo $donnees['immatriculation']; ?></td>
<td><?php echo $donnees['loginClient']; ?></td>
<td><form action="reservation.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-danger" name="supprimer" type="submit">Supprimer</button>
</form><form action="updateReservation.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-primary" name="modifier" type="submit">Modifier</button></form></td>
</tr>

<?php
} 
?>

</table>
