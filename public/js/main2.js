$('#selectProvincia').change(function(e) {
    load();
    $.ajax({
        type: 'get',
        url: "/ciudad",
        data: {
            id: $('#selectProvincia').val(),
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

                $('#selectCiudad').empty();
                var sel = document.getElementById('selectCiudad');
                $('#selectCiudad').append('<option value="Ciudad" selected="selected" disabled hidden>Ciudad</option>');

                for (ciudad in data.ciudades) {

                    var opt = document.createElement('option');
                    opt.appendChild(document.createTextNode(data.ciudades[ciudad].name));
                    opt.value = data.ciudades[ciudad].id_ciudad;
                    sel.appendChild(opt);
                }
                $("#selectCiudad").selectpicker('refresh');
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




/*
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
                var dates = [];
                var cont = 0;
                $('#cacSelect').empty();
                var sel = document.getElementById('cacSelect');
                $('#cacSelect').append('<option value="" selected="selected" disabled hidden>Selecciona Centro de Atención Claro</option>');

                for (unidad in data.unidadesCerca) {

                    //if(data.unidadesCerca[unidad].IsActive == 'true'){
                    var opt = document.createElement('option');
                    opt.appendChild(document.createTextNode(data.unidadesCerca[unidad].Name));
                    opt.value = data.unidadesCerca[unidad].Id;
                    sel.appendChild(opt);

                    //}
                }
                $("#cacSelect").selectpicker('refresh');
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