@extends('layouts.frontOffice')
		  <!-- start banner Area -->

	@section('banner')
	<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contactez nous			
							</h1>	
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil   </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/contact')}}">Contact</a></p>
						</div>	
					</div>
				</div>
		</section>
	@endsection

	@section('content')

	<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap col-lg-7" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap" style="padding-top: 100px">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-home" style="padding-right: 30px; padding-left: 30px"></span>
								</div>
								<div class="contact-details">
									<h5>Tlemcen, Algérie</h5>
									<p>
										Université Abou Bekr Belkaid
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-phone" style="padding-right: 30px; padding-left: 30px"></span>
								</div>
								<div class="contact-details">
									<h5>00 (958) 9865 562</h5>
									<p>De Dimanche A jeudi 07h </p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="fas fa-envelope" style="padding-right: 30px; padding-left: 30px"></span>
								</div>
								<div class="contact-details">
									<h5>support@colorlib.com</h5>
									<p>Envoyez-nous votre requête à tout moment!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-12">
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Entrer votre nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Entrer votre adresse Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="subject" placeholder="Entrer le sujet" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Entrer Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer message'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;">Envoyer Message</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

	@endsection
