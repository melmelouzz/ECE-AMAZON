<?php
//on recupere les valeurs entrées par l'utilisateur 
$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$ID = $_POST["ID"];
$Type = $_POST["Type"];
$Mail = $_POST["Mail"];
$MDP = $_POST["MDP"];


$database = "eceamazon";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);
 //si le BDD existe, faire le traitement
//identifier le nom de base de données

 //si le BDD existe, faire le traitement
if ($db_found) { 
    
$sql = "INSERT INTO utilisateur(Nom, Prenom, ID, Type, Mail, MDP)
 VALUES('$Nom', '$Prenom', '$ID', '$Type','$Mail', '$MDP')";
$result = mysqli_query($db_handle, $sql);

    
 $sql = "SELECT * FROM utilisateur";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "Nom: " . $data['Nom'] . '<br>';
 echo "Prenom:" . $data['Prenom'] . '<br>';
 echo "ID: " . $data['ID'] . '<br>';
 echo "Type: " . $data['Type'] . '<br>';
 echo "Mail: " . $data['Mail'] . '<br>';
echo "MDP: " . $data['MDP'] . '<br>';
     
 }//end while


}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>