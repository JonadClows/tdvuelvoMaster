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

    if ($(this).val().length > 0) {


        if (valor > 0 && valor < 100) {
            $("#txtComision").val('10%');
            $("#txtTotalRecibir").val(valor * 0.10);
        } else if (valor > 101 && valor < 200) {
            $("#txtComision").val('20%');
            $("#txtTotalRecibir").val(valor * 0.20);
        }



    } else {

        $("#txtComision").val('');
        $("#txtTotalRecibir").val('');
    }
});