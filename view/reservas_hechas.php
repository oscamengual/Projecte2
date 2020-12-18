<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
</head>
<body>
    <?php
    require_once '../model/connexion.php';
    // require_once '../model/connexion.php';
    require_once '../model/reservarController.php';
    ?>

    <div class='salas'>
        <?php
        $finReserva=new ReservarDAO;
        $finReserva->finalizar_reserva();
        echo "<a class='btn btn-warning atras' href='../view/reservarmesa.php'>Volver Atrás</a>";
        ?>
</body>
</html>