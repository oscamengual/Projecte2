<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Mesas</title>
    <link  rel="stylesheet" href="../css/demas.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/js2.js"></script>
</head>
<body>

<div class='img' src="../img/header.jpg"></div>
<form method="post" action="../controller/reservarController.php" onsubmit="return validateForm();">
<div class='reservar'>
        <h1 align="center">Reservas de Mesa</h1>
        <div style="max-width: 400px;"></div>
        <div>Reservar Mesa</div>
        <select id="id_mesa" name="id_mesa" style="max-width : 250px;" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
        </select>
        <div>Fecha<br/>
        <input type='date' id='fdata' name='fdata' class='calendario'  onclick='return fecha()'><br>
        </div>
        <div>Hora Reserva<span style="color: red;"></span><br/>
            <select id="franjas_horarias" name="franjas_horarias" style="max-width : 250px;" class="form-control">
                <option value="15-16">15:00-16:00</option>
                <option value="16-17">16:00-17:00</option>
                <option value="17-18">17:00-18:00</option>
                <option value="18-19">18:00-19:00</option>
                <option value="19-20">19:00-20:00</option>
                <option value="20-21">20:00-21:00</option>
                <option value="22-23">22:00-23:00</option>
            </select>
        </div>
        <!-- <div>Numero de comensales<span style="color: red;"> *</span><br/>
        <select id="id_mesa" name="id_mesa" style="max-width : 250px;" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select> -->
        <!-- </div> -->
        <div><input name="skip_Submit" value="Reservar" type="submit"/></div>

        <!-- <div><input name="skip_Submit" value="Volver" type="submit" onclick="location.href='zona_Admin.php'"/></div> -->
    </form>
    <div id="mensaje"></div>
</div>
    <button onclick="location.href='../view/zona_camarero.php'">Volver</button>
    <?php
            echo "<footer>";
            echo "<p>Copyright &copy; 2020 | Designed By : Óscar Mengual, All rights reserved. </p>";
            echo "</footer>"; 
    ?>
</body>
</html>