<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos/style2.css">
</head>
<body>
	<div class="form-row div6">
		<div class="form-group">
			<p class="form-group text">Lista de cursos</p>
			<br>
			<button type="submit" onclick="location.href='RegistrarCursos.php'" class="btn btn-success form-group" id="b1">Registrar cursos</button>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre del curso</th>
			      <th scope="col">Fecha</th>
			      <th scope="col">Lugar</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>curso 1</td>
			      <td>20/noviembre/2020</td>
			      <td>Colima, col</td>
			      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-info">Editar</button></td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>curso 2</td>
			      <td>15/diciembre/2020</td>
			      <td>Colima, col</td>
			      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-info">Editar</button></td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>curso 3</td>
			      <td>13/enero/2021</td>
			      <td>Colima, col</td>
			      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-info">Editar</button></td>
			    </tr>
			  </tbody>
			</table>
			<button type="submit" onclick="location.href='Administracion.php'" class="btn btn-danger form-group col-md-3" id="b2">Atras</button>
		</div>
		
	</div>

</body>
</html>
