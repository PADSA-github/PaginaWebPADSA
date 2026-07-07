<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <style>
     .especial{
         max-width: 230px!important;
    padding: 20px 40px 5px 20px!important;
     }
     .fs-12{
      font-size:12px!important;
     }
   </style>

    <title>PAD | ¿Quiénes Somos? </title>
  </head>
  <body class="quienesbody">
    <div class="main">
    
      <?php include 'header.php'?>
   <div class="slidequienes">
      <div class=" item imagen-central quienes">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-md-12">
               <div class="layer  bounceInUp" data-animation="bounceInUp" data-wow-duration="2s" data-delay="3s" data-wow-delay="3s">
              <span class="wow fadeIn" data-animation="bounceInUp" data-wow-delay="">
                 Somos una empresa mexicana conformada por profesionales calificados en el desarrollos de tecnologias
                y aplicaciones digitales
              enfocados a la consultoría y soluciones empresariales a través de la alianza estrategíca establecida con nuestros socios, consolidándonos como una empresa
              altamente competitiva. 
              </span>

            </div>
            </div>
          </div>
        </div>
      </div><!--fin imagen central-->
      <div class=" item imagen-central quienesmision">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-md-12">
               <div class="layer  bounceInUp" data-delay="3s" data-animation="bounceInUp" data-wow-duration="2s" data-wow-delay="4s">
                 <span class="wow fadeIn" data-delay="3s" data-animation="fadeIn" data-wow-delay="">
                   <strong>Misión</strong><br><br>
                   Desarrollar aplicaciones y soluciones  de vanguardia en Tecnología de Información para nuestros clientes;
                  eficientando procesos, áreas funcionales y operativas
                  para el cumplimiento de sus objetivos.
                  Adecuando nuestros servicios a sus necesidades particulares y siempre garantizando calidad y puntualidad.
                </span>
            </div>
            </div>
          </div>
        </div>
      </div><!--fin imagen central-->
       <div class=" item imagen-central quienesvision">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-md-12">
               <div class="layer  bounceInUp" data-delay="3s" data-animation="bounceInUp" data-wow-duration="2s" data-wow-delay="4s">
                <span class=" fadeIn" data-delay="3s" data-animation="fadeIn" data-wow-delay="2s">
                   <strong>Visión</strong><br><br>
                   Mantener la competitividad dentro
                  de los estándares más altos a nivel mundial, ofreciendo innovación
                  en nuestros productos en TI,
                  soluciones y servicios de acuerdo
                  a las exigencias del mercado.
                </span>
            </div>
            </div>
          </div>
        </div>
      </div><!--fin imagen central-->
       <div class=" item imagen-central quieneschart">
        <div class="container h-100">
          <div class="row align-items-top h-100">
            <div class="col-md-12 ">
              <div class="layer especial mr-0 fs-12 text-center  bounceInUp" data-wow-duration="2s" data-wow-delay="4s">
                 <span class=" fadeIn" data-delay="3s" data-wow-delay="2s">
                    <strong>Project Organization  <br>Chart</strong><br><br>
                  </span>
              </div>
            </div>
          </div>
        </div>
        <div class="efectoq"></div>
      </div><!--fin imagen central-->
      
   </div><!--fin slidequines-->
 
   <script>
     var menuActivo = 'mqs';
     var menuSiguiente = 'soluciones.php';
   </script>  
    <?php include 'footer.php' ?>
    <?php include 'scripts.php' ?>
    
   <style>
     .bounceInUp {
          -webkit-animation-name: bounceInUp;
          animation-name: bounceInUp;
          -webkit-animation-duration: 3s!important;
          animation-duration: 3s!important;
      }
   </style>
    <script>
      $(document).ready(function() {
        const slider = $(".slidequienes");
      slider
        .slick({
          
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots:true,
          arrows:true,
          autoplay:false,
        });

      slider.on('wheel', (function(e) {
        e.preventDefault();
        console.log(e.originalEvent.deltaY);
        if (e.originalEvent.deltaY < 1000) {
          $(this).slick('slickNext');

        } else {
        $(this).slick('slickPrev');
        }
      }));

        if ($('.slick-slide').hasClass('slick-active')) {
          $('.layer').addClass('animated bounceInUp ');
        } else {
          $('.layer').removeClass('animated bounceInUp ');
        }

        $(".slidequienes").on("beforeChange", function() {
          
          $('.layer').removeClass('animated bounceInUp').hide();
          setTimeout(() => {    
            $('.layer').addClass('animated bounceInUp').show();
            
          }, 1000);
          

        })


      });
    
      
    </script>
    <!-- Optional JavaScript -->
    </div><!--fin main-->
    
  </body>
</html>