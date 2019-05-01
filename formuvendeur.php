<!DOCTYPE html>
<html>
<head>
	<title>Formulaire vendeur</title>
</head>
<body>
    <h1>Formulaire vendeur</h1>
	<form  enctype = "multipart/form-data" method ="POST" action="test2.php">
		<table>
			<tr>
				<td>Ajouter votre photo</td>
				<td><input type="file" name="Photo"></td>

			</tr>

			<tr>
			<td>Ajouter votre image de fond préféré</td>
			<td><input type="file" name="Fond"></td>

		</tr>
            
            
        <tr>
				<td>
					<input type="submit" name="valider" value="Se connecter">
				</td>
			</tr>

		</table>
	</form>

    
</body>
</html>

