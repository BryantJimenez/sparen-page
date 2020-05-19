@extends('layouts.web')

@section('title', 'Inicio')


@section('content')



<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3>Economía Finanzas <br> e Inversión </h3>
                        </div>
                        <div class="video_service_btn">
                            <a href="#" class="boxed-btn3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3> consultorías para empresas, <br>
                            inversores e instituciones </h3>
                        </div>
                        <div class="video_service_btn">
                            <a href="#" class="boxed-btn3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text ">
                            <h3> Compromiso, profesionalismo, responsabilidad y <br> creatividad son valores que nos guían  </h3>
                        </div>
                        <div class="video_service_btn">
                            <a href="#" class="boxed-btn3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- service_area_start -->
<div class="service_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-50">
                    <h3>Nuestros Servicios</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_service service_bg_1">
                    <div class="service_hover">
                        <img src="{{ asset('/web/images/svg_icon/legal-paper.svg') }}" alt="">
                        <h3>Consultorías de Economía</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>Consultorías de Economía</h4>
                                <p>Estudios de Mercado,  
                                    Informes Sectoriales, 
                                    Análisis de Impacto de Políticas, 
                                    Proyecciones de Demanda, 
                                    Estudios de Sensibilidad,  
                                    Beneficios y Costos
                                </p>
                                <i title="editar" class="ti-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service service_bg_2">
                    <div class="service_hover">
                        <img src="{{ asset('/web/images/svg_icon/case.svg') }}" alt="">
                        <h3>Consultorías de Finanzas</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>Consultorías de Finanzas</h4>
                                <p>
                                    Planeamiento Financiero Estratégico,  
                                    Optimización de Tesorería, 
                                    Presupuestos y Flujos de caja,   
                                    Inversión y Riesgo,  
                                    Diversificación, 
                                    Control y Corrección de Desvíos
                                </p>
                                <i title="editar" class="ti-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_service service_bg_3">
                    <div class="service_hover">
                        <img src="{{ asset('/web/images/svg_icon/survey.svg') }}" alt="">
                        <h3>Consultorías de Inversión</h3>
                        <div class="hover_content">
                            <div class="hover_content_inner">
                                <h4>Consultorías de Inversión</h4>
                                <p>Planes y Modelos de Negocio,  
                                    Fusiones y Adquisiciones / M&A, 
                                    Valuaciones de Empresas, 
                                    Evaluación de Proyectos de Inversión, 
                                    Estudios de Factibilidad,  
                                    Análisis y Gestión del Riesgo, 
                                    Fuentes de Financiamiento, 
                                    Inversiones Patrocinadas
                                .</p>
                                <i title="editar" class="ti-pencil"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service_area_end -->

<!-- about  -->
<div class="about_area ">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about_image">
                    <img src="{{ asset('/web/images/logo.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about_info">
                    <h3>Nosotros/Sobre Sparen</h3>
                    <p>Compañía especializada en brindar consultorías en Economía, Finanzas e Inversión a Empresas, Inversores e Instituciones. <br><br>
                        A través de un estudio personalizado y objetivo proponemos soluciones concretas a las necesidades de nuestros clientes, con el objetivo de agregar valor y simplificar la complejidad de la realidad económica.
                    </p>
                    <ul>
                        <li> Compromiso. </li>
                        <li> Profesionalismo. </li>
                        <li> Responsabilidad y creatividad .</li>
                    </ul>
                    <div class="video_service_btn">
                        <a href="#" class="boxed-btn3">Editar</a>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
<!--/ about  -->

<!-- counter  -->
<div class="counter_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="single_counter text-center">
                    <h3> <span class="counter" >520</span> <span>+</span> </h3>
                    <span>Visitas</span>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="single_counter text-center">
                    <h3> <span class="counter" >244</span>  </h3>
                    <span>Informes Almacenados</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ counter  -->


<!-- about wrap  -->
<div class="about_wrap_area about_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_service_wrap text-center">
                    <img src="{{ asset('/web/images/svg_icon/controls.svg') }}" alt="">
                    <h3>Economía</h3>
                    <p>estudio personalizado y objetivo proponemos soluciones concretas a las necesidades de nuestros clientes </p>
                    <i title="editar" class="ti-pencil"></i>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_service_wrap text-center">
                    <img src="{{ asset('/web/images/svg_icon/bar-chart.svg"') }}" alt="">
                    <h3>Finanzas</h3>
                    <p>Nuestro objetivo es agregar valor y simplificar la complejidad de la realidad económica </p>
                    <i title="editar" class="ti-pencil"></i>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
                <div class="single_service_wrap text-center">
                    <img src="{{ asset('/web/images/svg_icon/puzzle.svg') }}" alt="">
                    <h3>Inversión</h3>
                    <p>Compromiso, profesionalismo, responsabilidad y creatividad son valores que nos guían para satisfacer los requerimientos de nuestros clientes con eficacia y eficiencia</p>
                    <i title="editar" class="ti-pencil"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ about wrap  -->


<!-- financial_solution -->
<div class="financial_solution_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="financial_active owl-carousel">
                    <div class="single_finalcial_wrap">
                        <h3>Consultorías de Economía</h3>

                        <p>Con el objetivo de dotar a los clientes de información clara y confiable para la toma de decisiones, realizamos estudios micro y macroeconómicos orientados a simplificar el entorno y determinar las variables relevantes</p>
                    </div>
                    <div class="single_finalcial_wrap">
                        <h3>Consultorías de Finanzas</h3>
                        <p>Acompañamos y capacitamos a nuestros clientes en las mejores prácticas del manejo de fondos. Con herramientas financieras personalizadas y acordes a cada situación, buscamos que nuestros clientes manejen sus fondos con transparencia, eficiencia, eficacia y que cuenten con información relevante sobre su gestión para reaccionar a tiempo a cambios en sus disponibilidades o riesgos</p>
                    </div>
                    <div class="single_finalcial_wrap">
                        <h3>Consultorías de Inversión</h3>
                        <p>Según la necesidad de nuestros clientes, desarrollamos actividades integrales para todas las etapas de una inversión. Suministramos técnicas adecuadas para cada momento, desde la gestación hasta la puesta en marcha, y ofrecemos herramientas de evaluación de rendimientos, de minimización de riesgos y de fuentes de financiamiento, entre otras</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="finance_thumb">
                    <img src="{{ asset('/web/images/about/finance.png') }}" alt="">
                </div>
            </div>
            <div class="video_service_btn">
                <a href="#" class="boxed-btn3">Editar</a>
            </div>
        </div>
    </div>
</div>
<!--/ financial_solution -->

<!-- project  -->
<div class="project_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project_info text-center">
                    <h3>¿Tienes algún proyecto?</h3>
                    <p>Estaremos encantados en ayudarte en todo lo que necesites</p>
                    <a href="{{ route('contacto.index') }}" class="boxed-btn3-white">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ project  -->

{{-- Inicio del Modal --}}
{{-- <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <p>Modal body text goes here.</p>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary">Save changes</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div> --}}

{{-- Fin del Modal --}}

@endsection

