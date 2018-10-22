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
        <!--cutom css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">  
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <!--[if lt IE 9]>         <script src="js/html5shiv.js"></script>         <script src="js/respond.min.js"></script>     <![endif]-->
    </head>

   @include('layouts.header')
    <!--Nav bar-->
    @include('layouts.nav')

    <!--Breadcrumb-->
    <section class="pg-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-9">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}"><i class="fa fa-home visible-xs-inline-block"></i> <span class="hidden-xs">HOME</span></a></li>
                        <li>{{ strtoupper($servicios->nombre) }} </li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-3">
                    <div class="align-btn pull-right"> <a href="contact.html" class="btn btn-md"> <i class="fa fa-phone visible-xs-inline-block"></i> <span class="hidden-xs"><span class="fa fa-phone"></span>CONTACT US</span> </a></div>
                </div>
            </div>
        </div>
    </section>

        <!--BLOG Classic-->
    <section class="pg-services-single section-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                @if($servicios->id_servicios==1)
                   <div class="single-service">
                   	        <center style="font-size: 30px; color: red;">{{ strtoupper($servicios->nombre) }} </center>
                       <p style="font-weight: bold;text-align: center;">¿Compartes tu casa con muchos inquilinos que no pagan renta?</p><br>
                       <p>¡Ten cuidado! tal vez ya tienes plagas no deseadas en tu hogar que ya estén causando problemas de salud a tu familia
                          Todas las plagas son contaminantes potenciales y, en muchas ocasiones, pueden transmitir enfermedades a los habitantes de una casa. Un desagüe atascado, una grieta mal sellada, la acumulación de basura y alimentos en mal estado o una deficiente higiene constituyen, a menudo, la puerta de acceso para que insectos y roedores penetren en los hogares. Si se tiene en cuenta que estos animales transportan en su aparato digestivo, piel y patas, especies patógenas, que pueden depositar sobre alimentos y objetos de uso cotidiano, el riesgo para la salud de las personas es más que evidente. El manejo de insecticidas debe ser tratado por un profesional, que sepa cuál es el producto idóneo y la cantidad adecuada de dicho producto.
					  </p><br>
					   <p style="font-weight: bold;">Nuestros servicios residenciales comprenden:</p><br>
					   <ol>
						  <li>Diagnóstico de la zona afectada por la plaga para identificar y clasificar la especie que se va a combatir.</li>
						  <li>Identificación los factores para su desarrollo e inspección de los puntos críticos de control.</li>
						  <li>Implementación junto con nuestros clientes de medidas de corrección necesarias:</li>
							  <ol style="list-style-type: circle;">
							  	<li><strong>Medidas físicas:</strong> para evitar la entrada de insectos y roedores y un nivel óptimo de limpieza para evitar la proliferación de la plaga.</li>
							  	<li><strong>Medidas biológicas:</strong> utilización de productos biológicos que aseguren un control de la plaga.</li>
							  	<li><strong>Medidas químicas:</strong>uso de diferentes compuestos que se elegirán según las características de la superficie de que se trata, la plaga que se pretende combatir, las condiciones de temperatura y humedad, etc.</li>
							  </ol>
						  <li>Visita posterior al tratamiento para verificar la erradicación de la plaga.</li>
					  </ol>
					  <p style="font-weight: bold;">Recomendaciones para un tratamiento exitoso:</p>
					  <ol>
					  	<li>Realiza una limpieza profunda para saber en donde se encuentran los nidos, y otra después de la fumigación</li>
					  	<li>Apaga todos los electrodomésticos, y aires acondicionados o calefacción, por los gases que se pudieran emitir.</li>
					  	<li>Identifica y repara cañerías rotas y grietas en tu casa ya que podrían ser el acceso y hogar de muchas plagas.</li>
					  	<li>Las mascotas son muy sensibles a los productos, así que será mejor apartarlos aunque sea por el tiempo que dure la fumigación, deberás tapar peceras si es que hay en la casa</li>
					  	<li>Aleja a los niños de las áreas donde se esté fumigando.</li>
					  	<li>Guarda productos comestibles en alacenas y ciérralas bien</li>
					  	<li>Revisa que el refrigerador el horno de la estufa y el horno de microondas se encuentren bien cerrados</li>
					  </ol>  
					 <p style="font-weight: bold;font-size:20px; color:brown;">Recuerda: Si se actúa a tiempo para controlar las plagas que invaden tu hogar podrías ahorrarte costos sanitarios, económicos y medioambientales.</p>

                  </div>
                  
                @elseif($servicios->id_servicios==2)
					<div class="single-service">
                   	        <center style="font-size: 30px; color: red;">{{ strtoupper($servicios->nombre) }} </center>
                       <p>Contratar una empresa de control de plagas debe ser algo más que simplemente matar bichos. Debe significar el tener acceso a recursos y herramientas que le faciliten centrarse más en su negocio y no en su problema de plagas.</p>
                       <p>En EFECTIVOS le ofrecemos una inspección en sus instalaciones, sin costo y sin compromiso, en la que  determinamos, tanto el tratamiento como el procedimiento adecuado para el control  de su problema y así  presentarle una propuesta técnica económica.</p>
                         <p>En EFECTIVOS le ofrecemos una inspección en sus instalaciones, sin costo y sin compromiso, en la que  determinamos, tanto el tratamiento como el procedimiento adecuado para el control  de su problema y así  presentarle una propuesta técnica económica.</p>
					   <p style="font-weight: bold;">Que problemas le podrían ocasionar las plagas en su empresa o industria?</p><br>
					   <ol>
						  <li>La repulsión que un solo insecto llega a provocar a los clientes puede ocasionarle no sólo la pérdida de una venta sino la de muchas más por el boca a boca</li>
						  <li>Su imagen es clave para fidelizar a los clientes y la presencia de alguna plaga puede arruinarla.</li>
						  <li>A los requisitos de la normativa sanitaria se suman las exigencias de los clientes y del mercado ya que una plaga implica un deterioro en su imagen y una pérdida económica inmediata</li>
						  <li>La opinión de sus clientes es su más potente herramienta publicitaria tanto para lo bueno, como para echar por tierra su reputación debido a la presencia de un solo insecto</li>
						  <li>Alergias, picaduras, estrés, pérdidas de tiempo de trabajo y deterioro de la imagen interna son las consecuencias más habituales de la presencia de insectos y de otras plagas en una oficina</li>
					  </ol>
					  <p style="font-weight: bold;">Ventajas que podría obtener al integrar un plan de control de plagas:</p>
					  <ol>
					  	<li>Su negocio cumplirá todos los requisitos legales sanitarios.</li>
					  	<li>Sus instalaciones serán el lugar de trabajo más sano y seguro para sus empleados y para sus productos.</li>
					  	<li>La imagen ante sus clientes internos y externos será la mejor.</li>
					  </ol>  
					 <p style="font-weight: bold;font-size:20px; color:brown;">Contáctenos: Tenemos un Plan de Control de Plagas adecuado para su empresa.</p>

                  </div>
                  @elseif($servicios->id_servicios==3)
                     <div class="single-service">
                   	        <center style="font-size: 30px; color: red;">{{ strtoupper($servicios->nombre) }} </center>
                       <p style="font-weight:bold;">REUBICACION PACIFICA DE AVES</p>
                       <p>Las aves en situaciones urbanas pueden causar numerosos problemas especialmente en edificios, lo que podría llevar a un costo elevado tanto en salud de las personas que lo habitan como en mantenimiento, pues un crecimiento elevado de estas colonias puede ocasionar daños importantes en sus estructuras como ductos atascados, ventanas y patios con excremento. El control de aves es un tema complejo y especializado donde se requerirá hacer una planificación de los trabajos a realizar y una buena inspección previa de la zona a tratar.</p>
					   <p style="font-weight: bold; text-align: center;color:brown;">si presenta este problema contáctenos para hacer una revisión de la zona y presentarle un plan adecuado a sus necesidades.</p><br>
					   <p style="font-weight:bold;">TRATAMIENTO CONTRA TERMITA SUBTERRANEA</p>
					   <p><strong>Termitas subterráneas:</strong>Como su propio nombre indica residen -por lo general- en el suelo, lugar en el cual está situados sus nidos,  por lo que es a través del terreno y de los muros de una propiedad que ascienden para alimentarse de madera, material del cual extraen la celulosa que necesitan para vivir.
                       Para eliminar termitas subterráneas el mejor tratamiento es el sistema de cebos, el cual permite y alcanza la completa eliminación de la colonia diana.
                       </p>
                       <p style="font-weight:bold;">TRATAMIENTO CONTRA TERMITA DE MADERA</p>
					   <p><strong>Termitas de madera seca:</strong>En este caso hay dos especies identificadas, Cryptotermes brevis (Walker) y Kalotermes flavicollis (Fabricius). La primera, Cryptotermes es sin lugar a dudas la que más daños produce en el interior de los inmuebles, siendo el caso de que los nidos se encuentran dentro de la madera de la cual se alimentan, no precisando de humedad, razón por la cual dentro de una misma vivienda pueden residir varias colonias dentro de distintos elementos de madera (marcos de puertas, vigas, etc…) Respecto a Kalotermes sp en realidad es muy extraña su incidencia dentro de una vivienda, pero no por ello no hay que descarta su posible presencia dentro de algún elemento de madera en contacto con una fuente de humedad, como puede ser el caso de una ventana, viga o marco de puerta en contacto con el exterior. Para eliminar las termitas de madera seca, no se utilizan cebos, se ha de realizar un tratamiento químico en el interior de aquellas maderas afectadas.
                       </p>
                        <p style="font-weight: bold; text-align: center;color:brown;">Si usted considera que padece la presencia de termitas, contáctenos a fin de podamos realizarle una visita sin compromiso y sin costo durante la cual le un especialista en termitas le podrá ofrecer amplio asesoramiento al respecto.</p><br>
                        <p style="font-weight:bold;">FUMIGACION CON GAS (FOSFINA)</p>
					   <p>El fosfuro de aluminio es uno de los fumigantes más utilizados para combate de plagas en los granos almacenados. Se usa también para combate de insectos, ácaros y roedores en almacenes, estructuras y edificios.
                        Tiene una utilización cada vez mayor en granos y mercancías varias en tratamientos de tipo cuarentenario. El fosfuro de aluminio se usa para la fumigación de productos naturales y procesados incluyendo cereales, soya, cacao, nueces, semillas, alimentos para animales, té, café, tabaco en hoja y procesado, harina, especias, frutas secas, etc.
                       </p>
                       <p style="font-weight:bold;">SANITIZACION:</p>
					   <p>La presencia de Hongos, Bacterias, Virus, Algas u otros Agentes Patógenos en las superficies de cualquier a zona donde proliferen, es altamente peligroso para la salud de las personas, es por ello fundamental  la acción preventiva para evitar su desarrollo, principalmente en áreas de concurrencia masiva o concentraciones de personas, como Empresas, Colegios, Cines, Hoteles, Restoranes, Oficinas, etc. y en lugares vulnerables como baños, manipulación de alimentos, saunas, clínicas y consultorios médicos-odontológicos.
                       </p> 
                  </div>
				@elseif($servicios->id_servicios==4)
				 <div class="single-service">
                   	        <center style="font-size: 30px; color: red;">{{ strtoupper($servicios->nombre) }} </center>
                       <p style="font-weight:bold;">En Efectivos le ofrecemos servicios de asesoría y capacitación que le ayudaran a prepararse exitosamente para los procesos de certificación en:</p>
                       <p><strong style="font-weight:bold;color:red;">DISTINTIVO “H”:</strong> Es un reconocimiento que otorgan la Secretaría de Turismo y la Secretaría de Salud, a aquellos establecimientos fijos de alimentos y bebidas: (restaurantes en general, restaurantes de hoteles, cafeterías, fondas etc.), por cumplir con los estándares de higiene que marca la Norma Mexicana NMX-F605 NORMEX 2004.</p>
                       <p><strong style="font-weight:bold;color:red;">AIB International:</strong> Son una serie de normas para evaluar los riesgos en la seguridad de alimentos dentro de las plantas de producción que comprenden: Suficiencia del programa de Seguridad de los Alimentos, Control de Plagas, Métodos Operativos y Prácticas de Personal, Mantenimiento para la seguridad de los alimentos y prácticas de limpieza.</p>
                       <p><strong style="font-weight:bold;color:red;">HACCP (Análisis de Peligros y Puntos Críticos de Control):</strong> Es el método operativo de renombre internacional que ayuda a las compañías en el sector de alimentos y bebidas a identificar sus riesgos para la inocuidad de sus alimentos, previniendo peligros en la seguridad alimentaria, y haciendo frente al cumpliendo legal vigente.</p>
                       <p><strong style="font-weight:bold;color:red;">BPM’S (Buenas prácticas de Manufactura): </strong>Requisitos  básicos que deben ser aplicados  en las empresas de alimentos para producir en forma higiénica y sanitaria los alimentos y reducir los riesgos para la salud del consumidor, cumpliendo con regulaciones nacionales e internacionales que Incluyen: Higiene personal,  control de enfermedades, hábitos personales y practicas operativas.</p>
                       <p><strong style="font-weight:bold;color:red;">IFS (International Food Standard):</strong> La Norma Internacional para los Alimentos, (IFS por sus siglas en inglés) se ha desarrollado para todo tipo de distribuidor (todos los tamaños de empresas y comercios, independientes o no) y para los mayoristas con actividades similares). Todos ellos tienen que garantizar la seguridad de su marca "propia" en los productos que venden. La IFS ayuda a cumplir con todos los requisitos de seguridad jurídica y da las normas comunes y transparentes para todos los proveedores afectados, así como una respuesta concreta y firme a las expectativas de alta seguridad de los clientes. IFS cubre normas comunes de auditoría internacionalmente aceptadas, a fin de mejorar continuamente la seguridad de los consumidores.</p>
                       <p><strong style="font-weight:bold;color:red;">YUM  (Norma de Cadena  Americana de Restaurantes ):</strong>Códigos de conducta referentes a la calidad de los productos y seguridad en los alimentos relacionados con las marcas y restaurantes a nivel mundial de esta cadena. (Pizza Hut, KFC, Taco Bell etc.)</p>
                       <p><strong style="font-weight:bold;color:red;">SILLIKER  (Autoservicio, proveedores, procesadores, distribuidores):</strong> En los mercados actuales, los consumidores están demandando garantías de que están adquiriendo productos seguros y de calidad. En busca de las mismas garantías, un número creciente de cadenas de autoservicio, están requiriendo que sus proveedores demuestren su compromiso con la inocuidad y la calidad de los productos apegándose a estándares de certificación tales como GFSI o ISO 22000.</p>
                      <p><strong style="font-weight:bold;color:red;">BRC  (British Retail Consortium):</strong>  Es una normativa establecida por la Asociación de Minoristas Británicos o British Retail Consortium (BRC) Las Normas BRC son utilizadas cómo texto de referencia en empresas de la calidad y seguridad alimentaria, algunos de sus objetivos son: Asegurar el cumplimiento de las obligaciones legales, protección del consumidor ofreciéndole un producto inocuo y de calidad, proveer de una base común para las evaluaciones y auditorias a proveedores, disminución de costos de producción, reducir la inflación de los precios de los alimentos.</p>
                      <p><strong style="font-weight:bold;color:red;">DISTINTIVO “H”: </strong>Es un reconocimiento que otorgan la Secretaría de Turismo y la Secretaría de Salud, a aquellos establecimientos fijos de alimentos y bebidas: (restaurantes en general, restaurantes de hoteles, cafeterías, fondas etc.), por cumplir con los estándares de higiene que marca la Norma Mexicana NMX-F605 NORMEX 2004.</p>
                      <p><strong style="font-weight:bold;color:red;">ISO-22000:</strong> Es una norma de la serie ISO enfocada en la Gestión de la Inocuidad de los alimentos, esta norma define y especifica los requerimientos para desarrollar e implementar un sistema de Gestión de Inocuidad de los alimentos, con el fin de lograr un armonización internacional que permita una mejora de la seguridad alimentaria durante el transcurso de toda la cadena de suministro.</p>
                      <p><strong style="font-weight:bold;color:red;">PASS 220: </strong>Especifica los requisitos para establecer, implementar y mantener programas de requisitos previos para ayudar a controlar los riesgos de seguridad alimentaria en los procesos de fabricación de alimentos, esta norma fue creado para complementar a la Norma ISO 22000, con el fin de que la combinación de PAS 220 + ISO 22000 denominado FSSC 22000,  fuese aprobado y reconocido por la GFSI.</p>
                      <p><strong style="font-weight:bold;color:red;">FSSC 22000 (Food Safety System Certification): </strong>Nacida de la unión de ISO 22000 y PAS 220, desarrollada para proporcionar una norma rigurosa, basada en el consenso de los diferentes participantes de la cadena de suministro de alimentos, que permite a la norma ISO 22000 + PAS 220 cumplir con los requisitos del GFSI (Global Food Safety Initiative) para su reconocimiento como un sistema de certificación de sistemas de seguridad alimentaria de organizaciones de la cadena alimentaria que procesan o fabrican: Productos de origen animal, productos vegetales perecederos, productos con una larga vida útil, ingredientes alimenticios como aditivos, vitaminas y cultivos biológicos y materiales para el envasado de alimentos.</p>
                  </div>

                @endif
                        
                </div>
                <!--side bar-->
                <div class="col-lg-3 col-md-4 side-bar">
                   <div class="row top-pad">
                       <div class="col-md-12">
                           <!--pest control services-->

                           @foreach($serviciosTotales as $serviciosTotal)
                           <ul class="control-services">
                               <li><a href="/plagas/public/servicios/{{$serviciosTotal->id_servicios}}">{{ $serviciosTotal->nombre }}</a></li>
                             @endforeach
                           </ul>
                       </div>
                       <div class="col-md-12 col-sm-6">
                           <!--Twitter feed-->
                           <div class="blog-feed service-feed">
                               <div class="side-head"> TWITTER FEED </div>
                               <div class="feed-box">
                                   <div class="media">
                                       <div class="media-left"> <a href="#"><span class="fa fa-twitter"></span> </a> </div>
                                       <div class="media-body">
                                           <p class="text"><a href="#">http://fontawesome.io/cheatsheet/ioen meisjdfjhjdfjsasdkasdk/com</a></p>
                                           <p class="day"><a href="#">-1 day ago</a></p>
                                       </div>
                                   </div>
                               </div>
                               <div class="feed-box">
                                   <div class="media">
                                       <div class="media-left"> <a href="#"><span class="fa fa-twitter"></span> </a> </div>
                                       <div class="media-body">
                                           <p class="text"><a href="#">http://fontawesome.io/cheatsheet/ioen meisjdfjhjdfjsasdkasdk/com</a></p>
                                           <p class="day"><a href="#">-1 day ago</a></p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

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


