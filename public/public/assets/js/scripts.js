function cambiaAlto() {
    var altoVentana = $(window).height()
    var anchoVentana = $(window).width()
    var altoHeader = $(".header").height();
    var altoFooter = $(".footer").height();
    var areaSegura = 30;
    var altoSlide = altoVentana - (altoFooter + altoHeader + areaSegura);
    if (anchoVentana < 450) {
        $(".imagen-central").height("100%");
    } else {
        $(".imagen-central").height(altoSlide);
    }

}
new WOW().init();

$(window).bind('load', function() {

    /*Selecciona el menu activo del header*/
    $("." + menuActivo).addClass('active');
    /*Define el alto de la imagen central del sitio conforme a la resolución*/
    cambiaAlto();
    $(".efecto").addClass("animado");
    $(".efectoa").addClass("animado");
    $(".efectoq").addClass("animado");
    $(".imagen-central").addClass("animado");
    $(".linea-roja").addClass("active");
})
  $(document).keydown(function(e){
    if (e.which == 40) { 
        window.location.href= menuSiguiente;
    }
});
$(window).resize(function() {
    /*Define el alto de la imagen central del sitio conforme a la resolución*/
    cambiaAlto();
});
/*Cambia las barras por el icono de cerrar del menu mobile*/
$(".icono-menu").click(function() {
    //$(".navi a").addClass('visible');
    $(".navi .septimo").toggle(200);
    $(".icono-menu i").toggleClass('fa-bars fa-times')
    $(".footer").css("bottom", "0");
});


var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
var f = new Date();
var f = diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()
var campo = document.getElementById('fecha');
document.getElementById('fecha').innerHTML = (f);