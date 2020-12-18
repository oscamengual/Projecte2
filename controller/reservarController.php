<?php

    require_once '../model/connexion.php';


    // $user=$_REQUEST['email_user'];
    $horario=$_REQUEST['franjas_horarias'];
    $mesa=$_REQUEST['id_mesa'];
    $fecha=$_REQUEST['fdata'];
    // $capacidad=$_REQUEST['capacidad_mesa'];


        // $queryId="SELECT id_user FROM tbl_user where email_user='$user'";
        // $sentenciaId=$pdo->prepare($queryId);
        // $sentenciaId->execute();
        // $id_user=$sentenciaId->fetch(PDO::FETCH_ASSOC);

        session_start();
        $id_user=$_SESSION['user'];

    $query="SELECT * from tbl_reserva where id_mesa='$mesa' and Fecha_reserva='$fecha' and franjas_horarias='$horario'";
    $sentencia=$pdo->prepare($query);

    $sentencia->execute();

    if($sentencia->rowCount()!=0){
        header("Location: .._/view/reservamesa.php");
    }else{
        $query="INSERT INTO tbl_reserva (id_mesa, franjas_horarias, Fecha_reserva, id_user) VALUES ('$mesa', '$horario', '$fecha', '$id_user')";

        $sentencia= $pdo->prepare($query);
        $sentencia->bindParam(1,$fecha);
        $sentencia->bindParam(2,$mesa);
        $sentencia->bindParam(3,$id_user);
        $sentencia->bindParam(4,$horario);

        $sentencia->execute();
        header("Location: ../view/reservarmesa.php");

    }
    
    echo '<td style="text-align:center" class="btn"><form action="../view/reservarmesa.php"id='.'" method="POST"> <input type="submit" class="actu" value="Volver"></form></td>';

    // public function cancelar_reserva(){
    //     $query = "SELECT * FROM tbl_reserva ";
    //     $sentencia=$this->pdo->prepare($query);
    //     $sentencia->execute();
    //     $lista_reservas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    //     echo "<table class='table text-center'>";
    //     echo '<thead class="thread-dark">';
    //     echo "<tr>";
    //     echo "<th>Día de la reserva</th>";
    //     echo "<th>Mesa/th>";
    //     echo "<th>Hora</th>";
    //     echo "<th>Camarero que ha tomado la reserva</th>";
    //     echo "<th></th>";
    //     echo "</tr>";
    //     echo '<thead>';
    //     foreach($lista_reservas as $reserva){
    //     echo "<tr>";
    //     echo "<td>".$reserva['Fecha_reserva']."</td>";
    //     echo "<td>".$reserva['id_mesa']."</td>";
    //     echo "<td>".$reserva['franjas_horarias']."</td>";
    //     echo "<td>".$reserva['id_user']."</td>";
    //     echo '<td><form action="../model/reserva.php?id_reserva='.$reserva['id_reserva'].'" method="POST"> <input type="submit" class="actu" value="Cancelar"></form>';
    //     echo "<tr>"; 
    //     }
    //     echo "</table>";

    
?>