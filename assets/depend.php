<?php

//import, bootstrap, font...

?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.top-container {
  background-color: #302c44;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #302c44;
  color: #302c44;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}

#liste:hover{
  background-image: linear-gradient(-0deg, #ccc , white, #ccc);
  font-weight: bold;
}

form.recherche input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.recherche button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #302c44 /*2196F3*/;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.recherche button:hover {
  background: #514b73;
}

form.recherche::after {
  content: "";
  clear: both;
  display: table;
}

.artcles{
  text-decoration: none;
  list-style: none;
}

</style>



<!--


