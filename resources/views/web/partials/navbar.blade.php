
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('/web/images/logo.png') }}" alt="Logo">
                                </a>
                            </div>
                        </div>
                        @guest 

                        <div class="col-xl-10 col-lg-10">
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
                        <div class="col-xl-10 col-lg-10">
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
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide"method="POST" action="{{ route('login') }}">
        @csrf
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="popup_header">
                    <h3>@lang('messages.login')</h3>
                </div>
                <div class="custom_form">
                    <div class="row">
                        <div class="col-xl-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('messages.enter your email')">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="col-xl-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="@lang('messages.enter your password')" >

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">@lang('messages.sign in')</button>
                        </div>
                        <div class="col-xl-12">
                         @if (Route::has('password.request'))
                         <a class="btn btn-link" href="{{ route('password.request') }}">@lang('messages.forgot your password')</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- form itself end -->
</header>
    <!-- header-end -->