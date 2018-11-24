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
                    <p class="text-white link-nav"><a href="{{url('/frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/projets')}}"> Projets</a></p>
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
						<div class="single-popular-carusel col-lg-4 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{asset('uploads/projets/bigdata.jpg')}}" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 3 membre(s) </p>
								</div>									
							</div>
							<div class="details" style="height:50px;">
								<a href="{{url('/frontOffice/detailProjet')}}">
									<h4>
										Big Data
									</h4>
								</a>
							</div>
							<hr>
							<div>
								<a href="#">
									<h6><i class="fas fa-user-tie"></i> Mr Hadjila Fethallah </h6> 										
								</a>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-4 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{asset('uploads/projets/erp.jpg')}}" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 4 membre(s) </p>
								</div>									
							</div>
							<div class="details" style="height:50px;">
								<a href="course-details.html">
									<h4>
										ERP (Enterprise Resource Planning)
									</h4>
								</a>
							</div>
								<hr>
							<div>
								<a href="#">
									<h6><i class="fas fa-user-tie"></i> Mr Messabihi Mohammed</h6> 										
								</a>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-4 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{asset('uploads/projets/securite.png')}}" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 2 membre(s) </p>
								</div>									
							</div>
							<div class="details" style="height:50px;">
								<a href="course-details.html">
									<h4>
										La cybersécurité
									</h4>
								</a>
							</div>
							<hr>
							<div>
								<a href="#">
									<h6><i class="fas fa-user-tie"></i> Mme Didi Fadoua</h6> 										
								</a>
							</div>
						</div>	
						<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{asset('uploads/projets/bigdata.jpg')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 1 membre(s) </p>
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="course-details.html">
										<h4>
											Big Data
										</h4>
									</a>
								</div>
								<hr>
								<div>
									<a href="#">
										<h6><i class="fas fa-user-tie"></i> Mr Hadjila Fethallah </h6> 										
									</a>
								</div>
							</div>	
							<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{asset('uploads/projets/erp.jpg')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 1 membre(s) </p>
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="course-details.html">
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
										<img class="img-fluid" src="{{asset('uploads/projets/securite.png')}}" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 1 membre(s) </p>
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="course-details.html">
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
											<img class="img-fluid" src="{{asset('uploads/projets/bigdata.jpg')}}" alt="">
										</div>
										<div class="meta d-flex justify-content-between">
											<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 1 membre(s) </p>
										</div>									
									</div>
									<div class="details" style="height:50px;">
										<a href="course-details.html">
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
											<img class="img-fluid" src="{{asset('uploads/projets/securite.png')}}" alt="">
										</div>
										<div class="meta d-flex justify-content-between">
											<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> 1 membre(s) </p>
										</div>									
									</div>
									<div class="details" style="height:50px;">
										<a href="course-details.html">
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
			</section>
			<!-- End popular-courses Area -->	
@endsection
