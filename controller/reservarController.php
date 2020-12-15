<?php

    require_once '../model/connexion.php';


    // $user=$_REQUEST['id_user'];
    $horario=$_REQUEST['franjas_horarias'];
    $mesa=$_REQUEST['id_mesa'];
    $fecha=$_REQUEST['fdata'];
    //echo $mesa;
    $query="SELECT * from tbl_reserva where id_mesa='$mesa' and Fecha_reserva='$fecha' and franjas_horarias='$horario'";
    $sentencia=$pdo->prepare($query);

    $sentencia->execute();

    if($sentencia->rowCount()!=0){
        header("Location: .._/view/reservamesa.php");
    }else{
        $query= "INSERT INTO tbl_reserva (Fecha_reserva,id_mesa,franjas_horarias) VALUES (?,?,?)";
        $sentencia= $pdo->prepare($query);
        $sentencia->bindParam(1,$fecha);
        $sentencia->bindParam(2,$mesa);
        // $sentencia->bindParam(3,$user);
        $sentencia->bindParam(3,$horario);

        //$sentencia->execute();
        // header("Location: ../view/zona_admin.php");
    }
    

?>