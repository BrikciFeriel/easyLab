@extends('layouts.frontOffice')

@section('banner')
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Projets	
                    </h1>	
                    <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="courses.html"> Projets</a></p>
                </div>	
            </div>
        </div>
    </section>
@endsection
@section('content')
    <!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">

					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Liste des projets</h1>
							</div>
							<span class="widget-wrap">
								<div class=" search-widget">
									<form class="search-form" action="#">
										<input placeholder="Rechercher un projet" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
							</span>
							<div class="pb-40 col-lg-12  justify-content-center">
								<center>
									<div class="button-group-area ">
									<a href="#" class="genric-btn primary-border circle arrow">SIDK</a>
									<a href="#" class="genric-btn primary-border circle arrow">ILS</a>
									<a href="#" class="genric-btn primary-border circle arrow">RSDS</a>
									<a href="#" class="genric-btn primary-border circle arrow">IA</a>
								</div>
								</center>
								
							</div>
							
						</div>
						
					</div>
									
					<div class="row">

						@foreach($projets as $projet)
							<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
												
										@if($projet->photo)
										{
											<img class="img-fluid"  src="{{asset($projet->photo)}}" alt="">	
										}	
										@endif	
										<img class="img-fluid" src="{{asset('uploads/projets/projet.jpg')}}" alt="">
										
									</div>
									@foreach($nbr as $nbrs)
                       					 @if($nbrs->projet_id == $projet->id)
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> {{$nbrs->total}} membre(s) </p>
									</div>	
									@endif
									@endforeach									
								</div>
								<div class="details" style="height:50px;">
									<a href="{{url('frontOffice/projet/'.$projet->id.'/details')}}">
										<h4>
											{{ $projet->intitule }}
										</h4>
									</a>
								</div>
								<hr>
								<div>
									<a href="{{url('frontOffice/'.$projet->chef_id.'/details')}}">
										<h6><i class="fas fa-user-tie"></i> {{ $projet->chef->name}} {{ $projet->chef->prenom}} </h6> 										
									</a>
								</div>
								
							</div>		
						@endforeach
															
					</div>
					<small>	<div class="row d-flex align-items-center justify-content-center"> {{$projets->links()}} </div>
					</small>
				</div>	
			</section>
			<!-- End popular-courses Area -->	
@endsection
