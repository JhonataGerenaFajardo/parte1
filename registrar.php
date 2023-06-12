
<?php 

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['NoCedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['NoTelefono']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['fechaDeConsulta']) >= 1) {
		$NoCedula= trim($_POST['NoCedula']);
		$nombre = trim($_POST['nombre']);
        $apellido= trim($_POST['apellido']);
        $NoTelefono= trim($_POST['NoTelefono']);
        $email = trim($_POST['email']);
	    $fechaDeConsulta = trim($_POST['fechaDeConsulta']);
	    $consulta = "INSERT INTO base(NoCedula,nombre,apellido,NoTelefono,email,fechaDeConsulta) VALUES ('$NoCedula','$nombre','$apellido','$NoTelefono','$email','$fechaDeConsulta')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php 
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }


		   
    }
}

