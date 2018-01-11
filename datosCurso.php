<html>
<head>
    <title>Ejercicio PHP TEMA 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Introduce los datos del curso</h1>
    <div class="formulario">
    <form method='POST' enctype="multipart/form-data">
            <p>Centro: <input type="text" name="centro"></p>
            <p>Curso: <input type="text" name="curso"></p>
            <p>Turno: <input type="text" name="turno"></p>
            <p><input type='submit' value="Enviar" name='enviarDatosCurso'/></p>
        </form>
        <?php
if (isSet ($_REQUEST['enviarDatosCurso'])){
    include_once "./matricula.php";
    $centro = $_REQUEST['centro'];
    $curso = $_REQUEST['curso'];
    $turno = $_REQUEST['turno'];
    $matricula= new Matricula ($centro,$curso,$turno);
    session_start();
    $matriculaSerializada = serialize($matricula);
    $_SESSION['matricula'] = $matriculaSerializada;
    header('Location:borrador.php');
}
 ?>
    </div>
</body>
</html>

