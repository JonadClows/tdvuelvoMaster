$(document).ready(function() {
    $('nav ul li a:first').addClass('active');
    $('main div[class="div-main"]').hide();
    $('main div[class="div-main"]:first').show();

    $('nav ul li a').click(function() {
        $('nav ul li a').removeClass('active');
        $(this).addClass('active');
        $('main div[class="div-main"]').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });
});

function clickLogin() {
    var login = document.getElementById("iniciarSesion");
    var registro = document.getElementById("registro");
    var instrucciones = document.getElementById("instrucciones");
    var venderNota = document.getElementById("venderNota");
    var venderNota2 = document.getElementById("venderNota2");
    var empresa = document.getElementById("empresa");

    if (login.style.display === "none") {
        login.style.display = "block";
        instrucciones.style.display = "none";
        venderNota.style.display = "none";
        venderNota2.style.display = "none";
        empresa.style.display = "none";
        registro.style.display = "none";
    }
}

function clickOther() {
    var login = document.getElementById("iniciarSesion");
    var registro = document.getElementById("registro");
    var instrucciones = document.getElementById("instrucciones");
    var venderNota = document.getElementById("venderNota");
    var venderNota2 = document.getElementById("venderNota2");
    var empresa = document.getElementById("empresa");

    if (instrucciones.style.display === "none" && venderNota.style.display === "none" && empresa.style.display === "none") {
        login.style.display = "none";
        instrucciones.style.display = "block";
        venderNota.style.display = "block";
        venderNota2.style.display = "block";
        empresa.style.display = "block";
        registro.style.display = "none";
    }
}

function btnCrear() {
    var login = document.getElementById("iniciarSesion");
    var registro = document.getElementById("registro");
    var instrucciones = document.getElementById("instrucciones");
    var venderNota = document.getElementById("venderNota");
    var venderNota2 = document.getElementById("venderNota2");
    var empresa = document.getElementById("empresa");

    if (registro.style.display === "none") {
        login.style.display = "none";
        instrucciones.style.display = "none";
        venderNota.style.display = "none";
        venderNota2.style.display = "none";
        empresa.style.display = "none";
        registro.style.display = "block";
    }
}