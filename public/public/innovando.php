<!doctype html>
<html lang="es-mx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <title>PAD | ¿Quiénes Somos? </title>
  </head>
  <body>
    <div class="main">

      <?php include 'header.php'?>

     
    <div class=" item imagen-central innovando">
    <div class="efectoa"></div>
       <div class="container-fluid">

           <div class="container">
              <div class="row align-items-end">
                <div class="col-md-12 col-sm-12 p-0">
                 
                   <div class="desc transformacion float-left text-left apps wow bounceInUp" data-wow-duration="2s" data-wow-delay="4s">
                    <p>
                          Tenemos como objetivos el progreso y la competitividad dentro del mercado tecnológico, empleando como herramientas la innovación y la constante formulación de modelos de negocio rentables para las necesitades de nuestros clientes a través del mundo digital.
                    </p>
                    </div>
                    <div class="desc mkt float-left text-left apps wow bounceInUp" data-wow-duration="2s">
                    <p >
                         Internet como medio de transmisión de información de datos, aplicando técnicas y estrategias que beneficien a nuestros clientes a tener interacción e impacto en sus "targets", materializando sus objetivos en un plazo determinado.
                    </p>
                    </div>
                    <div class="desc data float-left text-left apps wow bounceInUp" data-wow-duration="2s">
                    <p >
                        Crear sinergia con la información que generan las empresas para brindar soluciones de valor que beneficien a nuestros clientes mejorando la competitividad, impulsando así el crecimiento con la implementación de soluciones Big Data & Analytics.
                    </p>
                    </div>
                    <div class="desc cloud float-left text-left apps wow bounceInUp" data-wow-duration="2s">
                    <p >
                        Ser partícipes del mundo digital significa incorporar tecnologías que nos permiten eficientizar la infraestructura y logística de las empresas. Gozar de los beneficios que proporciona "la nube" se relata a disminuir considerablemente el costo y complejidad de los procesos.
                    </p>
                    </div>
                    <div class="desc iot float-left text-left apps wow bounceInUp" data-wow-duration="2s">
                    <p >
                       La implementación de conceptos innovadores en las áreas de desarrollo son clave para el crecimiento de toda empresa, cualquiera que sea el rubro en el que se incursione. Para PAD es una constante en cada proyecto, tomamos como reto la implementación de conceptos innovadores como estrategia de distinción de nuestros competidores.
                    </p>
                    </div>
                    
                </div>
                 <div class="col-md-12 table-cell">
                    <div class="navsol">
                        <a data-seccion="transformacion">Transformación Digital</a>
                        <a data-seccion="mkt">Marketing Digital</a>
                        <a data-seccion="data">Data & Analytics</a>
                        <a data-seccion="cloud">Cloud Computing</a>
                        <a data-seccion="iot">IoT</a>
                    </div>
                </div>
              </div>
             
            </div>
            
       </div>
     
    </div><!--fin imagen central-->





   <script>
     var menuActivo = 'mincu';
      var menuSiguiente = 'clientes.php';
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
  .innovando .container-fluid{
    margin-bottom: 150px;
    padding: 40px 30px;
  }
  .innovando .table-cell{
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
        $(".layer").hide(500);
        $(".desc").hide(500);
        var seccion = $(this).data('seccion');
        $("."+seccion).show(500);
      })
    </script>
  </div><!--fin main-->
  </body>
</html>