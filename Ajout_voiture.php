<?php
    require("config.php");
    if(!empty($_POST)) 
    {
      try{
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
                $prix_reservation= $_POST['prix_reservation'];
                $monfichier = "voitures/".$_FILES['monfichier']['name'];
             
$req= $db->prepare("insert into voiture (id,immat,marque,version,nbr_porte,climatisation,nbr_passagers,cap_bagage,age_min_cond,airbag,url,categorie,prix_reservation) values(default,:immatriculation,:marque,:version,:nbr_portes,:climatisation,:nbr_passagers,:capacite_bagage,:age_min,:airbag,:monfichier,:categorie,:prix_reservation)");

           $req->execute(array(
                ':immatriculation' => $immatriculation,
                ':marque' => $marque,  
                ':version' => $version,
                ':nbr_portes' => $nbr_portes,
                ':climatisation' => $climatisation,
                ':nbr_passagers' => $nbr_passagers,
                ':capacite_bagage' => $capacite_bagage,
                ':age_min' => $age_min,
                ':airbag' => $airbag,
                ':monfichier' => $monfichier,
                ':categorie'=>$categorie,
                'prix_reservation'=>$prix_reservation

                ));
$req->closeCursor();
    }
    catch(PDOException $ex){ die("Erreur dans la requête: " . $ex->getMessage()); } 
        header("Location: accueil.php"); 
        die("Redirecting to accueil.php"); 
    } 
?>


   <?php include("nav1.php"); ?>
    <p>Ajout d'une voiture !</p>
   
   
    <div class="span6 offset2" >
    <form class="form-horizontal well" method="POST" action="Ajout_voiture.php" enctype="multipart/form-data" >
   <h1>Ajout d'une voiture</h1><br /><br />
  <div class="control-group">
    <label class="control-label" for="Marque">Marque :</label>
    <div class="controls">
      <input type="text" name="Marque" id="Marque" placeholder="Ex:Ford_Fiesta" >
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Immatriculation">Immatriculation : </label>
    <div class="controls">
      <input type="text" name="Immatriculation" id="Immatriculation" placeholder="Ex:123654-15-86">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Version">Version : </label>
    <div class="controls">
      <input type="text" name="Version" id="Version">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Nbr_portes">Nombre de portes : </label>
    <div class="controls">
      <SELECT  name="Nbr_portes" id="Nbr_portes">
         <OPTION value="2">2</option>
         <OPTION value="4">4</option>
      </SELECT>    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Climatisation">Climatisation : </label>
    <div class="controls">
      <SELECT  name="Climatisation" id="Climatisation">
         <OPTION value="oui">Oui</option>
         <OPTION value="non">Non</option>
      </SELECT>   
     </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="nbr_passagers">Nombre de passagers : </label>
    <div class="controls">
      <input type="text" name="nbr_passagers" id="nbr_passagers">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Cpt_bagages">Capacité des bagages : </label>
    <div class="controls">
      <input type="text" name="Cpt_bagages" id="Cpt_bagages">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="categorie">Catégorie : </label>
     <div class="controls">
      <SELECT name="categorie" id="categorie">
                    <OPTION value="citadine">Citadine</option>
                    <OPTION value="affaires">Affaires</option>
                    <OPTION value="confort">Confort</option>
                    <OPTION value="economique">Economique</option>
                    <OPTION value="luxe">Luxe</option>
                    <OPTION value="minibus">Minibus</option>
            </SELECT>
      </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Age_min_conducteur">Age min Conducteur : </label>
    <div class="controls">
      <input type="text" name="Age_min_conducteur" id="Age_min_conducteur">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="Air_Bag">Air Bag : </label>
    <div class="controls">
      <SELECT  name="Air_Bag" id="Air_Bag">
         <OPTION value="oui">Oui</option>
         <OPTION value="non">Non</option>
      </SELECT>
    </div>
  </div>

   <div class="control-group">
    <label class="control-label" for="prix_reservation">Prix de réservation : </label>
    <div class="controls">
      <input type="Number" name="prix_reservation" id="prix_reservation">
    </div>
  </div>

<div class="row-fluid pagination-centered">
  <input type="file" name="monfichier" id="monfichier" /></br>

     <p><p><button class="btn btn-primary" type="submit">Envoyer</button>
      <input type="reset" class="btn" value="Annuler" /></p>
</div>

    </div>
  </div>
</form>
</div>


</div>

</body>
</html>