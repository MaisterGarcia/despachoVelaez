<!DOCTYPE html>
<html lang="en">
<head>
  <title alt="Despacho Velazquez">Despacho Velazquez</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css_index/bootstrap.min.css">
  <link rel="stylesheet" href="css_index/vendors/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="css_index/vendors/owl-carousel/owl.theme.default.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="archivo/icono.ico" width="40px" heigth="40px">
</head>
<body>


  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">
      <img src="archivo/icono.ico" width="60" height="40" class="d-inline-block align-top" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <div class="navbar-nav mr-auto ml-auto text-center">
        <a class="nav-item nav-link active" href="/">Inicio</a>
        <a class="nav-item nav-link " href="#conocenos">Conocenos</a>
        <a class="nav-item nav-link " href="#email">Contactanos</a>
        <a class="nav-item nav-link " href="<?php echo e(route('servicios')); ?>">Servicios</a>
        <a class="nav-item nav-link " href="<?php echo e(route('login')); ?>">Inicia Session</a>
      

          </div>
          <div class="d-flex flex-row justify-content-center">
            
          </div>
        </div>
      </nav>





      <!--Inicio Carousel-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/ab6.jpeg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>“Contaras con los mejores abogados”</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/ab5.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>“Con la mejor atención”</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/ab9.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>“Con un resultado positivo”</h5>

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--Fin Carousel-->

      <!--Card Menu-->
      <section class="container mt-5 pt-5">  
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top img-fluid" src="img/ab13.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Divorcios</h5>
              <!-- <p class="card-text">Arma tu propio Gabinete</p> -->
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/ab8.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Testamentos</h5>
              <!-- <p class="card-text">Encuetra todas la piezas para tu maquina</p> -->
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="img/ab11.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Demandas</h5>
              <!-- <p class="card-text">Compra todos tus accesorios</p> -->
            </div>
          </div>
        </div>
      </section>
      <!--Card Menu-->


      <!--Fin Owl Carousel-->
      <div class="owl-carousel owl-theme mt-5">
       <div class="item">
        <img src="img/ab14.png"  class="img-fluid" alt="12"><P class="text-center"></P>
      </div>
      <div class="item">
        <img src="img/ab17.png" class="img-fluid" alt="12"><P class="text-center"></P>
      </div>
      <div class="item">
        <img src="img/ab16.png" class="img-fluid" alt="12"><P class="text-center"></P>
      </div>
      <div class="item">
        <img src="img/ab10.jpg" class="img-fluid" alt="12"><P class="text-center"></P>
      </div>
      <div class="item">
        <img src="img/ab15.png" class="img-fluid" alt="12"><P class="text-center"></P>
      </div>       
    </div>
    <!--Fin Owl Carousel-->



    <!--jumbotron Menu-->
    <div class="jumbotron  mt-5 bg-inverse text-white rounded-0" id="conocenos">
      <div class="container">
        <h1 class="display-3 text-center">Despacho Velazquez</h1><br>
        <p class="lead text-center">UN DESPACHO DIFERENTE</p>
        <hr class="my-4">
        <div class="d-flex justify-content-between align-items-center">
          <p>Velazquez es un despacho de abogados con más de 15 años de historia, considerado como uno de los 40 mejores bufetes de México. Reconocido por los más prestigiosos directorios internacionales, nuestros más de 70 profesionales apuestan por la mejora continua para lograr la excelencia a través de nuestro asesoramiento. Docentes en las instituciones más prestigiosas, en Velazquez estamos orgullosos de lo que se ha bautizado como #EstiloVelazquez. ¿Quieres saber más sobre el?</p>
          <p class="lead">
          </p>
        </div> <a class="btn btn-primary btn-lg navbar-toggler-right" href="<?php echo e(route('conocenos')); ?>" role="button">Leer más</a>
      </div>
    </div>
    <!--jumbotron Menu-->


    <!--Card Menu-->
    <section class="container mt-5 my-5" id="leer_mas">  
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top img-fluid" src="img/ab18.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Misión</h5>
            <p class="card-text"> Velazquez es un despacho especializado en las áreas clave del asesoramiento legal a empresas, cuyo buque insignia es el Derecho Laboral y que busca la excelencia no solo en la calidad técnica del trabajo de sus letrados, sino también en el trato al cliente.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-fluid" src="img/ab20.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Visión</h5>
            <p class="card-text">Velazquez Abogados es un despacho que aspira a la excelencia en la prestación de servicios transversales gracias a un asesoramiento legal de alta calidad. Estamos convencidos de que  solo podemos lograrlo convirtiéndonos en socios estratégicos de nuestros clientes y apostando por la innovación como clave para dar respuesta a los retos del presente con la vista puesta en el futuro. </p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top img-fluid" src="img/ab19.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Valores</h5>
            <!-- <p class="card-text">Los valores irrenunciables de nuestro despacho y que rigen la conducta de nuestros profesionales son:</p> -->
            <p class="card-text">Orientación al cliente</p>
            <p class="card-text">Excelencia</p>
            <p class="card-text">Innovación y creatividad</p>
            <p class="card-text">Anticipación</p>
            <p class="card-text">Honestidad</p>
            <p class="card-text">Pragmatismo</p>
          </div>
        </div>
      </div>
    </section>
    <!--Card Menu-->

    

    <!--Mapa-->
    <div class="container">
      <section class="maps">
        <style>
        .mapWrapper {
          position: relative;


          padding-bottom: 66.6666667%;
          height: 0;
        }
        .mapWrapper iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 80%;

        }

      </style>

      <center><h3>Ubicación Velazquez!</h3></center>
      <div class="mapWrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.748533556882!2d-99.66522398556693!3d19.293298786963675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd89c6a3f517d1%3A0xa7fee83817f5094c!2sCalle+Andr%C3%A9s+Quintana+Roo+Nte.+403%2C+Sector+Popular%2C+50040+Toluca+de+Lerdo%2C+M%C3%A9x.!5e0!3m2!1ses!2smx!4v1527205438299" width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    </section>
  </div>

  <!--Mapa-->






  <!--Email-->

  <section class="container my-5 " id="email">
    <h3 class="text-uppercase text-center">CONTÁCTANOS YA!!</h3>
    <p class="lead text-center">Necesitas más información o tienes dudas, déjanos un mensaje y en breve nos comunicaremos contigo.</p>

    <div class="col-12">
      <div class="row my-5">
        <div class="col-6">
          <form role="form"  method="post" action="rem/contacto.php">
            <div class="form-group row mx-2">
              <label for="Nombre"></label>
              <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre" required>
            </div>
            <div class="form-group row mx-2">
              <label for="Mail"></label>
              <input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
            </div>
            <div class="form-group row mx-2">
              <label for="Mail"></label>
              <input type="txt" name="phone" placeholder="Teléfono" class="form-control" id="phone" required>
            </div>
          </div>
          <div class="form-group row col-6">
            <textarea for="Mail" class="form-control col-12 col-form-label" placeholder="Mensaje" name="mensaje" id="mensaje" required></textarea>
          </div>
        </div>
      </div>
      <div class="text-center">
       <button class="btn btn-danger col-6">Enviar</button>
     </div>

   </form>
 </section>
 <!--Fin Email-->





 <!--Footer-->
 <div class="container-fluid bg-inverse text-white py-3">
  <div class="container text-center">
    <p class="list-inline text-left text-center">Telefono: (722) 1-09-23-50 | Dirección: Minatitlan 101A 36730 Salamanca (México) | velazquezabogados@admin.com.mx</p>
  </div>
</div>
<!--Footer-->

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="js_index/jquery.js" ></script>
<script src="js_index/bootstrap.min.js" ></script>
<script src="js_index/vendors/owl-carousel/owl.carousel.js" ></script>
<script type="">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      }
    }
  })
</script>
</body>
</html>