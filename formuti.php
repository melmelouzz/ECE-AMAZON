<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Création d'un compte</h1>
	<form method = "POST" Action = "utilisateur.php">
		<table>
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="Nom"></td>
			</tr>
			<tr>
				<td>Prenom:</td>
				<td><input type="text" name="Prenom"></td>
			</tr>
			<tr>
				<td>ID:</td>
				<td><input type="number" name="ID"></td>
			</tr>
			<tr>
				<td>Type:</td>
				<td>
					<select name="Type" size="1">
                        <option> Sélectionner le type de l'utilisateur </option>
                        <option> Admin </option>
                        <option> Acheteur </option>
                        <option> Vendeur </option>
					</select>
				</td>
			</tr>
            <tr>
				<td>Mail:</td>
				<td><input type="text" name="Mail"></td>
			</tr>
            <tr>
				<td>Mot de passe:</td>
				<td><input type="text" name="MDP"></td>
			</tr>
			<tr>
				<td>
					<input type="reset" value="Réinitialiser">
					<input type="submit" name="valider" value="Valider l'inscription">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>