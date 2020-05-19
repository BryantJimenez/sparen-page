<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/web/images/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('home') }}">Inicio</a></li>
                                        <li><a href="{{ route('informe.index') }}">Informes</a></li>
                                        <li><a href="{{ route('contacto.index') }}">Contacto</a></li>
                                        <li><a href="{{ route('bitacora.index') }}">Bitácora</a></li>
                                        <li><a href="#">Usuarios<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('usuario.create') }}">Registrar</a></li>
                                                <li><a href="{{ route('usuario.index') }}">Listado</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form">Usuario</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="popup_header">
                    <h3>Inicia Sesión</h3>
                </div>
                <div class="custom_form">
                    <div class="row">
                        <div class="col-xl-12">
                            <input type="emailt" placeholder="Introduzca su correo">
                        </div>
                        <div class="col-xl-12">
                            <input type="password" placeholder="Introduzca su contraseña">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Entrar</button>
                        </div>
                        <div class="col-xl-12">
                            <a href="">¿Ha Olvidado su contraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- form itself end -->
</header>
    <!-- header-end -->