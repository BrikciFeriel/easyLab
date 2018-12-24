@extends('layouts.frontOffice')	
			  
			@section('banner')
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								{{$actualite->titre}}	
							</h1>	
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/actualites')}}"> Actualités</a> <span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/detailsActualite')}}">Détails</a></p>
						</div>	
					</div>
				</div>
			</section>
			@endsection	
				
			@section('content')
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<img class="img-fluid" src="{{asset('img/teaser.png')}}" alt="">
							</div>
							<div class="details-content">
								
									<h4>{{$actualite->titre}}</h4>
								
								<p>
									{{$actualite->detail}}									
								</p>
							</div>
							
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Date début</span>
										<span>15th April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Date fin</span>
										<span>18th April, 2018</span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Lieu</span>
										<span>Free of Cost</span>
									</li>														
								</ul>
							</div>
																		
						</div>
					</div>
				</div>	
			</section>
			@endsection