<html lang="en">
<head>
  <title>Inserción de registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="content">

			<div class="row" style="background-color: #545653; padding: 20px;">
				<div class="col-md-6">
				<a href="index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Droles_administracion%26action%3Dindex%26return_module%3Droles_administracion%26return_action%3DDetailView" class="btn btn-danger">Volver a registros</a>
				</div>
				<div class="col-md-6">
				<a href="" class="btn btn-info">Exportar a word</a>
				</div>
			</div>
		

			<div class="row"  style="padding: 25px !important;">
			<?php
			if (!defined('sugarEntry') || !sugarEntry)
				die('No es valido');

			class HookClase {
				function funcionHook(&$bean, $event, $arguments) {

					//header("Refresh: 7; url=index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Droles_administracion%26action%3Dindex%26return_module%3Droles_administracion%26return_action%3DDetailView");

					echo "<div class='alert alert-success'> <strong> Se ha registrado exitosamente.</strong></div><br><br>
					
					<table class='table table-hover'>
					<thead>
				      <tr>
				        <th>Nombre</th>
				        <th>Correo</th>
				        <th>Estatus</th>
				        <th>Imágen</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>".$bean->nombre."</td>
					    <td>".$bean->correo."</td>
					    <td>".$bean->estatus."</td>
					    <td>".$bean->imagen."</td>
					  </tr>
					</tbody>
					</table>
					<br><br>
					";
					exit();
				}
			}

			?>
			</div>

		</div>	
	</div>
</body>
</html>