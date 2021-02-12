<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos/style.css">
</head>
<body>
	<div class="form-row div3">
		<div class="form-group">
			<p class="form-group text">SIGEC</p>
			<p> Sistema de gestión de constancias</p>
			<p class="p1">Instrucciones:</p>
			<p class="p1">1.-Indique el periodo del curso que desea consultar<p>
			<p class="p1">2.-Seleccione el boton buscar<p>
			<p class="p1">3.-El sistema generara un listado de los cursos que usted asistio en el periodo capturado<p>
			<p class="p1">4.-Para imprimir la constancia debe sellecionar el boton imprimir constancia de la columna "Opciones"<p>
			<p class="p1">Periodo: Del día
		      <input id="example-date-input" class="col-3" type="date" name="dia">
		       al día 
		       <input id="example-date-input" class="col-3" type="date" name="dia">
		       <button type="submit" class="btn btn-info">Buscar</button>
			</p>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Fecha</th>
			      <th scope="col">Curso</th>
			      <th scope="col">Lugar</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>20/noviembre/2020</td>
			      <td>curso 1</td>
			      <td>Colima, col</td>
			      <td>
			      	<button type="submit" onclick="location.href='Usuario.php'" class="btn btn-success">Imprimir constancia</button>
			      	<button type="submit" onclick="location.href='detalles.php'" class="btn btn-info">Detalles</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>15/diciembre/2020</td>
			      <td>curso 2</td>
			      <td>Colima, col</td>
			      <td>
			      	<button type="submit" onclick="location.href='Usuario.php'" class="btn btn-success">Imprimir constancia</button>
			      	<button type="submit" onclick="location.href='detalles.php'" class="btn btn-info">Detalles</button>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>13/enero/2021</td>
			      <td>curso 3</td>
			      <td>Colima, col</td>
			      <td>
			      	<button type="submit" onclick="location.href='Usuario.php'" class="btn btn-success">Imprimir constancia</button>
			      	<button type="submit" onclick="location.href='detalles.php'" class="btn btn-info">Detalles</button>
			      </td>
			    </tr>
			  </tbody>
			</table>
			<button type="submit" onclick="location.href='login.php'" class="btn btn-danger">Salir</button>	
		</div>
	</div>

</body>
</html>