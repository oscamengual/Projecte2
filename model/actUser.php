<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="../css/demas.css"/>
    <title>Actualizar Usuario</title>
</head>
<body>
    
<div class='img' src="../img/header.jpg"></div>

<?php

require_once '../model/connexion.php';


    $id=$_REQUEST['id'];
    $query="SELECT * FROM tbl_user WHERE id_user = $id";

echo '<h3>Actualizar Usuario</h3>';

$result = $pdo->prepare($query);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();

if($row =$result->fetch()){

echo "<div class='contenedor'>";
echo "<form action='../controller/actualizarController.php' method='POST'>";
    
echo "<label for='fname'>Email</label>";
echo "<input type='text' name='email_user' class='email_user' value='{$row["email_user"]}'>";

echo "<label for='lname'>Estatus</label>";
echo "<input type='text' name='estatus' class='estatus' value='{$row["estatus"]}'>";

echo "<input type='hidden' name='id' value='{$id}'>";

echo "<input type='submit' class='fenviar' value='Actualizar'>";
echo "</form>";
echo "</div>";
echo "<footer>";
echo "<p>Copyright &copy; 2020 | Designed By : Óscar Mengual, All rights reserved. </p>";
echo "</footer>";  
}
?>
    <button class="fenviar" onclick="location.href='../view/zona_Admin.php'">Volver</button>

</body>
</html>