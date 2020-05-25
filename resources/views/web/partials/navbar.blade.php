<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/web/images/logo.png') }}" width="150" alt="Logo">
                                </a>
                            </div>
                        </div>
                        @guest 
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('home', ['lang' => $lang]) }}">@lang('messages.home')</a></li>
                                        <li><a href="/{{ $lang }}/#sobre">@lang('messages.about')</a></li>
                                        <li><a href="/{{ $lang }}/#servicios">@lang('messages.services')</a></li>
                                        <li><a href="{{ route('informe.index', ['lang' => $lang]) }}">@lang('messages.reports')</a></li>
                                        <li><a href="{{ route('contacto.index', ['lang' => $lang]) }}">@lang('messages.contact')</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @else
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">
                                        <li><a class="active" href="{{ route('home', ['lang' => $lang]) }}">@lang('messages.home')</a></li>
                                        <li><a href="/{{ $lang }}/#sobre">@lang('messages.about')</a></li>
                                        <li><a href="/{{ $lang }}/#servicios">@lang('messages.services')</a></li>
                                        <li><a href="{{ route('informe.index', ['lang' => $lang]) }}">@lang('messages.reports')</a></li>
                                        <li><a href="{{ route('contacto.index', ['lang' => $lang]) }}">@lang('messages.contact')</a></li>
                                        <li><a href="{{ route('bitacora.index', ['lang' => $lang]) }}">@lang('messages.binnacle')</a></li>
                                        <li><a href="#">@lang('messages.users')<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('usuario.create', ['lang' => $lang]) }}">@lang('messages.register')</a></li>
                                                <li><a href="{{ route('usuario.index', ['lang' => $lang]) }}">@lang('messages.list')</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @endguest
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="Appointment">
                                <a href="{{ route('home', ['lang' => 'es']) }}"><img src="{{ asset('/web/images/spain.svg') }}" alt="Español" width="40" class="mr-3"></a>
                                <a href="{{ route('home', ['lang' => 'en']) }}"><img src="{{ asset('/web/images/english.jpg') }}" alt="Ingles" width="40"></a>
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
</header>
<!-- header-end -->
