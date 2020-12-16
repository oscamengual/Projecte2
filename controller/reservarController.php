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

?>