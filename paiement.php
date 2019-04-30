 <?php 

$nomclient=isset($_POST["nomclient"])?$_POST["nomclient"]:"";
$prenomclient=isset($_POST["prenomclient"])?$_POST["prenomclient"]:"";
$adresse=isset($_POST["adresse"])?$_POST["adresse"]:"";
$codepostal=isset($_POST["codepostal"])?$_POST["codepostal"]:"";
$ville=isset($_POST["ville"])?$_POST["ville"]:"";
$pays=isset($_POST["pays"])?$_POST["pays"]:"";
$numerotel=isset($_POST["numerotel"])?$_POST["numerotel"]:"";

$numerocarte=isset($_POST["numerocarte"])?$_POST["numerocarte"]:"";
$nomcarte=isset($_POST["nomcarte"])?$_POST["nomcarte"]:"";
$expiration=isset($_POST["expiration"])?$_POST["expiration"]:"";
$codesecu=isset($_POST["codesecu"])?$_POST["codesecu"]:"";

$error="";



if($nomclient==""){$error.="Nom Client vide</br>";}
if($perenomclient==""){$error.="Prenom Client vide</br>";}
if($adresse==""){$error.="Adresse vide</br>";}
if($codepostal==""){$error.="Code postal vide</br>";}
if($ville==""){$error.="Ville vide</br>";}
if($pays==""){$error.="Pays vide</br>";}
if($numerotel==""){$error.="Numero de telephone vide</br>";}

if($numerocarte==""){$error.="Numero de carte vide</br>";}
if($nomcarte==""){$error.="Nom de carte vide</br>";}
if($expiration==""){$expiration.="date d'expiration vide</br>";}
if($codesecu==""){$error.="code de sécurité vide</br>";}




if($error=="")
	{
		echo"$nomclient</br>";
		echo"$prenomclient</br>";
		echo"$adresse</br>";
		echo"$codepostal</br>";
		echo"$ville</br>";
		echo"$pays</br>";
		echo"$numerotel</br>";

		echo"$numerocarte</br>";
		echo"$nomcarte</br>";
		echo"$expiration</br>";
		echo"$codesecu</br>";
	}
else{echo"erreur : $error";}


?>





