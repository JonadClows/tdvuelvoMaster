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
/*
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

$('#selectProvincia').change(function(e) {
    load();
    $.ajax({
        type: 'get',
        url: $("{{ route('ciudad') }}").val(),
        data: {
            id_provincia: id_provincia,
        },
        dataType: "json",
        beforeSend: function() {
            load();
        },
        success: function(data) {
            loaded();
            if (data.error) {
                modalAlert(data.mensaje);
                return false;
            } else {
                document.getElementById("centroAtencion").placeholder = data.cacCita;
                document.getElementById("datepicker").placeholder = data.fechaCita;
                document.getElementById("timepicker").placeholder = data.horaCita;
            }
            return false;
        },
        error: function() {
            loaded();
            modalAlert('Ocurrió un error. Por favor, vuelve a intentarlo.');
            return false;
        }
    });
});





function llenaDatos() {
    var appointmentType = '2'; //$('#appointmentType').val();
    load();
    $.ajax({
        type: 'post',
        url: $("{{ route('provincia.select') }}").val(),
        data: {
            appointmentType: appointmentType,
        },
        dataType: "json",
        beforeSend: function() {
            load();
        },
        success: function(data) {
            loaded();
            if (data.error) {
                modalAlert(data.mensaje);
                return false;
            } else {
                document.getElementById("centroAtencion").placeholder = data.cacCita;
                document.getElementById("datepicker").placeholder = data.fechaCita;
                document.getElementById("timepicker").placeholder = data.horaCita;
            }
            return false;
        },
        error: function() {
            loaded();
            modalAlert('Ocurrió un error. Por favor, vuelve a intentarlo.');
            return false;
        }
    });
}*/