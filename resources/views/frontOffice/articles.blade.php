@extends('layouts.frontOffice')

@section('banner')
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Articles	
                    </h1>	
                    <p class="text-white link-nav"><a href="{{url('/frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/articles')}}"> Articles</a></p>
                </div>	
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Start articles-list Area -->
    <section class="events-list-area section-gap event-page-lists">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Liste des articles</h1>
                    </div>
                   
                        <div class=" search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Rechercher un article" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                 
                    <div class="pb-40 col-lg-11  justify-content-center">
                        <center>
                            <div class="button-group-area ">
                            <a href="#" class="genric-btn primary-border circle arrow">Article long</a>
                            <a href="#" class="genric-btn primary-border circle arrow">Article court</a>
                            <a href="#" class="genric-btn primary-border circle arrow">Publication</a>
                            <a href="#" class="genric-btn primary-border circle arrow">Chapitre d'un livre</a>
                            <a href="#" class="genric-btn primary-border circle arrow">Livre</a>	
                            <a href="#" class="genric-btn primary-border circle arrow">Poster</a>	
                            <a href="#" class="genric-btn primary-border circle arrow">Brevet</a>
                        </div>
                        </center>
                        
                    </div>
                    
                </div>
                
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{asset('uploads/articles/informatique.jpg')}}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>avril, 2013</p>
                            <a href="{{url('/frontOffice/detailsArticle')}}"><h4>A Reference Model for Educational Adaptive Web Applications</h4></a>
                            <p>
                                A Reference Model for Educational Adaptive Web Applications. 
                                in Intelligent and Adaptive Educational-Learning Systems, Springer Berlin Heidelberg									</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{asset('uploads/articles/maths.jpg')}}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p> Aout, 2018</p>
                            <a href="event-details.html"><h4>Mathématique et Informatique</h4></a>
                            <p>
                                nous examinerons ici la manière dont informatique fondamentale et sciences mathématiques sont intimement liées 
                                tout autant dans leur développement récent que dans un futur prévisible.									</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{asset('uploads/articles/Dmedical.jpg')}}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>Janvier 2015</p>
                            <a href="event-details.html"><h4>The Universe Through
                            A Child S Eyes</h4></a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{asset('uploads/articles/maths.jpg')}}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p> Aout, 2018</p>
                            <a href="event-details.html"><h4>Mathématique et Informatique</h4></a>
                            <p>
                                nous examinerons ici la manière dont informatique fondamentale et sciences mathématiques sont intimement liées 
                                tout autant dans leur développement récent que dans un futur prévisible.									</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{asset('uploads/articles/informatique.jpg')}}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>avril, 2013</p>
                            <a href="event-details.html"><h4>A Reference Model for Educational Adaptive Web Applications</h4></a>
                            <p>
                                A Reference Model for Educational Adaptive Web Applications. 
                                in Intelligent and Adaptive Educational-Learning Systems, Springer Berlin Heidelberg									</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{asset('uploads/articles/Dmedical.jpg')}}" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>Janvier 2015</p>
                            <a href="event-details.html"><h4>The Universe Through
                            A Child S Eyes</h4></a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>
                
                        
            </div>
        </div>	
    </section>
    <!-- End articles-list Area -->
@endsection