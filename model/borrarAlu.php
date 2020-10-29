<?php
    require_once '../model/connection.php';
    require_once '../controller/welcome.php';

    $id=$_REQUEST['id'];
    $query="DELETE FROM tbl_alumnos WHERE id_alumno = $id";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/tabla_alu.php');
?>