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
                    <article class="blog_item">

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Título</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                            he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>Usuario responsable</a></li>
                                <li><a href="#"><i class="fa fa-download"></i> DESCARGAR</a></li>
                            </ul>
                        </div>
                    </article>

                    <article class="blog_item">

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Título</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                            he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>Usuario responsable</a></li>
                                <li><a href="#"><i class="fa fa-download"></i> DESCARGAR</a></li>
                            </ul>
                        </div>
                    </article>

                    <article class="blog_item">

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Título</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                            he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>Usuario responsable</a></li>
                                <li><a href="#"><i class="fa fa-download"></i> DESCARGAR</a></li>
                            </ul>
                        </div>
                    </article>

                    <article class="blog_item">

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Título</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                            he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>Usuario responsable</a></li>
                                <li><a href="#"><i class="fa fa-download"></i> DESCARGAR</a></li>
                            </ul>
                        </div>
                    </article>

                    <article class="blog_item">

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>Título</h2>
                            </a>
                            <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                            he earth it first without heaven in place seed it second morning saying.</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i>Usuario responsable</a></li>
                                <li><a href="#"><i class="fa fa-download"></i> DESCARGAR</a></li>
                            </ul>
                        </div>
                    </article>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Introduzca el título de un informe'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Introduzca el título de un informe'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                            type="submit">Buscar</button>
                        </form>
                    </aside>
                    
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Registrar un Nuevo Informe</h4>
                        <a href=" {{ route('informe.create') }} "><button class="button rounded-0 genric-btn success-border w-100 btn_1 boxed-btn"
                        >Registrar</button></a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection