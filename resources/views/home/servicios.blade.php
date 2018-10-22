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
    <!--Breadcrumb-->
    <section class="pg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-9">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home visible-xs-inline-block"></i> <span class="hidden-xs">HOME</span></a></li>
                        <li>SERVICIOS</li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-3">
                    <div class="align-btn pull-right"> <a href="{{ url('contactanos') }}" class="btn btn-md"> <i class="fa fa-phone visible-xs-inline-block"></i> <span class="hidden-xs"><span class="fa fa-phone"></span>CONTACTANOS</span> </a></div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->
    <!--SERVICES-->
    <section class="pg-services section-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="service-img wow fadeIn"> <img src="images/pestservice.png" alt="" class="img-responsive"> </div>
                </div>
                <div class="col-md-7 col-sm-12 service-details">
                    <div class="heading"> Nuestros Servicios</div>
                    <p>La proliferación de diversas especies de insectos, roedores, hongos, bacterias o malas hierbas puede conllevar diversos problemas en las ciudades. Algunos de estos seres actúan como vectores que transmiten enfermedades, causan alergias, picaduras, etc.
Su impacto medioambiental también puede ser grave. Además de posibles daños materiales tanto en espacios naturales como en viviendas e instalaciones industriales, su acoso puede provocar la desaparición de la fauna y la flora autóctonas.
Si estos seres encuentran las condiciones medioambientales y de alimento adecuadas, la expansión de la plaga está garantizada: los vertederos incontrolados, las basuras acumuladas o el alcantarillado en mal estado son el paraíso de las plagas urbanas.</p>
                    <div class="row row-pad">
                        <div class="col-md-6 col-sm-6">
                            <div class="service-box">
                                <a href="services-single.html">
                                    <div class="serv-img"> <img src="images/Icons22.png" alt="ratas"> </div>
                                </a>
                                <a href="services-single.html">
                                    <div class="side-head textpest">Roedores</div>
                                </a>
                                <p>Las ratas son principalmente de hábitos nocturnos y muy precavidas. Aunque constantemente exploran sus alrededores, se muestran desconfiadas acerca de los cambios y los objetos nuevos en su ambiente.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-box">
                                <a href="services-single.html">
                                    <div class="serv-img"> <img src="images/Icons1.png" alt="cucarachas"> </div>
                                </a>
                                <a href="services-single.html">
                                    <div class="side-head textpest">Cucarachas</div>
                                </a>
                                <p>La cucaracha alemana se encuentra en toda la estructura, pero muestra preferencia por lugares cálidos (21º
C) y húmedos. Por lo general se le encuentra en las cocinas y en segundo lugar en los baños, pero las
infestaciones.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-box">
                                <a href="services-single.html">
                                    <div class="serv-img"> <img src="images/Iconf4.png" alt="chinches"> </div>
                                </a>
                                <a href="services-single.html">
                                    <div class="side-head textpest">Chinches</div>
                                </a>
                                <p>La chinche de la cama se esconde en grietas y hendiduras durante el día y sale durante la noche a
alimentarse. Típicamente se la puede encontrar alrededor de los botones y costuras de los colchones.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-box">
                                <a href="services-single.html">
                                    <div class="serv-img"> <img src="images/Icons2.png" alt="hormiga"> </div>
                                </a>
                                <a href="services-single.html">
                                    <div class="side-head textpest">Hormigas</div>
                                </a>
                                <p> En interiores, esta hormiga normalmente anida cerca de alguna fuente de humedad como las tuberías de
agua, fregaderos, macetas, etc. Las obreras tienden a seguir rutas regulares.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/SERVICES-->
    <!--MANAGE TEST-->
    <section class="pg-managetest pg-managetest-bg sub-section other-bg">
        <div class="container">
            <div class="heading" style="color:white;">ESPECIALISTAS EN PLAGAS</div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2" >
                    <p style="color:white;">Ofrecemos una inspección en sus instalaciones, sin costo y sin compromiso, en la que  determinamos, tanto el tratamiento como el procedimiento adecuado para el control  de su problema y así  presentarle una propuesta técnica económica.</p>
                </div>
            </div>
            <ul class="manage-list row-pad">
                <li class="wow fadeInUp">
                    <a href="">
                        <div > <img src="images/homepest.png" alt=""> </div>
                    </a>
                    <div class="side-head" style="color:white;">RATAS</div>
                </li>
                <li class="wow fadeInUp">
                    <a href="">
                        <div > <img src="images/termite.png" alt=""> </div>
                    </a>
                    <div class="side-head" style="color:white;">TERMITAS</div>
                </li>
                <li class="wow fadeInUp">
                    <a href="">
                        <div > <img src="images/cockroach.png" alt=""> </div>
                    </a>
                    <div class="side-head" style="color:white;">CUCARACHAS</div>
                </li>
                <li class="wow fadeInUp">
                    <a href="">
                        <div > <img src="images/spider.png" alt=""> </div>
                    </a>
                    <div class="side-head" style="color:white;">ARAÑAS</div>
                </li>
                <li class="wow fadeInUp">
                    <a href="">
                        <div > <img src="images/ant.png" alt=""> </div>
                    </a>
                    <div class="side-head" style="color:white;">HORMIGAS</div>
                </li>
            </ul>
        </div>
    </section>
    <!--/MANAGE TEST-->
    
    <!--Features-->
    <section class="pg-features section-pad">
        <div class="container">
            <div class="main">
                <div class="heading">SERVICIOS DE FUMIGACION</div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Ofrecemos el mejor servicio y asesoría a nuestros clientes brindadores la mejor solución con el propósito de darle lo mejor a nuestros clientes.</p>
                    </div>
                </div>
            </div>
            <div class="row pad">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-box">
                        <a href=""><div class="feature-img"> <img src="images/Iconf1.png" alt=""> </div></a>
                        <a href=""><div class="side-head">AMIGABLE CON EL MEDIO AMBIENTE</div></a>
                        <p>There are many variations of passi ages of Lorem Ipsum available but injected humour words.</p>
                        <div class="align-btn"><a href="">READ MORE <span class="fa fa-angle-double-right"></span></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-box">
                        <a href=""><div class="feature-img"> <img src="images/Iconf2.png" alt=""> </div></a>
                        <a href=""><div class="side-head">INSPECCION GRATUITA Y SIN COSTO</div></a>
                        <p>There are many variations of passi ages of Lorem Ipsum available but injected humour words.</p>
                        <div class="align-btn"><a href="">READ MORE <span class="fa fa-angle-double-right"></span></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-box">
                        <a href=""><div class="feature-img"> <img src="images/Iconf3.png" alt=""> </div></a>
                        <a href=""><div class="side-head">CONTAMOS CON ESTANDARES DE LA INDUSTRIA</div></a>
                        <p>There are many variations of passi ages of Lorem Ipsum available but injected humour words.</p>
                        <div class="align-btn"><a href="">READ MORE <span class="fa fa-angle-double-right"></span></a></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="feature-box">
                        <a href=""><div class="feature-img"> <img src="images/Iconf4.png" alt=""> </div></a>
                        <a href=""><div class="side-head">ELIMINACION RAPIDA DE PLAGAS.</div></a>
                        <p>There are many variations of passi ages of Lorem Ipsum available but injected humour words.</p>
                        <div class="align-btn"><a href="">READ MORE <span class="fa fa-angle-double-right"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Features-->











    <!--/BLOG Classic-->
   @include('layouts.footer')

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