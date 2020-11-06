<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="u8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zeus Portafolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="portfolio, agency, bootstrap theme, mobile responsive, template, personal">
    <meta name="author" content="webthemez.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="" type="image/x-icon"> 

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset(assets/css/bootstrap.css)}}">
    <link rel="stylesheet" type="text/css" href="{{asset(assets/fonts/font-awesome/css/font-awesome.css)}}">

    <!-- Nivo Lightbox
    ================================================== -->
    <link rel="stylesheet" href="{{asset(assets/css/nivo-lightbox.css)}}" >
    {{ asset('js/app.js') }}
    <link rel="stylesheet" href="{{asset(assets/css/nivo_lightbox_themes/default/default.css)}}">

    <!-- Slider
    ================================================== -->
    <link href="{{asset(assets/css/owl.carousel.css)}}" rel="stylesheet" media="screen">
    <link href="{{asset(assets/css/owl.theme.css)}}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset(assets/css/style.css)}}">
    <link rel="stylesheet" type="text/css" href="{{asset(assets/css/responsive.css)}}">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{asset(assets/js/modernizr.custom.js)}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Main Navigation 
    ================================================== -->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand zlogo" href="#"><h2 class="zlogo">ZEUSRPA</h2> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="scroll">Inicio</a></li>
                <li><a href="#whatIdo" class="scroll">Que hago</a></li>
                <li><a href="#about" class="scroll">Acerca de mi</a></li>
                <li><a href="#works" class="scroll">Portafolio</a></li>
                <li><a href="#experience" class="scroll">Experiencia</a></li> 
                <li><a href="#contact" class="scroll">Contacto</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Section
    ================================================== -->

    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- Footer 
    ================================================== -->
    <section id="footer">
        <div class="container"><!-- container -->
		 <ul class="list-inline social pull-left">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li> <!-- Change # With your FB Link -->
                <li><a href="#"><i class="fa fa-twitter"></i></a></li> <!-- Change # With your Twitter Link -->
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li> <!-- Change # With your Google Plus Link --> 
                <li><a href="#"><i class="fa fa-behance"></i></a></li> <!-- Change # With your Behance Link -->
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> <!-- Change # With your LinkedIn Link --> 
            </ul>
            <p class="pull-right"> © 2019 Site Name. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Bootstrap Templates</a> by WebThemez.com</p> <!-- copyright text here-->
           
        </div><!-- end container -->
    </section>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/owl.carousel.js"></script><!-- Owl Carousel Plugin -->

    <script type="text/javascript" src="js/SmoothScroll.js"></script> 

    <!-- Parallax Effects -->
    <script type="text/javascript" src="js/skrollr.js"></script>
    <script type="text/javascript" src="js/imagesloaded.js"></script>

    <!-- Portfolio Filter -->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <!-- LightBox Nivo -->
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>

    <!-- Contact page-->
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>