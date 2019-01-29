@extends('layouts.frontOffice')
		  <!-- start banner Area -->

	@section('banner')
	<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								Laboratoire de Recherche Informatique Tlemcen		
							</h1>
							<p class="pt-10 pb-10">
								Notre recherche avance, la vie progresse
							</p>
						
						</div>										
					</div>
				</div>					
	</section>
	@endsection

	@section('content')

	<!-- Start top-category-widget Area -->
		<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">		
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('re.jpg')}}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Recherches</h4>
								        <span></span>								        
								        <p> A la recherche de la perfection </p>
								      </div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('IA2.jpg')}}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Technologies</h4>
								        <span></span>								        
								        <p> Nous donnons vie à la technologie </p>
								      </div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('GL.jpg')}}" alt="" style="height: 200px">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Developpement</h4>
								        <span></span>
								        <p>Le futur s'installe chez vous</p>
								      </div>
								</div>
							</div>
						</div>												
					</div>
				</div>	
		</section>
	<!-- End top-category-widget Area -->

	<!-- Start upcoming-event Area -->
		<section class="upcoming-event-area  section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Actualités</h1>
								
							</div>
						</div>
					</div>								
					<div class="row">
						
						<div class="active-upcoming-event-carusel">
							@foreach($actualites as $actualite)
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									@if($actualite->photo)
										<img class="img-fluid"  src="{{asset($actualite->photo)}}" alt="">	
									@else
									<img class="img-fluid" src="{{asset('uploads/actualite.jpg')}}" alt="">
									@endif
								</div>
								<div class="detials col-12 col-md-6">
									<p>{{$actualite->date}}</p>
									<a href="{{url('frontOffice/actualites/'.$actualite->id.'/details')}}"><h4>{{$actualite->titre}}</h4></a>
									<p>
										{{$actualite->detail}}
									</p>
								</div>
							</div>
							@endforeach																					
						</div>
					</div>
				</div>	
		</section>
	<!-- End upcoming-event Area -->

	<!-- Start blog Area -->
		<section class="blog-area" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Articles recents</h1>
							</div>
						</div>
					</div>					
					<div class="row">
						@foreach($articles as $article)
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									@if($article->type =="Brevet")
									<img class="img-fluid" src="{{asset('uploads/articles/brevet.jpg')}}" alt="">
									@endif
	
									@if($article->type=="Livre")
									<img class="img-fluid" src="{{asset('uploads/articles/livre.jpg')}}" alt="">
									@endif
	
									@if($article->type=="Article long")
									<img class="img-fluid" src="{{asset('uploads/articles/article_long.jpg')}}" alt="">
									@endif
	
									@if($article->type=="Article court")
									<img class="img-fluid" src="{{asset('uploads/articles/article_court.jpg')}}" alt="">
									@endif
	
									@if($article->type=="Publication(Revue)")
									<img class="img-fluid" src="{{asset('uploads/articles/publication.jpg')}}" alt="">
									@endif
	
									@if($article->type=="Chapitre d'un livre")
									<img class="img-fluid" src="{{asset('uploads/articles/chapitre.jpg')}}" alt="">
									@endif
	
									@if($article->type=="Poster")
									<img class="img-fluid" src="{{asset('uploads/articles/poster.jpg')}}" alt="">
									@endif
								</div>
								<div class="detials col-12 col-md-6">
									<p>{{$article->mois}}, {{$article->annee}}</p>
									<a href="{{url('frontOffice/article/'.$article->id.'/details')}}"><h4>{{$article->titre}}</h4></a>
									<p>
										{{$article->resume}}
									</p>
								</div>
							</div>
						</div>
					@endforeach
						
					</div>
				</div>	
		</section>
	<!-- End blog Area -->	

	<!-- Start popular-course Area -->
		<section class="popular-course-area  section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Projets recents</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							@foreach($projets as $projet)
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										@if($projet->photo)
											<img class="img-fluid"  src="{{asset($projet->photo)}}" alt="">	
										@else
										<img class="img-fluid" src="{{asset('uploads/projets/projet.jpg')}}" alt="">
										@endif
									</div>
									@foreach($nbr as $nbrs)
                       					 @if($nbrs->projet_id == $projet->id)
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> {{$nbrs->total}} membre(s) </p>
									</div>	
									@endif
									@endforeach										
								</div>
								<div class="details">
									<a href="{{url('frontOffice/projet/'.$projet->id.'/details')}}">
										<h4>
										{{$projet->intitule}}
										</h4>
									</a>
								</div>
							</div>	
							@endforeach						
						</div>
					</div>
				</div>	
		</section>
	<!-- End popular-course Area -->

	@endsection
