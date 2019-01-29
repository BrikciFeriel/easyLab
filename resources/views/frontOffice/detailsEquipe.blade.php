@extends('layouts.frontOffice')

			@section('banner')
			<section class="banner-area relative about-banner" id="home">	
							<div class="overlay overlay-bg"></div>
							<div class="container">				
								<div class="row d-flex align-items-center justify-content-center">
									<div class="about-content col-lg-12">
										<h1 class="text-white">
											{{$equipe->achronymes}}		
										</h1>	
										<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil</a>  <span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/equipes')}}">Equipes</a><span class="fas fa-angle-right"></span>  <a href="{{url('frontOffice/detailsEquipe')}}">Détails</a></p>
									</div>	
								</div>
							</div>
			</section>
			@endsection

			@section('content')
			<section class="course-details-area ">
					<div  style="text-align:center;">
						@if($equipe->photo)
						<img class="img-fluid"  src="{{asset($equipe->photo)}}" alt="">	
						@else
							<img class="img-fluid" src="{{asset('uploads/specialite/aboutus.jpg')}}" alt="">
						@endif
						
					</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 left-contents">
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Résumé</div>
	                                <div class="jq-tab-title" data-tab="2">Axes de recherche</div>
	                                <div class="jq-tab-title" data-tab="3">Membres</div>
	                                <div class="jq-tab-title" data-tab="4">Projets</div>
	                                <div class="jq-tab-title" data-tab="5">Partenaires</div>
	                                
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                            	<div class="jq-tab-content active" data-tab="1">
	                                    
	                                    	<div class="container">
												<br>
												<h5>{{$equipe->intitule}}</h5>	
	                                    		<p style="color: black;"><br>
	                                    			{{$equipe->resume}}
	                                    		</p>
										

											
                     				 		</div>
	                                </div>
	                                <div class="jq-tab-content" data-tab="2">
	                                    
	                                    	<div class="container">
	                                    		<p style="color: black;">
										

											<ol class="ordered-list">
												{{$equipe->axes_recherche}}

											</ol>
                     				 		</div>
	                                </div>
	                                <div class="jq-tab-content" data-tab="3">
	                                <section class="events-list-area section-gap event-page-lists">

										<div class="row">
											<nav class="col-md-4">
												<div class="text-center">
													
												<img class="rounded-circle" src="{{asset($equipe->chef->photo)}}" alt="" style="width: 200px; margin-bottom: 10px ">
												<a href="{{url('frontOffice/'.$equipe->chef->id.'/details')}}"><h4>{{$equipe->chef->name}} {{$equipe->chef->prenom}}</h4></a>

												</div>

											</nav>

											<div class="col-md-8">
												<div class="row"> 

												@foreach($membres as $membre)
													@if($membre->id != $membre->equipe->chef->id)	
														<div class="col-md-3">
															<div class="text-center">
																
																<img class="rounded-circle" src="{{asset($membre->photo)}}" alt="" style="width: 120px; margin-bottom: 10px ">
																<a href="{{url('frontOffice/'.$membre->id.'/details')}}"><h4>{{$membre->name}} {{$membre->prenom}}</h4></a>
																
															</div>
														</div>	
													@endif
												@endforeach												

												</div>		
											</div>									
										</div>
									</section>
	                                </div>

									<div class="jq-tab-content" data-tab="4">
											<ul class="course-list">
													@foreach($projets as $projet)
													<li class="justify-content-between d-flex">
													{{$projet->intitule}}
													<a class=" text-uppercase" href="{{url('frontOffice/projet/'.$projet->id.'/details')}}"> Details</a>
													</li>
													@endforeach
											</ul>
									</div>

									<div class="jq-tab-content" data-tab="5">
				                         <section class="top-category-widget-area pt-20 pb-20 ">
											<div class="container">
												<div class="row">
													@foreach($partenaires as $partenaire)		
													<div class="col-lg-4">
														<div class="single-cat-widget">
															<div class="content relative">
																<div class="overlay overlay-bg"></div>
																
																<div class="thumb">
																	<img style="height:200px;" class="content-image img-fluid d-block mx-auto" src="{{asset($partenaire->photo)}}" alt="">
																</div>
																<div class="content-details">
																	<h4 class="content-title mx-auto text-uppercase">{{$partenaire->nom}}</h4>
																	<span></span>								              
																	<p>{{$partenaire->type}}</p>
																	<p>{{$partenaire->pays}}</p>
																</div>
															</div>
														</div>
													</div>	
													@endforeach											
												</div>
											</div>	
										</section>
										
	                                	</div>
	                        </div>
						</div>
						
					</div>


				</div>	

			</section>

			@endsection