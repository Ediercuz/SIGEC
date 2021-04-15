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
				<label class="text">Autorizar cursos</label>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Periodo del</label>
					<div class="col-sm-2">
						<input type="date" class="form-control-plaintext" value="">
					</div>
					<div class="col-sm-1">
						<label class="col-form-label">al</label>
					</div>
					<div class="col-sm-2">
						<input type="date" class="form-control-plaintext" value="">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Dependencia</label>
					<div class="col-sm-3">
						<select class="custom-select">
					  		<option selected>...</option>
						 	<option value="1">1</option>
						 	<option value="2">2</option>
						 	<option value="2">3</option>
						</select>
					</div>
					<div class="col-sm-2">
				     	<button type="submit" onclick="" class="btn btn-info">Buscar</button>
					</div>
				</div>
				<div class="table-responsive">
				  <table class="table">
				  	<thead>
					    <tr>
					      <th scope="col">Fecha</th>
					      <th scope="col">Curso</th>
					      <th scope="col">Dependencia</th>
					      <th scope="col">Estatus</th>
					      <th scope="col">Autorizar</th>
					      <th scope="col">comentar</th>
					    </tr>
					</thead>
					  <tbody>
					    <tr>
					      <td>01/03/2021</td>
					      <td><a href="">ACLS</a></td>
					      <td>Enseñanza HRU</td>
					      <td>Autorizado</td>
					      <td><input class="form-check-input col-sm-1" type="checkbox" id="check1" onchange="cTrig('check1')">
					      	<script>
						        function cTrig(clickedid) { 
							      if (document.getElementById(clickedid).checked == false) {
							        return false;
							      } else {
							       var box= confirm("¿Estas seguro?");
							        if (box==true){
							            return true;
							        }
							        else{
							           document.getElementById(clickedid).checked = false;
							        }
							            
							      }
							    }
							</script>
					      </td>
					      <td><a href="">Comentar</a></td>
					    </tr>
					  </tbody>
				  </table>
				</div>
			</div>
			<div class="text-center"><label id="lbl">Copyright © SIGEC 2021</label></div>
		</div>
	</div>
</body>
</html>
