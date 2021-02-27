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
		<div class="nv">
				<ul >
					<li class="nv-li"><label class="text">Sistema de gestión de constancias (SIGEC)</label></li>
					<li class="nv-li"><a href="#">usuario</a><i class="fas fa-user"></i></li>
				</ul>
			
	    </div>
		<div class="sidebar">
	        <ul>
	        	<li class="mn"><img src="img/colima-logo.png"></li>
				<li class="mn"><i class="fas fa-tachometer-alt"></i><a href="#">Inicio</a></li>
				<li class="mn"><i class="fas fa-cog"></i><a href="#">Cursos</a></li>
				<li class="mn"><i class="far fa-file-pdf"></i><a href="#">Manual</a></li>
			</ul>
		</div>
		<div class="content">
			<br>
			<br>
			<br>
			<br>
			<div class="divCur2">
				<label class="text">Registro Particioantes</label>
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
				<button type="submit" onclick="location.href='index.php'" class="btn btn-danger">Atras</button>
			</div>
		</div>
	</div>
</body>
</html>