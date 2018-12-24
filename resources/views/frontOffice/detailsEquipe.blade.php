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
	                                    		<p style="color: black;"><br><br>
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

										<div class="container">

										<div class="row">
											<nav class="col-md-4">
												<div class="text-center">
													
												<img class="rounded-circle" src="{{asset($equipe->chef->photo)}}" alt="" style="width: 300px; margin-bottom: 10px ">
												<a href="{{url('frontOffice/1/details')}}"><h4>{{$equipe->chef->name}} {{$equipe->chef->prenom}}</h4></a>

												</div>

											</nav>

											<div class="col-md-8">
												<div class="row"> 

												@foreach($membres as $membre)	
											<div class="col-md-3">

												
												<div class="text-center">

												<img class="rounded-circle" src="{{asset($membre->photo)}}" alt="" style="width: 150px; margin-bottom: 10px ">
												<a href="{{url('frontOffice/1/details')}}"><h4>{{$membre->name}} {{$membre->prenom}}</h4></a>
												
												</div>
											</div>	
											@endforeach												

												</div>		
											</div>									
										</div>
									</section>
	                                </div>

										<div class="jq-tab-content" data-tab="4">
											<div class="container">
												<div class="row">


													





													
						<div class="single-popular-carusel col-lg-4 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{asset('img/bigdata.jpg')}}" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p style="color:rgb(33, 117, 185);"><span class="fas fa-users"></span> 3 membre(s) </p>
								</div>									
							</div>
							<div class="details" style="height:50px;">
								<a href="{{url('frontOffice/detailsProjet')}}">
									<h4>
										Big Data
									</h4>
								</a>
							</div>
							<hr>
							<div>
								<p>
									Mr Hadjila Fethallah										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-4 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{asset('img/securite.png')}}" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p style="color:rgb(33, 117, 185);"><span class="fas fa-users"></span> 4 membre(s) </p>
								</div>									
							</div>
							<div class="details" style="height:50px;">
								<a href="{{url('frontOffice/detailsProjet')}}">
									<h4>
										ERP (Enterprise Resource Planning)
									</h4>
								</a>
							</div>
								<hr>
							<div>
								<p>
									Mr Messabihi Mohammed										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-4 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{asset('img/erp.jpg')}}" >
								</div>
								<div class="meta d-flex justify-content-between">
									<p style="color:rgb(33, 117, 185);"><span class="fas fa-users"></span> 2 membre(s) </p>
								</div>									
							</div>
							<div class="details" style="height:50px;">
								<a href="{{url('frontOffice/detailsProjet')}}">
									<h4>
										La cybersécurité
									</h4>
								</a>
							</div>
							<hr>
							<div>
								<p>
									Mme Didi Fadoua										
								</p>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{asset('img/bigdata.jpg')}}">
									</div>
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><span class="fas fa-users"></span> 1 membre(s) </p>
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="{{url('frontOffice/detailsProjet')}}">
										<h4>
											Big Data
										</h4>
									</a>
								</div>
								<hr>
								<div>
									<p>
										Mr Hadjila Fethallah										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{asset('img/securite.png')}}">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="fas fa-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="{{url('frontOffice/detailsProjet')}}">
										<h4>
											ERP (Enterprise Resource Planning)
										</h4>
									</a>
								</div>
									<hr>
								<div>
									<p>
										Mr Messabihi Mohammed										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid"  src="{{asset('img/erp.jpg')}}">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="fas fa-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="{{url('frontOffice/detailsProjet')}}">
										<h4>
											La cybersécurité
										</h4>
									</a>
								</div>
								<hr>
								<div>
									<p>
										Mme Didi Fadoua										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel col-lg-4 col-md-6">
									<div class="thumb-wrap relative">
										<div class="thumb relative">
											<div class="overlay overlay-bg"></div>	
											<img class="img-fluid" src="{{asset('img/bigdata.jpg')}}" >
										</div>
										<div class="meta d-flex justify-content-between">
											<p style="rgb(33, 117, 185)"><span class="fas fa-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
											<h4>$150</h4>
										</div>									
									</div>
									<div class="details" style="height:50px;">
										<a href="{{url('frontOffice/detailsProjet')}}">
											<h4>
												Big Data
											</h4>
										</a>
									</div>
									<hr>
									<div>
										<p>
											Mr Hadjila Fethallah										
										</p>
									</div>
								</div>	
								<div class="single-popular-carusel col-lg-4 col-md-6">
									<div class="thumb-wrap relative">
										<div class="thumb relative">
											<div class="overlay overlay-bg"></div>	
											<img class="img-fluid" src="{{asset('img/securite.png')}}" >
										</div>
										<div class="meta d-flex justify-content-between">
											<p><span class="fas fa-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
											<h4>$150</h4>
										</div>									
									</div>
									<div class="details" style="height:50px;">
										<a href="{{url('frontOffice/detailsProjet')}}">
											<h4>
												ERP (Enterprise Resource Planning)
											</h4>
										</a>
									</div>
										<hr>
									<div>
										<p>
											Mr Messabihi Mohammed										
										</p>
									</div>
								</div>	


					</div>
											</div>


	                                   
	                                	</div>
	                                	<div class="jq-tab-content" data-tab="5">

				                         <section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">		
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    
								      <div class="thumb">
								  		 <img style="height:200px;" class="content-image img-fluid d-block mx-auto" src="{{asset('img/denoun.jpg')}}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Groupe DENNOUNI</h4>
								        <span></span>								        
								        <p>Société de distribution d'engins de travaux publics</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/chu.jpg')}}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">CHU Tlemcen</h4>
								        <span></span>								        
								        <p>Centre Hospitalo-Universitaire Dr Tidjani Damerdji de Tlemcen</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    
								      <div class="thumb">
								  		 <img style="height:180px;" class="content-image img-fluid d-block mx-auto" src="{{asset('img/kherbouch.jpg')}}" alt="">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">Groupe Kherbouche</h4>
								        <span></span>
								        <p>Sociétés commerciales pluri-disciplinaires</p>
								      </div>
								    </a>
								</div>
							</div>
						</div>												
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