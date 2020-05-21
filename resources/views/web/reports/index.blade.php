@extends('layouts.web')

@section('title', 'Informes')



@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area breadcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Informes</h3>
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
                                <h2>{{ $r->title_spanish }}</h2>
                            </a>
                            <p>{{ $r->description_spanish }}</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>{{ $r->user->name." ".$r->user->lastname }}</a></li>
                                <li><a href='{{ asset('/web/images/reports/'.$r->pdf_spanish) }}'><i class="fa fa-download"></i> DESCARGAR</a></li>
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
                                    <input type="search" name="report" class="form-control" aria-label="Search" placeholder='Introduzca el título de un informe'>
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Buscar</button>
                        </form>
                    </aside>
                    
                    @guest
                    @else
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Registrar un Nuevo Informe</h4>
                        <a href=" {{ route('informe.create') }} "><button class="button rounded-0 genric-btn success-border w-100 btn_1 boxed-btn"
                        >Registrar</button></a>
                    </aside>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection