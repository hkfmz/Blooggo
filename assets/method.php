<?php

$bdd=new pdo("mysql:host=localhost;dbname=monblog;charset=utf8","root","");

 function ajout($titre, $contenu)
 {
 	 $bdd=new pdo("mysql:host=localhost;dbname=monblog;charset=utf8","root","");

    $req=$bdd->prepare("INSERT INTO article (titre,date,contenu) value(?,NOW(),?) ");

    $req->execute(array($titre, $contenu));
    
    $req->closeCursor();
 }

  function affiche()
 {
 	 $bdd=new pdo("mysql:host=localhost;dbname=monblog;charset=utf8","root","");

    $req= $bdd->prepare('SELECT * FROM article ORDER BY id DESC');

	 	$req->execute();

	 	$data = $req->fetchAll(PDO::FETCH_OBJ);

	 	return $data;

	 	$req->closeCursor();
 }

   function recherche($item)
 {
 	 $bdd=new pdo("mysql:host=localhost;dbname=monblog;charset=utf8","root","");

    $req= $bdd->prepare('SELECT * FROM article WHERE titre=? OR contenu=? ORDER BY id DESC');

	 	$req->execute(array($item, $item));

	 	$data = $req->fetchAll(PDO::FETCH_OBJ);

	 	return $data;

	 	$req->closeCursor();
 }


?>