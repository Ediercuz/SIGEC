<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos/style2.css">
</head>
<body>
	<div class="div5">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Nombre del Impartidor</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Nombre">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">RFC</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="RFC...">
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Apellido Paterno</label>
		      <input type="email" class="form-control" id="inputEmail4" placeholder="Primer Apellido">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Apellido Materno</label>
		      <input type="password" class="form-control" id="inputPassword4" placeholder="Segundo Apellido">
		    </div>
		  </div>
		  <div id="txtbox">
		  	<div class="custom-control custom-radio">
			  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
			  <label class="custom-control-label" for="customRadio1">Trabajador interno</label>
			</div>
			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
				  <label class="custom-control-label" for="customRadio2">Trabajador externo</label>
			</div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-12">
		      <label>Inserta Foto del Curso</label>
		      <input type="file" name="curso">
		  </div>
		<div class="bott">
			<button type="submit" onclick="location.href='impartidor.php'" class="btn btn-success">Guardar impartidor</button>
			<button type="submit" onclick="location.href='impartidor.php'" class="btn btn-danger">Cancelar</button>	
		</div>
	</div>
	
</body>
</html>