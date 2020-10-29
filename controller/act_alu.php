<?php
    require_once '../controller/welcome.php';
    require_once '../model/connection.php';

    $id_alu=$_REQUEST["id"];
    $nombre_alu=$_REQUEST['nombre_alumno'];
    $primerapellido=$_REQUEST['primer_apellido_alummno'];
    $segundoapellido=$_REQUEST['segundo_apellido_alumno'];
    $email=$_REQUEST['email_alumno'];
    $grupo_alu=$_REQUEST['grupo_alumno'];

    $query="UPDATE tbl_alumnos SET nombre_alumno='$nombre_alu', primer_apellido_alummno='$primerapellido', segundo_apellido_alumno='$segundoapellido', grupo_alumno='$grupo_alu', email_alumno='$email' WHERE id_alumno=$id_alu";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/tabla_alu.php');