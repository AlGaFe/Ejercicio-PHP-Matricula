<html>
<head>
    <title>Ejercicio PHP TEMA 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Introduce los datos del alumno</h1>
    <div class="formulario">
    <form method='POST' enctype="multipart/form-data">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Apellidos: <input type="text" name="apellidos"></p>
            <p>Dirección: <input type="text" name="direccion"></p>
            <p>CP: <input type="text" name="codigoPostal"></p>
            <p>Provincia: <input type="text" name="provincia"></p>
            <p>Teléfono: <input type="text" name="telefono"></p>
            <p>E-mail: <input type="text" name="email"></p>
            <p><input type='submit' value="Enviar" name='enviarDatosPersonales'/></p>
        </form>
        <?php
if (isSet ($_REQUEST['enviarDatosPersonales'])){
    include_once "./persona.php";
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $direccion = $_REQUEST['direccion'];
    $codigoPostal = $_REQUEST['codigoPostal'];
    $provincia = $_REQUEST['provincia'];
    $telefono = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];
    $persona= new Persona ($nombre,$apellidos,$direccion,$codigoPostal,$provincia,$telefono,$email);
    session_start();
    $personaSerializada = serialize($persona);
    $_SESSION['persona'] = $personaSerializada;
    header('Location:datosCurso.php');
}
 ?>
    </div>
</body>
</html>

