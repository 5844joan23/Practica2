<?php
require_once 'administrador.php';
class AdministradorDao{
    private $pdo;
    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM tbl_administrador WHERE email_administrador=? AND passwd_administrador=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail_persona();
        $passwd=$user->getPassword_persona();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$passwd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        if(!empty($numRow) && $numRow==1) {
            $user->setNombre_persona($result['Email']);
            $user->setId_persona($result['Id']);
            session_start();
            $_SESSION['user']=$user;
            return true;
        }else {
            return false;
        }
    }
}
?>