$(function () {
    var services = {};
    services.loadNotifications = function (){
        showLoadingModal();
        axios.get('/notifications/count_noti',{
            headers: {
                'Content-Type': 'application/json;charset=UTF-8',
                'Access-Control-Allow-Origin': '*'
            },
            data: {} // envío un cuerpo (aunque sea un objeto vacío)
        }).then(function(response){
            var numeroNotificaciones = response.data.number;

            if ( numeroNotificaciones == 0 ) {
                $("#notifications").hide("slow");
                $("#notifications").text(numeroNotificaciones);
            } else {
                $("#notifications").show("slow");
                $("#notifications").text(numeroNotificaciones);
            }
            ocultarModal();
        }).catch(function (error) {
            console.log(error);
            ocultarModal();
        });
    }

    services.loadNotifications();
});
