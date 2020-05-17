@extends('layouts.web')

@section('title', 'Contacto')


@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area breadcam_bg_2">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="bradcam_text text-center">
					<h3>Contacto</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ bradcam_area  -->

<!-- ================ contact section start ================= -->
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Contáctanos</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Introduzca su Nombre y Apellido">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''"  placeholder="Email">
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Introduzca el mensaje"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
					</div>
				</form>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>Nueva-Cordoba - CORDOBA - ARGENTINA</h3>
						<p>Rondeau 69 5°Piso (CP 5000)</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3>+54 367 467 8934</h3>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>info@sparen.com.ar</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->




@endsection