MODAL_SERVICIOS_ACTIVOS = 0;
function showLoadingModal() {
    MODAL_SERVICIOS_ACTIVOS++;
    $.blockUI({
        css: {
            border: 'none',
            padding: '15px',
            backgroundColor: 'none'
        },
        message :  $('#mensaje-block-ui').html(),
        baseZ: 2000
    });
    NProgress.start();
}

function hideLoadingModal() {
    $.unblockUI();
    NProgress.done();
}

function callbackLoadingModal(callback, data) {
    $.when(callback(data)).then(ocultarModal);
}

function alertNoty(notification) {
    switch (notification.type) {
        case 'success': alertify.success(notification.message); break;
        case 'warning': alertify.warning(notification.message); break;
        case 'info': alertify.message(notification.message); break;
        default: alertify.error(notification.message); break;
    }
}

var RenderTable = {
    language : {
        "sProcessing" : "Espere...",
        "sLengthMenu" : "_MENU_ Registros por página",
        "sZeroRecords" : "No se encontraron resultados",
        "sEmptyTable" : "Ningún dato disponible en esta tabla",
        "sInfo" : "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty" : "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered" : "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix" : "",
        "sSearch" : "Buscar:",
        "sUrl" : "",
        "sInfoThousands" : ",",
        "sLoadingRecords" : "Cargando...",
        "oPaginate" : {
            "sFirst" : "Primero",
            "sLast" : "Último",
            "sNext" : "Siguiente",
            "sPrevious" : "Anterior"
        },
        "oAria" : {
            "sSortAscending" : ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending" : ": Activar para ordenar la columna de manera descendente"
        },
        buttons: {
            copyTitle: 'El contenido de la tabla ha sido copiado',
            copySuccess: {
                _: '%d Lineas copiadas',
                1: '1 Linea copiada'
            }
        }
    },
    applyCustomStyleTo: function (selector, customOptions) {
        selectortables = selector;
        var options = {
            "bFilter": true,
            "bSearchable": true,
            "destroy": true,
            "responsive": true,
            "language": RenderTable.language,
            "dom": 'if<"custom-table"t><"custom-table-bottom filtrosPag pagiNation"rlp><"clear">',
        };
        var mergedOptions = options;
        if (customOptions) {
            mergedOptions = $.extend(options, customOptions);
        }
        $(selector).DataTable().on('draw', function () {
            //console.log('ejecutando tooltip');
            $('[data-toggle="tooltip"]').tooltip();
        });
        return $(selector).DataTable(mergedOptions);
    },
    applyCustomStyleToNoSearch : function(selector, customOptions) {
        var options = {
            "bFilter" : true,
            "searching" : false,
            "destroy": true,
            "responsive": true,
            "language" : RenderTable.language,
            "bPaginate" : false,
            "bInfo" : false
        };
        var mergedOptions = options;
        // console.log(customOptions);
        if (customOptions) {
            // console.log('uniendo los customs');
            mergedOptions = $.extend(options, customOptions);
        }
        $(selector).DataTable().on('draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        return $(selector).DataTable(mergedOptions);
    },
    applyCustomStyleToExportExcel : function(selector, customOptions) {
        var options = {
            "bFilter" : true,
            "bSearchable" : true,
            "destroy": true,
            "responsive": true,
            "language" : RenderTable.language,
            "bPaginate" : true,
            "bInfo" : true,
            "dom": 'Bfrtip',
            "buttons": [
                /*{
                    "extend": 'copy',
                    "text": 'Copiar'
                },*/
                {
                    "extend": 'csv',
                    className: 'btn btn-success btn-rounded',
                    text: '<i class="fas fa-file-excel"></i> Descargar en Excel'
                }
            ]
        };
        var mergedOptions = options;
        if (customOptions) {
            mergedOptions = $.extend(options, customOptions);
        }
        $(selector).DataTable().on('draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        return $(selector).DataTable(mergedOptions);
    },
    applyCustomStyleToExportExcelCourse : function(selector, customOptions) {
        var options = {
            "bFilter" : true,
            "bSearchable" : true,
            "destroy": true,
            "responsive": true,
            "language" : RenderTable.language,
            "bPaginate" : true,
            "bInfo" : true,
            "dom": 'Bfrtip',
        };
        var mergedOptions = options;
        if (customOptions) {
            mergedOptions = $.extend(options, customOptions);
        }
        $(selector).DataTable().on('draw', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        return $(selector).DataTable(mergedOptions);
    }
};

let justifyTools = {
    justifyElements: function (elementsArray) {
        var cell = $('<div class="d-flex flex-row justify-content-around "></div>');
        $.each(elementsArray, function (i, element) {
            var col = $('<div class="col"></div>');
            col.append(element);
            cell.append(col);
        });
        return cell.prop('outerHTML');
    }
};

let buttonFactory = {
    simpleButton: function(dbId, iconClass, titleName, actionClass, extraProps)  {
        extraProps = (extraProps !== undefined) ? extraProps: false;
        var button = $("<button></button>");
        var icon = $("<em></em>").attr("class", "align-content-center").attr("class", iconClass);
        button.css('cursor', 'pointer');
        button.addClass("btn btn-sm btn-icon");
        button.addClass(actionClass);
        button.attr("data-toggle", "tooltip");
        button.attr("data-placement", "top");
        button.attr("title", titleName);
        button.attr("data-original-title", titleName);
        button.attr('db-id', dbId);
        if(extraProps){
            $.each(extraProps, function (index, item) {
                button.attr(item.key, item.value);
            });
        }
        button.append(icon);
        return button.prop("outerHTML");
    },
    linkButton: function(dbId, iconClass, titleName, actionClass, extraProps)  {
        extraProps = (extraProps !== undefined) ? extraProps: false;
        var button = $("<a></a>");
        var icon = $("<em></em>").attr("class", iconClass);
        button.css('cursor', 'pointer');
        button.addClass("btn btn-sm btn-icon");
        button.addClass(actionClass);
        button.attr("data-toggle", "tooltip");
        button.attr("data-placement", "top");
        button.attr("title", titleName);
        button.attr("data-original-title", titleName);
        button.attr('db-id', dbId);
        if(extraProps){
            $.each(extraProps, function (index, item) {
                button.attr(item.key, item.value);
            });
        }
        button.append(icon);
        return button.prop("outerHTML");
    },
    fieldBadge: function(colorClass, innerText, animatedClass)  {
        var span = $('<span></span>');
        span.addClass(colorClass);
        span.text(innerText);
        if(animatedClass){span.addClass(animatedClass);}
        return span.prop("outerHTML");
    }
};

let axiosTools = {
    serializeForm: function (params) {
        var array = new URLSearchParams();
        // let json = {};
        $.each(params, function (key, item) {
            // json[item.name] = item.value;
            array.append(item.name, item.value);
        });
        return array;
    },
}
 $(document).ready(function () {
     $('body').on('click','button.cerrar',function(e){
         $('#staticBackdrop').modal('hide');
     })
 });

$('body').on('click','.cerrar',function(e){
    e.preventDefault();
    var modalParent = $(this).parent().parent().parent().parent();
    $(modalParent).modal('hide');
});

function confirmAlertify (message, title, callback, cancelCallback) {
    cancelCallback = (cancelCallback) ? cancelCallback : undefined;
    if (cancelCallback) {
        alertify.confirm(message, callback).set('oncancel',cancelCallback).set('labels',{ok:'Confirmar', cancel:'Cancelar'}).setHeader(title);
    } else {
        alertify.confirm(message, callback).set('labels',{ok:'Confirmar', cancel:'Cancelar'}).setHeader(title);
    }
}

function promptAlertify (message, defaultValue, title, callback, cancelCallback) {
    cancelCallback = (cancelCallback) ? cancelCallback : undefined;
    defaultValue = (defaultValue) ? defaultValue : undefined;
    if (cancelCallback) {
        alertify
            .prompt(message, defaultValue,callback)
            .set('oncancel',cancelCallback)
            .set('labels',{ok:'Confirmar', cancel:'Cancelar'})
            .setHeader(title);
    } else {
        alertify
            .prompt(message, defaultValue,callback)
            .set('labels',{ok:'Confirmar', cancel:'Cancelar'})
            .setHeader(title);    }
}
