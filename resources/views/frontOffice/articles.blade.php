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
                   
                    
                </div>
                
            </div>

            <div class="container row align-items-center">
                <ul style="list-style-type: square;">
                    @foreach($articles as $article)
                            <li>
                                <div class="comment-list">
                                    <div class="single-comment single-reviews justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="desc">
                                                <h5>
                                                    <a href="{{url('frontOffice/article/'.$article->id.'/details')}}"><h4>{{$article->titre}}</h4></a>                                                </h5>
                                                </h5>
                                                <div class="row container   ">
                                                    @foreach($article->users as $user)
                                                        <i><span>{{$user->name}} {{$user->prenom}},</span></i> 
                                                        &nbsp;
                                                    @endforeach
                                                </div>
                                                <p class="comment">
                                                    {{$article->resume}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </li>
                            <hr>
                    @endforeach
                </ul>
            </div>
            <small> <div class="row d-flex align-items-center justify-content-center"> {{$articles->links()}} </div>
        </div>
    </section>
@endsection