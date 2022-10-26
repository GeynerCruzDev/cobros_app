// let MODAL_SERVICIOS_ACTIVOS = 0;
function showLoadingModal() {
    MODAL_SERVICIOS_ACTIVOS++;
    $.blockUI({
        css: {
            top: '15%',
            border: 'none',
            padding: '0',
            backgroundColor: 'none'
        },
        message : $('#mensaje-block-ui').html(),
        baseZ: 2000
    });
    NProgress.start();
}

var validatorFiscal = {
    validarRfc : function(rfc, aceptarGenerico = true) {
    const re       = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    var   validado = rfc.match(re);

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop(),
        rfcSinDigito      = validado.slice(1).join(''),
        len               = rfcSinDigito.length,

        //Obtener el digito esperado
        diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ",
        indice            = len + 1;
    var   suma,
        digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

    for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    //El dígito verificador coincide con el esperado?
    // o es un RFC Genérico (ventas a público general)?
    if ((digitoVerificador != digitoEsperado)
        && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
        return false;
    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
        return false;
    return rfcSinDigito + digitoVerificador;
}
};

ImplementCurrency = {
    number_format : function(number, decimals, decPoint, thousandsSep){
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        const n = !isFinite(+number) ? 0 : +number
        const prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
        const sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
        const dec = (typeof decPoint === 'undefined') ? '.' : decPoint
        let s = ''
        const toFixedFix = function (n, prec) {
            if (('' + n).indexOf('e') === -1) {
                return +(Math.round(n + 'e+' + prec) + 'e-' + prec)
            } else {
                const arr = ('' + n).split('e')
                let sig = ''
                if (+arr[1] + prec > 0) {
                    sig = '+'
                }
                return (+(Math.round(+arr[0] + 'e' + sig + (+arr[1] + prec)) + 'e-' + prec)).toFixed(prec)
            }
        }
        // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec).toString() : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
        }
        return s.join(dec)
    }
}

function ocultarModal() {
    MODAL_SERVICIOS_ACTIVOS--;
    if (MODAL_SERVICIOS_ACTIVOS <= 0) {
        if (MODAL_SERVICIOS_ACTIVOS < 0)
            MODAL_SERVICIOS_ACTIVOS = 0;
        $.unblockUI();
        NProgress.done();
        $('.page-wrapper .container-fluid').removeAttr('style');
        $('.page-wrapper .page-titles').removeAttr('style');
    }
}

$(document).ready(function(){
    axios.interceptors.request.use(function(config) {
        // Do something before request is sent
        //alertify.success('Start Ajax Call');
        var urlsNotPassed = ['/spectator/send-file','/spectator/remove-file-temp'];
        if(  !urlsNotPassed.includes(config.url) ){
            // showLoadingModal();
        }
        return config;
    }, function(error) {
        // Do something with request error
        ocultarModal();
        console.log('Error');
        return Promise.reject(error);
    });

    axios.interceptors.response.use(function(response) {
        // Do something with response data
        //alertify.success('Done width Ajax');
        //showLoadingModal();

        if(response.status == 200 || response.status == 202){
            // ocultarModal();
        }

        return response;
    }, function(error) {
        var response = JSON.stringify(error);
        //console.log(error);
        // Do something with response error
        //console.log('Error fetching the data');
        ocultarModal();
        //alertify.error('Error al obtener datos');
        //console.log(JSON.parse(response));
        return Promise.reject( {type:'danger',message:'Hubo un error'} );
    });

    function configureInterceptor()
    {
        console.log(axios.interceptors.request);
    }
})
