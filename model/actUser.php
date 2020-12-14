<?php
require_once '../model/connexion.php';
echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';

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

echo "<input type='submit' class='fenviar' value='Enviar'>";
echo "</form>";
echo "</div>";
}
