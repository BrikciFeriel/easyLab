@extends('layouts.frontOffice')

@section('banner')
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        A propos	
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/apropos')}}"> A propos</a></p>
                </div>	
            </div>
        </div>
    </section>
@endsection

@section('content')

    <section class="about_area p_120">
        <div class="container">
            <div class="main_title" style="text-align:center;">
                <br>
                <h2>Présentation du laboratoire de recherche informatique</h2>
                <p style="font-size:26px; font-family:cursive;"> Notre recherche avance, la vie progresse</p>
            </div>
                
                <div  style="text-align:center;">
                        <img  src="{{asset('uploads/specialite/about.jpg')}}" alt="">
                </div>
            
            <div class="about_details">
                <br>
                <p>
                        &nbsp;  Le LRI, Laboratoire Mixte de Recherche de l'Université de Tlemcen, est un laboratoire de recherche en informatique se consacrant à la modélisation et la résolution de problèmes fondamentaux motivés par les applications, ainsi qu'à la mise en oeuvre et la validation des solutions au travers de partenariats académiques comme le département de Mathématique et de Physique Electronique.
                        Les axes fédérateurs sont :
                        Sûreté, sécurité, fiabilité ;
                        Science des données, intelligence et optimisation ; 
                        Systèmes communicants.
                        Le LRI répond à ces challenges à différents niveaux thématiques au sein des 3 départements.
                        
                        Bien que récemment agréé et créé, le LRI est doté déja d'une composante humaine assez riche et multidisciplinaire. Le LRI est composé de 33 chercheurs, 1 ingénieur et 1 secrétaire. Il accueille plus d'une dizaine de doctorants, près d'une trentaine de MA, 4MC et un professeur. La recherche est organisée en quatre équipes regroupées en plusieures thématiques : Systèmes Intelligents, Données et Apprentissage Artificiel, Réseaux et Systèmes,  Modélisation et Optimisation, Web sémantique. 
                        
                        La production scientifique est en moyenne d'une vintaine de publications par an.
                        
                        La coopération internationale est une nécessité pour notre laboratoire Il entretient des relations suivies avec des universités françaises et tunisiennes. En complément de la recherche académique, le LRI a une récente coopération avec le monde industriel et des partenaires socio économiques.
                        
                        Le laboratoire est grandement impliqué dans des enseignements liés à la recherche en master (Master Réseaux, Master Génie Logiciel, Master SIC et MID). L'école doctorale "Réseaux et Services" du département Informatique de l'Université de Tlemcen accueille les doctorants du laboratoire.
                        </p>
                        <br><br>
            </div>
        </div>
    </section>



    <!-- Start review Area -->
    <center><h1>Nos équipes</h1></center>
    <section class="review-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <small><img src="{{asset('uploads/specialite/RSD.jpg')}}" alt=""></small> 
                            <div class="container"> <h4>RSDS</h4> <br> <h6>(Réseau, service distribués et systèmes)</h6> </div>
                        </div>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                             <small><img src="{{asset('uploads/specialite/IL.jpg')}}" alt=""></small> 
                            <div class="container"> <h4>ILS</h4> <br> <h6>(Ingénierie logicielle sécurisée)</h6> </div>
                        </div>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <small><img src="{{asset('uploads/specialite/SIDK.jpg')}}" alt=""></small> 
                            <div class="container"> <h4>SIDK</h4> <br> <h6>(Système d'information et de connaissance)</h6> </div>
                        </div>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <small><img src="{{asset('uploads/specialite/IA.jpg')}}" alt=""></small> 
                             <div class="container"> <h4>IA</h4> <br> <h6>(Intelligence Artificielle)</h6> </div>
                        </div>
                    </div>																									
                </div>
            </div>
        </div>	
    </section>
    <!-- End review Area -->	
@endsection