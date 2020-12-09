<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        <link  rel="stylesheet" href="../css/zona_camarero.css"/>
        <title>Camareros</title>
    </head>
    <body>
        <div class='img' src="../img/header.jpg"></div>
        

        <?php
            require_once '../controller/sessionController.php';
            require_once '../model/camareroDAO.php';
            require_once '../controller/sessionController.php';
            $camareroDAO=new camareroDAO(); 

          
            
?>
        <br>
        1 Manel Portillo manelportillo@admin.es<br>
        2 Eloi Rodríguez eloirodriguez@admin.es<br>   
        3
Albert
Buendia
albertbuendia@admin.es<br>
4
Óscar
Mengual
oscarmengual@admin.es<br>
5
Samuel
Muñoz
samuelmuñoz@camarero.es<br>
6
Francisco
Moreno
franciscomoreno@camarero<br>
7
Luis
Dominguez luisdominguez@camarero.com<br>
8
Pablo
Verdejo pabloverdejo@camarero.es<br>
9
Daniel
Rueda 	
danielrueda@camarero.es<br>
    <br>
        <button><a href="zona_camarero.php">Página Principal</a></button>
        <button><a href="camareros.php">Camereros</a></button>
        <button><a href="mantenimiento.php">Mantenimento</a></button>

    </body>
</html>