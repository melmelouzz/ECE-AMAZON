<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Ajout d'un article</h1>
	<form method = "POST" Action = "articles.php">
		<table>
			<tr>
				<td>Type:</td>
				<td>
					<select name="Type" size="1">
                        <option> Sélectionner le type d'article </option>
                        <option> Livre </option>
                        <option> Musique </option>
                        <option> Vetement </option>
                        <option> Sport/Loisir </option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nom:</td>
				<td><input type="text" name="Nom"></td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><input type="text" name="Description"></td>
			</tr>
			<tr>
				<td>Prix:</td>
				<td><input type="number" name="Prix"></td>
			</tr>
            <tr>
				<td>Taille:</td>
				<td>
					<select name="Taille" size="1">
                        <option> Sélectionner la taille </option>
                        <option> 36 </option>
                        <option> 38 </option>
                        <option> 40 </option>
                        <option> 42 </option>
					</select>
				</td>
			</tr>
            <tr>
				<td>Couleur:</td>
				<td><input type="text" name="Couleur"></td>
			</tr>
            <tr>
				<td>Genre:</td>
				<td>
					<input type="radio" name="Genre" value="Homme">Homme<br>
					<input type="radio" name="Genre" value="Femme">Femme<br>
				</td>
			</tr>
			<tr>
				<td>Titre:</td>
				<td><input type="text" name="Titre"></td>
			</tr>
			<tr>
				<td>Auteur:</td>
				<td><input type="text" name="Auteur"></td>
			</tr>
			<tr>
				<td>Etat:</td>
				<td>
					<input type="radio" name="Etat" value="Vendu">Vendu<br>
					<input type="radio" name="Etat" value="Non vendu">Non vendu<br>
				</td>
			</tr>
            <tr>
				<td>ID:</td>
				<td><input type="number" name="ID"></td>
			</tr>
            <tr>
				<td>
					<input type="reset" value="Réinitialiser">
					<input type="submit" name="valider" value="Ajouter cet article">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>