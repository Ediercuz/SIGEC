<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos/style3.css">
</head>
<body>
	<div class="form-row div7">
		<div class="form-group">
			<p class="form-group text">Lista de Impartidores</p>
			<br>
			<button type="submit" onclick="location.href='RegistrarImpartidor.php'" class="btn btn-success form-group">Registrar impartidor</button>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre del Impartidor</th>
			      <th scope="col">Primer Apellido</th>
			      <th scope="col">Numero de telefono</th>
			      <th scope="col">Opciones</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Rodrigo</td>
			      <td>Garcia</td>
			      <td>3121234534</td>
			      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-info">Editar</button></td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Luis</td>
			      <td>Delgado</td>
			      <td>3124040077</td>
			      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-info">Editar</button></td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Alonzo</td>
			      <td>Buenrostro</td>
			      <td>3121012002</td>
			      <td><button type="submit" onclick="location.href='Editar.php'" class="btn btn-info">Editar</button></td>
			    </tr>
			  </tbody>
			</table>
			<button type="submit" onclick="location.href='Administracion.php'" class="btn btn-danger form-group col-md-3">Atras</button>
		</div>
		
	</div>

</body>
</html>