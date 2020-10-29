<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<?php
require_once '../controller/welcome.php';
require_once '../model/connection.php';

$query='SELECT id_alumno, nombre_alumno, primer_apellido_alummno, segundo_apellido_alumno FROM tbl_alumnos';
$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
    echo '<form action="../model/crearAlu.php "method="POST"> <input type="submit" class="btn btn-dark" value="Crear alumno"></form>';
    echo '<table class="table table-striped table-dark">';
    echo '<tr>';
    echo '<td>Nombre</td>';
    echo '<td>Primer Apellido</td>';
    echo '<td>Segundo Apellido</td>';
    echo '<td>Actualizar Alumno</td>';
    echo '<td>Borrar Alumno</td>';
    echo '</tr>';

if ($result) {
    while ($row=$result->fetch()) {
        echo '<tr>';
        echo '<td>'.$row['nombre_alumno'].'</td>';
        echo '<td>'.$row['primer_apellido_alummno'].'</td>';
        echo '<td>'.$row['segundo_apellido_alumno'].'</td>';
        echo '<td><form action="../model/actAlu.php?id='.$row['id_alumno'].'" method="POST"> <input type="submit" class="btn btn-success" value="Actualizar"></form></td>';
        echo '<td><form action="../model/borrarAlu.php?id='.$row['id_alumno'].'" method="POST"> <input type="submit" class="btn btn-danger" value="Borrar"></form></td>';
        echo '</tr>';
    }
}
echo '</table>';
?>
</html>