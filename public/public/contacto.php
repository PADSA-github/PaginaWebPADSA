<!doctype html>
<html lang="es-mx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <title>PAD | Contacto</title>
  </head>
  <body>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <div id="fb-root"></div>

    <div class="main">

      <?php include 'header.php'?>
    <div class=" item imagen-central contacto">
       <div class="container-fluid">
           <div class="container">
              <div class="row align-items-end">
                <div class="col-md-6">
                  <div class="wow bounceInDown" data-wow-delay="4.5s">
                    <form class="contacto-frm mt-20"  name="contactform" method="post" action="post-contacto.php">
                       <h1 class="bebas color-white">
                         HABLEMOS DE TU PROYECTO A FUTURO
                       </h1>
                      <div class="row">
                     
                            <div class="col-12">
                               <select class="form-control " name="tema" required="true">  
                                  <option>--Selecciona un tema--</option>
                                  <option value="Desarrollo de Apps">Desarrollo de Apps</option>
                                  <option value="Mantenimiento de Apps">Mantenimiento de Apps</option>
                                </select>
                            </div>
                            <div class="col-6">
                              <input type="text" required="true" name="first_name" class="form-control mt-10" placeholder="Nombre">
                            </div>
                            <div class="col-6">
                              <input type="text" required="true" name="last_name" class="form-control mt-10" placeholder="Apellido">
                            </div>
                            <div class="col-6">
                              <input type="email" name="email" required="true" class="form-control mt-10" placeholder="E-mail">
                            </div>
                            <div class="col-6">
                              <input type="number" name="telephone" required="true" class="form-control mt-10" placeholder="Teléfono">
                            </div>
                            <div class="col-12">
                              <input type="text" name="cia" required="true" class="form-control mt-10" placeholder="Compañia que representa">
                            </div>
                            <div class="col-md-9">
                               <textarea name="comments" rows="5" required="true" class="form-control mt-10">Mensaje</textarea>
                            </div>
                            <div class="col-md-3 mb-20">
                              <input class="btn-enviar mt-10" type="submit" value="Enviar">
                            </div>
                     
                      </div>
                      
                    </form>
                  </div>
                </div><!--fin col-->
                <div class="col-md-6 wow bounceInDown" data-wow-delay="4.5s">
                  <h1 class="color-white text-uppercase bebas">Nuestras redes sociales</h1>
                  

                  <div class="contenedor-twt">
                     <a class="twitter-timeline" data-width="100%"  href="https://twitter.com/solodev">Tweets by solodev</a> 
                  </div>
                  <div class="sociales">
                    <a href="https://www.facebook.com/profile.php?id=100083620180531"><i class="fa fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/aiti.mx/"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/ai-ti-sa-de-cv-5577b823b/"><i class="fa fa-linkedin fa-2x"></i></a>
                  </div>
                  
                </div>

              </div>
            </div>
       </div>
    </div><!--fin imagen central-->
    <script>
     var menuActivo = 'mcontacto';
      var menuSiguiente = 'carrier.php';
    </script>
    <?php include 'footer.php'?>
    <?php include 'scripts.php'?>
    <link rel="stylesheet" href="https://use.typekit.net/ira8htz.css">
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script>
      $(window).bind("load", function(){
        $(".contacto").addClass("animado");
      })

    </script>
  </div><!--fin main-->
  </body>
</html>