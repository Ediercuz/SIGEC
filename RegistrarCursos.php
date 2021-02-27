<!DOCTYPE html>
<html>
<head>
	<title>Registrar cursos</title>
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
				<label class="text">Registro de cursos</label>
				<div class="form-row">
				    <div class="form-group col-md-4">
				      <label>Descripción:</label>
				      <input type="text" class="form-control" placeholder="Nombre del evento">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Sede:</label>
				      <input type="text" class="form-control" placeholder="Lugar del curso">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Organiza:</label>
				      <input type="text" class="form-control" placeholder="Dependencia o area que lo organiza">
				    </div>
				  </div>
				  <div class="form-row">
				  	<div class="form-group col-md-4">
				      <label>Programa al que está asignado:</label>
				      <input type="text" class="form-control" placeholder="Sector asignado">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Personal al que va dirigido:</label>
				      <input type="text" class="form-control" placeholder="Descripción del personal">
				    </div>
				    <div class="form-group col-md-4">
				      <label>Cupo:</label>
				      <input type="text" class="form-control" placeholder="Numero maximo de personas">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				    <label>Contenido temático:</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
				  </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label>Objetivo:</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
				    </div>
				  </div>
				  <div class="form-row">
					<div class="form-group col-md-3">
				  		<label>Fecha inicio:</label>
				    	<input class="form-control" type="date" value="" id="example-date-input">
				  	</div>
				  	<div class="form-group col-md-3">
				  		<label>Fecha término:</label>
				    	<input class="form-control" type="date" value="" id="example-date-input">
				  	</div>
				  	<div class="form-group col-md-3">
				      <label>Horas teóricas:</label>
				      <input type="text" class="form-control" placeholder="Duración teorica">
				    </div>
				    <div class="form-group col-md-3">
				      <label>Horas prácticas:</label>
				      <input type="text" class="form-control" placeholder="Duración practica">
				    </div>
				</div>
				<div class="form-row">
				  <div class="form-group col-md-4">
					  	<label>Modalidad:</label>
					  	<select class="custom-select">
					  		<option selected>...</option>
						 	<option value="1">Presencial</option>
						 	<option value="2">Virtual</option>
						 	<option value="2">Mixto</option>

						</select>
					</div>
					<div class="form-group col-md-4">
					  	<label>Estrategia:</label>
					  	<select class="custom-select">
					  		<option selected>...</option>
						 	<option value="1">Curso</option>
						 	<option value="2">Taller</option>
						</select>
					</div>
				    <div class="form-group col-md-4">
				      <label>Costos:</label>
				      <input type="text" class="form-control" placeholder="valor monetario">
				    </div>
				  </div>
				  <div class="coordinador">
				  	<label>Datos del coordinador:</label>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Nombre:</label>
				      <input type="text" class="form-control" placeholder="Nombre del coordinador">
				    </div>
				    <div class="form-group col-md-6">
				      <label>Correo electrónico:</label>
				      <input type="text" class="form-control" placeholder="Correo de contacto">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Teléfono 1:</label>
				      <input type="text" class="form-control" placeholder="Numero de teléfono principal">
				    </div>
				    <div class="form-group col-md-6">
				      <label>Teléfono 2:</label>
				      <input type="text" class="form-control" placeholder="Numero de teléfono secundario">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label>Calendario de actividades:</label>
				      <input type="text" class="form-control" placeholder="Actividades">
				    </div>
				</div>
				  <br>
				<!--<div class="divPonente">
					<label class="coordinador">Ponente:</label>
					<div class="form-row">
					    <div class="form-group col-md-6">
					    	<label>Nombre:</label>
					    	<div class="input-group mb-3">
							  <input type="text" class="form-control" placeholder="Nombre del ponente" aria-label="Nombre del ponente" aria-describedby="basic-addon2">
							  <div class="input-group-append">
							    <button class="btn btn-outline-info" type="button"><img src="img/search2.svg" alt="x" /></button>
							  </div>
							</div>
					    </div>
					    <div class="form-group col-md-3">
					      <label>Foja:</label>
					      <input type="text" class="form-control" placeholder="Numero de foja">
					    </div>
					    <div class="form-group col-md-3">
					      <label>Registro:</label>
					      <input type="text" class="form-control" placeholder="Numero de registro">
					    </div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Creditos:</label>
					     	<input type="text" class="form-control" placeholder="Numero de creditos">
						</div>
						<div class="form-group col-md-6">
						</div>
						<div class="form-group col-md-3">
					     	<button type="submit" onclick="" class="btn btn-info">Asignar ponente</button>
						</div>
					</div>
				</div>
				<br><br>
				<div>
					<div class="pon">
						<label class="text2">Ponentes asignados al curso</label>
					</div>
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">Nombre</th>
					      <th scope="col">Foja</th>
					      <th scope="col">Registro</th>
					      <th scope="col">Creditos</th>
					      <th scope="col">Opciones</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Marco Antonio Collazo Barajas</td>
					      <td>101</td>
					      <td>1342</td>
					      <td>6</td>
					      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-danger">Eliminar</button></td>
					    </tr>
					    <tr>
					      <td>Carlos Alberto Torres Díaz</td>
					      <td>102</td>
					      <td>1234</td>
					      <td>7</td>
					      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-danger">Eliminar</button></td>
					    </tr>
					    <tr>
					      <td>Angel Tadeo Martines Gallardo</td>
					      <td>120</td>
					      <td>1675</td>
					      <td>5</td>
					      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-danger">Eliminar</button></td>
					    </tr>
					  </tbody>
					</table>
				</div>-->
				<br>
				<div id="botonheight">
					<button type="submit" onclick="location.href='index.php'" class="btn btn-success">Guardar curso</button>
					<button type="submit" onclick="location.href='index.php'" class="btn btn-danger">Cancelar</button>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>