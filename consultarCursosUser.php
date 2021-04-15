<!DOCTYPE html>
<html>
<head>
	<title>SIGEC</title>
	<link rel="stylesheet" type="text/css" href="estilos/stylee.css">
	<script src="https://kit.fontawesome.com/1fb09dc316.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php
		include "header.php";
		include "sidebarUser.php";
		?>
		<div class="content">
			<div class="divCur2">
				<label class="text">Consulta de cursos</label>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Fecha curso</label>
					<div class="col-sm-2">
						<label class="col-form-label">Fecha inicio</label>
					</div>
					<div class="col-sm-2">
						<input type="date" class="form-control-plaintext" value="">
					</div>
					<div class="col-sm-2">
						<label class="col-form-label">Fecha fin</label>
					</div>
					<div class="col-sm-2">
						<input type="date" class="form-control-plaintext" value="">
					</div>
					<div class="col-sm-2">
				     	<button type="submit" onclick="" class="btn btn-info">Buscar</button>
					</div>
				</div>
				<div class="table-responsive">
				  <table class="table">
				  	<thead>
					    <tr>
					      <th scope="col">Nombre</th>
					      <th scope="col">Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>INTRODUCCIÓN A LA METODOLOGÍA DE LA INVESTIGACIÓN PARA LA SALUD</td>
					      <td><button type="submit" onclick="location.href=#" class="botonmar btn btn-info"><i class="fas fa-print"></i> Imprimir constancia</button></td>
					    </tr>
					    <tr>
					      <td>ACLS</td>
					      <td><button type="submit" onclick="location.href=#" class="botonmar btn btn-info"><i class="fas fa-print"></i> Imprimir constancia</button></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>Vía aérea neonatos</td>
					      <td><button type="submit" onclick="location.href=" class="botonmar btn btn-info"><i class="fas fa-print"></i> Imprimir constancia</button></td>
					    </tr>
					  </tbody>
				  </table>
				</div>
				<br>
				<div id="botonheight">
					<button type="submit" onclick="location.href='indexUser.php'" class="btn btn-danger">Atras</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>