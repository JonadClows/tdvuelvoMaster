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

$("#txtMontoNota").bind("change paste keyup", function() {

    var valor = parseInt($(this).val());
    var totalRecibir;
    var descuento;

    if (valor > 0) {
        if (valor <= 34) {
            descuento = "0%";
            $("#txtTotalRecibir").val('$0.00');

        } else if (valor >= 35 && valor <= 250) {
            totalRecibir = valor - 30;
            descuento = "$30";

        } else if (valor >= 251 && valor <= 550) {
            totalRecibir = valor - (valor * 0.099);
            descuento = "9,9%";

        } else if (valor >= 551 && valor <= 1000) {
            totalRecibir = valor - (valor * 0.087);
            descuento = "8,7%";

        } else if (valor >= 1001 && valor <= 3000) {
            totalRecibir = valor - (valor * 0.081);
            descuento = "8,1%";

        } else if (valor >= 3001 && valor <= 5000) {
            totalRecibir = valor - (valor * 0.078);
            descuento = "7,8%";

        } else if (valor >= 5001 && valor <= 8000) {
            totalRecibir = valor - (valor * 0.0589);
            descuento = "5,89%";

        } else if (valor >= 8001 && valor <= 10000) {
            totalRecibir = valor - (valor * 0.045);
            descuento = "4,5%";

        } else if (valor >= 10001 && valor <= 12000) {
            totalRecibir = valor - (valor * 0.0399);
            descuento = "3,99%";

        } else if (valor > 12000) {
            $("#txtTotalRecibir").val('-');
            descuento = "-";
            totalRecibir = "-";
            alerta("Por favor contactarse con nosotros para una cotización personalizada");
        }
        $("#txtComision").val(descuento);
        $("#txtTotalRecibir").val(
            (
                totalRecibir == '-' ?
                totalRecibir :
                "$" + totalRecibir.toFixed(0)
            )
        );
    } else {
        $("#txtComision").val('0%');
        $("#txtTotalRecibir").val('$0.00');
    }
});

$('#selectProvincia').change(function() {
    $.ajax({
        url: '/canton/' + $('#selectProvincia').val(),
        type: 'GET',
        dataType: 'json',
        success: function(ec) {

            $('#id_ciudad').empty();
            var sel = document.getElementById('id_ciudad');
            $('#id_ciudad').append('<option value="Canton" selected="selected" disabled hidden>Cantón</option>');

            $.each(ec, function(key, values) {
                var opt = document.createElement('option');
                opt.appendChild(document.createTextNode(values.name));
                opt.value = values.id_canton;
                sel.appendChild(opt);
            });
        },
        error: function() {
            console.log("No se ha podido obtener la información");
        }
    });
});

/*$('#selectCanton').change(function(e) {
    $('#id_ciudad').val(e.target.value);
});*/


function valCedula() {
    const ced = document.getElementById("cedula").value;

    let [suma, mul, chars] = [0, 1, ced.length];
    for (let index = 0; index < chars; index += 1) {
        let num = ced[index] * mul;
        suma += num - (num > 9) * 9;
        mul = 1 << index % 2;
    }

    if ((suma % 10 === 0) && (suma > 0)) {} else {
        alert('Digite una cedula valida.');
        document.getElementById("cedula").value = "";
    }
}

function soloNumeros(e) {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}

function soloLetras(e) {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 65 && key <= 90 || key >= 97 && key <= 122)
}

$("#montoVN").bind("change paste keyup", function() {

    var valor = parseInt($(this).val());
    var totalRecibir;
    var descuento;

    if (valor > 0) {
        if (valor <= 34) {
            descuento = "0%";
            $("#txtTotalRecibir").val('$0.00');

        } else if (valor >= 35 && valor <= 250) {
            totalRecibir = valor - 30;
            descuento = "$30";

        } else if (valor >= 251 && valor <= 550) {
            totalRecibir = valor - (valor * 0.099);
            descuento = "9,9%";

        } else if (valor >= 551 && valor <= 1000) {
            totalRecibir = valor - (valor * 0.087);
            descuento = "8,7%";

        } else if (valor >= 1001 && valor <= 3000) {
            totalRecibir = valor - (valor * 0.081);
            descuento = "8,1%";

        } else if (valor >= 3001 && valor <= 5000) {
            totalRecibir = valor - (valor * 0.078);
            descuento = "7,8%";

        } else if (valor >= 5001 && valor <= 8000) {
            totalRecibir = valor - (valor * 0.0589);
            descuento = "5,89%";

        } else if (valor >= 8001 && valor <= 10000) {
            totalRecibir = valor - (valor * 0.045);
            descuento = "4,5%";

        } else if (valor >= 10001 && valor <= 12000) {
            totalRecibir = valor - (valor * 0.0399);
            descuento = "3,99%";

        } else if (valor > 12000) {
            $("#txtTotalRecibir").val('-');
            descuento = "-";
            totalRecibir = "-";
            alerta("Por favor contactarse con nosotros para una cotización personalizada");
        }
        $("#txtComision").val(descuento);
        $("#txtTotalRecibir").val(totalRecibir == '-' ? totalRecibir : totalRecibir.toFixed(0));
    } else {

        $("#txtComision").val('');
        $("#txtTotalRecibir").val('');
    }
});


$('#frmResetPass').on('submit', function(event) {
    event.preventDefault();
    const form = $(this);

    // Empaquetar los datos
    const data = {
        contactEmail: $('#contactEmail').val(),
    }

    validateAndSend(
        form,
        data,
        '/recuperar-clave',
        Object.values(data).some((value) => value == '')
    );
});

$('#frmUpdatePassByEmail').on('submit', function(event) {
    event.preventDefault();
    const form = $(this);

    // Empaquetar los datos
    const data = {
        password: $('#password').val(),
        id: $('#user_id').val(),
    }

    validateAndSend(
        form,
        data,
        '/updatePassByEmail',
        Object.values(data).some((value) => value == ''),
        function() {
            location.href = '/home';
        }
    );
});