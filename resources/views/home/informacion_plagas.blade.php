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

        <!--Banner-->
    <section class="pg-banner pg-banner-bg">
        <div class="container">
            <div class="banner-title">
                <h1>PRICINGS</h1> </div>
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
                        <li>PRICINGS</li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-3">
                    <div class="align-btn pull-right"> <a href="{{ url('contactanos') }}" class="btn btn-md"> <i class="fa fa-phone visible-xs-inline-block"></i> <span class="hidden-xs"><span class="fa fa-phone"></span>CONTACT US</span> </a></div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->
    <!--faqs-->
    <section class="pg-faq section-pad">
        <div class="container">
    
            <div class="row">
                <div class="heading">GENERAL QUESTIONS</div>
                <div class="col-md-6">
                    <!--accordation-->
                  
                    <div class="panel-group" id="accordation1" >
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation1" href="#collapse1">How would I know there are pests or bug infesT?</a> </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                    <p class="pad">majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum enerators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation1" href="#collapse2">What are the charges for pest control services?</a> </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation1" href="#collapse3">How do I find and hire best pest control experts?</a> </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation1" href="#collapse4">Do I need to prepare anything for pest control?</a> </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                    </div>
                </div>
                <div class="col-md-6">
                    <!--accordation-->
                 
                    <div class="panel-group" id="accordation2" >
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation2" href="#collapse9">Do I need to clean my house after pest control?</a> </div>
                            <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation2" href="#collapse11">Do we need to leave the home during treatment?</a> </div>
                            <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation2" href="#collapse5">Do I need to keep my pets away?</a> </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation2" href="#collapse6">Do you guarantee your work?</a> </div>
                            <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation2" href="#collapse7">Are your materials safe?</a> </div>
                            <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                        <hr>
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation2" href="#collapse8">Do I need monthly service for my home?</a> </div>
                            <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/faqs-->
    <!--faqs-->
    <section class="pg-faq2  black-background">
        <div class="container">

            <div class="row">
            
                <div class="col-lg-7 col-md-7 col-sm-8 sub-section">
                    <!--accordation-->
                    <div class="heading">FREQUENT QUESTIONS</div>
                    <div class="panel-group" id="accordation3" >
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation3" href="#collapsee">Emergency Product Information?</a> </div>
                            <div id="collapsee" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                    <p class="pad">majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum enerators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                      
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation3" href="#collapsed">How Often Should I Have My House Checked For Pests?</a> </div>
                            <div id="collapsed" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                    
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation3" href="#collapsec">Are Termites Really A Problem?</a> </div>
                            <div id="collapsec" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                   
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation3" href="#collapseb">What If I See A Pest After A Treatment?</a> </div>
                            <div id="collapseb" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                  
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading"> <a class="collapsed" data-toggle="collapse" data-parent="#accordation3" href="#collapsea">Is There Any Odour When You Spray For Pests?</a> </div>
                            <div id="collapsea" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority alteration that variations of passages of Lorem Ipsum available but the majority alteration that injected humour words all the Lorem Ipsum generators.injected humour words all the Lorem Ipsum generators.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Item -->
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4">
                 <!---->
<div class="faq-img wow zoomIn">
    <img src="images/server-img.png" alt="" class="img-responsive">
</div>
                   
                </div>
            </div>
        </div>
    </section>
    <!--/faqs-->


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