<?php
class UserDao{
    private $pdo;

    public function __construct(){
        //include '../services/config.php';
        include '../services/conexion.php';
        $this->pdo=$pdo;
    } 

    public function loginUser($user){
        $query = "SELECT * FROM tbl_usuarios WHERE email_user='{$user->getEmail_user()}' AND passwd_user='{$user->getPasswd_user()}'";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();

        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        //mostrar las filas
        echo $numRow;
        if($numRow==1){
            session_start();
            $_SESSION['user']= $user->getEmail_user();
            return true;
        }else {
            return false;
        }
    }
    // public function showRoms($salas){       
    //     $idSala=$salas->getId();
    //     $num_mesa=$salas->getEmail();
    //     $nombre_cam=$salas->getNombre_camarero();
    //     $apellido_cam=$salas->getApellido_camarero();
    //     $query = "SELECT tbl_camareros.id, tbl_camareros.email, tbl_camareros.`nombre_camarero` FROM tbl_camareros";
    //     $sentencia=$this->pdo->prepare($query);
    //     $sentencia->execute();
    //     // coge las filas en forma de array
    //     return $sentencia->fetchAll(PDO::FETCH_ASSOC); 
    // } 
  
}

?>