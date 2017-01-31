<?php
	$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8', 'root', 'simplonco');
	$reponse = $bdd->query('SELECT * FROM mes_chaussettes');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL</title>
</head>
<body>
	<table>
		<tr>
			<th>Pointure</th>
			<th>Température de lavage</th>
			<th>Description</th>
			<th>Couleur</th>
			<th>Date du lavage</th>	
		</tr>

		<?php
		while($donnees = $reponse->fetch())
		{
		?>
			<tr>
				<td><?= $donnees['pointure']; ?></td>
				<td><?= $donnees['temp_lavage']; ?></td>
				<td><?= $donnees['description']; ?></td>
				<td><?= $donnees['couleur']; ?></td>
				<td><?= $donnees['date_lavage']; ?></td>
			</tr>
		<?php } ?>
	</table>

	
</body>
</html>