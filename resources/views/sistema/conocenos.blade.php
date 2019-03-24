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
        <a class="nav-item nav-link " href="{{route('servicios')}}">Servicios</a>
        <a class="nav-item nav-link " href="{{route('login')}}">Inicia Session</a>
          
              </div>
            </li>-->

          </div>
          <div class="d-flex flex-row justify-content-center">
            
          </div>
        </div>
      </nav>


      <!--Card Menu-->
      <section class="container mt-5 pt-5">  
        <div class="card-deck">

          <div class="card mb-3">
            <img class="card-img-top" src="img/estrecho.jpeg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title text-center">Historia</h2>
              <p class="card-text">Velazquez Abogados es un despacho con más de 18 años de historia a sus espaldas. Desde su fundación en 2000 por D. Guillermo Velazquez, hasta hoy, la firma ha sido testigo privilegiado de los acontecimientos que han dibujado la España que conocemos hoy.
              </p><p>
                La experiencia, qué duda cabe, es un grado. Durante estos 18 años nosotros también hemos ido creciendo y madurando como despacho. El afán de nuestro management por entender la abogacía de una forma profesional y empresarial nos ha permitido entrar a formar parte del selecto top 40 de despachos de nuestro país. ¿La clave? Nuestra apuesta por la mejora continua para lograr, en último término, la excelencia.
                Esa excelencia es uno de los valores que nuestro fundador, exprofesor titular a la Cátedra de Derecho del Trabajo de la Universidad Complutense de México y número uno de su promoción del Cuerpo de Letrados del extinto Instituto Nacional de Industria, ha sabido trasladar al despacho y que siempre ha calificado de “irrenunciable”.
              </p> <p>
                Esa apuesta, que ha pasado a formar parte del ADN del despacho, se traduce en unos procesos internos muy depurados, unos controles de calidad exhaustivos, la búsqueda del mejor talento y la creencia de que en el Derecho siempre hay –y habrá- espacio para la innovación, el ingenio y la creatividad.
              Y si es innegable que la experiencia es un grado, también lo es que los resultados hablan por sí solos. Velazquez es un despacho especializado en las áreas clave del Derecho Empresarial, cuyo buque insignia es el Derecho Laboral, que cuenta ya con más de 50 profesionales, oficinas en México,  Toluca y DF, que ha sido reconocido por los medios como un despacho de referencia y que también goza del reconocimiento de los directorios más prestigiosos a nivel internacional, como Chambers & Partners o Legal 500, por mencionar los más destacados.</p>
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
          items:7
        }
      }
    })
  </script>
</body>
</html>