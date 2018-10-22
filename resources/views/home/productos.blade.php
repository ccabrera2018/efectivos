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
    <!--Nav bar-->
    @include('layouts.nav')
     <!--/Nav bar-->
    <!--Breadcrumb-->
    <section class="pg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-9">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home visible-xs-inline-block"></i> <span class="hidden-xs">HOME</span></a></li>
                        <li>GALLERY 01</li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-3">
                    <div class="align-btn pull-right">  <a href="{{ url('contactanos') }}" class="btn btn-md"> <i class="fa fa-phone visible-xs-inline-block"></i> <span class="hidden-xs"><span class="fa fa-phone"></span>CONTACT US</span> </a> </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->
    <br>
    <section>
        <div class="main">
                <div class="heading" style="color:red;"> PRODUCTOS UTILIZADOS </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2"><br>
                        <p>
                        Para fumigar, utilizamos productos de baja toxicidad aprobados por la Comisión Intersecretarial para el Control del proceso y uso de plaguicidas, fertilizantes y sustancias tóxicas (CICOPLAFEST).  Están a su disposición todas las hojas de seguridad de los productos utilizados.

                        Nuestra empresa busca ofrecerle soluciones concretas a sus problemas de plagas, para lo cual seleccionamos los productos que utilizamos para fumigar teniendo en cuenta que presenten índices de la más baja toxicidad para el ser humano y de menor impacto ambiental.</p>

                        <P style="color:brown;font-weight: bold;">
                            Haga click en los links de abajo para ver las hojas de autorización y seguridad de los plaguicidas que utilizamos:
                       </P>
                    </div>
                </div>
            </div>
    </section>
    <!--IMAGE GALLERY-->
    <section class="pg-gallery gallery pg-gallery-bg"> 
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-2">
                    <ol>
                        <a href="#" style="color:blue;"><ul>-Biflex wp</ul></a>
                        <a href="#" style="color:blue;"><ul>-Biothrine flow</ul></a>
                        <a href="#" style="color:blue;"><ul>-Contrac Blox</ul></a>
                        <a href="#" style="color:blue;"><ul>-Cynoff 40 wp</ul></a>
                        <a href="#" style="color:blue;"><ul>-Cypermix PH</ul></a>
                        <a href="#" style="color:blue;"><ul>-Max Force Gel</ul></a>
                    </ol>
                </div> 
                <div class="col-md-4 col-md-offset-2">
                    <ol>
                         <a href="#" style="color:blue;"><ul>-P.I Piretrinas</ul></a>
                        <a href="#" style="color:blue;"><ul>-Pybuthrin</ul></a>
                        <a href="#" style="color:blue;"><ul>-Racumin líquido</ul></a>
                        <a href="#" style="color:blue;"><ul>-Roach Kill</ul></a>
                        <a href="#" style="color:blue;"><ul>-Rodent Cake</ul></a>
                        <a href="#" style="color:blue;"><ul>-Weatherblok xt</ul></a>
                    </ol>
                </div>              
            </div>
        </div>
    </section>
    <!--/IMAGE GALLERY-->

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