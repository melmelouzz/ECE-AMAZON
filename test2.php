<?php

$database = "eceamazon";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement
//identifier le nom de base de données

 //si le BDD existe, faire le traitement
 
  $path1 = basename( $_FILES['Photo']['name']);
  move_uploaded_file($_FILES['Photo']['tmp_name'], $path1);

  $path2 = basename( $_FILES['Fond']['name']);
  move_uploaded_file($_FILES['Fond']['tmp_name'], $path2);

  $name1 = basename( $_FILES['Photo']['name']);
  $name2 = basename( $_FILES['Fond']['name']);

if ($db_found) { 
    

$sql = "INSERT INTO vendeur(Photo, Fond)
 VALUES('$name1', '$name2')";
$result = mysqli_query($db_handle, $sql);


//echo '<img src="pictures/simba2.jpeg" alt="Text Alternatif">';
echo "Photo:";
echo " <img src=" . $name1 . " />"; 
echo "<br>";
echo "<img src=" . $name2 . " />"; 
}
?> 