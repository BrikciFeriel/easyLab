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
                    <p class="text-white link-nav"><a href="{{url('/frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/articles')}}"> Articles<span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/detailsArticle')}}"> Détails</a></p>
                </div>	
            </div>
        </div>
    </section>
@endsection

@section('content')
<!-- Start article-details Area -->
<section class="event-details-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 event-details-left">
                <div class="main-img">
                    <img class="img-fluid" src="{{asset('uploads/articles/informatique_detail.jpg')}}" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 left-contents">
                            <div class="jq-tab-wrapper" id="horizontalTab">
                                <div class="jq-tab-menu">
                                    <div class="jq-tab-title active" data-tab="1">Résumé</div>
                                    <div class="jq-tab-title" data-tab="2">Participants</div>
                                    <div class="jq-tab-title" data-tab="3">Détail</div>
                                </div>
                                <div class="jq-tab-content-wrapper">
                                    <div class="jq-tab-content active" data-tab="1">
                                        A Reference Model for Educational Adaptive Web Applications. 
                                        in Intelligent and Adaptive Educational-Learning Systems, Springer Berlin Heidelberg	
                                    </div>
                                    <div class="jq-tab-content" data-tab="2">
                                            <section class="about_area p_120">

                                                <div class="container">

                                                    <div class="row container">

                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                            <img class="rounded-circle" src="{{asset('uploads/team/ChikhAzeddine.jpg')}}" alt="" style="width: 110px; margin-bottom: 10px ">
                                                            <a href="#"><h4>ChikhAzeddiner</h4></a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-4">
                                                            <div class="text-center">
                                                            <img class="rounded-circle" src="{{asset('uploads/team/MohammedMessabihi.jpg')}}" alt="" style="width: 110px; margin-bottom: 10px ">
                                                            <a href="#"><h4>Mohammed Messabihi</h4></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <div class=" container">
                                                        <h5>-> Participants externes</h5>
                                                         <br>
                                                        <p>S. Georges, K. Sehaba</p>
                                                    </div>
                                                    
                                                </div>
                                            </section>
                                        
                                    </div>
                                    <div class="jq-tab-content" data-tab="3">
                                        <ul class="course-list">
                            
                                            <li class="justify-content-between d-flex">
                                                <a class=" " href="#"><i class="fas fa-file-pdf"></i> Ce ci est un fichier PDF</a>
                                            </li>
                                            <li class="justify-content-between d-flex">
                                                <a class=" " href="#"><i class="fas fa-file-pdf"></i> Ce ci est un fichier PDF</a>
                                            </li>
                                            <li class="justify-content-between d-flex">
                                                <a class=" " href="#"><i class="fas fa-file-pdf"></i> Ce ci est un fichier PDF</a>
                                            </li>
                                            <li class="justify-content-between d-flex">
                                                <a class=" " href="#"><i class="fas fa-file-pdf"></i> Ce ci est un fichier PDF</a>
                                            </li>

                                        </ul>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 event-details-right">
                <div class="single-event-details">
                    <h4>Details</h4>
                    <ul class="mt-10">
                        <li class="justify-content-between d-flex">
                            <span>Type</span>
                            <span>Article long</span>
                        </li>
                        <li class="justify-content-between d-flex">
                            <span>Nom de la conférence</span>
                            <span>EIAH 2015</span>
                        </li>
                        <li class="justify-content-between d-flex">
                            <span>Nom du journal</span>
                            <span></span>
                        </li>														
                    </ul>
                </div>
                <div class="single-event-details">
                    <h4>Date et Lieu</h4>
                    <ul class="mt-10">
                        <li class="justify-content-between d-flex">
                            <span>Date</span>
                            <span>Janvier, 2015</span>
                        </li>
                        <li class="justify-content-between d-flex">
                            <span>Ville</span>
                            <span>Agadir</span>
                        </li>
                        <li class="justify-content-between d-flex">
                            <span>Pays</span>
                            <span>Maroc</span>
                        </li>														
                    </ul>
                </div>
                <div class="single-event-details">
                    <h4>Organiser</h4>
                    <ul class="mt-10">
                        <li class="justify-content-between d-flex">
                            <span>ISSN</span>
                            <span></span>
                        </li>
                        <li class="justify-content-between d-flex">
                            <span>ISBN</span>
                            <span></span>
                        </li>
                        <li class="justify-content-between d-flex">
                            <span>DOI</span>
                            <span></span>
                        </li>														
                    </ul>
                </div>														
            </div>
        </div>
    </div>	
</section>
<!-- End article-details Area -->	
@endsection