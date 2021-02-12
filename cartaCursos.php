<!DOCTYPE html>
<html>
<head>
	<title>Carta Descriptiva</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos/style2.css">
</head>
<body>
	<div class="divCur3">
		<p class="form-group text col-mb-1" id="textS">SIGEC</p>
		<label class="text">Carta Descriptiva</label>
		<p class="p1">Instrucciones:</p>
		<p class="p1">1.-Indique ruta del archivo formato PDF<p>
		<p class="p1">2.-Seleccione el boton adjuntar<p>
		<p class="p1">3.-Para comprobar que su archivo fue cargado con exito seleccione boton descargar<p>
		<div class="form-group row">
			<div class="col-sm-1">
				<label class="col-form-label">Archivo</label>
			</div>
			<div class="col-sm-6">
				<input type="file" class="form-control" accept=".PDF">
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
</body>
</html>