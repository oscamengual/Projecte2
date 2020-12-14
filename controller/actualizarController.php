<?php
    require_once '../model/connexion.php';

    $id_user=$_REQUEST['id'];
    $email=$_REQUEST['email_user'];
    $estatus=$_REQUEST['estatus'];

    $query="UPDATE tbl_user SET email_user='$email', estatus='$estatus' WHERE id_user=$id_user";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/zona_admin.php');