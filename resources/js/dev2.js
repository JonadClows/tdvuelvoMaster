// Form contáctenos
$('#frmContacto').on('submit', function(event) {
    event.preventDefault();
    const form = $(this);

    // Empaquetar los datos
    const data = {
        contactEmail: $('#contactEmail').val(),
    }

    validateAndSend(form, data, '/contacto');
});

// Form registrar cuenta bancaria
$('#frmRegistroCuenta').on('submit', function(event){
    event.preventDefault();
    const form = $(this);

    // Empaquetar los datos
    const data = {
        banco: $('#banco').val(),
        tipoCta: $('#tipoCta').val(),
        identificacion: $('#identificacion').val().trim(),
        nroCta: $('#nroCta').val().trim(),
        nombreCompleto: $('#nombreCompleto').val().trim(),
    }

    validateAndSend(form, data, '/registrar-cuenta', function() { location.href = '/miperfil'; });
})


// Botón vender nota
$('#btnSellNote').on('click', function(event){
    event.preventDefault();
    const me = $(this);
    if (me.hasClass('disabled')) {
        alerta('<h5>¡Importante!</h5>Debes registrar tu cuenta bancaria antes de vender una nota.');
    } else {
        location.href = me.attr('data-url');
    }
});

function validateAndSend(form, data, url, onCloseSuccessDialog) {
    // Verificar que haya ingresado todos los campos
    if (Object.values(data).some((value) => value=='')) {
        alerta('Debe llenar todos los campos');
    } else {
        form.toggleClass('busy');
        form.find(':input').prop("disabled", true);
        // Procesar respuesta
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        const dialog = $('#modalDialog');
        $.post(url, data)
            .done(function(response){
                dialog.off('hidden.bs.modal')
                    .on('hidden.bs.modal', function(e){
                        form.trigger('reset');
                        dialog.off('hidden.bs.modal');
                        if (onCloseSuccessDialog) {
                            onCloseSuccessDialog();
                        }
                    });
                alerta(response.message);
            })
            .fail(function(response){
                let detail = response.responseJSON.message;
                if (response.responseJSON.errors != undefined) {
                    detail = Object.values(response.responseJSON.errors).reduce((a, b) => a + '<br>' + b);
                }
                alerta('Algo no ha salido bien:<br> ' + detail);
            })
            .always(function(){
                form.toggleClass('busy');
                form.find(':input').prop("disabled", false);
            });
    }
}

function alerta(mensaje) {
    $('#modalDialog').find('.modal-message').html(mensaje);
    mostrarDialog();
}

function mostrarDialog() {
    $('#modalDialog').modal('show');
}

function esconderDialog() {
    $('#modalDialog').modal('hide');
}
