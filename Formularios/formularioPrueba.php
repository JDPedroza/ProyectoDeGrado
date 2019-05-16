<?php
namespace Formularios;
include_once '../vendor/autoload.php';

use Conexion\conexion;
use Mostrar\mostrar;

//realiza la conexion con la base de datos
$conexion = new conexion();

$nombretabla = 'invherramientas'; //viene del click del cubo

//realiza las consultas necesarias para imprimir la tabla
$mostrar = new mostrar();
$namefields = $mostrar->nombresFilas($nombretabla);
$namedatos = $mostrar->datosTabla($nombretabla);
?>

<!DOCTYPE html>
<html lang="">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/formularioConsulta.css">
</head>
<body>
	<header>Hola soy el header</header>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<?php foreach ($namefields as $columns): ?>
				 		<th><?php echo substr($columns['Field'], 2)?></th>
				<?php endforeach;?>
			</tr>
		</thead>
		<tbody>
				<?php foreach ($namedatos as $dato):?>
					<tr>
						<?php foreach ($namefields as $columns):?>
					 		<td><?=$dato[$columns['Field']]?></td>
						<?php endforeach;?>
					</tr>
				<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>