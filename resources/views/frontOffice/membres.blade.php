@extends('layouts.frontOffice')
		  <!-- start banner Area -->

	@section('banner')
	<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nos membres			
							</h1>	
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil   </a>  <span class="fas fa-angle-right"></span>  <a href="about.html">   Membres</a></p>
						</div>	
					</div>
				</div>
		</section>
	@endsection

	@section('content')


		<section class="events-list-area section-gap event-page-lists">

			<div class="container">
				<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Nos chercheurs</h1>
							</div>
							
								<div class=" search-widget">
									<form class="search-form" action="#">
										<input placeholder="Rechercher un projet" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
							
							
						</div>
						
					</div>

			<div class="row">


                @foreach($membres as $membre)
				
				<div class="col-md-3 " style="padding-bottom: 30px">
					<div class="widget-wrap" >


						<div class="single-sidebar-widget user-info-widget">
							<div class="text-center">
				
								<img class="rounded-circle" src="{{asset($membre->photo)}}" alt="" style="width: 150px; ">
								<a href="{{url('frontOffice/'.$membre->id.'/details')}}"><h4>{{$membre->name}} {{$membre->prenom}}</h4></a>
								<ul class="social-links">
									<li><a href="{{$membre->lien_linkedin}}"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-github"></i></a></li>
									<li><a href="{{$membre->lien_rg}}"><i class="fab fa-researchgate"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
				@endforeach											
			</div>

		</section>


	@endsection