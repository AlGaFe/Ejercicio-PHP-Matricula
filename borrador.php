<html>
<head>
    <title>Ejercicio PHP TEMA 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Comprueba los datos introducidos</h1>
    <div class="formulario">
    <form method='POST' enctype="multipart/form-data">
    <?php
    include_once "./persona.php";
    include_once "./matricula.php";
    session_start();
    $persona=$_SESSION['persona'];
    $matricula=$_SESSION['matricula'];
    echo"<h2>Datos Personales</h2>";
    $persona->imprimirDatos();
    echo"<h2>Datos del Curso";
    $matricula->imprimirDatos();
    ?>
     <p><input type='submit' value="Enviar" name='submit'/></p>
        </form>
    <?php
    if (isSet ($_REQUEST['submit'])){
    include_once "./db_connection.php";
    $centro = $_REQUEST['centro'];
    $curso = $_REQUEST['curso'];
    $turno = $_REQUEST['turno'];
    $matricula= new Matricula ($centro,$curso,$turno);
    session_start();
    $_SESSION['matricula'] = $matricula;
    header('Location:borrador.php');
}
 ?>
    </div>
</body>
</html>

