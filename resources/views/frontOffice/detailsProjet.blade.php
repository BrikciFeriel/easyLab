@extends('layouts.frontOffice')

@section('banner')
    <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">   
            <div class="overlay overlay-bg"></div>
            <div class="container">             
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Détail projet       
                        </h1>   
                        <p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/projets')}}"> Projets <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/detailsProjet')}}"> Détails</a></p>
                    </div>  
                </div>
            </div>
        </section>
    <!-- End banner Area -->
@endsection

@section('content')
<!-- Start course-details Area -->
<section class="course-details-area pt-60">

    <div class="container-fluid" style="text-align:center;"><h1>{{$projet->intitule}}</h1></div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left-contents">
                <div class=" super-container main-image justify-content-center">
                    @if($projet->photo)
                    
                        <img class="img-fluid"  src="{{asset($projet->photo)}}" alt="" style=" height:300px;width:700px;">
                        
                    @else   
                    <img class="img-fluid" src="{{asset('uploads/projets/projet.jpg')}}" alt="" style="height:300px;width:700px">
                    @endif
                </div>
                <div class="jq-tab-wrapper" id="horizontalTab">
                    <div class="jq-tab-menu">
                        <div class="jq-tab-title active" data-tab="1">Description</div>
                        <div class="jq-tab-title" data-tab="2">Fichiers</div>
                        <div class="jq-tab-title" data-tab="3">Membres</div>
                        <div class="jq-tab-title" data-tab="4">Partenaires</div>
                    </div>
                    <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content active" data-tab="1">
                            <div class="tab_panel_text">
                                <p>
                                    {{$projet->resume}}
                                </p>
                            </div>
                        </div>
                        <div class="jq-tab-content" data-tab="2">
                            <ul class="course-list">
                                <h6>Lien</h6>
                                <li class="justify-content-between d-flex">
                                    <a class=" " href="{{$projet->lien}}"><i class="fas fa-link"></i> {{$projet->lien}}</a>
                                </li>
                                <h6>Fichier</h6>
                                <li class="justify-content-between d-flex">
                                    <a class=" " href="{{asset($projet->detail)}}"><i class="fas fa-file-pdf"></i> {{$projet->detail}}</a>
                                </li>

                            </ul>
                        </div>
                        <div class="jq-tab-content" data-tab="3">
                                <section class="about_area p_120">

                                        <div class="container">

                                            <div class="text-center">
                                                @if($projet->chef)
                                                <div >
                                                    <img class="rounded-circle" src="{{asset($projet->chef->photo)}}" alt="" style="width: 120px; ">
                                                    <a href="#"><h4> {{ $projet->chef->name}} {{ $projet->chef->prenom}}</h4></a>
                                                        <p>(Chef du projet)</p>
                                                </div>
                                                @endif
                                            <br><br>
                                            <div class="row container">
                                                @foreach($membres as $membre)
                                                
                                                <div class="col-md-4">
                                                        <div class="text-center container">
                                                        <img class="rounded-circle" src="{{asset($membre->photo)}}" alt="" style="width: 110px; margin-bottom: 10px ">
                                                        <a href="{{url('frontOffice/'.$membre->id.'/details')}}"><h4>{{$membre->name}} {{$membre->prenom}}</</h4></a>
                                                        </div>
                                                    </div>
                                                  
                                                @endforeach
                                            </div>
                            
                                    </section>
                        </div>
                        <div class="jq-tab-content" data-tab="4">
                            <section class="top-category-widget-area pt-20 pb-20 ">
                               <div class="container">
                                   <div class="row">
                                       @foreach($partenaires as $partenaire)        
                                       <div class="col-lg-4">
                                           <div class="single-cat-widget">
                                               <div class="content relative">
                                                   <div class="overlay overlay-bg"></div>
                                                   
                                                   <div class="thumb">
                                                       <img style="height:200px;" class="content-image img-fluid d-block mx-auto" src="{{asset($partenaire->photo)}}" alt="">
                                                   </div>
                                                   <div class="content-details">
                                                       <h4 class="content-title mx-auto text-uppercase">{{$partenaire->nom}}</h4>
                                                       <span></span>        
                                                   </div>
                                               </div>
                                           </div>
                                       </div>   
                                       @endforeach                                          
                                   </div>
                               </div>   
                           </section>
                           
                        </div>
                                                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4 right-contents">
                <ul>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <h5> <i class="fas fa-calendar-alt"></i> Date début</h5>
                            <p> {{$projet->date_debut}}</p>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <h5> <i class="fas fa-calendar-alt"></i> Date fin</h5>
                            <p> {{$projet->date_fin}}</p>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="{{url('frontOffice/'.$projet->chef_id.'/details')}}">
                            <h5> <i class="fas fa-user-tie"></i> Chef de projet</h5>
                        <p>{{$projet->chef->name}} {{$projet->chef->prenom}}</p>
                        </a>
                    </li>
                    <li class="justify-content-between d-flex" >
                            <h5> <i class="fas fa-ellipsis-v"></i> Type </h5>
                            <span style="color:black"> {{$projet->type}}</span>
                    </li>
                    <li class="justify-content-between d-flex">
                            <h5> <i class="fas fa-list-ul"></i> Theme </h5>
                            <span style="color:black">{{$projet->theme}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>  
</section>
<!-- End course-details Area -->


<!-- Start popular-courses Area --> 

    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Projets similaires</h1>
                    </div>
                </div>
            </div>
            @if($projets_similaires )
                    
                <div class="row">
                    @foreach($projets_similaires as $projet_similaire)
                        @if($projet_similaire->id != $projet->id)
                            <div class="single-popular-carusel col-lg-4 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                                
                                        @if($projet_similaire->photo)
                                            <img class="img-fluid"  src="{{asset($projet_similaire->photo)}}" alt="">
                                        @else   
                                        <img class="img-fluid" src="{{asset('uploads/projets/projet.jpg')}}" alt="">
                                        @endif
                                    </div>
                                    @foreach($nbr as $nbrs)
                                            @if($nbrs->projet_id == $projet_similaire->id)
                                                <div class="meta d-flex justify-content-between">
                                                    <p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> {{$nbrs->total}} membre(s) </p>
                                                </div>  
                                            @endif
                                    @endforeach                                 
                                </div>
                                <div class="details" style="height:50px;">
                                    <a href="{{url('frontOffice/projet/'.$projet_similaire->id.'/details')}}">
                                        <h4>
                                            {{ $projet_similaire->intitule }}
                                        </h4>
                                    </a>
                                </div>
                                <hr>
                                <div>
                                    <a href="{{url('frontOffice/'.$projet_similaire->chef_id.'/details')}}">
                                        <h6><i class="fas fa-user-tie"></i> {{ $projet_similaire->chef->name}} {{ $projet_similaire->chef->prenom}} </h6>                                       
                                    </a>
                                </div>
                                
                            </div>  
                        @endif  
                @endforeach  
                </div>
            @else
            <div><h5>Aucun projet n'a été trouvé</h5></div>
            @endif
        </div>  
    </section>
    <!-- End popular-courses Area -->
@endsection