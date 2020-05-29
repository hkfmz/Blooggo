<?php

$i=1;

  function affiche()
 {
 	 $bdd=new pdo("mysql:host=localhost;dbname=monblog;charset=utf8","root","");

    $req= $bdd->prepare('SELECT * FROM article ORDER BY id DESC');

	 	$req->execute();

	 	$data = $req->fetchAll(PDO::FETCH_OBJ);

	 	return $data;

	 	$req->closeCursor();
 }

if (isset($_POST['valider'])) 
{
	
	$titre=$_POST['titre'];
	$contenu=$_POST['contenu'];

  if(isset($titre) AND isset($contenu))
  {
  	ajout($titre, $contenu);

  	echo "<script type='text/javascript'>alert('Ajouter avec succès !'); </script>";
  }
  else{
  	echo "<script type='text/javascript'>alert('Non Ajouter !'); </script>";
  }

}

$affiche=affiche();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	
<?= require ('../assets/depend.php'); ?>-->

</head>
<body>


	<div class="header" id="monHeader">

	<header style="background-color: #302c44;" class="w3-container w3-center w3-padding-32">
              <h2 style="color: #fff">DASHBOARD</h2>
      </header>


	</div>

	  

      <div class="content" ><h3 style="text-align: center;" >LISTE D'ARTICLES</h3><br>
      	<ol class="artcles" >
            <?php foreach($affiche as $valeur) : ?>

      		<li style="border: 1px solid #ccc; height: 60px; width: 90%; margin: 0 auto; line-height: 60px; background-color: #ccc;" class="w3-border w3-round-large" id="liste">&nbsp;&nbsp;<?= $i++; ?>. &nbsp;<?= $valeur->titre ?></li><br>

      		<?php endforeach; ?>    		
     	</ol>
      </div>

      <script src="../assets/fixed.js" ></script>

</body>
</html>

<!--<p style="text-align: right;">&#128513;</p>-->