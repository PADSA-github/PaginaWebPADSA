<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
  <style>
  .tercio.cliente img{
    transition:all 0.5 ease;
  }
  .tercio.cliente img[src$=".png"] {
   
   
    
  }
</style>
    <title>PAD | ¿Quiénes Somos? </title>
  </head>
  <body>
    
    <div class="main">
    
      <?php include 'header.php'?>
   <div class="slidequienes">
      <div class=" item imagen-central clientes">
        <div class="container h-100">
          <div class="row align-items-center h-100 ">
            <div class="col-lg-4 col-sm-6 offset-sm-6 offset-lg-8">
               <div class="layer mr-10 wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                <span class="wow fadeIn" data-wow-delay="3s">
                   Lo más importante para <strong>PAD</strong> son nuestros clientes.
                   A lo largo de 20 años de experiencia hemos evolucionado juntos.
                   Este compromiso se traduce en pasión por el servicio y profesionalismo
                   comprometiendonos en la resolución de tus necesidades.
                   La satisfacción de nuestros clientes es nuestra mejor carta de presentación
                 </span>
                </div>
                <div class="tercio cliente wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                   <img data-img="assets/img/Sequence1.gif" data-src="assets/img/clientes-walmart.png" src="assets/img/clientes-walmart.png"> 
                </div>
                <div class="tercio cliente wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                   <img data-img="assets/img/Sequence4.gif" data-src="assets/img/clientes-telefonica.png" src="assets/img/clientes-telefonica.png"> 
                </div>
                <div class="tercio cliente wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                    <img data-img="assets/img/Sequence3.gif" data-src="assets/img/clientes-telcel.png" src="assets/img/clientes-telcel.png">
                </div>
                <div class="tercio cliente wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                   <img data-img="assets/img/Sequence2.gif" data-src="assets/img/clientes-azteca.png" src="assets/img/clientes-azteca.png">
                </div>
                <div class="tercio cliente wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                    <img data-img="assets/img/Sequence6.gif" data-src="assets/img/clientes-alsea.png" src="assets/img/clientes-alsea.png">
                </div>
                <div class="tercio cliente wow bounceInUp" data-wow-duration="2s"  data-wow-delay="1s">
                    <img data-img="assets/img/Sequence5.gif" data-src="assets/img/clientes-scotia.png" src="assets/img/clientes-scotia.png">
                </div>
            </div>
          </div>
        </div>
      </div><!--fin imagen central-->
      <div class=" item imagen-central clientes">
          <div class="container h-100">
          <div class="row align-items-center h-100 ">
            <div class="col-lg-4 col-sm-6 offset-sm-6 offset-lg-8">
               <div class="layer mr-0 wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
                <span class="wow fadeIn" data-wow-delay="1s">
                   Reforzamos nuestros esfuerzos y hacemos posible que las necesidades de nuestros clientes se cumplan en tiempo y eficacia. Por ello contamos con Partners que nos respaldan en diversas areas.
                 </span>
                </div>
               
                <div class="tercio aliado wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
                   <img src="assets/img/clientes-dti.png"> 
                </div>
                <div class="tercio aliado wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <img src="assets/img/aiti.png">
                </div>
                <div class="clearfix  wow bounceInUp" style="width:100%; height:1px; float:left;"  data-wow-duration="2s" data-wow-delay="1s"></div>
                
                <div class="tercio aliado wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
                   <img src="assets/img/clientes-epsa.png" >
                </div>
                <div class="tercio aliado wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <img src="assets/img/clientes-axity.png">
                </div>
                
            </div>
          </div>
        </div>
        <div class="efectoq"></div>
      </div><!--fin imagen central-->
   </div><!--fin slidequines-->
 

   <script>
     var menuActivo = 'mclientes';
      var menuSiguiente = 'contacto.php';
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

      $( ".tercio.cliente img" )
        .hover(function() {
           var gif = $(this).data("img");
            $(this).attr("src", gif);
        })
        .mouseleave(function() {
           var imagen = $(this).data("src");
          $(this).attr("src",imagen)

        });

      $(".tercio.cliente img").hover(function(){
       
      });
      $(document).ready(function() {
        const slider = $(".slidequienes");
      slider
        .slick({
          
          infinite: true,
          slidesToShow: 1,
          fade:true,
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
          $('.aliado, .cliente').addClass('animated bounceInUp ');
        } else {
          $('.layer').removeClass('animated bounceInUp ');
          $('.aliado, .cliente').removeClass('animated bounceInUp ');
        }

        $(".slidequienes").on("beforeChange", function() {
          
          $('.layer').removeClass('animated bounceInUp').hide();
          setTimeout(() => {    
            $('.layer').addClass('animated bounceInUp').show();
            
          }, 1000);
           $('.aliado, .cliente').removeClass('animated bounceInUp').hide();
          setTimeout(() => {    
            $('.aliado, .cliente').addClass('animated bounceInUp').show();
            
          }, 1000);
          

        })


      });
    
      
    </script>
    <!-- Optional JavaScript -->
    </div><!--fin main-->
  </body>
</html>