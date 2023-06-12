 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>REGISTRO AGENDAMIENTO</title>
    <link rel="stylesheet" type="text/css" href="stilo.css">
</head>

<body>

    <form method="post">
        <h1>AGENDAMIENTO DE CONSULTA</h1>
        <h2>registrate para agendar tu consulta</h2>

        <input class="cedula" type="text" name="NoCedula" placeholder="cedula">
        <input class="nombre" type="text" name="nombre" placeholder="Nombre">
        <input class="apellido" type="text" name="apellido" placeholder="apellido">
        <input class="telefono" type="number" name="NoTelefono"  placeholder="telefono"> <br>
        <input class="email" type="text" name="email" placeholder="correo"> <br><br>
        <label class="label" >Por favor escoja el dia que desea la consulta</label> <br>
        <input id="date" type="date" name="fechaDeConsulta" placeholder="fechaDeConsulta" height="-25%">
        <input type="submit" name="register">
    </form>
    
        <?php
        include("registrar.php");
        ?>


    
</body>

</html>