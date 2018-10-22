<!DOCTYPE html>
<html lang="en"> 

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="MeloThemes">
        <meta name="keywords" content="pestguard, responsive HTML, template, bootstrap">
        <meta name="description" content=" Pestguard is responsive HTML template for Pest services company, build on latest bootstrap framework.">
        <title>Efectivos en Control de Plagas</title>
        <link rel="shortcut icon" href="images/favicon.ico" /> 
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
        <!--cutom css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">  
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <!--[if lt IE 9]>         <script src="js/html5shiv.js"></script>         <script src="js/respond.min.js"></script>     <![endif]-->
    </head>


 @include('layouts.header')
    <!--Nav bar-->
    @include('layouts.nav')
     <!--/Nav bar-->
 
        <!--header-->
        <header class="pg-home-slider">
            <!--REVOLUTION SLIDER-->
    

            <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                    <ul>

              @foreach($homes as $homes)
    
        
                        <!-- SLIDE  -->
                        <li data-transition="fade">

                            <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                            <img src="{{$homes->imagen}}" alt="" 
                                 class="rev-slidebg" 
                                 data-bgposition="center center" 
                                 data-bgfit="cover" 
                                 data-bgrepeat="no-repeat"   
                                
                                 data-no-retina>
                            <!--  TEXT LAYER 1-->
                            <div class="tp-caption tp-resizeme" 

                                 data-frames='[{"delay":100,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' 

                                 data-x="center" 
                                 data-y="center" 

                                 data-voffset="-50" 
                                 data-visibility="['on', 'on', 'on', 'on']"
                                 data-fontsize="['45', '45', '45', '45']" 
                                 data-lineheight="['75', '75', '50', '40']" 
                                 data-color="#fff" 
                                 data-textAlign="['center', 'center', 'center', 'center']"
                                 data-height="['auto']"
                                 data-basealign="slide" 
                                 data-responsive_offset="on" 
                                 

                                 >{{ Str::words($homes->descripcion, 5,'')  }}<br>


                                 <?php $test=str_word_count($homes->descripcion, 1)  ?>
                                  {{   $test[5]." ".$test[6]." ".$test[7]." ".$test[8]." ".$test[9]." ".$test[10] }}
                                </div><!-- END BASIC TEXT LAYER -->
                            <!--text layer 2-->
                            <div class="tp-caption tp-resizeme" 

                                 data-frames='[{"delay":0,"split":"chars","splitdelay":0.1,"speed":2000,"frame":"0","from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                                 data-x="center" 
                                 data-y="center" 

                                 data-voffset="-50" 
                                 data-visibility="['on', 'on', 'on', 'on']"
                                 data-fontsize="['22', '22', '20', '18']" 
                                 data-lineheight="['20', '20', '20', '20']" 
                                 data-color="#f7ca18" 
                                 data-textAlign="['center', 'center', 'center', 'center']"
                                 data-paddingbottom="[210, 180, 180, 180]"
                                 data-height="['auto']"
                                 data-basealign="slide" 
                                 data-responsive_offset="on" 

                                 >No.1 En Control de Plagas</div><!-- END BASIC TEXT LAYER -->
                            <!--text layer 3 - BUTTONS-->
                            <a  href="#" target="_self" class="tp-caption tp-resizeme btn-md" 

                               data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                               data-x="center" 
                               data-y="center" 
                               data-hoffset="-100" 
                               data-voffset="80" 
                               data-visibility="['on', 'on', 'on', 'on']"
                               data-fontsize="['13', '13', '15', '15']" 
                               data-lineheight="['20', '20', '20', '20']" 
                               data-color="['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF']" 
                               data-textAlign="['center', 'center', 'center', 'center']"

                               data-height="['auto']"
                               data-basealign="slide" 
                               data-responsive_offset="on" 

                               >CONTACTANOS</a><!-- END BASIC TEXT LAYER -->
                            <!--text layer 4- BUTTONS-->
                            <a  href="#" target="_self" class="tp-caption tp-resizeme btn-white" 

                               data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                               data-x="center" 
                               data-y="center" 
                               data-hoffset="100" 
                               data-voffset="80" 
                               data-visibility="['on', 'on', 'on', 'on']"
                               data-fontsize="['13', '13', '15', '15']" 
                               data-lineheight="['20', '20', '20', '20']" 
                               data-color="['#333', '#333', '#333', '#333']" 
                               data-textAlign="['center', 'center', 'center', 'center']"

                               data-height="['auto']"
                               data-basealign="slide" 
                               data-responsive_offset="on" 

                               >LEER MAS</a><!-- END BASIC TEXT LAYER -->

                        </li>

                      @endforeach  
                    </ul>
                    <div class="tp-bannertimer" style="height: 5px; background-color:  rgba(85, 50, 22, 0.5);"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </header>
        <!--/header-->
    <!--Features-->

     

    <section class="pg-features section-pad">
        <div class="container">
            <div class="main">
               <div class="heading">NUESTROS SERVICIOS</div>
                 <p>GARANTIA  &nbsp; <strong style="color:red;">EFECTIVOS</strong></p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Ofrecemos una inspección en sus instalaciones, <strong style="color:red;">sin costo y sin compromiso </strong>, en la que  determinamos, el tratamiento y el procedimiento adecuado para el control  de su problema y así  presentarle una propuesta técnica económica. Actualmente nos hemos preocupado por establecer nuevos diseños de servicio para cada empresa.
                        </p>
                         <br>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
               @foreach($services as $servicio)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                          <img class="card-img-top" src="{{$servicio->imagen}}" alt="Card image">
                          <div class="card-body">
                            <h4 class="card-title" style="color:red;">{{$servicio->nombre}}</h4>
                            <p class="card-text" style="text-align: justify;">{{  substr($servicio->resumen,0,160) }}</p>
                             <br>
                            <a href="/plagas/public/servicios/{{$servicio->id_servicios}}" class="btn btn-primary">LEER MAS&nbsp; </a>
                          </div>
                       </div>
                    </div>
               @endforeach  
            </div>
        </div>
    </section>
    <!--/Features-->
        <!--/IMAGE GALLERY-->
        <!--APPOINTMENT and PEST control Score-->
         @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
        </div>
       @endif
       @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <section class="pg-home-appointment black-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="appointment-form">
                            <div class="heading"> SOLICITA UNA VISITA SIN COSTO </div>
                            <form method="POST" action="{{ action('ContactoController@store')}}">
                               @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"placeholder="Nombre"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="telefono"placeholder="Telefono"> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Correo"> </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="direccion" placeholder="Direccion"> </div>
                                <div class="align-btn"><input type="submit" class="btn btn-md" value="ENVIAR"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="pest-score">
                            <div class="heading"> CONTROL DE PLAGAS  SERVICIOS EXITOSOS</div>
                            <!---->
                            <div class="html">
                                <p class="bar-title">CONTROL COMMERCIAL  <span class="percent align-right percent1">100%</span> </p>
                                <div class="bar">
                                    <div class="bar-fill bar-fill-html start"></div>
                                </div>
                            </div>
                            <div class="javascript">
                                <p class="bar-title">CONTROL DOMESTICO  <span class="percent align-right percent2">100%</span> </p>
                                <div class="bar">
                                    <div class="bar-fill bar-fill-javascript start"></div>
                                </div>
                            </div>
                            <div class="jquery">
                                <p class="bar-title"> CONTROL EN CONSTRUCION <span class="percent align-right percent3">100%</span> </p>
                                <div class="bar">
                                    <div class="bar-fill bar-fill-jquery start"></div>
                                </div>
                            </div>
                            <div class="responsive-design">
                                <p class="bar-title">CONTROL EN  INSECTOS Y ROEDORES  <span class="percent align-right percent4">100%</span> </p>
                                <div class="bar">
                                    <div class="bar-fill bar-fill-responsive start"></div>
                                </div>
                            </div>
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
        </section>
        <!--/APPOINTMENT and PEST control Score-->
        <!--Testimonials-->
        <section class="pg-testimonials section-pad other-bg">
            <div class="container">
                <div class="heading">PERSONAL ALTAMENTE CAPACITADO</div>
                <p>Personal certificado ante la Norma Conocer</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Es una compañía creada con el único propósito de proporcionar servicios de control de plagas bajo los estándares que actualmente requiere la industria en general. Contamos con la experiencia en Planta de Alimentos, Farmacéutica, etc.,  contamos con personal con más de 15 años de experiencia en la industria de  Control de Plagas.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials-->

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

    <script type="text/javascript" src="{{ asset("revolution/js/jquery.themepunch.tools.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
 
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.carousel.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.parallax.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("revolution/js/extensions/revolution.extension.video.min.js") }}"></script>
    <!--custom js-->
    <script type="text/javascript" src="{{ asset("js/main.js") }}"></script>
    <script type="text/javascript">
        var tpj = jQuery;
        var revapi1078;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_1078_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1078_1");
            }
            else {
                revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                    sliderType: "standard"
                    , jsFileLocation: "revolution/js/"
                    , sliderLayout: "auto"
                    , dottedOverlay: "none"
                    , delay: 9000
                    , navigation: {
                        keyboardNavigation: "off"
                        , keyboard_direction: "horizontal"
                        , mouseScrollNavigation: "off"
                        , mouseScrollReverse: "default"
                        , onHoverStop: "off"
                        , touch: {
                            touchenabled: "on"
                            , swipe_threshold: 75
                            , swipe_min_touches: 1
                            , swipe_direction: "horizontal"
                            , drag_block_vertical: false
                        }
                        , arrows: {
                            style: "zeus"
                            , enable: true
                            , hide_onmobile: true
                            , hide_under: 600
                            , hide_onleave: false
                            , hide_delay: 200
                            , hide_delay_mobile: 1200
                            , /*tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                                   left: {
                                                       h_align:"left",
                                                       v_align:"center",
                                                       h_offset:30,
                                                       v_offset:0
                                                   },
                                                   right: {
                                                       h_align:"right",
                                                       v_align:"center",
                                                       h_offset:30,
                                                       v_offset:0
                                                   }*/
                        }
                        , bullets: {
                            enable: false
                            , hide_onmobile: true
                            , hide_under: 600
                            , style: "metis"
                            , hide_onleave: true
                            , hide_delay: 200
                            , hide_delay_mobile: 1200
                            , direction: "horizontal"
                            , h_align: "center"
                            , v_align: "bottom"
                            , h_offset: 0
                            , v_offset: 30
                            , space: 5
                            , tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                        }
                    }
                    , viewPort: {
                        enable: true
                        , outof: "pause"
                        , visible_area: "80%"
                        , presize: false
                    }
                    , responsiveLevels: [1240, 1024, 778, 480]
                    , visibilityLevels: [1240, 1024, 778, 480]
                    , gridwidth: [1240, 1024, 778, 480]
                    , gridheight: [600, 600, 500, 400]
                    , lazyType: "none"
                    , parallax: {
                        type: 'mouse+scroll'
                        , origo: "slidercenter"
                        , speed: 2000
                        , levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55]
                        , type: "mouse"
                        , }
                    , shadow: 0
                    , spinner: "off"
                    , stopLoop: "off"
                    , stopAfterLoops: -1
                    , stopAtSlide: -1
                    , shuffle: "off"
                    , autoHeight: "off"
                    , hideThumbsOnMobile: "off"
                    , hideSliderAtLimit: 0
                    , hideCaptionAtLimit: 0
                    , hideAllCaptionAtLilmit: 0
                    , debugMode: false
                    , fallbacks: {
                        simplifyAll: "off"
                        , nextSlideOnWindowFocus: "off"
                        , disableFocusListener: false
                        , }
                });
            }
        }); 
    </script>

    <script type="text/javascript">

$("#rese").on('click',function(){


window.open("https://wa.me/5215536105181/?text=hola_necesito_informacion");
   /*Your code*/
});


</script>
</body>
</html>