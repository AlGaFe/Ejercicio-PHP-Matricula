<html>
<head>
    <title>Ejercicio PHP TEMA 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table{
        border:1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    tr,td,th{
        border:1px solid black;
        padding:10px;
        border-collapse: collapse;
    }
</style>
</head>
<body>
    <h1>Comprueba los datos introducidos</h1>
    <div class="formulario">
    <form method='POST' enctype="multipart/form-data">
    <?php
    include_once "./persona.php";
    include_once "./matricula.php";
    session_start();
    $persona = unserialize($_SESSION['persona']);
    $matricula = unserialize($_SESSION['matricula']);
    echo"<h2>Datos Personales</h2>";
    $persona->imprimirDatos();
    echo"<h2>Datos del Curso";
    $matricula->imprimirDatos();
    ?>
     <p><input type='submit' value="Guardar" name='guardar'/><input type='submit' value="Volver" name='volver'/></p>
        </form>
    <?php
    if (isSet ($_REQUEST['guardar'])){
    include_once "./db_connection.php";
    $nombre = $persona->getNombre();
    $apellidos = $persona->getApellidos();
    $direccion = $persona->getDireccion();
    $codigoPostal = $persona->getCP();
    $provincia = $persona->getProvincia();
    $telefono = $persona->getTelefono();
    $email = $persona->getEmail();
    $centro = $matricula->getCentro();
    $curso = $matricula->getCurso();
    $turno = $matricula->getTurno();
    $consultaP = "INSERT INTO alumnos VALUES('$nombre','$apellidos','$direccion','$codigoPostal','$provincia','$telefono','$email')";
    $consultaM = "INSERT INTO cursos VALUES('$centro','$curso','$turno')";
    if (mysqli_query($conn, $consultaP)) {
        echo "Los datos del alumno se han guardado con éxito</br>";
    }else{
        echo "ERROR al guardar los datos del alumno</br>";
    }
    if (mysqli_query($conn, $consultaM)) {
        echo "Los datos de matriculación se han guardado con éxito</br>";
    }else{
        echo "ERROR al guardar los datos de matriculación</br>";
    }
    session_destroy();
    }
    if (isSet ($_REQUEST['volver'])){
        session_destroy();
        header('Location:datosPersonales.php');
    }
 ?>
    </div>
</body>
</html>

