// Botón vender nota
$('#btnSellNote').click(function(event){
    event.preventDefault();
    const me = $(this);
    if (me.hasClass('disabled')) {
        alert('No tiene cuentas registradas.');
    } else {
        location.href = me.attr('data-url');
    }
});