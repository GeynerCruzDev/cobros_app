function correoValido( selector, show_input_addon ) {
    if ( !/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($(selector).val()) ) {
        if ( show_input_addon ) {
            if ( $(selector).parent().find(".valid_email").length > 0 ) {
                $(selector).parent().find(".valid_email").remove();
            }

            $(selector).after('<span style="color: red" class = "input-group-addon response_validation valid_email">Correo inv&aacute;lido</span>');
        } else {
            // noty.show("danger", "Debe ingresar un correo valido");
            return false;
        }

        return true;
    }

    if ( show_input_addon ) {
        if ( $(selector).parent().find(".valid_email").length > 0 ) {
            $(selector).parent().find(".valid_email").remove();
        }

        $(selector).after('<span style="color:green" class = "input-group-addon response_validation valid_email">Correo v&aacute;lido</span>');
    }

    return true;
}

function isPhoneNumber(selector){
    var regExp = /^\(?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{4})$/;
    if($(selector).val().match(regExp)){return true;} else { alertify.error("danger", "Ingrese un número de teléfono valido"); return false;}
}

function isValidCurp(selector){
    var regExp = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;
    if($(selector).val().match(regExp)){return true;} else {
        // noty.show("danger", "Ingrese una <strong>CURP</strong> valida");
        return false;}
}

function isValidRfc(selector){
    var regExp = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    if($(selector).val().match(regExp)){return true;} else {
        // noty.show("danger", "Ingrese un <strong>RFC</strong> valido");
        return false;}
}

function vacio(selector,message,view) {
    view = (view == undefined) ?true:view;
    if($.trim($(selector).val()).length == 0 || $(selector).val()==""){
        if($(selector).hasClass('select2')){
            $(selector).select2('focus');
            $(selector).select2('open');
            if(view){
                // noty.show("danger", message + " es obligatorio");
            }
            return true
        }
        if (view){
            // noty.show("danger", message + " es obligatorio");
        }
        $(selector).focus();
        return true
    }
    return false
}

function passwordHasBlankSpace( selector ) {
    password = $.trim($(selector).val());

    if ( /[\s]/.test(password) ) {
        // noty.show("danger", "La_contrasena_no_puede_contener_espacios_en_blanco");
        return true;
    }

    return false;
}


function validatePassword( selector_pass ) {
    password = $.trim($(selector_pass).val());

    if ( passwordHasBlankSpace(selector_pass) ) {
        return false;
    }

    number = 0;
    special = 0;
    characters = 0;
    upperLetter = 0;
    lowerLetter = 0;

    if ( password.length >= 8 ) {
        characters = 1;
    }

    if ( /[a-z]/.test(password) ) {
        lowerLetter = 1;
    }

    if ( /[A-Z]/.test(password) ) {
        upperLetter = 1;
    }

    if ( /[0-9]/.test(password) ) {
        number = 1;
    }

    if ( /(.*[!,@,#,$,%,^,&,*,?,_,~])/.test(password) ) {
        special = 1;
    }

    score = ( (characters + lowerLetter + upperLetter + number + special) * 100 ) / 5;

    switch ( score ) {
        case 100:
            addMessage(selector_pass, "Segura",'green-background-color');
            break;
        case 80:
            addMessage(selector_pass, "Media",'orange-background-color');
            break;
        case 60:
        case 40:
            addMessage(selector_pass, "Debil",'red-background-color');
            break;
        default:
            addMessage(selector_pass, "Muy_debil",'red-background-color');
            break;
    }

    return score;
}

function addMessage( selector, message, classname ) {
    if ( $(selector).parent().find(".pass_strength").length > 0 ) {
        $(selector).parent().find(".pass_strength").remove();
    }

    $(selector).after('<span class = "input-group-addon response_validation pass_strength white-color ' + classname + '">' + message + '</span>');
}

function validateForm(containerSelector, inputSelector, divSelector) {
    inputSelector = (inputSelector === undefined) ? '.form-control[required]': inputSelector;
    divSelector = (divSelector === undefined) ? null : divSelector;
    var selector;
    if(divSelector){
        selector = containerSelector+" "+divSelector+" "+inputSelector;
    }else { selector = containerSelector+" "+inputSelector;}

    var condition = true;
    $.each($(selector), function (index, input) {
        if($(input).is('input') && $(input).val().trim().length > 0 && $(input).attr('type') == 'tel'){
            if(!isPhoneNumber(input)){
                $('#' +$(input).attr('id')).focus();
                condition = false;
                return false;
            }
        }else if($(input).is('input') && $(input).val().trim().length > 0 && $(input).attr('type') == 'email'){
            if(!correoValido(input, false)){
                $('#' +$(input).attr('id')).focus();
                condition = false;
                return false;
            }
        }else if($(input).is('input') && $(input).val().trim().length > 0 && $(input).attr('name') == 'curp'){
            if(!isValidCurp(input)){
                $('#' +$(input).attr('id')).focus();
                condition = false;
                return false;
            }
        }else if($(input).is('input') && $(input).val().trim().length > 0 && $(input).attr('name') == 'rfc'){
            if(!isValidRfc(input)){
                $('#' +$(input).attr('id')).focus();
                condition = false;
                return false;
            }
        } else if ($(input).is('input') && $(input).attr('type') == 'checkbox' && !$(input).prop('checked')){
            var text = $(input).attr('data-label');
            text = text.toLocaleLowerCase();
            // noty.show('warning', "El campo <strong>"+text+"</strong> es requerido");
            $('#' +$(input).attr('id')).focus();
            condition = false;
            return false;
        } else if (($(input).is('input') || $(input).is('textarea')) && $(input).val() === ''){
            var text = $(input).attr('data-label');
            text = text.toLocaleLowerCase();
            // noty.show('warning', "El campo <strong>"+text+"</strong> es requerido");
            $('#' +$(input).attr('id')).focus();
            condition = false;
            return false;
        } else if ($(input).is('input') && $(input).val() === ''){
            var text = $(input).attr('data-label');
            text = text.toLocaleLowerCase();
            // noty.show('warning', "El campo <strong>"+text+"</strong> es requerido");
            $('#' +$(input).attr('id')).focus();
            condition = false;
            return false;
        } else if ($(input).is('select') && !$(input).val()){
            var text = $(input).attr('data-label');
            text = text.toLocaleLowerCase();
            // noty.show('warning', "El campo <strong>"+text+"</strong> es requerido");
            if($(input).hasClass('select2')){
                $(input).select2('focus');
                $(input).select2('open');
            }else{
                $(selector).focus();
            }
            condition = false;
            return false;
        }
    });
    return condition;
}

function validatedateYMD(dateString){
    let dateformat = /^\d{4}-\d{1,2}-\d{1,2}$/;

    // Match the date format through regular expression
    if(dateString.match(dateformat)){
        let operator = dateString.split('-');

        // Extract the string into month, date and year
        let datepart = [];
        if (operator.length>1){
            pdatepart = dateString.split('-');
        }
        let year = parseInt(datepart[0]);
        let month= parseInt(datepart[1]);
        let day = parseInt(datepart[2]);

        // Create list of days of a month
        let ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
        if (month==1 || month>2){
            if (day>ListofDays[month-1]){
                ///This check is for Confirming that the date is not out of its range
                return false;
            }
        }else if (month==2){
            let leapYear = false;
            if ( (!(year % 4) && year % 100) || !(year % 400)) {
                leapYear = true;
            }
            if ((leapYear == false) && (day>=29)){
                return false;
            }else
            if ((leapYear==true) && (day>29)){
                console.log('Invalid date format!');
                return false;
            }
        }
    }else{
        console.log("Invalid date format!");
        return false;
    }
    return true;
}
