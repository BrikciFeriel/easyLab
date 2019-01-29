@extends('layouts.frontOffice')
		  <!-- start banner Area -->

	@section('banner')
	<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nos équipes				
							</h1>	
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil   </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/equipes')}}">   equipes</a></p>
						</div>	
					</div>
				</div>
		</section>
	@endsection

	@section('content')
			<section class="course-details-area ">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 left-contents">
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Présentation</div>
	                                <div class="jq-tab-title" data-tab="2">Equipes de recherche</div>
	                                
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
	                                    
	                                    	<div class="container">


	                                    	<div class="row">
	                                    			<p>
	                                    		Le LRI, Laboratoire Mixte de Recherche de l'Université de Tlemcen, est un laboratoire de recherche en informatique se consacrant à la modélisation et la résolution de problèmes fondamentaux motivés par les applications, ainsi qu'à la mise en oeuvre et la validation des solutions au travers de partenariats académiques comme le département de Mathématique et de Physique Electronique.
												Les axes fédérateurs sont :
												Sûreté, sécurité, fiabilité ;
												Science des données, intelligence et optimisation ; 
												Systèmes communicants.
												Le LRI répond à ces challenges à différents niveaux thématiques au sein des 3 départements.
												 
									
											</div>
											<div class="row col-md-12">
												<div class="feature-img">
												<img class="img-fluid" src="{{asset('img/lab.jpg')}}" alt="">
												</div>
											</div>
	                                    	
	                                    
	                                    
	                                   
                     				 </div>
	                                </div>
	                                <div class="jq-tab-content" data-tab="2">
	                                   <section class="upcoming-event-area section-gap">
											<div class="container">					
												<div class="row">
													@foreach($equipes as $equipe)
													<div class="col-12 col-md-2 thumb">
													@if($equipe->photo)
														<img class="img-fluid"  src="{{asset($equipe->photo)}}" alt="">	
													@else
														<img class="img-fluid" src="{{asset('uploads/specialite/aboutus.jpg')}}" alt="">
													@endif
													</div>
													<div class="detials col-12 col-md-4">
													
													<a href="{{url('/frontOffice/equipe/'.$equipe->id.'/details')}}"><h2>{{$equipe->achronymes}}</h2></a>
													<p><h4>{{$equipe->intitule}}</h4></p>
													</div>
													@endforeach
												</div>
												<div class="row"><p></p></div>

												
											</div>
										
	                                   	</section>
										
	                                </div>

	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
			@endsection
				