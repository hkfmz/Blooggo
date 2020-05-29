<?php

if (isset($_POST['valider'])) 
{
	
	$titre=$_POST['titre'];
	$contenu=$_POST['contenu'];

  if(isset($titre) AND isset($contenu) AND !$titre == "" AND !$contenu =="")
{

  require ('../../assets/method.php');

  ajout($titre, $contenu);

  header('Location: index.php');

  echo "<script type='text/javascript'>alert('Ajouter avec succès !'); </script>";
}
else{
 echo "<script type='text/javascript'>alert('Il faut remplire les champs vide !'); </script>";
}

}

if(1==1)
{
  require ('../../assets/method.php');

  $affiche=affiche();
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<?= require ('../../assets/depend.php'); ?>-->

</head>
<body>


	<div class="header" id="monHeader">
   <header style="background-color: #302c44;" class="w3-container w3-center w3-padding-32">
    <h2 style="color: #fff">DASHBOARD</h2>
  </header>
</div>

<h3 style="text-align: center;">PUBLIER UN ARTICLE</h3><br>



  <div class="w3-container" >

    <div class="w3-container w3-margin-left" >

      <form class="w3-card-4 w3-margin-left w3-white" method="post" >

<div class="content">

       <h4>Titre</h4>
       <input type="title" name="titre" class="w3-input w3-border w3-round-large">
       <br>
       <h4>Contenus</h4>
       <textarea class="w3-input w3-border w3-round-large" name="contenu" rows="7"></textarea><br>
</div>
       <div class="w3-col m8 s12">

         <input class="w3-button w3-padding-large w3-white w3-border w3-hover-color-Blue" type="submit" name="valider" value="Valider">

       </div>

     </form>
   </div>
 </div>



</body>
</html>

<!--file:///C:/Users/PC/Downloads/Compressed/templa/formulaire/ContactFrom_v1/index.html-->