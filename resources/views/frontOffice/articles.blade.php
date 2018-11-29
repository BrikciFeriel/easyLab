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
                @foreach($articles as $article)
                    <div class="col-lg-6 pb-30">
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                @if($article->type =="Brevet")
                                <img class="img-fluid" src="{{asset('uploads/articles/brevet.jpg')}}" alt="">
                                @endif

                                @if($article->type=="Livre")
                                <img class="img-fluid" src="{{asset('uploads/articles/livre.jpg')}}" alt="">
                                @endif

                                @if($article->type=="Article long")
                                <img class="img-fluid" src="{{asset('uploads/articles/article_long.jpg')}}" alt="">
                                @endif

                                @if($article->type=="Article court")
                                <img class="img-fluid" src="{{asset('uploads/articles/article_court.jpg')}}" alt="">
                                @endif

                                @if($article->type=="Publication(Revue)")
                                <img class="img-fluid" src="{{asset('uploads/articles/publication.jpg')}}" alt="">
                                @endif

                                @if($article->type=="Chapitre d'un livre")
                                <img class="img-fluid" src="{{asset('uploads/articles/chapitre.jpg')}}" alt="">
                                @endif

                                @if($article->type=="Poster")
                                <img class="img-fluid" src="{{asset('uploads/articles/poster.jpg')}}" alt="">
                                @endif
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>{{$article->mois}}, {{$article->annee}}</p>
                                <a href="{{url('frontOffice/article/'.$article->id.'/details')}}"><h4>{{$article->titre}}</h4></a>
                                <p>
                                    {{$article->resume}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                        
            </div>
        </div>	
    </section>
    <!-- End articles-list Area -->
@endsection