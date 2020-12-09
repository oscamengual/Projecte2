<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        <link  rel="stylesheet" href="../css/zona_camarero.css"/>
        <title>Validación</title>
    </head>
    <body>
        <div class='img' src="../img/header.jpg"></div>
        

        <?php
            require_once '../controller/sessionController.php';
            require_once '../model/camareroDAO.php';
            require_once '../controller/sessionController.php';
            $camareroDAO=new camareroDAO(); 
          
            
?>
        <button><a href="zona_camarero.php">Página Principal</a></button>
        <button><a href="camareros.php">Camereros</a></button>
        <button><a href="mantenimiento.php">Mantenimento</a></button>
        
    </body>
</html>
