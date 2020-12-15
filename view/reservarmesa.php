<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="../controller/reservarController.php" onSubmit="return validateForm();">
        <div style="max-width: 400px;"></div>
        <div>Reservar Mesa</div>
        <div>Mesa<span style="color: red;"> *</span><br/>
            <input type="text" id="id_mesa" name="id_mesa" style="max-width : 400px;" class="form-control"/>
        </div>
        <div>Fecha<br/>
        <input type="date" id="start" name="fdata"value="dd/mm/aaaa"min="2020-11-11" max="2021-06-31">        
        </div>
        <div>Hora Reserva<span style="color: red;"> *</span><br/>
            <select id="franjas_horarias" name="franjas_horarias" style="max-width : 250px;" class="form-control">
                <option value="15:00-16:00">15:00-16:00</option>
                <option value="16:00-17:00">16:00-17:00</option>
                <option value="17:00-18:00">17:00-18:00</option>
                <option value="18:00-19:00">18:00-19:00</option>
                <option value="19:00-20:00">19:00-20:00</option>
                <option value="20:00-21:00">20:00-21:00</option>
                <option value="22:00-23:00">22:00-23:00</option>
            </select>
        </div>
        <div>Numero de comensales<span style="color: red;"> *</span><br/>
        <select id="id_mesa" name="id_mesa" style="max-width : 250px;" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        </div>
        <div><input name="skip_Submit" value="Submit" type="submit"/></div>
        <div>
        </div>
    </form>
</body>
</html>