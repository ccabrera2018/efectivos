
      <!--Nav bar-->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas"> <span class="sr-only">Toggle navigation</span> <span>
                        <span class="fa fa-th-list"></span> </span>
                    </button>
                </div>
                <!--.nav-collapse -->
                <div class="navbar-offcanvas navbar-offcanvas-touch" id="js-bootstrap-offcanvas">
                    <ul class="nav navbar-nav">
                         <li class="dropdown"> 
                            <a  href="{{ url('/') }}" class="active">Home</a>
                        </li>

                        <li class="dropdown"> 
                            <a  href="{{ url('servicios') }}" class="active">Servicios</a>
                        </li>
                        <li>
                            <a href="{{ url('productos') }}" >Productos</a>
                        </li>
                        <li> <a  href="{{ url('informacion_plagas') }}"  class="active">Informacion de Plagas</a>
                        </li>
                        <li> <a  href="{{ url('contactanos') }}"  class="active">Contactanos</a>
                        </li>
                        <li class="dropdown"> 
                            <a  href="{{ url('nuestra_empresa') }}" class="active">Nuestra Empresa</a>
                        </li>
                        <li class="dropdown"> 
                            <a  href="{{ url('nuestra_empresa') }}" class="active">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!--/Nav bar-->



