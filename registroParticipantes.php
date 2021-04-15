<!DOCTYPE html>
<html>
<head>
	<title>Registro Participantes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos/stylee.css">
	<script src="https://kit.fontawesome.com/1fb09dc316.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<?php
		include "header.php";
		include "sidebar.php";
		?>
		<div class="content">
			<div class="divCur2">
				<label class="text">Registro participantes</label>
				<p class="p1">Instrucciones:</p>
				<p class="p1">1.-Indique ruta del archivo formato Exel<p>
				<p class="p1">2.-Seleccione el boton adjuntar<p>
				<p class="p1">3.-Para comprobar que su archivo fue cargado con exito seleccione boton descargar<p>
				<div class="form-group row">
					<div class="col-sm-1">
						<label class="col-form-label">Archivo</label>
					</div>
					<div class="col-sm-6">
						<input type="file" class="form-control"  accept=".xlsx">
					</div>
					<div class="col-sm-2">
						<button type="submit" onclick="" class="btn btn-success">Adjuntar</button>
					</div>
					<div class="col-sm-1">
				     	<button type="submit" onclick="" class="btn btn-info">Descargar</button>
					</div>

				</div>
				<button type="submit" onclick="location.href='consultarCursos.php'" class="btn btn-danger">Atras</button>
			</div>
		</div>
	</div>
</body>
</html>