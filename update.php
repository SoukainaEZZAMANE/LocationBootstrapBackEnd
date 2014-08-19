<?php
    require("config.php");
     if(isset($_POST['modifier'])){
if(isset($_POST['id']) ){
    
     $id = $_POST['id'];}
     $requete = $db->query("SELECT * FROM voiture where id='$id'  ");
while ($donnees =$requete->fetch())
{
	 $immatriculation= $donnees['immat'];
                $marque= $donnees['marque'];  
                $version= $donnees['version'];
                $nbr_portes= $donnees['nbr_porte'];
                $climatisation= $donnees['climatisation'];
                $nbr_passagers= $donnees['nbr_passagers'];
                $capacite_bagage= $donnees['cap_bagage'];
                $age_min= $donnees['age_min_cond'];
                $airbag= $donnees['airbag'];
                $categorie= $donnees['categorie'];
                $prix_reservation= $donnees['prix_reservation'];
                $url = $donnees['url'];
	echo "modification";
}	}?>
	<html>
<form action="vehicule.php" method="post" enctype="multipart/form-data"> 
			<input type="hidden" name="id" value="<?php echo $id;?>">

		<p>Marque :<input type="text" name="Marque" id="Marque" value="<?php echo $marque;?>" ></p>
				
				
				<p>Immatriculation : <input type="text" name="Immatriculation" id="immatriculation" value="<?php echo $immatriculation;?>"></p>
				
				<p> Version <input type="text" name="Version" id="Version" value="<?php echo $version;?>"></p>
				
				<p>Nombre de portes  <input type="text" name="Nbr_portes" id="Nbr_portes" value="<?php echo $nbr_portes;?>"></p>
				
				<p>Climatisation <input type="text" name="Climatisation" id="Climatisation"value="<?php echo $climatisation;?>" ></p>
			
				<p>Nombre de passagers <input type="text" name="nbr_passagers" id="nbr_passagers" value="<?php echo $nbr_passagers;?>"></p>
				
				<p>Capacité des bagages<input type="text" name="Cpt_bagages" id="Cpt_bagages" value="<?php echo $capacite_bagage;?>"></p>
				
                <p> Catégorie 
            <SELECT name="categorie" id="categorie" value="<?php echo $categorie;?>">
                    <OPTION value="citadine">Citadine</option>
                    <OPTION value="affaires">Affaires</option>
                    <OPTION value="confort">Confort</option>
                    <OPTION value="economique">Economique</option>
                    <OPTION value="luxe">Luxe</option>
                    <OPTION value="minibus">Minibus</option>
            </SELECT></p>
            
				<p>Age min Conducteur<input type="text" name="Age_min_conducteur" id="Age_min_conducteur" value="<?php echo $age_min;?>"></p>
			</br>
				<p>Air Bag<input type="text" name="Air_Bag"  id="Air_Bag" value="<?php echo $airbag;?>"/>
			</br>
			<p>prix_reservation<input type="text" name="prix_reservation"  id="prix_reservation" value="<?php echo $prix_reservation;?>"/>
			</br>
				<p><input type="file" name="monfichier" id="monfichier" /></p>
			</br>
		<input name="envoi" type="submit" value="Modifier">
</form>
</html>

