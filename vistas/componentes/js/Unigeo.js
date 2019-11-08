
var myCalendar;
function doOnLoad() {
    myCalendar = new dhtmlXCalendarObject(["fecha"]);
}


function boxB() {
    dhtmlx.modalbox({
        title: "REGISTRO",
        text: "Usuario registrado correctamente",
        width: "450px",
        top: '400',
        buttons: ["Aceptar"],
        callback: function() {location.href ="Login.php";},
        buttons: ["Aceptar"]
    });
}


function process() {
    dhtmlx.message({
        text: "procesando...",
        expire: 5000,
        left: "10"
    });
}


function pass() {
    var p1 = document.getElementById("password1").value;
    var p2 = document.getElementById("password2").value;
    if (p1 !== p2) {
         dhtmlx.alert({
            title: "Aviso!",
            type: "alert-error",
            text: "Las contraseñas no coinciden"
        });
               
        return false;
    } else {
        verpass();
        //document.registro.submit();
    }
}

function verpass() {
    var cadena = document.getElementById('password1').value;
    var expresionR = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,16}$/;
    var resultado = expresionR.test(cadena);
    if (resultado !== true) {
        dhtmlx.alert({
            title: "Aviso!",
            type: "confirm-error",
            text: "la contraseña debe tener 8-16 caracteres e incluir al menos una minúscula una mayúscula y un número"
        });
       
        return false;
    } else {
        document.registro.submit();
    }
}


function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

