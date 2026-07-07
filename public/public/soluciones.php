<!doctype html>
<html lang="es-mx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <title>PAD | Soluciones </title>
  </head>
  <body>
    <div class="main">

      <?php include 'header.php'?>
    <div class=" item imagen-central soluciones">
    <div class="efectoa"></div>
       <div class="container-fluid">
           <div class="container">
              <div class="row align-items-end">
                <div class="col-md-6 col-sm-6 offset-sm-6 offset-md-6">
                  <div class="layer wow bounceInUp" data-wow-duration="2s" data-wow-delay="4s">
                     <span class="wow fadeIn" data-wow-duration="2s" data-wow-delay="4s">
                        <strong>Soluciones</strong><br><br>
                        Desarrollo, implementación
                        y administración de software
                        o aplicaciones que cumplan
                        con los estándares de calidad
                        con el fin de sustentar
                        la productividad y competitividad
                        de nuestros clientes.
                      </span>
                  </div>
                   <div class="desc servicios apps wow bounceInUp" data-wow-duration="2s">
                    <h2>Servicio de Aplicaciones</h2>
                     <ul>
                        <li>Desarrollo de aplicaciones.</li>
                        <li>Administración de aplicaciones.</li>
                        <li>Definición de requerimiento e ideas de negocio.</li>
                        <li>Ejecución de pruebas y QA.</li>
                        <li>Implementación de soluciones.</li>
                        <li>Servicios de soporte a aplicaciones.</li>
                     </ul>
                    </div>
                    <div class="desc productos apps wow bounceInUp" data-wow-duration="2s">
                    <h2>Productos</h2>
                     <ul>
                        <li>Tienda en Línea.</li>
                        <li>Sistema de Recursos en la Empresa - ERP.</li>
                        <li>Personalización y desarrollo de productos	 de a acuerdo a las estrategias y necesidades 	  especificas de nuestros clientes.</li>
                     </ul>
                    </div>
                    <div class="desc fabrica apps wow bounceInUp" data-wow-duration="2s">
                    <h2>Fabrica de Software</h2>
                    <p>En el modelo de <strong>PAD</strong>, nos enfocamos en la creación y reutilización de código aplicando el principio de innovación y agilidad para proporcionar soluciones tecnologías de valor, buscando resolver de la mejor manera los problemas y necesidades de nuestros clientes de manera ininterrumpida a través de nuestro modelo de integración continua.</p>
                     Visualiza nuestro módulo de integración continua <i class="fa fa-caret-right"></i> 
                     <a class="color-white" href="assets/pdf/fabrica-de-software.pdf" target="_blank"><strong>Descarga aquí</strong></a>
                    </div>
                </div>
                 <div class="col-md-12 table-cell">
                    <div class="navsol">
                        <a data-seccion="servicios">Servicios de aplicaciones</a>
                        <a data-seccion="productos">Nuestros Productos</a>
                        <a data-seccion="fabrica">Fábrica de software</a>
                    </div>
                </div>
              </div>
            </div>
       </div>
    </div><!--fin imagen central-->






   <script>
     var menuActivo = 'msol';
     var menuSiguiente = 'innovando.php';
   </script>
    <?php include 'footer.php'?>
    <?php include 'scripts.php'?>
    <div class="modal fade" id="modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
@media only screen and (max-width:600px){
  .soluciones .container-fluid{
    margin-bottom: 100px;
    padding: 40px 30px;
  }
  .table-cell{
    position: absolute;
    bottom: -100px;
    height: 100px;
  }
  .desc p{
    text-shadow:none;
  }
}
</style>
    <script>
      $(".navsol a").click(function(){
        $(".navsol a.active").removeClass("active");
        $(this).addClass("active");
        $(".soluciones .container-fluid").addClass("fondo");
        $(".layer").hide(500);
        $(".desc").hide(500);
        var seccion = $(this).data('seccion');
        $("."+seccion).show(500);
      })
    </script>
  </div><!--fin main-->
  </body>
</html>