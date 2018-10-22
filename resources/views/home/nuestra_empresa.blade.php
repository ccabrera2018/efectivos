<!DOCTYPE html>
<html lang="en"> 

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="MeloThemes">
        <meta name="keywords" content="pestguard, responsive HTML, template, bootstrap">
        <meta name="description" content=" Pestguard is responsive HTML template for Pest services company, build on latest bootstrap framework.">
        <title>Efectivos en Plagas</title>
        <link rel="shortcut icon" href="images/favicon.ico" /> 
        <!-- REVOLUTION STYLE SHEETS -->
        <!--cutom css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">  
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <!--[if lt IE 9]>         <script src="js/html5shiv.js"></script>         <script src="js/respond.min.js"></script>     <![endif]-->
    </head>

 @include('layouts.header')
  @include('layouts.nav')
  <!--Banner-->
    <section class="pg-banner pg-banner-bg">
     <div class="container">
       <div class="banner-title">
           <h1>NUESTRA EMPRESA</h1>
       </div>
      
     </div>
 </section>
 <!--/Banner-->
   <!--Breadcrumb-->
   <section class="pg-breadcrumb">
       <div class="container">
          <div class="row">
              <div class="col-md-6 col-xs-9">
                  <ul class="breadcrumb">
                      <li><a href="{{ url('/') }}"><i class="fa fa-home visible-xs-inline-block"></i> <span class="hidden-xs">HOME</span></a></li>
                      <li>ACERCA DE</li>
                  </ul>
              </div>
              <div class="col-md-6 col-xs-3">
                  <div class="align-btn pull-right">
                      <a href="{{ url('contactanos') }}" class="btn btn-md"> <i class="fa fa-phone visible-xs-inline-block"></i> <span class="hidden-xs"><span class="fa fa-phone"></span>CONTACTANOS</span> </a>
                      
                   
                  </div>
              </div>
          </div>
           
       </div>
   </section>
   <!--/Breadcrumb-->
    <!--ABOUT-->
    <section class="pg-home-about section-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-12">
                    <div class="heading"> ABOUT OUR PEST GUARD </div>
                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                    <div class="pestspray-img wow fadeIn"> <img src="images/about.png" alt="" class="img-responsive"> </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <!--side-->
                    <div class="row box">
                        <div class="col-lg-5 col-md-6 col-sm-5">
                            <div class="aboutdetails-img">
                                <a href="services.html"><img src="images/about1.png" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-7">
                            <div class="about-box">
                                <a href="services.html">
                                    <div class="side-head"> FREE HOME INSPECTION </div>
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority that injected humour words.</p> 
                                <div class="align-btn">
                                    <a href="services.html">Read more <span class="fa fa-angle-double-right"></span></a></div> </div>
                        </div>
                    </div>
                    <div class="row box">
                        <div class="col-lg-5 col-md-6 col-sm-5">
                            <div class="aboutdetails-img">
                                <a href="services.html"><img src="images/about3.png" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-7">
                            <div class="about-box">
                                <a href="services.html">
                                    <div class="side-head"> LICENSED & PROTECTED </div>
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority that injected humour words.</p>  <div class="align-btn">
                                <a href="services.html">Read more <span class="fa fa-angle-double-right"></span></a></div> </div>
                        </div>
                    </div>
                    <div class="row box">
                        <div class="col-lg-5 col-md-6 col-sm-5">
                            <div class="aboutdetails-img">
                                <a href="services.html"><img src="images/about1.png" alt="" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-7">
                            <div class="about-box">
                                <a href="services.html">
                                    <div class="side-head"> FAST PEST REMOVAL </div>
                                </a>
                                <p>There are many variations of passages of Lorem Ipsum available but the majority that injected humour words.</p>   <div class="align-btn">
                                <a href="services.html">Read more <span class="fa fa-angle-double-right"></span></a></div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ABOUT-->
    <!--EXperience-->
    <section class="pg-experience pg-experience-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="pg-years">
                        <div class="side-head">30 YEARS OF EXPERIENCE
                            IN PEST CONTROL</div>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <!--counter-->
                    <div class="pg-counter-number   wow zoomIn">
                        <div class="row">
                            <div class="col-md-4 col-xs-12 col-sm-6">
                                <div class="counter-box">
                                    <h1 class="timer count-title count-number" data-to="450" data-speed="1500"><span class="fa fa-plus"></span></h1>
                                    <p class="count-text ">Happy Clients</p>
                                </div>

                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-6 border-align">
                                <div class="counter-box">
                                    <h1 class="timer count-title count-number" data-to="773" data-speed="1500"><span class="fa fa-plus"></span></h1>
                                    <p class="count-text ">Happy Clients</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 col-sm-6 border-align">
                                <div class="counter-box">
                                    <h1 class="timer count-title count-number" data-to="105" data-speed="1500"><span class="fa fa-plus"></span></h1>
                                    <p class="count-text ">Happy Clients</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/EXperience-->
    <!--TEAM-->
    <section class="pg-team section-pad">
        <div class="container">
            <div class="main">
                <div class="heading"> OUR TEAM </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that is injected humour words all the Lorem Ipsum generators on the Internet.</p>
                    </div>
                </div>
            </div>
            <div class="row pad">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-box">
                   
                            <!---->
                            <div class="team-img service-wrapper"> <img src="images/01t.png" alt="" class="img-responsive">
                                <a href="#">
                                    <div class="overlay">  </div>
                                </a>
                            </div>
                            <!---->

                       
                        <div class="team-data">
                            <a href="#">
                                <div class="side-head">JOHN DOE</div>
                            </a>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-box">
                       
                            <div class="team-img service-wrapper"> <img src="images/02t.png" alt="" class="img-responsive">
                                <a href="#">
                                    <div class="overlay">  </div>
                                </a>
                            </div>
                     
                        <div class="team-data">
                            <a href="#">
                                <div class="side-head">JOHN DOE</div>
                            </a>
                            <p>Co Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-box">
                       
                            <div class="team-img service-wrapper"> <img src="images/03t.png" alt="" class="img-responsive">
                                <a href="#">
                                    <div class="overlay">  </div>
                                </a>
                            </div>
                      
                        <div class="team-data">
                            <a href="#">
                                <div class="side-head">JOHN DOE</div>
                            </a>
                            <p>Pest Man</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-box">
                       
                            <div class="team-img service-wrapper"> <img src="images/04t.png" alt="" class="img-responsive">
                                <a href="#">
                                    <div class="overlay">  </div>
                                </a>
                            </div>
                        
                        <div class="team-data">
                            <a href="#">
                                <div class="side-head">JOHN DOE</div>
                            </a>
                            <p>Pest Man</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/TEAM-->
        <section class="pg-partners sub-section">
        <div class="container">
            <div class="main">
                <div class="heading"> TRUSTED PARTNERS</div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that is injected humour words all the Lorem Ipsum generators on the Internet.</p>
                    </div>
                </div>
            </div>
            <div class="pg-partner-slider row-pad">
                <div class="item"><img src="images/Logo1.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo2.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo3.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo4.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo5.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo2.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo1.png" alt="" class="img-responsive"></div>
                <div class="item"><img src="images/Logo4.png" alt="" class="img-responsive"></div>
            </div>
        </div>
    </section>
 

 @include('layouts.footer')

  <script type="text/javascript" src="{{ asset("js/jquery-2.1.1.min.js") }}"></script>
     <script src="{{ asset("js/jquery-2.1.1.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/bootstrap.offcanvas.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/jquery.mixitup.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("js/wow.min.js") }}"></script>

    <script type="text/javascript" src="{{ asset("js/jquery.countTo.js") }}"></script>

 

    <!--custom js-->
    <script type="text/javascript" src="{{ asset("js/main.js") }}"></script>
</body>
</html>