@extends('layouts.main')

@section('content')
<section id="home">
        <div class="overlay"> <!-- Overlay Color -->
            <div class="container"> <!-- container -->
                <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                    <h1>Hola, soy Zeus Rene Pallares Aviña</br>
                    Estudiante de Ingeniería Informática </h1>
                    <p class="lead">Me encanta el desarrollo de software</p>
                    <a href="#works" class="scroll goto-btn">Descargar Curriculum</a> <!-- Link to your portfolio section -->
                </div><!-- End Input Your Home Content Here -->
            </div> <!-- end container -->
        </div><!-- End Overlay Color -->
    </div>

    <!-- Intro Section
    ================================================== -->
    <section id="intro">
        <div class="container"> <!-- container -->
            <div class="row"> <!-- row -->

                <div class="col-md-8 col-md-offset-2"> 
                     <h1>Técnico en Desarrollo de Software</h1>
                    <p class="lead">Descubre quién soy</p>
                </div>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <!-- Service Section
    ================================================== -->
    <section id="whatIdo">
        <div class="container"> <!-- container -->

            <div class="section-header">
                <h2>Que<span class="highlight"><strong>Hago</strong></span></h2>
                <h5><em>Soy estudiante de Informática en el CUCEI de la UDG.</em></h5>
                <div class="fancy"><span></span></div>
            </div>

            <div class="row"> <!-- row -->
                
                <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                    <img src="{{asset(assets/img/design.jpg)}}" class="intro-logo img-responsive" alt="free-template">
                </div> <!-- End Left Content Col 6 -->

                <div class="col-md-6"> <!-- Right Content Col 6 -->
				  
                    <div class="media service"> <!-- Service #4 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Aplicaciones para PC</h4>
                            <p>Desarrollo de aplicaciones para PC en lenguajes como C++ y C#</p>
                        </div>
                    </div><!-- end Service #4 -->

                    <div class="media service"> <!-- Service #5 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-android"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Desarrollo de aplicaciones Web</h4>
                            <p>Desarrollo de aplicaciones Web utilizando Laravel, Vue, Bootstrap, JavaScript, MySQL entre otras tecnologias</p>
                        </div>
                    </div> <!-- end Service #5 -->

                    <div class="media service"> <!-- Service #6 -->
                        <div class="media-left media-middle">
                            <i class="fa fa-apple"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Desarrollo Móvil</h4>
                            <p>Conocimientos básicos de desarrollo con Xamarin y Ionic</p>
                        </div>
                    </div> <!-- end Service #6 -->
                </div><!-- end Right Content Col 6 -->
                
            </div><!-- end row -->

        </div><!-- end container -->
    </section>

    <!-- About Us Section
    ================================================== -->
	
	<section id="about">
 <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Quién Soy<span class="highlight"><strong>Zeus</strong></span></h2>
                <h5><em>Aquí les muestro un poco acerca de mi</em></h5>
                <div class="fancy"><span></span></div>
            </div>
        </div><!-- end container -->	
	<div class="container">
	
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1 scrollimation fade-right in">
				<img class="img-responsive img-circle img-center" src="img/about.jpg" alt="">
			</div>
			<div class="col-sm-6 col-sm-offset-1 scrollimation fade-left in">
				<h1>Hola, Soy Zeus Rene Pallares Aviña...</h1>
				<p>Tengo 20 años de edad, soy técnico en desarrollo de software por parte de la UDG y actualmente me encuentro cursando una Ingeniería en Informática en esta misma casa de estudios. Me apasiona resolver problemas utilizando la programación y siempre busco superarme.</p>
				
			</div>
		</div><!--End row -->
		
	</div><!--End container -->
	
            <div id="counter" class="text-center">
                <div class="container">
                    <div class="row"> <!-- Row -->
                      <div class="col-md-6">
					     <div class="row">
						      <div class="counter"> 

                          <div class="col-xs-6 facts"><!-- counter #1 -->
                            <div class="count-box"> 
                                <i class="fa fa-mobile"></i>
                                <h4 class="count">2</h4>
                                <p class="small">Aplicaciones Móviles</p>
                            </div> 
                          </div><!-- end counter #1 -->

                          <div class="col-xs-6 facts"><!-- counter #2 -->
                            <div class="count-box">
                              <i class="fa fa-user"></i>
                              <h4 class="count">4</h4>
                              <p class="small">Aplicaciones Web</p>
                            </div>
                          </div>
						  </div>
						  </div>
						  <div class="row">	
							<div class="counter"> 						  
                          <div class="col-xs-6 facts"> <!-- counter #3 -->
                            <div class="count-box">
                              <i class="fa fa-arrows"></i>
                              <h4 class="count">20</h4>
                              <p class="small">Aplicaciones PC</p>
                            </div>
                          </div>

                          <div class="col-xs-6 facts"> <!-- counter #4 -->
                            <div class="count-box">
                              <i class="fa fa-download"></i>
                              <h4 class="count">5</h4>
                              <p class="small">Proyectos</p>
                            </div>
                          </div>
 
                          </div>

                        </div>

						 </div> 
					    <div class="col-md-6"><!-- right content col 6 -->
                        <div> <!-- right content wrapper -->
 
                            
                            <div class="skills"> <!-- skills progress bar -->
                                <div class="skillset"> <!-- skill #1 -->
                                    <p>UI/UX Design</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #1 -->

                                <div class="skillset"> <!-- skill #2 -->
                                    <p>HTML5, CSS3, SASS</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                            <span class="sr-only">65% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #2 --><!-- end skill #4 -->

                                <div class="skillset"> <!-- skill #5 -->
                                    <p>Development</p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end skill #4 -->
                            </div> <!-- end skills progress bar -->

                        </div><!-- end right content wrapper -->
                    </div><!-- end right content col 6 -->
                       
                      </div> <!-- End Row -->
                </div>
            </div>

</section>
	 
    <!-- Works Section
    ================================================== -->
    <section id="works">
        <div class="container">
            <div class="section-header">
                <h2>Portafolio</h2>
                <h5><em>En esta sección se encuentran mis proyectos mas relevantes</em></h5>
                <div class="fancy"><span></span></div>
            </div>

            <div class="text-center">
                <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                    <li><a href="#" data-filter="*" class="active">All</a></li>
                    <li><a href="#" data-filter=".brand">Mobile</a></li>
                    <li><a href="#" data-filter=".web">Web</a></li>
                    <li><a href="#" data-filter=".app">Desktop</a></li>
                    <li><a href="#" data-filter=".others">Others</a></li>
                </ul><!-- End Portfolio Filter Categories -->
            </div>

        </div><!-- End Container -->

        <div class="container-fluid"> <!-- fluid container -->
             <div id="itemsWork" class="row text-center"> <!-- Portfolio Wrapper Row -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding app"> <!-- Works #1 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Logo Identity Design" href="img/portfolio/01.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/01.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                            </div> 
                            <img src="img/portfolio/01.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #1 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding app"> <!-- Works #2 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Mobile Application" href="img/portfolio/02.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/02.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/02.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #2 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding others app"><!-- Works #3 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/03.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/03.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #3 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding brand"> <!-- Works #4 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/04.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/04.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div> <!-- end Works #4 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding brand"> <!-- Works #5 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/05.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/05.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/05.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div> <!-- end Works #5 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app">  <!-- Works #6 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/06.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/06.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/06.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #6 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app others"><!-- Works #7 col 3 -->
                    <div class="box">
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/07.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/07.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/07.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div>
                    </div>
                </div><!-- end Works #7 col 3 -->

                <div class="col-xs-12 col-sm-6 col-md-3 nopadding app"> <!-- Works #8 col 3 -->
                    <div class="box"> 
                        <div class="hover-bg">
                            <div class="hover-text off">
                                <a title="Freedom Project #1" href="img/portfolio/08.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/portfolio/08.jpg">
                                    <i class="fa fa-expand"></i>
                                </a>
                                <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                            </div>
                            <img src="img/portfolio/08.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                        </div> 
                    </div>
                </div> <!-- end Works #8 col 3 -->
                
            </div> <!-- End Row -->

        </div> <!-- End Container-Fluid -->
    </section>

    <!-- experience Section
    ================================================== -->
    <section id="experience">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Mi Experiencia</h2>
                <h5><em>Aquí les muestro mi experiencia como desarrollador</em></h5>
                <div class="fancy"><span></span></div>
            </div>
        </div><!-- end container -->

        <div class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container --> 
                <div id="experience" class="row"> <!-- row -->

                    <div class="col-md-10 col-md-offset-1">

                        <div class="media experience"> <!-- experience #1 -->
                            <div class="media-right media-middle">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">CGSU</h4>
								<h5>2020 to Present</h5>
                                <p>Me desempeño como becario en la Coordinacion General de Servicios a Universitarios, me encuentro en el área de desarrollo de software en la cual se diseñan sistemas para cubrir las necesidades que se tienen en los diferentes centros universitarios</p>
                            </div>
                        </div><!-- experience #1 -->
                        
                    </div>

                </div> <!-- end row -->
            </div><!-- end container -->
        </div>  <!-- end fullwidth gray background -->
    </section>

    
    <!-- Contact Section
    ================================================== -->
    <section id="contact">

        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Contactame</h2>
                <h5><em>Si te interesa descubrir mis habilidades aqui estan los medios para contactarme</em></h5>
                <div class="fancy"><span></span></div>
            </div>
        </div><!-- end container -->
 
        <div class="container"><!-- container -->
            <div class="row"> <!-- outer row -->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <div class="row"> <!-- nested row -->

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">  
                            <div class="contact-detail">
                                <i class="fa fa-map-marker"></i>
                                <h4>no available</h4> <!-- address -->
                            </div>
                        </div>
                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-envelope-o"></i>
                                <h4>no available</h4><!-- email add -->
                            </div>
                        </div>

                        <!-- contact detail using col 4 -->
                        <div class="col-md-4">
                            <div class="contact-detail">
                                <i class="fa fa-phone"></i>
                                <h4>+123 4567 8912</h4> <!-- phone no. -->
                            </div>
                        </div>

                    </div> <!-- end nested row -->
                </div> <!-- end col 10 with offset 1 to centered -->
            </div><!-- end outer row -->

            <div class="row text-center"> <!-- contact form outer row with centered text-->
                <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                    <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                        <div class="row"> <!-- nested inner row -->

                            <!-- Input your name -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your name input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your email -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <!-- Input your Phone no. -->
                            <div class="col-md-4">
                                <div class="form-group"> <!-- Your email input -->
                                    <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                        </div><!-- end nested inner row -->

                        <!-- Message Text area -->
                        <div class="form-group"> <!-- Your email input -->
                            <textarea class="form-control" rows="7" placeholder="Tell Us Something..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                            <div id="success"></div>
                        </div>
                        <button type="submit" class="btn btn-primary btn color">Send Message</button> <!-- Send button -->

                    </form><!-- end form wrapper -->
                </div><!-- end col 10 with offset 1 to centered -->
            </div> <!-- end contact form outer row with centered text-->

        </div><!-- end container -->

    </section>
@endsection