<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <title>STAP - Home</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
  <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

  <!-- Styles -->



  <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('landing/css/animate.css')}}">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
  



  <link rel="stylesheet" href="{{ asset('/landing/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/landing/css/main.css')}}">



  <script src="{{ asset('/landing/js/modernizr-2.7.1.js')}}"></script>
  
</head>

<body>

    
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="index.html"><img src="          {{ asset('landing/img/logo.png')}}" height="32px" alt="Logo"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#pricing" class="scroll">Precios</a></li>
            <li><a href="#">Iniciar Sesi&oacuten</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
        
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">

            <a href="index.html"><img src="{{ asset('landing/img/logo.png')}}" height="32px" alt="Logo"></a>
          </div>
          <div class="col-xs-6 signin text-right navbar-nav">
            <a href="#pricing" class="scroll">Precios</a>&nbsp; &nbsp; &nbsp;<a href="#">Iniciar Sesi&oacuten</a>
          </div>
        </div>
        
        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1 class="wow fadeIn">Conocer&aacuten tu nombre</h1>
            <br />
            <p class="lead wow fadeIn" data-wow-delay="0.5s">Tu nombre en los mejores eventos y en los lugares donde realmente se necesite. </p>
            <br />
              
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="row">
                  <center>
                    <a href="#be-the-first" class="btn btn-secondary btn-lg scroll">Ver detalles</a>
                  </center>
                </div><!--End Button Row-->  
              </div>
            </div>            
          </div>
        </div>
      </div>
    </header>
    
    <div class="mouse-icon hidden-xs">
                <div class="scroll"></div>
            </div>
    
    <section id="be-the-first" class="pad-xl">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center margin-30 wow fadeIn" data-wow-delay="0.6s">
            <h2>STAP! Take a look</h2>
            <p class="lead">Experimenta el marketing de la nueva era. <br> Env&iacuteanos tus carteles y promociones, nosotros nos encargamos del resto.</p>
                      

            <img src="{{ asset('landing/img/cel_hack.png')}}" height="700px">
          </div>
        </div>
        
      </div>
    </section>
    
    <section id="main-info" class="pad-xl">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 wow fadeIn text-center" data-wow-delay="0.4s">
          <i class="fa fa-clock-o margin-40"></i>
                    <hr class="line blue">
                    <h3>An&aacutelisis de tendencias en tiempo real</h3>
                    <p>La publicidad que desplegamos en las pantallas corresponde a la tendencia de los datos obtenidos a través de la red de la ciudad.</p>
                </div>
                <div class="col-sm-4 wow fadeIn text-center" data-wow-delay="0.8s">
          <i class="fa fa-money margin-40"></i>
                    <hr  class="line blue">
                    <h3>Incrementa tus ventas</h3>
                    <p>Nuestro sistema coloca los anuncios en el mejor lugar a todas horas para que tu producto siempre sea visible para tus clientes potenciales.</p>
                </div>
                <div class="col-sm-4 wow fadeIn text-center" data-wow-delay="1.2s">
          <i class="fa fa-users margin-40"></i>
                    <hr  class="line blue">
                    <h3>Promociona tus eventos</h3>
                    <p>Nuestro servicio te permite difundir los eventos que organices a una escala metropolitana. Ten por seguro que el alcance será masivo.</p>
                </div>
            </div>
        </div>
    </section>
        
        
    <!--Pricing-->
    <section id="pricing" class="pad-lg">
      <div class="container">
        <div class="row margin-40">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2 class="white">Precios</h2>
            <p class="white">Ya sea que lo que buscas es publicidad para tus eventos o promociones para tus tiendas, te tenemos cubierto.</p>
          </div>
        </div>
        
        <div class="row margin-50">
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
                        <li class="headline"><h5 class="white">Personal</h5></li>
                        <li class="price"><div class="amount">$5<small>/m</small></div></li>
                        <li class="info">2 row section for you package information. You can include all details or icons</li>
                        <li class="features first">Up To 25 Projects</li>
                        <li class="features">10GB Storage</li>
                        <li class="features">Other info</li>
                        <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
                    </ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="0.4s">
            <ul class="list-unstyled pricing-table active text-center">
                        <li class="headline"><h5 class="white">Professional</h5></li>
                        <li class="price"><div class="amount">$12<small>/m</small></div></li>
                        <li class="info">2 row section for you package information. You can include all details or icons</li>
                        <li class="features first">Up To 25 Projects</li>
                        <li class="features">10GB Storage</li>
                        <li class="features">Other info</li>
                        <li class="features">Other info</li>
                        <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
                    </ul>
          </div>
          
          <div class="col-sm-4 pricing-container wow fadeInUp" data-wow-delay="1.3s">
            <br />
            <ul class="list-unstyled pricing-table text-center">
                        <li class="headline"><h5 class="white">Business</h5></li>
                        <li class="price"><div class="amount">$24<small>/m</small></div></li>
                        <li class="info">2 row section for you package information. You can include all details or icons</li>
                        <li class="features first">Up To 25 Projects</li>
                        <li class="features">10GB Storage</li>
                        <li class="features">Other info</li>
                        <li class="features last btn btn-secondary btn-wide"><a href="#">Get Started</a></li>
                    </ul>
          </div>
          
        </div>
        
      </div>
    </section>

    <footer>
      <div class="container">
        
        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Connect with us on</li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          
          <div class="col-sm-4 text-right">
            <p><small>Copyright &copy; 2014. All rights reserved. <br>
                Created by <a href="http://visualsoldiers.com">Visual Soldiers</a></small></p>
          </div>
        </div>
        
      </div>
    </footer>
    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="{{ asset('landing/js/wow.min.js')}}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('landing/js/main.js')}}"></script>

    
    
   
    </body>
</html>