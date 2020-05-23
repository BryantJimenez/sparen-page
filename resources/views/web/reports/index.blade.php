@extends('layouts.web')

@section('title', __('messages.reports'))

@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area breadcam_bg_report">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>@lang('messages.reports')</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($reports as $r)

                    <article class="blog_item">

                        <div class="blog_details">
                            <a class="d-inline-block">
                                <h2>@if($lang=="es") {{ $r->title_spanish }} @else {{ $r->title_english }} @endif</h2>
                            </a>
                            <p>@if($lang=="es") {{ $r->description_spanish }} @else {{ $r->description_english }} @endif</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>{{ $r->user->name." ".$r->user->lastname }}</a></li>
                                <li><a href='@if($lang=="es"){{ asset('/web/images/reports/'.$r->pdf_spanish) }}@else{{ asset('/web/images/reports/'.$r->pdf_english) }}@endif'><i class="fa fa-download"></i> @lang('messages.download')</a></li>
                            </ul>
                        </div>
                    </article>

                    @endforeach

                    <nav class="blog-pagination justify-content-center d-flex">
                        {!! $reports->render() !!}
                    </nav>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="search" name="report" class="form-control" aria-label="@lang('messages.search')" placeholder="@lang('messages.enter the title of a report')">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">@lang('messages.search')</button>
                        </form>
                    </aside>
                    
                    @guest
                    @else
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">@lang('messages.register a new report')</h4>
                        <a href=" {{ route('informe.create', ['lang' => $lang]) }} "><button class="button rounded-0 genric-btn success-border w-100 btn_1 boxed-btn">@lang('messages.register')</button></a>
                    </aside>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection