<?php
    require("config.php");
     if(isset($_POST['supprimer'])){
if(isset($_POST['id']) ){
    
    $id = $_POST['id'];
    
    $result = $db->query("DELETE FROM voiture WHERE id =$id ");
}
}
   if (isset($_POST['Marque'])){
	
	
	 			$id = $_POST['id'];
				$immatriculation= $_POST['Immatriculation'];
                $marque= $_POST['Marque'];  
                $version= $_POST['Version'];
                $nbr_portes= $_POST['Nbr_portes'];
                $climatisation= $_POST['Climatisation'];
                $nbr_passagers= $_POST['nbr_passagers'];
                $capacite_bagage= $_POST['Cpt_bagages'];
                $age_min= $_POST['Age_min_conducteur'];
                $airbag= $_POST['Air_Bag'];
                $categorie= $_POST['categorie'];
                $prix_reservation=$_POST['prix_reservation'];
                $url = $_FILES['monfichier']['name'];
	
	$rq="UPDATE voiture SET immat='$immatriculation' ,marque='$marque',version='$version', nbr_porte='$nbr_portes',prix_reservation='$prix_reservation' ,climatisation='$climatisation' ,nbr_passagers='$nbr_passagers',cap_bagage='$capacite_bagage',age_min_cond='$age_min', airbag='$airbag',categorie='$categorie', url='$url'  WHERE id='$id'";
	$result = $db->query($rq);	
	
}


include("nav1.php"); ?>
    <p>Afficher les voitures !</p>

    <table class="table  table-hover ">
 <tr>

<th>Immatriculation</th>
<th>Marque</th>
<th>Catégorie</th>
<th>Version</th>
<th>Nombre de portes</th>
<th>Climatisation</th>
<th>Capacité bagage</th>
<th>Nombre passagers</th>
<th>Age min conducteur</th>
<th>Air Bag</th>
<th>Prix réservation</th>
<th>Voiture</th>
<th>Opération</th>
</tr>

<?php
$requete = $db->query('SELECT * FROM voiture ORDER BY id DESC');
while ($donnees =$requete->fetch())
{
?>

<tr>
<td><?php echo $donnees['immat']; ?></td>
<td><?php echo $donnees['marque']; ?></td>
<td><?php echo $donnees['categorie']; ?></td>
<td><?php echo $donnees['version']; ?></td>
<td><?php echo $donnees['nbr_porte']; ?></td>
<td><?php echo $donnees['climatisation']; ?></td>
<td><?php echo $donnees['cap_bagage']; ?></td>
<td><?php echo $donnees['nbr_passagers']; ?></td>
<td><?php echo $donnees['age_min_cond']; ?></td>
<td><?php echo $donnees['airbag']; ?></td>
<td><?php echo $donnees['prix_reservation']; ?></td>
<?php $chemin= "voitures/".$donnees['url']; ?>
<td><?php echo "<img class=\"img-circle\" src=\"$chemin\" />"; ?></td>
<td><form action="vehicule.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-danger" name="supprimer" type="submit">Supprimer</button>
</form><form action="update.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-primary" name="modifier" type="submit">Modifier</button></form></td>


</tr>

<?php
} 
?>

</table>