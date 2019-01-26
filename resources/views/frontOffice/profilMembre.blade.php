@extends('layouts.frontOffice')
		  <!-- start banner Area -->

	@section('banner')


	<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Nom du prof		
							</h1>	
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil   </a>  <span class="fas fa-angle-right"></span>Profil</p>
						</div>	
				
					</div>
				</div>
		</section>
	@endsection

	@section('content')

	<section class="single-post-area">
				
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 sidebar-widgets">
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget user-info-widget">
									<img class="rounded-circle" src="{{asset($membre->photo)}}" alt="" style="width: 150px;">
									<h4>{{$membre->name}} {{$membre->prenom}}</h4>
									<p>
										{{$membre->grade}}
									</p>
									<ul class="social-links">
										<li><a href="https://facebook.com/"><i class="fab fa-facebook"></i></a></li>
										<li><a href="{{$membre->lien_linkedin}}"><i class="fab fa-linkedin"></i></a></li>
										<li><a href="https://github.com/"><i class="fab fa-github"></i></a></li>
										<li><a href="{{$membre->lien_rg}}"><i class="fab fa-researchgate"></i></a></li>
									</ul>
									
								</div>
															
							</div>
						</div>

						<div class="col-md-9 course-details-area left-contents">

							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">A propos</div>
	                                 @if($membre->these)
	                                <div class="jq-tab-title" data-tab="2">Thèse</div>
	                                @endif
	                                <div class="jq-tab-title" data-tab="3">Articles</div>
	                                <div class="jq-tab-title" data-tab="4">Projets</div>
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
	                                	<div class="row">
	                                		
		                                	<div class="col-md-3">
		                                   		<b>Grade</b>
		                                   </div>
		                                   <div class="col-md-9">
		                                   		<p>Proffesseur</p>
		                                   </div>
	                                	</div>

	                                	<div class="row">	
		                                   <div class="col-md-3">
		                                   		<b>Equipe</b>
		                                   </div>
		                                   <div class="col-md-9">
		                                   		<p>{{$membre->equipe->intitule}}</p>
		                                   </div>
	                                	</div>
	                                	@if($membre->num_tel && $membre->autorisation_public_date_naiss)
	                                	<div class="row">
		                                   <div class="col-md-3">
		                                   		<b>Email</b>
		                                   </div>
		                                   <div class="col-md-9">
		                                   		<p>{{$membre->email}}</p>
		                                   </div>
	                                	</div>
	                                	@endif
	                                	@if($membre->date_naissance && $membre->autorisation_public_date_naiss)
	                                	<div class="row">
		                                    <div class="col-md-3">
		                                   		<b>Date de naissance</b>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>{{$membre->date_naissance}}</p>
			                                </div>
	                                	</div>
	                                	@endif

	                                	<div class="row">
		                                    <div class="col-md-3">
		                                   		<b>N° de téléphone</b>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>{{$membre->num_tel}}</p>
			                                </div>
	                                	</div>
	                                </div>
              						@if($membre->these)
	                                <div class="jq-tab-content" data-tab="2">

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Titre</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>{{$membre->these->titre}}</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Sujet</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>{{$membre->these->sujet}}</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Encadreur</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>{{$membre->these->encadreur_int}} {{$membre->these->encadreur_ext}}</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Coencadreur</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>{{$membre->these->coencadreur_int}}{{$membre->these->coencadreur_ext}}</p>
			                                </div>
	                                	</div>
	                                	
	                        
	                                </div>
	                                @endif
	                                <div class="jq-tab-content" data-tab="3">
	                                	@if($membre->articles)
										<ul class="course-list">
											@foreach ($membre->articles as $article)
											<li class="justify-content-between d-flex">
												<p>{{$article->titre}}</p>
												<a class=" text-uppercase" href="{{url('frontOffice/article/'.$article->id.'/details')}}"> Details</a>
											</li>
											 @endforeach
										</ul>
										@else
											<p >aucun article</p>
										@endif

	                                </div>

	                                <div class="jq-tab-content" data-tab="4">
										<ul class="course-list">
											@if($membre->projets())
											@foreach ($membre->projets as $projet)
											<li class="justify-content-between d-flex">
												<p>{{$projet->intitule}}</p>
												<a class=" text-uppercase" href="{{url('frontOffice/projet/'.$projet->id.'/details')}}"> Details</a>
											</li>
												@endforeach
												@endif
										</ul>
	                                </div>
	                                                               
	                            </div>
	                        </div>
						</div>

					</div>
				</div>	
	</section>

	@endsection
