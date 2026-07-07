<!doctype html>
<html lang="es-mx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <title>PAD | Carriers </title>
  </head>
  <body>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <div id="fb-root"></div>

    <div class="main">

      <?php include 'header.php'?>
    <div class=" item imagen-central  carriers">
       <div class="container-fluid">
           <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="wow bounceInDown">
                    <form class="contacto-frm mt-10" name="contactform" method="post" action="post-carrier.php"  enctype="multipart/form-data">
                        <h3 class="bebas mt-10 mb-0 color-white">
                         ÚNETE AL EQUIPO PAD
                       </h3>
                      <div class="row">
                          <form method="post" action="post-carrier.php">

                        <div class="col-md-12">
                              <input type="text" required="true" name="first_name" class="form-control mt-10" placeholder="Nombre">
                            </div>
                            <div class="col-md-12">
                              <input type="text" required="true" name="last_name" class="form-control mt-10" placeholder="Apellido">
                            </div>
                            <div class="col-md-12">
                              <input type="email" name="email" required="true" class="form-control mt-10" placeholder="E-mail">
                            </div>
                            <div class="col-md-12">
                              <input type="number" name="telephone" required="true" class="form-control mt-10" placeholder="Teléfono">
                            </div>
                        <div class="col-md-12">
                          <input type="text" required="true" name="posicion" class="form-control mt-10" placeholder="Posición de interés">
                        </div>
                        <div class="col-md-12 mt-20">
                          <h3 class="bebas color-white">
                            SUBE TU CURRICULUM <small style="float:right">Formatos .pdf, .txt, .doc</small>
                            </h3>
                        </div>
                        <div class="col-md-12 mt-0">

                            <label class="control-label mb-0 bebas color-white">CURRICULUM</label>
                          <input type="file" required="true" name="image" class="form-control mt-0" placeholder="Posición de interés">
                        </div>
                        <div class="col-md-12">
                          <label class="control-label mb-0 bebas color-white">ARCHIVOS EXTRA</label>
                          <input type="file" name="extra" class="form-control mt-0" placeholder="Posición de interés">
                        </div>


                      </div>


                  </div>
                </div><!--fin col-->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <textarea rows="5" required="true" name="mensaje" class="form-control mt-10">Mensaje</textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="btn-enviar mt-10" type="submit" style="    width: 100px;
    color: #fff;
    height: 90px;
    background: transparent;
    border: 3px solid #fff;
    float: right;
}">Enviar</button>
                        </div>
 </form>
                    </div>

                </div>

              </div>
            </div>
       </div>
    </div><!--fin imagen central-->
    <script>
     var menuActivo = 'mcarrier';
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
