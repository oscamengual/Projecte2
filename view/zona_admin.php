<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        <link  rel="stylesheet" href="../css/demas.css"/>
        <title>Admins del Bar Reinols</title>
    </head>
    <body>
        <div class='img' src="../img/header.jpg"></div>
        
        <?php
            require_once '../controller/sessionController.php';
            
            require_once '../model/connexion.php';
            echo "<div class='actualizar'>";

            $query="SELECT * FROM tbl_user";
                $result = $pdo->prepare($query);

                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result->execute();

                                echo '<table>';
                                echo '<td style="text-align:center" class="btn"><form action="../controller/crearUser.php?id='.'" method="POST"> <input type="submit" class="actu" value="Crear"></form></td>';
                                echo '<tr>';
                                echo '<td style="text-align:center" class="btn"><form action="../view/reservarmesa.php"id='.'" method="POST"> <input type="submit" class="actu" value="Reservar"></form></td>';

                                echo '<th style="text-align:center">ID</th>';
                                echo '<th style="text-align:center">Email</th>';
                                echo '<th style="text-align:center">Estatus</th>';
                                echo '<th style="text-align:center">Acciones</th>';
                               echo '</tr>';

                               if ($result) {
                                while ($fila=$result->fetch()) {
                                    echo '<tr>';
                                    echo '<td style="text-align:center">'.$fila['id_user'].'</td>';
                                    echo '<td style="text-align:center">'.$fila['email_user'].'</td>';
                                    echo '<td style="text-align:center">'.$fila['estatus'].'</td>';
                                    echo '<td style="text-align:center" class="btn"><form action="../model/actUser.php?id='.$fila['id_user'].'" method="POST"> <input type="submit" class="actu" value="Actualizar"></form></td>';
                                    echo '<td style="text-align:center" class="btn"><form action="../controller/borrarUser.php?id='.$fila['id_user'].'" method="POST"> <input type="submit" class="actu" value="Borrar"></form></td>';
                                    echo '</tr>';
                                }
                            }


                            echo '</table>';
                            echo '</div>';
                            echo "<footer>";
                            echo "<p>Copyright &copy; 2020 | Designed By : Óscar Mengual, All rights reserved. </p>";
                            echo "</footer>";  
        ?>
        
        <!-- <img src="../img/admin.jpg"> -->
        
    </body>
</html>