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
		include "sidebar.php";
		?>
		<div class="content">
			<div class="divCur2">
				<label class="text">Consulta de cursos</label>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Estatus</label>
					<div class="col-sm-6">
						<input type="text" readonly class="form-control-plaintext" value="?">
					</div>
				</div>
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
					      <th scope="col">Fecha</th>
					      <th scope="col">Estatus</th>
					      <th scope="col">Opciones</th>
					      <th scope="col">Comentarios</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>INTRODUCCIÓN A LA METODOLOGÍA DE LA INVESTIGACIÓN PARA LA SALUD</td>
					      <td></td>
					      <td></td>
					      <td><button type="submit" onclick="location.href='RegistrarCursos.php'" class="botonmar btn btn-warning">Editar</button><button type="submit" onclick="location.href='tripticoCursos.php'" class="botonmar btn btn-success">Triptico</button><button type="submit" onclick="location.href='programaCursos.php'" class="botonmar btn btn-light">Programa</button><button type="submit" onclick="location.href='cartaCursos.php'" class="botonmar btn btn-light">Carta Descriptiva</button><button type="submit" onclick="location.href='evaluacionDocenteCurso.php'" class="botonmar btn btn-light">Evaluacion Docentes</button><button type="submit" onclick="location.href='registroParticipantes.php'" class="botonmar btn btn-light">Registro Participantes</button><button type="submit" onclick="location.href='informeFinalCursos.php'" class="botonmar btn btn-light">Informe Final</button><button type="submit" onclick="location.href='nexosCursos.php'" class="botonmar btn btn-light">Nexos</button></td>
					      <td><button type="submit" onclick="" class="botonmar btn btn-link">Falta Documentación</button></td>
					    </tr>
					    <tr>
					      <td>ACLS</td>
					      <td></td>
					      <td></td>
					      <td><button type="submit" onclick="location.href='Editar.php'" class="botonmar btn btn-warning" disabled>Editar</button><button type="submit" onclick="location.href='tripticoCursos.php'" class="botonmar btn btn-warning">Triptico</button><button type="submit" onclick="location.href='programaCursos.php'" class="botonmar btn btn-success">Programa</button><button type="submit" onclick="location.href='cartaCursos.php'" class="botonmar btn btn-light">Carta Descriptiva</button><button type="submit" onclick="location.href='evaluacionDocenteCurso.php'" class="botonmar btn btn-light">Evaluacion Docentes</button><button type="submit" onclick="location.href='registroParticipantes.php'" class="botonmar btn btn-light">Registro Participantes</button><button type="submit" onclick="location.href='informeFinalCursos.php'" class="botonmar btn btn-light">Informe Final</button><button type="submit" onclick="location.href='nexosCursos.php'" class="botonmar btn btn-light">Nexos</button></td>
					      <td></td>
					    </tr>
					    <tr>
					      <td>Vía aérea neonatos</td>
					      <td></td>
					      <td></td>
					      <td><button type="submit" onclick="location.href='Editar.php'" class="botonmar btn btn-warning" disabled>Editar</button><button type="submit" onclick="location.href='tripticoCursos.php'" class="botonmar btn btn-warning">Triptico</button><button type="submit" onclick="location.href='programaCursos.php'" class="botonmar btn btn-warning">Programa</button><button type="submit" onclick="location.href='cartaCursos.php'" class="botonmar btn btn-success">Carta Descriptiva</button><button type="submit" onclick="location.href='evaluacionDocenteCurso.php'" class="botonmar btn btn-light">Evaluacion Docentes</button><button type="submit" onclick="location.href='registroParticipantes.php'" class="botonmar btn btn-light">Registro Participantes</button><button type="submit" onclick="location.href='informeFinalCursos.php'" class="botonmar btn btn-light">Informe Final</button><button type="submit" onclick="location.href='nexosCursos.php'" class="botonmar btn btn-light">Nexos</button></td>
					      <td><button type="submit" onclick="" class="botonmar btn btn-link">Corregir programa</button></td>
					    </tr>
					  </tbody>
				  </table>
				</div>
				<br>
				<div id="botonheight">
					<button type="submit" onclick="location.href='index.php'" class="btn btn-danger">Atras</button>
				</div>
			</div>
			<div class="text-center"><label id="lbl">Copyright © SIGEC 2020</label></div>
		</div>
	</div>
</body>
</html>