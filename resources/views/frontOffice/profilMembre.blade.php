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
							<p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil   </a>  <span class="fas fa-angle-right"></span>  <a href="about.html">  Profil</a></p>
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
									<img class="rounded-circle" src="{{asset('uploads/photo/avatar5.png')}}" alt="" style="width: 150px;">
									<a href="#"><h4>Nom Prenom</h4></a>
									<p>
										Grade
									</p>
									<ul class="social-links">
										<li><a href="#"><i class="fab fa-facebook"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fab fa-github"></i></a></li>
										<li><a href="#"><i class="fab fa-researchgate"></i></a></li>
									</ul>
									
								</div>
															
							</div>
						</div>

						<div class="col-md-9 course-details-area left-contents">

							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">A propos</div>
	                                <div class="jq-tab-title" data-tab="2">Thèse</div>
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
		                                   		<p>Equipe SIDK</p>
		                                   </div>
	                                	</div>

	                                	<div class="row">
		                                   <div class="col-md-3">
		                                   		<b>Email</b>
		                                   </div>
		                                   <div class="col-md-9">
		                                   		<p>nom@prenom.com</p>
		                                   </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
		                                   		<b>Date de naissance</b>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>21/01/1899</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
		                                   		<b>N° de téléphone</b>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>012 3456 789</p>
			                                </div>
	                                	</div>
	                                </div>

	                                <div class="jq-tab-content" data-tab="2">

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Titre</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>Le titre</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Sujet</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>lsdfjwixkhdksllw ldjfvcxlf sdjkfjs dsjx kdfhx</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Encadreur</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>lsdfjwixkhdksllw ldjfvcxlf sdjkfjs dsjx kdfhx</p>
			                                </div>
	                                	</div>

	                                	<div class="row">
		                                    <div class="col-md-3">
	                                			<h6 class="typo-list">Coencadreur</h6>
		                                    </div>
		                                    <div class="col-md-9">
			                                   		<p>lsdfjwixkhdksllw ldjfvcxlf sdjkfjs dsjx kdfhx</p>
			                                </div>
	                                	</div>
	                                	
	                        
	                                </div>
	                                <div class="jq-tab-content" data-tab="3">
										<ul class="course-list">
											<li class="justify-content-between d-flex">
												<p>Introduction Lesson</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>
											<li class="justify-content-between d-flex">
												<p>Getting Know about HTML</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>
											
											<li class="justify-content-between d-flex">
												<p>Introduction to Bootstrap</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>																		
											<li class="justify-content-between d-flex">
												<p>Responsive Design</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>
											<li class="justify-content-between d-flex">
												<p>Canvas in HTML 5</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>

										</ul>
	                                </div>

	                                <div class="jq-tab-content" data-tab="4">
										<ul class="course-list">
											<li class="justify-content-between d-flex">
												<p>Introduction Lesson</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>
											<li class="justify-content-between d-flex">
												<p>Getting Know about HTML</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>
											
											<li class="justify-content-between d-flex">
												<p>Introduction to Bootstrap</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>																		
											<li class="justify-content-between d-flex">
												<p>Responsive Design</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>
											<li class="justify-content-between d-flex">
												<p>Canvas in HTML 5</p>
												<a class="primary-btn text-uppercase" href="#">View Details</a>
											</li>

										</ul>
	                                </div>
	                                                               
	                            </div>
	                        </div>
						</div>

					</div>
				</div>	
	</section>

	@endsection
