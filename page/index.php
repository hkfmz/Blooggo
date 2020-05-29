 <?php

 function affiche()
 {
 	$bdd=new pdo("mysql:host=localhost;dbname=monblog;charset=utf8","root","");

 $req= $bdd->prepare('SELECT * FROM article ORDER BY id DESC');

 $req->execute();

 $data = $req->fetchAll(PDO::FETCH_OBJ);

 return $data;

 $req->closeCursor();
}

$affiche=affiche();

?>

<!DOCTYPE html>
<html>
<head>
	<title>BLOOGGO</title>

	<?= require ('../assets/depend.php'); ?>-->

</head>
<body>

	<div class="header" id="monHeader">

		<header style="background-color: #302c44;" class="w3-container w3-center w3-padding-32">
			<h1 style="color: #fff">BLOOGGO</h1>
		</header>

		<form class="recherche" action="" autocomplete="on">
			<input type="text" placeholder="Rechercher" name="recherche" role="combobox" aria-autocomplete="list" dir="ltr" class="w3-border w3-round-large">
			<button type="submit" class="w3-border w3-round-large"><i class="fa fa-search"></i></button>
		</form>

	</div>

	<div class="content">

		<?php foreach($affiche as $valeur) : ?>

			<article class="w3-card-4 w3-margin w3-white w3-border w3-round-large">

				<div class="w3-container">
					<h2>
						<?= $valeur->titre ?>
					</h2>
					<time>
						<?= $valeur->date ?>
					</time>
				</div>

				<div class="w3-container">
					<p> 
						<?= $valeur->contenu ?>
					</p>
				</div>

			</article>

		<?php endforeach; ?>

	</div>

	<script src="../assets/fixed.js" ></script>

</body>
</html>
<!--<div style="width:50%; margin: 0 auto;" > 
         <img src="" alt="image" style="width:100%">
     </div>-->
