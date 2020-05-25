@extends('layouts.web')

@section('title', 'Sparen')

@section('content')

<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center slider_bg_2 overlay2" style="background-image: url(/web/images/banner/{{ $banner->picture1 }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>@if($lang=="es") {!! $banner->banner1_spanish !!} @else {!! $banner->banner1_english !!} @endif</h3>
                        </div>
                        @guest
                        @else
                        <div class="video_service_btn">
                            <a href="{{ route('banner.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2" style="background-image: url(/web/images/banner/{{ $banner->picture2 }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>@if($lang=="es") {!! $banner->banner2_spanish !!} @else {!! $banner->banner2_english !!} @endif</h3>
                        </div>
                        @guest
                        @else
                        <div class="video_service_btn">
                            <a href="{{ route('banner.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2" style="background-image: url(/web/images/banner/{{ $banner->picture3 }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>@if($lang=="es") {!! $banner->banner3_spanish !!} @else {!! $banner->banner3_english !!} @endif</h3>
                        </div>
                        @guest
                        @else
                        <div class="video_service_btn">
                            <a href="{{ route('banner.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about  -->
<div class="about_area pt-5">
    <div class="container-fluid">
        <div class="row no-gutters align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about_image">
                    <a  name="sobre" id="sobre"> <img src="{{ asset('/web/images/about/'.$about->picture) }}" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about_info">
                    <h3>@lang('messages.about us')</h3>
                    <p>@if($lang=="es") {!! $about->paragraph_spanish !!} @else {!! $about->paragraph_english !!} @endif</p>
                    <ul>
                        <li>@if($lang=="es") {{ $about->list1_spanish }} @else {{ $about->list1_english }} @endif</li>
                        <li>@if($lang=="es") {{ $about->list2_spanish }} @else {{ $about->list2_english }} @endif</li>
                        <li>@if($lang=="es") {{ $about->list3_spanish }} @else {{ $about->list3_english }} @endif</li>
                        <li>@if($lang=="es") {{ $about->list4_spanish }} @else {{ $about->list4_english }} @endif</li>
                    </ul>

                    @guest         
                    @else     
                    <div class="video_service_btn">
                        <a href="{{ route('sobre.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
                    </div>
                    @endguest             
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
<!--/ about  -->

<!-- service_area_start -->
<div class="service_area pt-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-50">
                    <h3> <a  name="servicios" id="servicios" >@lang('messages.our services')</a></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_service" style="background-image: url(/web/images/service/{{ $service->picture1 }});">
                    <div class="service_hover">
                        <img src="{{ asset('/web/images/svg_icon/legal-paper.svg') }}" alt="">
                        <h3>@if($lang=="es") {{ $service->title1_spanish }} @else {{ $service->title1_english }} @endif</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>@if($lang=="es") {{ $service->title1_spanish }} @else {{ $service->title1_english }} @endif</h4>
                                <p>@if($lang=="es") {{ $service->content1_spanish }} @else {{ $service->content1_english }} @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service" style="background-image: url(/web/images/service/{{ $service->picture2 }});">
                    <div class="service_hover">
                        <img src="{{ asset('/web/images/svg_icon/case.svg') }}" alt="">
                        <h3>@if($lang=="es") {{ $service->title2_spanish }} @else {{ $service->title2_english }} @endif</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>@if($lang=="es") {{ $service->title2_spanish }} @else {{ $service->title2_english }} @endif</h4>
                                <p>@if($lang=="es") {{ $service->content2_spanish }} @else {{ $service->content2_english }} @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service" style="background-image: url(/web/images/service/{{ $service->picture3 }});">
                    <div class="service_hover">
                        <img src="{{ asset('/web/images/svg_icon/survey.svg') }}" alt="">
                        <h3>@if($lang=="es") {{ $service->title3_spanish }} @else {{ $service->title3_english }} @endif</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>@if($lang=="es") {{ $service->title3_spanish }} @else {{ $service->title3_english }} @endif</h4>
                                <p>@if($lang=="es") {{ $service->content3_spanish }} @else {{ $service->content3_english }} @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @guest
        @else
        <div class="video_service_btn">
            <a href="{{ route('servicio.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
        </div>
        @endguest
    </div>
</div>
<!-- service_area_end -->

<!-- about wrap  -->
<div class="about_wrap_area" style="background-image: url(/web/images/objective/{{ $objective->picture }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_service_wrap text-center">
                    <img src="{{ asset('/web/images/svg_icon/controls.svg') }}" alt="Controles">
                    <h3>@if($lang=="es") {{ $objective->title1_spanish }} @else {{ $objective->title1_english }} @endif</h3>
                    <p>@if($lang=="es") {!! $objective->content1_spanish !!} @else {!! $objective->content1_english !!} @endif</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_service_wrap text-center">
                    <img src="{{ asset('/web/images/svg_icon/bar-chart.svg') }}" alt="Gráficas">
                    <h3>@if($lang=="es") {{ $objective->title2_spanish }} @else {{ $objective->title2_english }} @endif</h3>
                    <p>@if($lang=="es") {!! $objective->content2_spanish !!} @else {!! $objective->content2_english !!} @endif</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_service_wrap text-center">
                    <img src="{{ asset('/web/images/svg_icon/puzzle.svg') }}" alt="Inversión">
                    <h3>@if($lang=="es") {{ $objective->title3_spanish }} @else {{ $objective->title3_english }} @endif</h3>
                    <p>@if($lang=="es") {!! $objective->content3_spanish !!} @else {!! $objective->content3_english !!} @endif</p>
                </div>
            </div>
        </div>
        @guest
        @else
        <div class="video_service_btn">
            <a href="{{ route('objetivo.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
        </div>
        @endguest
    </div>
</div> 
<!--/ about wrap  -->


<!-- financial_solution -->
{{-- <div class="financial_solution_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="financial_active owl-carousel">
                    <div class="single_finalcial_wrap">
                        <h3>@if($lang=="es") {{ $consultancy->title1_spanish }} @else {{ $consultancy->title1_english }} @endif</h3>

                        <p>@if($lang=="es") {{ $consultancy->content1_spanish }} @else {{ $consultancy->content1_english }} @endif</p>
                    </div>
                    <div class="single_finalcial_wrap">
                        <h3>@if($lang=="es") {{ $consultancy->title2_spanish }} @else {{ $consultancy->title2_english }} @endif</h3>

                        <p>@if($lang=="es") {{ $consultancy->content2_spanish }} @else {{ $consultancy->content2_english }} @endif</p>
                    </div>
                    <div class="single_finalcial_wrap">
                        <h3>@if($lang=="es") {{ $consultancy->title3_spanish }} @else {{ $consultancy->title3_english }} @endif</h3>

                        <p>@if($lang=="es") {{ $consultancy->content3_spanish }} @else {{ $consultancy->content3_english }} @endif</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="finance_thumb">
                    <img src="{{ asset('/web/images/consultancy/'.$consultancy->picture) }}" alt="">
                </div>
            </div>
            @guest
            @else
            <div class="video_service_btn">
                <a href="{{ route('consultoria.edit', ['lang' => $lang]) }}" class="boxed-btn3">@lang('messages.edit')</a>
            </div>
            @endguest
        </div>
    </div>
</div> --}}
<!--/ financial_solution -->

<!-- project  -->
<div class="project_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project_info text-center">
                    <h3>@lang('messages.do you have any project')</h3>
                    <p>@lang('messages.we will be happy to help you in everything you need')</p>
                    <a href="{{ route('contacto.index', ['lang' => $lang]) }}" class="boxed-btn3-white">@lang('messages.contact us')</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ project  -->

@endsection

@section('script')
<script src="{{ asset('/web/vendors/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/web/vendors/validate/messages_es.js') }}"></script>
<script src="{{ asset('/web/js/validate.js') }}"></script>
@endsection