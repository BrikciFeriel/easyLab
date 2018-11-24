@extends('layouts.frontOffice')	
			  
			@section('banner')
			
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Actualités				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/actualites')}}"> Actualités</a></p>
						</div>	
					</div>
				</div>
			</section>

			@endsection
				
			@section('content')
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/teaser.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25 Décembre 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>Visualisation interactive de trajectoires 3D en RV</h4></a>
									<p>
										Un article publié lors de la conférence IEEE Vis 2018 propose une nouvelle méthode de navigation dans des milliers ...
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/im.jpeg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/www.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img  style=" height: 200px;" class="img-fluid" src="{{asset('img/elephant.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/ogc.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6" pb-30>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/folia.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/nouv3.jpg')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/nouv2.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/nouv1.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img style=" height: 200px;" class="img-fluid" src="{{asset('img/nouv4.png')}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="{{url('frontOffice/detailsActualite')}}"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						
																				
								
					</div>
				</div>	
			</section>
			@endsection
				

							    			

			