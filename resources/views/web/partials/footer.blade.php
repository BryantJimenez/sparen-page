<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ asset('/web/images/logo.png') }}" alt="Logo" width="180">
                            </a>
                        </div>
                        <p>@lang('messages.description')</p>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            @lang('messages.services')
                        </h3> 
                        <ul>
                            <li><a href="/{{ $lang }}/#servicios">@lang('messages.services')</a></li>
                            <li><a href="/{{ $lang }}/#sobre">@lang('messages.about')</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            @lang('messages.pages')
                        </h3>
                        <ul>
                            <li><a href="{{ route('informe.index', ['lang' => $lang]) }}">@lang('messages.reports')</a></li>
                            <li><a href="{{ route('contacto.index', ['lang' => $lang]) }}">@lang('messages.contact')</a></li>
                            @guest
                            <li><a class="popup-with-form" href="#test-form">@lang('messages.login')</a></li>
                            @else
                            <li><a class="popup-with-form" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('messages.logout')</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            @lang('messages.address')
                        </h3>
                        <ul>
                            <li>{{ $info->address }}</li>
                            @if($info->phone!=NULL)
                            <li>{{ $info->phone }}</li>
                            @endif
                            @if($info->email!=NULL)
                            <li>{{ $info->email }}</li>
                            @endif
                            @if($info->facebook!=NULL)
                            <li><i class="ti-facebook"></i> {{ $info->facebook }}</li>
                            @endif
                            @if($info->twitter!=NULL)
                            <li><i class="ti-twitter"></i> {{ $info->twitter}}</li>
                            @endif
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
                    <p class="copy_right text-center">Sparen &copy;<script>document.write(new Date().getFullYear());</script> @lang('messages.copyright') | @lang('messages.make') <a href="https://www.otterscompany.com" target="_blank">Otters Company <i class="fa fa-heart-o" aria-hidden="true"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

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
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('messages.enter your email')">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="col-xl-12">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="@lang('messages.enter your password')" >

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" action="login" class="boxed-btn3">@lang('messages.sign in')</button>
                    </div>
               </div>
           </div>
       </div>
   </div>
</form>
 <!-- form itself end -->