<?php
require_once '../model/connexion.php';

$email=$_REQUEST['email_user'];
$passwd= md5($_REQUEST['pswd_user']);
$estatus=$_REQUEST['estatus'];

$query="INSERT INTO tbl_user (email_user, pswd_user, estatus) VALUES ('$email','$passwd','$estatus')";

$result = $pdo->prepare($query);
$result->execute();
header('Location: ../view/zona_admin.php');