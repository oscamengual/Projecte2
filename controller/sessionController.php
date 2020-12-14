<?php
require_once '../model/user.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../index.php');
}
// var_dump($_SESSION['user']);
echo '<div class="logo">';
        echo '<h2>Bienvenido '.$_SESSION['user']->getEmail().'</h2>';
        echo '<h3 class="logout"><a href="../controller/logoutController.php">Logout</a></h3>';
        echo '</div>';
?>
