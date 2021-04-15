<?php 

include("con_db.php");
if (isset($_POST['guardar'])) {
	if (strlen($_POST['DescripcionCurso'])< 1 &&
		strlen($_POST['SedeCurso'])< 1 && 
		strlen($_POST['OrganizaCurso'])< 1 &&
		strlen($_POST['ProgramaCurso'])< 1 &&
		strlen($_POST['PersonalCurso'])< 1 &&
		strlen($_POST['CupoCurso'])< 1 &&
		strlen($_POST['ContenidoCurso'])< 1 &&
		strlen($_POST['ObjetivoCurso'])< 1 &&
		strlen($_POST['FechaInCurso'])< 1 &&
		strlen($_POST['FechaTerCurso'])< 1 &&
		strlen($_POST['HTeoricasCurso'])< 1 &&
		strlen($_POST['HPracticasCurso'])< 1 &&
		strlen($_POST['ModalidadCurso'])< 1 &&
		strlen($_POST['EstrategiaCurso'])< 1 &&
		strlen($_POST['CostoCurso'])< 1 &&
		strlen($_POST['NombreCoordinador'])< 1 &&
		strlen($_POST['CorreoCoordinador'])< 1 &&
		strlen($_POST['Tel1Coordinador'])< 1 &&
		strlen($_POST['Tel2Coordinador'])< 1 &&
		strlen($_POST['CalendarioCoordinador'])< 1) {
	}
}
 ?>