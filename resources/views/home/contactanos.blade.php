<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="MeloThemes">
    <meta name="keywords" content="pestguard, responsive HTML, template, bootstrap">
    <meta name="description" content=" Pestguard is responsive HTML template for Pest services company, build on latest bootstrap framework.">
    <title>Pest Guard Template</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <!--cutom css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 9]>         <script src="js/html5shiv.js"></script>         <script src="js/respond.min.js"></script>     <![endif]-->

 </head>



 @include('layouts.header')
    <!--Nav bar-->
  @include('layouts.nav')
     <!--/Nav bar-->
<!--VALIDACION DEL FORMULARIO -->

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

<!--TERMINO DE LA VALIDACION DEL FORMULARIO -->
 <!--Banner-->
    <section class="pg-banner pg-banner-bg">
        <div class="container">
            <div class="banner-title">
                <h1>CONTACT US</h1> </div>
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
                        <li>CONTACT US</li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-3">
                    <div class="align-btn pull-right"> <a href="{{ url('contactanos') }}" class="btn btn-md"> <i class="fa fa-phone visible-xs-inline-block"></i> <span class="hidden-xs"><span class="fa fa-phone"></span>CONTACT US</span> </a></div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->
    <!--Contacts-->
    <section class="pg-contacts section-pad">
        <div class="container">
            <div class="main">
                <div class="heading"> CONTACT US </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that is injected humour words all the Lorem Ipsum generators on the Internet.</p>
                    </div>
                </div>
            </div>


            <!--contact info-->
            <form method="POST"  action="{{ action('ContactoController@store') }}" >
                @csrf
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nombre" name="name"> </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Telefono" name="telefono"> </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email"> </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" name="direccion" rows="5"></textarea>
                    </div>
                </div>
                <div class="btn-middle">
                    <input type="submit" class="btn btn-md" value="enviar">
                   <!--<a href="{{ url('contactanos') }}" class="btn btn-md">ENVIAR MENSAGE</a> -->
               </div>
            </div>
            </form>
            <!--contact details-->
            <div class="contact-details">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contacts-box">
                            <div class="center"> <span class="fa fa-map-o"></span> </div>
                            <p>Pestguard, New Texas,</p>
                            <p> United States. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="contacts-box">
                            <div class="center"> <span class="fa fa-phone"></span> </div>
                            <p>+1 234 567 7890</p>
                            <p> +1 234 567 7892</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="contacts-box">
                            <div class="center"> <span class="fa fa-envelope-o"></span> </div>
                            <p>pestguard@mail.com</p>
                            <p> melothemes@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Contacts-->
    <!--google map-->
    
    <div id="map"></div>
    <!--/google map-->
    <!--CALL-->


 @include('layouts.footer')



    <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.offcanvas.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
    <!--custom js-->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  
 
<!--    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=69673ec2528ee21f3bcde7982896ee7dede46667'></script>-->
    <script>
        function initMap() {
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 40.674, lng: -73.945},
                zoom: 12,
                styles: [
                    {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                    {elementType: 'labels.text.fill', stylers: [{color: '#fed45c'}]},
                    {
                        featureType: 'administrative.locality',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#fed45c'}]
                    },
                    {
                        featureType: 'poi',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#fed45c'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'geometry',
                        stylers: [{color: '#263c3f'}]
                    },
                    {
                        featureType: 'poi.park',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#fe5454'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [{color: '#38414e'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#212a37'}]
                    },
                    {
                        featureType: 'road',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#000000'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry',
                        stylers: [{color: '#746855'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'geometry.stroke',
                        stylers: [{color: '#1f2835'}]
                    },
                    {
                        featureType: 'road.highway',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#f3d19c'}]
                    },
                    {
                        featureType: 'transit',
                        elementType: 'geometry',
                        stylers: [{color: '#2f3948'}]
                    },
                    {
                        featureType: 'transit.station',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#fed45c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'geometry',
                        stylers: [{color: '#17263c'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.fill',
                        stylers: [{color: '#515c6d'}]
                    },
                    {
                        featureType: 'water',
                        elementType: 'labels.text.stroke',
                        stylers: [{color: '#17263c'}]
                    }
                ]
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoBpm-VS2LK1hsgTXrnwu2gGc6dC8P7cA&callback=initMap"
            async defer></script>
</body>

</html>