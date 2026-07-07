<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   

    <title>PAD | Home </title>
  </head>
  <body>
     <style>
      .container.header, .container-fluid.footer{
        transition: all ease-in 1.5s;
        opacity:0;
      }
       .container.header.muestra, .container-fluid.footer.muestra{
        opacity:1!important;
       }
    </style>
    <style>
      #myvideo{
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width:100%;
        height:100%;
        background:#fff;
       transition: all 4s ease 0s;
       
        
      }
      .overlay{
       
      
      }
      .overlay{
          width:100%;
          height:100%;
          background:transparent;
          position:absolute;
          z-index:99999999999999999;
          transition: all 4s ease 0s;
        

      }
      .adios{
        height:0px!important;
        overflow:hidden;
       
      }
      .adios #myvideo{
        opacity:0;
        pointer-events: none;
        transform:translateY(-1500px);
        min-height:0px;
        
      }
      
    </style>
    <div class="overlay">
      <video id="myvideo" muted autoplay>
          <source src="assets/video/cortinilla.mp4" type="video/mp4">
          <source src="assets/video/cortinilla.ogg" type="video/ogg">
          Your browser does not support the video tag.
      </video>
    </div>
    <div class="main">
    
      <?php include 'header.php'?>
   
   <div class="imagen-central index">
           <div class="container h-100">
          <div class="row align-items-center h-100 ">
            <div class="col-md-12">
               <div class="layer wow bounceInUp" data-wow-duration="2s" data-wow-delay="4s">
               <span class="wow fadeIn" data-wow-duration="2s" data-wow-delay="4s">
                 En <strong>PAD</strong> nos interesa:<br><br>
                 <strong>Brindar Soluciones que permitan a nuestros clientes continuar por la senda de la alta productividad<br><br></strong>
                 Participar como socios de negocios con las empresas, aportando nuestros conocimientos y experiencia, para la creación y actualización de sus sistemas tecnológicos.
               </span>
            </div>
            </div>
          </div>
        </div>
   </div>

   <script>
     var menuActivo = 'mhome';
      var menuSiguiente = 'quienes-somos.php';
   </script>  
    <?php include 'footer.php' ?>
    <?php include 'scripts.php' ?>
   
    <script>
      $(".container.header").addClass('esconde');
      $(".container-fluid.footer").addClass('esconde');
      var vid = document.getElementById("myvideo");
       vid.addEventListener("timeupdate", function(){
            if(vid.currentTime > 3) {
               console.log(vid.currentTime);
               vid.pause();
               $(".overlay").addClass('adios');
               $(".container.header").removeClass('esconde');
               $(".container-fluid.footer").removeClass('esconde');
               $(".container.header").addClass('muestra');
               $(".container-fluid.footer").addClass('muestra');
            }
        });
    </script>

    <!-- Optional JavaScript -->
    </div><!--fin main-->
  </body>
</html>