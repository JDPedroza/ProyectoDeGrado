<?php
include_once '../Extras/conexion.php';
include_once '../Scripts/mostrar.php';

$nombretabla = 'invherramientas'; //viene del click del cubo
$namefields = array();
$namedatos = array();


$namefields = nombresFilas($nombretabla);
$namedatos = datosTabla($nombretabla);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/formularioConsulta.css">
</head>
<body>
	<header>Hola soy el header</header>

	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<?php foreach ($namefields as $columns): ?>
				 		<th><?php echo substr($columns['Field'], 2)?></th>
				<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
				<?php foreach ($namedatos as $dato):?>
					<tr>
						<?php foreach ($namefields as $columns): ?>
					 		<td><?=$dato[$columns['Field']]?></td>
						<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>