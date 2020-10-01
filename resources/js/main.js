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

    if ($(this).val().length > 0) {


        if (valor >= 1 && valor <= 550) {
            totalRecibir = valor - (valor * 0.095);
            descuento = "9,5%";
        } else if (valor >= 551 && valor <= 1000) {
            totalRecibir = valor - (valor * 0.086);
            descuento = "8,6%";

        } else if (valor >= 1001 && valor <= 3000) {
            totalRecibir = valor - (valor * 0.081);
            descuento = "8,1%";

        } else if (valor >= 3001 && valor <= 5000) {
            totalRecibir = valor - (valor * 0.071);
            descuento = "7,1%";

        } else if (valor >= 5001 && valor <= 8000) {
            totalRecibir = valor - (valor * 0.059);
            descuento = "5,9%";

        } else if (valor >= 8001 && valor <= 10000) {
            totalRecibir = valor - (valor * 0.046);
            descuento = "4,6%";

        } else if (valor > 10000) {
            $("#txtTotalRecibir").val('-');
            descuento = "-";
            alert("Por favor contactarse con nosotros para una cotización personalizada");
        }
        $("#txtComision").val(descuento);
        $("#txtTotalRecibir").val(totalRecibir.toFixed(0));

    } else {

        $("#txtComision").val('');
        $("#txtTotalRecibir").val('');
    }
});

$('#selectProvincia').change(function() {
    $.ajax({
        url: '/canton/' + $('#selectProvincia').val(),
        type: 'GET',
        dataType: 'json',
        success: function(ec) {

            $('#selectCanton').empty();
            var sel = document.getElementById('selectCanton');
            $('#selectCanton').append('<option value="Canton" selected="selected" disabled hidden>Canton</option>');

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

$('#selectCanton').change(function(e) {
    $('#id_ciudad').val(e.target.value);
});


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
        if (valor >= 1 && valor <= 550) {
            totalRecibir = valor - (valor * 0.095);
            descuento = "9,5%";
        } else if (valor >= 551 && valor <= 1000) {
            totalRecibir = valor - (valor * 0.086);
            descuento = "8,6%";

        } else if (valor >= 1001 && valor <= 3000) {
            totalRecibir = valor - (valor * 0.081);
            descuento = "8,1%";

        } else if (valor >= 3001 && valor <= 5000) {
            totalRecibir = valor - (valor * 0.071);
            descuento = "7,1%";

        } else if (valor >= 5001 && valor <= 8000) {
            totalRecibir = valor - (valor * 0.059);
            descuento = "5,9%";

        } else if (valor >= 8001 && valor <= 10000) {
            totalRecibir = valor - (valor * 0.046);
            descuento = "4,6%";

        } else if (valor > 10000) {
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