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
						@foreach($actualites as $actualite)
							<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									@if($actualite->photo)
										<img class="img-fluid"  src="{{asset($actualite->photo)}}" alt="">	
									@else
									<img class="img-fluid" src="{{asset('uploads/actualite.jpg')}}" alt="">
									@endif								</div>
								<div class="detials col-12 col-md-6">
									<!--  -->
									<p>{{$actualite->date}}</p>
									<a href="{{url('/frontOffice/actualite/'.$actualite->id.'/details')}}">
										<h4>{{$actualite->titre}}</h4></a>
									<p>
										{{$actualite->detail}}
									</p>
								</div>
							</div>
						</div>
						@endforeach	
					</div>
				</div>	
			</section>
			@endsection
			