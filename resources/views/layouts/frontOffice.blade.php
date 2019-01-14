<!DOCTYPE html>
<html>
	<head>
	<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('fav.png')}}">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>LRIT</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">			
			<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('css/main.css')}}">
			<link rel="stylesheet" href="{{asset('css/search.css')}}">

			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

	</head>
	<body>
<i class="fab fa-researchgate"></i>
		<header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="https://www.facebook.com/univtlemcen/"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.linkedin.com/company/abou-beker-belkaid-university-of-tlemcen/"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
			  				</ul>			
			  			</div>
			  			

			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
							  <a href="tel:043.41.11.89"> <i class="fas fa-phone"></i> <span class="text">043.41.11.89</span></a>  
							  <a href="mailto:lrit@lab.com"><span class="lnr lnr-envelope"></span> <span class="text">lrit@lab.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div class="col-md-1" id="logo">
			        <a href="index.html"><img src="{{asset('LRIT_logo.png')}}" alt="" title="LRIT" style="width: 180%" /></a>
			      </div>

			      <div style="padding-left : 80px;">
			      	<form class="search-form" action="#">
			            <input placeholder="Search" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search '">
			            <button type="submit"><i class="fa fa-search"></i></button>
			        </form>
			      </div>
			   
			      <div class="col-md-7">
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{url('frontOffice')}}">Accueil</a></li>
			          <li><a href="{{url('frontOffice/actualites')}}">Actualités</a></li>
			          <li><a href="{{url('frontOffice/apropos')}}">A propos</a></li>
			          <li><a href="{{url('frontOffice/equipes')}}">Equipes</a></li>
			          <li><a href="{{url('frontOffice/membres')}}">Membres</a></li>
			          <li><a href="{{url('frontOffice/projets')}}">Projets</a></li>			          		          
			          <li><a href="{{url('frontOffice/contact')}}">Contact</a></li>
			          <li><a href="{{url('/')}}">Login</a></li>

			        </ul>
			      </nav><!-- #nav-menu-container -->
			      </div>		    		
		    	</div>
		    </div>
		</header><!-- #header -->


				@yield('banner')



@yield('content')


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Pages populaires</h4>
								<ul>
									<li><a href="{{url('/frontOffice/actualites')}}">Actualités</a></li>
									<li><a href="{{url('/frontOffice/projets')}}">Projets</a></li>
									<li><a href="{{url('/frontOffice/articles')}}">Publications</a></li>
									<li><a href="{{url('/frontOffice/membres')}}">Membres</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Autres liens</h4>
								<ul>
									<li><a href="https://www.univ-tlemcen.dz/fr">Université de tlemcen</a></li>
									<li><a href="https://www.mesrs.dz/textes-reglementaires">Textes législatifs et réglementaires </a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Contactez nous</h4>
								<ul>
									<li><i class="fas fa-phone"></i> 043.41.11.89</li>
									<li><i class="fas fa-at"></i> lrit@lab.com</li>
									<li><i class="fas fa-map-marker-alt"></i> 22, Rue Abi Ayed Abdelkrim Fg Pasteur B.P 119 13000, Tlemcen, Algérie</li>
								</ul>								
							</div>
						</div>																	
						<div class="col-md-3">
							<div class="col-md-8" id="logo">
								<img src="{{asset('LRIT_logo.png')}}" style="width: 140%" />
							</div>
							<div class="col-md-10">
									<div class="footer-bottom row align-items-center justify-content-between">
										<div class="col-md-12 footer-social">
											<a href="https://www.facebook.com/univtlemcen/"><i class="fab fa-facebook-f"></i></a>
											<a href="https://www.linkedin.com/company/abou-beker-belkaid-university-of-tlemcen/"><i class="fab fa-linkedin-in"></i></a>
											<a href="#"><i class="fab fa-google-plus-g"></i></a>
										</div>
									</div>
							</div>
						</div>											
					</div>

											
				</div>
			</footer>	
			<!-- End footer Area -->



			<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('js/easing.min.js')}}"></script>			
			<script src="{{asset('js/hoverIntent.js')}}"></script>
			<script src="{{asset('js/superfish.min.js')}}"></script>	
			<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>	
    		<script src="{{asset('js/jquery.tabs.min.js')}}"></script>						
			<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{asset('js/owl.carousel.min.js')}}"></script>									
			<script src="{{asset('js/mail-script.js')}}"></script>	
			<script src="{{asset('js/main.js')}}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
    			$('.icon').click(function(){
       				 $('.search').toggleClass('active');
   				 });
			});	
			</script>
	</body>
</html>