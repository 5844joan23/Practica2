<?php
require_once '../controller/welcome.php';
require_once 'connection.php';
echo '<link rel="stylesheet" type="text/css" href="../css/styles.css">';

echo '<h3>Crear alumno</h3>';


echo "<div class='contenedor'>";
echo "<form action='../controller/crear_alu.php' method='POST'>";

echo "<label for='fname'>Nombre</label>";
echo "<input type='text' name='nombre' class='femail'>";

echo "<label for='lname'>Primer apellido</label>";
echo "<input type='text' name='apellido1' class='femail'>";

echo "<label for='lname'>Segundo apellido</label>";
echo "<input type='text' name='apellido2' class='femail'>";

echo " <label for='lname'>Email</label>";
echo "<input type='text' name='email' class='femail'>";

echo "<label for='lname'>Grupo</label>";
echo "<input type='text' name='grupo' class='femail'>";

echo "<label for='lname'>Contraseña</label>";
echo "<input type='text' name='passwd' class='femail'>";



echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";

