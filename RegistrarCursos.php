<!DOCTYPE html>
<html>
<head>
	<title>Registrar cursos</title>
	<meta charset="utf-8">
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
		<form method="post">
			<div class="content">
			<div class="divCur2">
				<label class="text">Registro de cursos</label>
				<div class="form-row">
				    <div class="form-group col-md-4">
				      <label>Descripción:</label>
				      <input type="text" class="form-control" name="DescripcionCurso" placeholder="Nombre del evento">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Sede:</label>
				      <input type="text" class="form-control" name="SedeCurso" placeholder="Lugar del curso">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Organiza:</label>
				      <input type="text" class="form-control" name="OrganizaCurso" placeholder="Dependencia o area que lo organiza">
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="form-group col-md-4">
				      <label>Programa al que está asignado:</label>
				      <input type="text" class="form-control" name="ProgramaCurso" placeholder="Programa asignado">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Personal al que va dirigido:</label>
				      <input type="text" class="form-control" name="PersonalCurso" placeholder="Descripción del personal">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Cupo:</label>
				      <input type="text" class="form-control" name="CupoCurso" placeholder="Numero maximo de personas">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				    <label>Contenido temático:</label>
				    <textarea class="form-control" name="ContenidoCurso" rows="1"></textarea>
				  </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label>Objetivo:</label>
				    <textarea class="form-control" name="ObjetivoCurso" rows="1"></textarea>
				    </div>
				  </div>
				  <div class="form-row">
					<div class="form-group col-md-3">
				  		<label>Fecha inicio:</label>
				    	<input class="form-control" type="date" name="FechaInCurso" value="">
				  	</div>
				  	<div class="form-group col-md-3">
				  		<label>Fecha término:</label>
				    	<input class="form-control" type="date" name="FechaTerCurso" value="">
				  	</div>
				  	<div class="form-group col-md-3">
				      <label>Horas teóricas:</label>
				      <input type="text" class="form-control" name="HTeoricasCurso" placeholder="Duración teorica">
				    </div>
				    <div class="form-group col-md-3">
				      <label>Horas prácticas:</label>
				      <input type="text" class="form-control" name="HPracticasCurso" placeholder="Duración practica">
				    </div>
				</div>
				<div class="form-row">
				  <div class="form-group col-md-4">
					  	<label>Modalidad:</label>
					  	<select class="custom-select" name="ModalidadCurso">
					  		<option selected>...</option>
						 	<option value="1">Presencial</option>
						 	<option value="2">Virtual</option>
						 	<option value="2">Mixto</option>

						</select>
					</div>
					<div class="form-group col-md-4">
					  	<label>Estrategia:</label>
					  	<select class="custom-select" name="EstrategiaCurso">
					  		<option selected>...</option>
						 	<option value="1">Curso</option>
						 	<option value="2">Taller</option>
						</select>
					</div>
				    <div class="form-group col-md-4">
				      <label>Costos:</label>
				      <input type="text" class="form-control" name="CostoCurso" placeholder="valor monetario">
				    </div>
				  </div>
				  <div class="coordinador">
				  	<label>Datos del coordinador:</label>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Nombre:</label>
				      <input type="text" class="form-control" name="NombreCoordinador" placeholder="Nombre del coordinador">
				    </div>
				    <div class="form-group col-md-6">
				      <label>Correo electrónico:</label>
				      <input type="text" class="form-control" name="CorreoCoordinador" placeholder="Correo de contacto">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Teléfono 1:</label>
				      <input type="text" class="form-control" name="Tel1Coordinador" placeholder="Numero de teléfono principal">
				    </div>
				    <div class="form-group col-md-6">
				      <label>Teléfono 2:</label>
				      <input type="text" class="form-control" name="Tel2Coordinador" placeholder="Numero de teléfono secundario">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label>Calendario de actividades:</label>
				      <input type="text" class="form-control" name="CalendarioCoordinador" placeholder="Actividades">
				    </div>
				</div>
				<br>
				<br>
				<div id="botonheight">
					<input type="submit" name="guardar" class="btn btn-success">
					<button type="submit" onclick="location.href='index.php'" class="btn btn-danger">Cancelar</button>	
				</div>
			</div>
			<div class="text-center"><label id="lbl">Copyright © SIGEC 2021</label></div>
		</div>
		</form>
	</div>
	<?php 
	include("registrar.php"); 
	 ?>
</body>
</html>