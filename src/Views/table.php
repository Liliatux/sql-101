<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Armoire Statique</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>Affichage des 50 premières entrées</h1>
	<table class="ui celled table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Pointure</th>
				<th>Température de lavage</th>
				<th>Description</th>
				<th>Couleur</th>
				<th>Date du lavage</th>
				<th>Edition</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($armoire as $value):?>
			<tr>
				<td><?= $value->id; ?></td>
				<td><?= $value->pointure; ?></td>
				<td><?= $value->temp_lavage; ?></td>
				<td><?= $value->description; ?></td>
				<td><?= $value->couleur; ?></td>
				<td><?= $value->date_lavage; ?></td>
				<td><a href="?action=edit&id=<?= $value->id ?>" class="ui button icon"><i class="icon edit"></i>Edit</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>