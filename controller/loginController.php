<?php
require_once '../model/administrador.php';
require_once '../model/administradorDAO.php';
if (isset($_POST['user'])) {
    $administrador = new Administrador($_POST['user'], md5($_POST['passwd']));
    $administradorDAO = new AdministradorDAO();
    if($administradorDAO->login($administrador)){
        header('Location:../view/tabla_alu.php');
    }else {
        header('Location:../view/login.php');
    }
}else {
    header('Location:../view/login.php');
}