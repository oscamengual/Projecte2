<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="../css/demas.css"/>
    <title>Crear Usuario</title>
</head>
<body>
<div class='img' src="../img/header.jpg"></div>
<?php

require_once '../model/connexion.php';

echo '<h3>Crear user</h3>';

echo '<table class="table table-striped">';
echo '<tr>';
echo "<td><div class='container'></td>";
echo "<td><form action='../controller/crearController.php' method='POST'></td>";

echo " <td><label for='lname'>Email Usuario</label></td>";
echo "<td><input type='text' name='email_user' class='email_user' id'email_user'></td>";

echo "<td><label for='lname'>Contraseña Usuario</label></td>";
echo "<td><input type='text' name='passwd_user' class='passwd_user' id'passwd_user'></td>";

echo "<td><label for='lname'>Estatus Usuario</label></td>";
echo "<td><input type='text' name='estatus_user' class='estatus_user' id='estatus_user'></td>";

echo "<br><br><input type='submit' class='btn btn-primary' value='Enviar'></td>";
echo "</form>";
echo "</div>";
echo '</tr>';
echo '</table>';
?>
       <button class="fenviar" onclick="location.href='../view/zona_Admin.php'">Volver</button>
    </body>
</html>