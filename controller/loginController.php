<?php 
include '../model/user.php';
include '../model/userDAO.php';
require_once "../model/connexion.php";

    $email    = $_POST['email'];
    $password = md5($_POST['passwd']);

    // Comprobar si existe un usuario con ese email o contraseña
    $result = "Select * from tbl_user
        where email_user='$email' and pswd_user='$password'";
    $sentencia = $pdo->prepare($result);
    $sentencia->execute();
    if($sentencia->rowCount()!=0){ //Se ejecuta el if si existe el usuario
        $query= "SELECT * from tbl_user where email_user='$email' and pswd_user='$password'";
        $sentencia= $pdo->prepare($query);
        $sentencia->execute();

        $user= $sentencia->fetch();
        $id=$user['id_user'];
        $estatus=$user['estatus'];
        $email=$user['email_user'];
        session_start();

        $_SESSION["email_user"] = $email;
        $_SESSION["user"] = $id;

            // $estatus= $sentencia->fetch();
            // session_start();
            // $_SESSION["user"] = $email;

            switch ($estatus) {
                case '1':
                    header("Location: ../view/zona_camarero.php");
                    break;
                case '2':
                    header("Location: ../view/zona_admin.php");
                    break;
            }
        } else { //Esto se ejecuta si el usuario no existe
            header("Location: ../index.php");
      }

// $user = new User($_POST['email'], md5($_POST['psswd']));
// $userDAO = new UserDAO();

//  if($userDAO->loginUser($user)){ 
//   echo "he entrado danny";
//   header('Location: ../view/home.php');
// } 
  //header('Location: ../index.php');
  //echo "error";

?>