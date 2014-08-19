<?php
    require("config.php");
     if(isset($_POST['supprimer'])){
if(isset($_POST['id']) ){
    
    $id = $_POST['id'];
    
    $result = $db->query("DELETE FROM client WHERE id =$id ");
}
}
?>


 <?php include("nav1.php"); ?>
    <p>Afficher les clients !</p>

    <table class="table table-hover">
 <tr>
<th>ID</th>
<th>Login</th>
<th>Nom</th>
<th>Prénom</th>
<th>Téléphone</th>
<th>Email</th>
<th>Adresse</th>
<th>Opération</th>

</tr>

<?php
$requete = $db->query('SELECT * FROM client ORDER BY id DESC');
while ($donnees =$requete->fetch())
{
?>

<tr>
<td><?php echo $donnees['id']; ?></td>
<td><?php echo $donnees['login']; ?></td>
<td><?php echo $donnees['nom']; ?></td>
<td><?php echo $donnees['prenom']; ?></td>
<td><?php echo $donnees['tel']; ?></td>
<td><?php echo $donnees['email']; ?></td>
<td><?php echo $donnees['adresse']; ?></td>
<td><form action="client.php" method="post"><input type='hidden' id='id' name='id' value=<?php echo $donnees['id'] ?> /><button class="btn btn-danger" name="supprimer" type="submit">Supprimer</button>

</tr>

<?php
} 
?>

</table>