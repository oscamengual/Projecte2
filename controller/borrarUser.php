<?php
    require_once '../model/connexion.php';

    $id=$_REQUEST['id'];
    $query="DELETE FROM tbl_user WHERE id_user = $id";
    $result = $pdo->prepare($query);
    $result->execute();
    header('Location: ../view/zona_admin.php');