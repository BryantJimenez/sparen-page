<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ asset('/web/images/logo.png') }}" alt="">
                            </a>
                        </div>
                        <p>
                            Buscamos que nuestros clientes manejen sus fondos con transparencia.
                        </p>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Servicios
                        </h3> 
                        <ul>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#sobre">Nosotros</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                         Links
                     </h3>
                     <ul>
                        <li><a href="{{ route('informe.index') }}">Informes</a></li>
                        <li><a href="{{ route('contacto.index') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
                <div class="footer_widget">
                    <h3 class="footer_title">
                        Dirección
                    </h3>
                    <ul>
                        <li>Rondeau 69 5°Piso (CP 5000) Nueva-Cordoba - CORDOBA - ARGENTINA</li>
                        <li>+54 367 467 8934</li>
                        <li>info@sparen.com.ar</li>
                        @guest
                        <li><a class="popup-with-form" href="#test-form">INICIAR SESIÓN</a></li>
                        @else
                        <li><a class="popup-with-form" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">CERRAR SESIÓN</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copy-right_text">
    <div class="container">
        <div class="footer_border"></div>
        <div class="row">
            <div class="col-xl-12">
                <p class="copy_right text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Diseñado por OttersCompany con <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <!-- Link back to OttersCompany can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</div>
</footer>
<!--/ footer end  -->

