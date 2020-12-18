function fecha() {
    var dtToday = new Date();

    var mes = dtToday.getMonth() + 1;
    var dia = dtToday.getDate();
    var anyo = dtToday.getFullYear();
    if (mes < 10)
        mes = '0' + mes.toString();
    if (dia < 10)
        dia = '0' + dia.toString();

    var maxDate = anyo + '-' + mes + '-' + dia;
    //alert(maxDate);
    $('#fdata').attr('min', maxDate);
}

function validateForm() {
    var dia=document.getElementById('fdata').value;


    // alert(dia);
    // alert(password);
        if (dia == "") {
            //alert ("No se ha especificado ningun dia");

            document.getElementById('mensaje').innerHTML="<p>No se ha especificado ningun dia</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('fdata').style.border = "2px solid red";
        
        }else{
            return true;
        }
            return false;
    
    }    