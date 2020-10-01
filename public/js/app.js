/*! SmoothScroll v16.1.4 | (c) 2020 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/smooth-scroll */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).SmoothScroll=t()}(this,(function(){"use strict";var e={ignore:"[data-scroll-ignore]",header:null,topOnEmptyHash:!0,speed:500,speedAsDuration:!1,durationMax:null,durationMin:null,clip:!0,offset:0,easing:"easeInOutCubic",customEasing:null,updateURL:!0,popstate:!0,emitEvents:!0},t=function(){var e={};return Array.prototype.forEach.call(arguments,(function(t){for(var n in t){if(!t.hasOwnProperty(n))return;e[n]=t[n]}})),e},n=function(e){"#"===e.charAt(0)&&(e=e.substr(1));for(var t,n=String(e),o=n.length,a=-1,i="",r=n.charCodeAt(0);++a<o;){if(0===(t=n.charCodeAt(a)))throw new InvalidCharacterError("Invalid character: the input contains U+0000.");t>=1&&t<=31||127==t||0===a&&t>=48&&t<=57||1===a&&t>=48&&t<=57&&45===r?i+="\\"+t.toString(16)+" ":i+=t>=128||45===t||95===t||t>=48&&t<=57||t>=65&&t<=90||t>=97&&t<=122?n.charAt(a):"\\"+n.charAt(a)}return"#"+i},o=function(){return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.body.clientHeight,document.documentElement.clientHeight)},a=function(e){return e?(t=e,parseInt(window.getComputedStyle(t).height,10)+e.offsetTop):0;var t},i=function(e,t,n){0===e&&document.body.focus(),n||(e.focus(),document.activeElement!==e&&(e.setAttribute("tabindex","-1"),e.focus(),e.style.outline="none"),window.scrollTo(0,t))},r=function(e,t,n,o){if(t.emitEvents&&"function"==typeof window.CustomEvent){var a=new CustomEvent(e,{bubbles:!0,detail:{anchor:n,toggle:o}});document.dispatchEvent(a)}};return function(s,c){var u,l,d,f,m={};m.cancelScroll=function(e){cancelAnimationFrame(f),f=null,e||r("scrollCancel",u)},m.animateScroll=function(n,s,c){m.cancelScroll();var l=t(u||e,c||{}),h="[object Number]"===Object.prototype.toString.call(n),p=h||!n.tagName?null:n;if(h||p){var w=window.pageYOffset;l.header&&!d&&(d=document.querySelector(l.header));var g,y,v,S=a(d),E=h?n:function(e,t,n,a){var i=0;if(e.offsetParent)do{i+=e.offsetTop,e=e.offsetParent}while(e);return i=Math.max(i-t-n,0),a&&(i=Math.min(i,o()-window.innerHeight)),i}(p,S,parseInt("function"==typeof l.offset?l.offset(n,s):l.offset,10),l.clip),b=E-w,O=o(),I=0,M=function(e,t){var n=t.speedAsDuration?t.speed:Math.abs(e/1e3*t.speed);return t.durationMax&&n>t.durationMax?t.durationMax:t.durationMin&&n<t.durationMin?t.durationMin:parseInt(n,10)}(b,l),A=function(e){g||(g=e),I+=e-g,v=w+b*function(e,t){var n;return"easeInQuad"===e.easing&&(n=t*t),"easeOutQuad"===e.easing&&(n=t*(2-t)),"easeInOutQuad"===e.easing&&(n=t<.5?2*t*t:(4-2*t)*t-1),"easeInCubic"===e.easing&&(n=t*t*t),"easeOutCubic"===e.easing&&(n=--t*t*t+1),"easeInOutCubic"===e.easing&&(n=t<.5?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1),"easeInQuart"===e.easing&&(n=t*t*t*t),"easeOutQuart"===e.easing&&(n=1- --t*t*t*t),"easeInOutQuart"===e.easing&&(n=t<.5?8*t*t*t*t:1-8*--t*t*t*t),"easeInQuint"===e.easing&&(n=t*t*t*t*t),"easeOutQuint"===e.easing&&(n=1+--t*t*t*t*t),"easeInOutQuint"===e.easing&&(n=t<.5?16*t*t*t*t*t:1+16*--t*t*t*t*t),e.customEasing&&(n=e.customEasing(t)),n||t}(l,y=(y=0===M?0:I/M)>1?1:y),window.scrollTo(0,Math.floor(v)),function(e,t){var o=window.pageYOffset;if(e==t||o==t||(w<t&&window.innerHeight+o)>=O)return m.cancelScroll(!0),i(n,t,h),r("scrollStop",l,n,s),g=null,f=null,!0}(v,E)||(f=window.requestAnimationFrame(A),g=e)};0===window.pageYOffset&&window.scrollTo(0,0),function(e,t,n){t||history.pushState&&n.updateURL&&history.pushState({smoothScroll:JSON.stringify(n),anchor:e.id},document.title,e===document.documentElement?"#top":"#"+e.id)}(n,h,l),"matchMedia"in window&&window.matchMedia("(prefers-reduced-motion)").matches?i(n,Math.floor(E),!1):(r("scrollStart",l,n,s),m.cancelScroll(!0),window.requestAnimationFrame(A))}};var h=function(e){if(!e.defaultPrevented&&!(0!==e.button||e.metaKey||e.ctrlKey||e.shiftKey)&&"closest"in e.target&&(l=e.target.closest(s))&&"a"===l.tagName.toLowerCase()&&!e.target.closest(u.ignore)&&l.hostname===window.location.hostname&&l.pathname===window.location.pathname&&/#/.test(l.href)){var t,o;try{t=n(decodeURIComponent(l.hash))}catch(e){t=n(l.hash)}if("#"===t){if(!u.topOnEmptyHash)return;o=document.documentElement}else o=document.querySelector(t);(o=o||"#top"!==t?o:document.documentElement)&&(e.preventDefault(),function(e){if(history.replaceState&&e.updateURL&&!history.state){var t=window.location.hash;t=t||"",history.replaceState({smoothScroll:JSON.stringify(e),anchor:t||window.pageYOffset},document.title,t||window.location.href)}}(u),m.animateScroll(o,l))}},p=function(){if(null!==history.state&&history.state.smoothScroll&&history.state.smoothScroll===JSON.stringify(u)){var e=history.state.anchor;"string"==typeof e&&e&&!(e=document.querySelector(n(history.state.anchor)))||m.animateScroll(e,null,{updateURL:!1})}};m.destroy=function(){u&&(document.removeEventListener("click",h,!1),window.removeEventListener("popstate",p,!1),m.cancelScroll(),u=null,l=null,d=null,f=null)};return function(){if(!("querySelector"in document&&"addEventListener"in window&&"requestAnimationFrame"in window&&"closest"in window.Element.prototype))throw"Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";m.destroy(),u=t(e,c||{}),d=u.header?document.querySelector(u.header):null,document.addEventListener("click",h,!1),u.updateURL&&u.popstate&&window.addEventListener("popstate",p,!1)}(),m}}));

/*! SmoothScroll v16.1.4 | (c) 2020 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/smooth-scroll */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).SmoothScroll=t()}(this,(function(){"use strict";window.Element&&!Element.prototype.closest&&(Element.prototype.closest=function(e){var t,n=(this.document||this.ownerDocument).querySelectorAll(e),o=this;do{for(t=n.length;--t>=0&&n.item(t)!==o;);}while(t<0&&(o=o.parentElement));return o}),function(){if("function"==typeof window.CustomEvent)return!1;function e(e,t){t=t||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(e,t.bubbles,t.cancelable,t.detail),n}e.prototype=window.Event.prototype,window.CustomEvent=e}(),
/**
	 * requestAnimationFrame() polyfill
	 * By Erik Möller. Fixes from Paul Irish and Tino Zijdel.
	 * @link http://paulirish.com/2011/requestanimationframe-for-smart-animating/
	 * @link http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
	 * @license MIT
	 */
function(){for(var e=0,t=["ms","moz","webkit","o"],n=0;n<t.length&&!window.requestAnimationFrame;++n)window.requestAnimationFrame=window[t[n]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[t[n]+"CancelAnimationFrame"]||window[t[n]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(t,n){var o=(new Date).getTime(),i=Math.max(0,16-(o-e)),a=window.setTimeout((function(){t(o+i)}),i);return e=o+i,a}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(e){clearTimeout(e)})}();var e={ignore:"[data-scroll-ignore]",header:null,topOnEmptyHash:!0,speed:500,speedAsDuration:!1,durationMax:null,durationMin:null,clip:!0,offset:0,easing:"easeInOutCubic",customEasing:null,updateURL:!0,popstate:!0,emitEvents:!0},t=function(){var e={};return Array.prototype.forEach.call(arguments,(function(t){for(var n in t){if(!t.hasOwnProperty(n))return;e[n]=t[n]}})),e},n=function(e){"#"===e.charAt(0)&&(e=e.substr(1));for(var t,n=String(e),o=n.length,i=-1,a="",r=n.charCodeAt(0);++i<o;){if(0===(t=n.charCodeAt(i)))throw new InvalidCharacterError("Invalid character: the input contains U+0000.");t>=1&&t<=31||127==t||0===i&&t>=48&&t<=57||1===i&&t>=48&&t<=57&&45===r?a+="\\"+t.toString(16)+" ":a+=t>=128||45===t||95===t||t>=48&&t<=57||t>=65&&t<=90||t>=97&&t<=122?n.charAt(i):"\\"+n.charAt(i)}return"#"+a},o=function(){return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight,document.body.offsetHeight,document.documentElement.offsetHeight,document.body.clientHeight,document.documentElement.clientHeight)},i=function(e){return e?(t=e,parseInt(window.getComputedStyle(t).height,10)+e.offsetTop):0;var t},a=function(e,t,n){0===e&&document.body.focus(),n||(e.focus(),document.activeElement!==e&&(e.setAttribute("tabindex","-1"),e.focus(),e.style.outline="none"),window.scrollTo(0,t))},r=function(e,t,n,o){if(t.emitEvents&&"function"==typeof window.CustomEvent){var i=new CustomEvent(e,{bubbles:!0,detail:{anchor:n,toggle:o}});document.dispatchEvent(i)}};return function(c,u){var s,l,d,m,f={};f.cancelScroll=function(e){cancelAnimationFrame(m),m=null,e||r("scrollCancel",s)},f.animateScroll=function(n,c,u){f.cancelScroll();var l=t(s||e,u||{}),w="[object Number]"===Object.prototype.toString.call(n),h=w||!n.tagName?null:n;if(w||h){var p=window.pageYOffset;l.header&&!d&&(d=document.querySelector(l.header));var g,y,v,S=i(d),E=w?n:function(e,t,n,i){var a=0;if(e.offsetParent)do{a+=e.offsetTop,e=e.offsetParent}while(e);return a=Math.max(a-t-n,0),i&&(a=Math.min(a,o()-window.innerHeight)),a}(h,S,parseInt("function"==typeof l.offset?l.offset(n,c):l.offset,10),l.clip),b=E-p,A=o(),O=0,C=function(e,t){var n=t.speedAsDuration?t.speed:Math.abs(e/1e3*t.speed);return t.durationMax&&n>t.durationMax?t.durationMax:t.durationMin&&n<t.durationMin?t.durationMin:parseInt(n,10)}(b,l),M=function(e){g||(g=e),O+=e-g,v=p+b*function(e,t){var n;return"easeInQuad"===e.easing&&(n=t*t),"easeOutQuad"===e.easing&&(n=t*(2-t)),"easeInOutQuad"===e.easing&&(n=t<.5?2*t*t:(4-2*t)*t-1),"easeInCubic"===e.easing&&(n=t*t*t),"easeOutCubic"===e.easing&&(n=--t*t*t+1),"easeInOutCubic"===e.easing&&(n=t<.5?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1),"easeInQuart"===e.easing&&(n=t*t*t*t),"easeOutQuart"===e.easing&&(n=1- --t*t*t*t),"easeInOutQuart"===e.easing&&(n=t<.5?8*t*t*t*t:1-8*--t*t*t*t),"easeInQuint"===e.easing&&(n=t*t*t*t*t),"easeOutQuint"===e.easing&&(n=1+--t*t*t*t*t),"easeInOutQuint"===e.easing&&(n=t<.5?16*t*t*t*t*t:1+16*--t*t*t*t*t),e.customEasing&&(n=e.customEasing(t)),n||t}(l,y=(y=0===C?0:O/C)>1?1:y),window.scrollTo(0,Math.floor(v)),function(e,t){var o=window.pageYOffset;if(e==t||o==t||(p<t&&window.innerHeight+o)>=A)return f.cancelScroll(!0),a(n,t,w),r("scrollStop",l,n,c),g=null,m=null,!0}(v,E)||(m=window.requestAnimationFrame(M),g=e)};0===window.pageYOffset&&window.scrollTo(0,0),function(e,t,n){t||history.pushState&&n.updateURL&&history.pushState({smoothScroll:JSON.stringify(n),anchor:e.id},document.title,e===document.documentElement?"#top":"#"+e.id)}(n,w,l),"matchMedia"in window&&window.matchMedia("(prefers-reduced-motion)").matches?a(n,Math.floor(E),!1):(r("scrollStart",l,n,c),f.cancelScroll(!0),window.requestAnimationFrame(M))}};var w=function(e){if(!e.defaultPrevented&&!(0!==e.button||e.metaKey||e.ctrlKey||e.shiftKey)&&"closest"in e.target&&(l=e.target.closest(c))&&"a"===l.tagName.toLowerCase()&&!e.target.closest(s.ignore)&&l.hostname===window.location.hostname&&l.pathname===window.location.pathname&&/#/.test(l.href)){var t,o;try{t=n(decodeURIComponent(l.hash))}catch(e){t=n(l.hash)}if("#"===t){if(!s.topOnEmptyHash)return;o=document.documentElement}else o=document.querySelector(t);(o=o||"#top"!==t?o:document.documentElement)&&(e.preventDefault(),function(e){if(history.replaceState&&e.updateURL&&!history.state){var t=window.location.hash;t=t||"",history.replaceState({smoothScroll:JSON.stringify(e),anchor:t||window.pageYOffset},document.title,t||window.location.href)}}(s),f.animateScroll(o,l))}},h=function(){if(null!==history.state&&history.state.smoothScroll&&history.state.smoothScroll===JSON.stringify(s)){var e=history.state.anchor;"string"==typeof e&&e&&!(e=document.querySelector(n(history.state.anchor)))||f.animateScroll(e,null,{updateURL:!1})}};f.destroy=function(){s&&(document.removeEventListener("click",w,!1),window.removeEventListener("popstate",h,!1),f.cancelScroll(),s=null,l=null,d=null,m=null)};return function(){if(!("querySelector"in document&&"addEventListener"in window&&"requestAnimationFrame"in window&&"closest"in window.Element.prototype))throw"Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";f.destroy(),s=t(e,u||{}),d=s.header?document.querySelector(s.header):null,document.addEventListener("click",w,!1),s.updateURL&&s.popstate&&window.addEventListener("popstate",h,!1)}(),f}}));

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

    if ($(this).val().length > 0) {


        if (valor >= 1 && valor <= 550) {
            totalRecibir = valor - (valor * 0.095);
            descuento = valor * 0.095;
        } else if (valor >= 551 && valor <= 1000) {
            totalRecibir = valor - (valor * 0.086);
            descuento = valor * 0.086;

        } else if (valor >= 1001 && valor <= 3000) {
            totalRecibir = valor - (valor * 0.081);
            descuento = valor * 0.081;

        } else if (valor >= 3001 && valor <= 5000) {
            totalRecibir = valor - (valor * 0.071);
            descuento = valor * 0.071;

        } else if (valor >= 5001 && valor <= 8000) {
            totalRecibir = valor - (valor * 0.059);
            descuento = valor * 0.059;

        } else if (valor >= 8001 && valor <= 10000) {
            totalRecibir = valor - (valor * 0.046);
            descuento = valor * 0.046;

        } else if (valor > 10000) {
            $("#valorNetoVN").val('$00.00');
            descuento = "$00.00";
            alert("Por favor contactarse con nosotros para una cotización personalizada");
        }
        $("#comisionVN").val('$' + descuento.toFixed(2));
        $("#valorNetoVN").val('$' + totalRecibir.toFixed(2));

    } else {

        $("#comisionVN").val('$00.00');
        $("#valorNetoVN").val('$00.00');
    }
});
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
