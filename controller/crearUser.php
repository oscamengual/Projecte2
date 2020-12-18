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
<!-- <div class='container'> -->
<?php

require_once '../model/connexion.php';

echo '<h3>Crear user</h3>';
echo "<div class='contenedor'>";

echo '<table>';
echo '<tr>';
echo "<td><form action='../controller/crearController.php' method='POST'></td>";

echo " <td><label for='lname'>Email Usuario</label></td>";
echo "<td><input type='text' name='email_user' id'email_user'></td>";

echo "<td><label for='lname'>Contraseña Usuario</label></td>";
echo "<td><input type='text' name='passwd_user' id'passwd_user'></td>";

echo "<td><label for='lname'>Estatus Usuario</label></td>";
echo "<td><input type='text' name='estatus_user'  id='estatus_user'></td>";
echo "</div>";

echo "<br><br><input type='submit' class='btn btn-primary' value='Crear'></td>";
echo "</form>";
echo '</tr>';
echo '</table>';
echo "<footer>";
echo "<p>Copyright &copy; 2020 | Designed By : Óscar Mengual, All rights reserved. </p>";
echo "</footer>";  
?>
</div>
       <button class="fenviar" onclick="location.href='../view/zona_Admin.php'">Volver</button>
    </body>
</html>