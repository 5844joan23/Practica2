<?php
require_once '../controller/welcome.php';
require_once 'connection.php';
echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';

    $id=$_REQUEST['id'];
    $query="SELECT * FROM tbl_alumnos WHERE id_alumno = $id";

echo '<h3>Actualizar alumno</h3>';

$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

if($row =$result->fetch()){

echo "<div class='contenedor'>";
echo "<form action='../controller/act_alu.php' method='POST'>";

echo "<label for='fname'>Nombre</label>";
echo "<input type='text' name='nombre_alumno' class='femail' value='{$row["nombre_alumno"]}'>";

echo "<label for='lname'>Primer apellido</label>";
echo "<input type='text' name='primer_apellido_alummno' class='femail' value='{$row["primer_apellido_alummno"]}'>";

echo "<label for='lname'>Segundo apellido</label>";
echo "<input type='text' name='segundo_apellido_alumno' class='femail' value='{$row["segundo_apellido_alumno"]}'>";

echo " <label for='lname'>Email</label>";
echo "<input type='text' name='email_alumno' class='femail' value='{$row["email_alumno"]}'>";

echo "<label for='lname'>Grupo</label>";
echo "<input type='text' name='grupo_alumno' class='femail' value='{$row["grupo_alumno"]}'>";

echo "<input type='hidden' name='id' value='{$id}'>";

echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";
}
