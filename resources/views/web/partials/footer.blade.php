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
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
                <div class="footer_widget">
                    <h3 class="footer_title">
                        @lang('messages.address')
                    </h3>
                    <ul>
                        <li>Rondeau 69 5°Piso (CP 5000) Nueva-Cordoba - CORDOBA - ARGENTINA</li>
                        <li>+54 367 467 8934</li>
                        <li>info@sparen.com.ar</li>
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
        </div>
    </div>
</div>
<div class="copy-right_text">
    <div class="container">
        <div class="footer_border"></div>
        <div class="row">
            <div class="col-xl-12">
                <p class="copy_right text-center">
                 Sparen &copy;<script>document.write(new Date().getFullYear());</script> @lang('messages.copyright') | @lang('messages.make') <a href="https://www.otterscompany.com" target="_blank">Otters Company <i class="fa fa-heart-o" aria-hidden="true"></i></a>
             </p>
         </div>
     </div>
 </div>
</div>
</footer>
<!--/ footer end  -->

