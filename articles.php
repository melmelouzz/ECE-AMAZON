<?php
//on recupere les valeurs entrées par l'utilisateur 
$Type = $_POST["Type"];
$Nom = $_POST["Nom"];
$Description = $_POST["Description"];
$Prix = $_POST["Prix"];
$Taille = $_POST["Taille"];
$Couleur = $_POST["Couleur"];
$Genre = $_POST["Genre"];
$Titre = $_POST["Titre"];
$Auteur= $_POST["Auteur"];
$Etat = $_POST["Etat"];
$ID = $_POST["ID"];



$database = "eceamazon";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement
//identifier le nom de base de données



 //si le BDD existe, faire le traitement
if ($db_found) { 

          
$sql = "INSERT INTO article(Type, Nom, Description, Prix, Taille, Couleur, Genre, Titre, Auteur, Etat, ID)
 VALUES('$Type', '$Nom', '$Description', '$Prix', '$Taille', '$Couleur', '$Genre','$Titre', '$Auteur','$Etat', '$ID')";
$result = mysqli_query($db_handle, $sql);

 
 $sql = "SELECT * FROM article";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
echo "Type: " . $data['Type'] . '<br>';
echo "Nom:" . $data['Nom'] . '<br>';
echo "Description: " . $data['Description'] . '<br>';
echo "Prix: " . $data['Prix'] . '<br>';
echo "Taille: " . $data['Taille'] . '<br>';
echo "Couleur: " . $data['Couleur'] . '<br>';
echo "Genre: " . $data['Genre'] . '<br>';
echo "Titre: " . $data['Titre'] . '<br>';
echo "Auteur: " . $data['Auteur'] . '<br>';
echo "Etat: " . $data['Etat'] . '<br>';
echo "ID: " . $data['ID'] . '<br>';
         
     
 }//end while


    //end if
//si le BDD n'existe pas
}

else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>
