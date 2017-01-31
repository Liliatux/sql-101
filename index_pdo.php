<?php
	require_once 'vendor/autoload.php';

	ORM::configure('mysql:host=localhost;dbname=mon_armoire');
	ORM::configure('username', 'root');
	ORM::configure('password', 'simplonco');

	$table = ORM::for_table('mes_chaussettes')->find_many();
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
		foreach($table as $value):
		?>
			<tr>
				<td><?= $value->pointure; ?></td>
				<td><?= $value->temp_lavage; ?></td>
				<td><?= $value->description; ?></td>
				<td><?= $value->couleur; ?></td>
				<td><?= $value->date_lavage; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	
</body>
</html>