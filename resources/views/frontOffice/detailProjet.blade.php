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
                        <p class="text-white link-nav"><a href="{{url('frontOffice')}}">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/projets')}}"> Projets <span class="fas fa-angle-right"></span>  <a href="{{url('/frontOffice/detailProjet')}}"> Détail projet</a></p>
                    </div>	
                </div>
            </div>
        </section>
    <!-- End banner Area -->
@endsection

@section('content')
<!-- Start course-details Area -->
<section class="course-details-area pt-60">

    <div class="container-fluid" style="text-align:center;"><h1>Big Data</h1></div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left-contents">
                <div class="main-image">
                    <img class="img-fluid" src={{asset('uploads/detail_projet/bigdata.jpeg')}} alt="">
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
                                <p>La plupart des entreprises se contentent d'exploiter une part réduite des informations
                                     générées et recoltées dans leur SI pour produire toujours les mêmes rapports. 
                                     Pourtant, les possibilités ouvertes par le mouvement Big Data sont alléchantes :
                                </p>
                            </div>
                            <div class="tab_panel_section">
                                <ul>
                                    <li>-> Tracer des comportements d'achat pour détecter les fraudes potentielles au milieu de millions de transactions.</li>
                                    <li>-> Tracer des comportements d'achat pour détecter les fraudes potentielles au milieu de millions de transactions.</li>
                                    <li>-> Tirer parti des dialogues continus du web social pour surveiller des tendances, pour faire de la veille ou de la prévision.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="jq-tab-content" data-tab="2">
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
                        <div class="jq-tab-content" data-tab="3">
                                <section class="about_area p_120">

                                        <div class="container">

                                            <div class="text-center">
                                                <div >
                                                    <img class="rounded-circle" src="{{asset('uploads/photo/avatar5.png')}}" alt="" style="width: 120px; ">
                                                    <a href="#"><h4> Mr Hadjila Fethallah</h4></a>
                                                        <p>(Chef du projet)</p>
                                            </div>
                                            <br><br>
                                            <div class="row container">

                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                    <img class="rounded-circle" src="{{asset('uploads/team/ChikhAzeddine.jpg')}}" alt="" style="width: 110px; margin-bottom: 10px ">
                                                    <a href="#"><h4>ChikhAzeddiner</h4></a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                    <img class="rounded-circle" src="{{asset('uploads/team/ChikhAzeddine.jpg')}}" alt="" style="width: 110px; margin-bottom: 10px ">
                                                    <a href="#"><h4>ChikhAzeddiner</h4></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                    <img class="rounded-circle" src="{{asset('uploads/team/ChikhAzeddine.jpg')}}" alt="" style="width: 110px; margin-bottom: 10px ">
                                                    <a href="#"><h4>ChikhAzeddiner</h4></a>
                                                    </div>
                                                </div>
                                            </div>
                            
                                    </section>
                        </div>
                        <div class="jq-tab-content" data-tab="4">
                            <section class="top-category-widget-area pt-90 pb-90 ">
                                <div class="container">
                                    <div class="row">		
                                        <div class="col-lg-4">
                                            <div class="single-cat-widget">
                                                <div class="content relative">
                                                    <div class="overlay overlay-bg"></div>
                                                      <div class="thumb">
                                                           <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/denoun.jpg')}}" alt="">
                                                        </div>
                                                      <div class="content-details">
                                                        <h4 class="content-title mx-auto text-uppercase">Groupe DENNOUNI</h4>
                                                        <span></span>								        
                                                        <p>Société de distribution d'engins de travaux publics</p>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-cat-widget">
                                                <div class="content relative">
                                                    <div class="overlay overlay-bg"></div>
                                                      <div class="thumb">
                                                           <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/chu.jpg')}}" alt="">
                                                        </div>
                                                      <div class="content-details">
                                                        <h4 class="content-title mx-auto text-uppercase">CHU Tlemcen</h4>
                                                        <span></span>								        
                                                        <p>Centre Hospitalo-Universitaire Dr Tidjani Damerdji de Tlemcen</p>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-cat-widget">
                                                <div class="content relative">
                                                    <div class="overlay overlay-bg"></div>
                                                      <div class="thumb">
                                                           <img class="content-image img-fluid d-block mx-auto" src="{{asset('img/kherbouch.jpg')}}" alt="">
                                                        </div>
                                                      <div class="content-details">
                                                        <h4 class="content-title mx-auto text-uppercase">Groupe Kherbouche</h4>
                                                        <span></span>
                                                        <p>Sociétés commerciales pluri-disciplinaires</p>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>												
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
                            <p> 21  Novembre 2018</p>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <h5> <i class="fas fa-calendar-alt"></i> Date fin</h5>
                            <p> 21  Janvier 2019</p>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <h5> <i class="fas fa-user-tie"></i> Chef de projet</h5>
                            <p>Mr Hadjila Fethallah</p>
                        </a>
                    </li>
                    <li class="justify-content-between d-flex" >
                            <h5> <i class="fas fa-ellipsis-v"></i> Type </h5>
                            <span style="color:black"> Article long</span>
                    </li>
                    <li class="justify-content-between d-flex">
                            <h5> <i class="fas fa-list-ul"></i> Theme </h5>
                            <span style="color:black">Intelligence artificielle</span>
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
            <div class="row">
                    <div class="single-popular-carusel col-lg-3 col-md-6">
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
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>	
                                <img class="img-fluid" src="{{asset('uploads/projets/erp.jpg')}}" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                                <p style="color:rgb(33, 117, 185);"><span class="lnr lnr-users"></span> 4 membre(s) </p>
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
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>	
                                <img class="img-fluid" src="{{asset('uploads/projets/bigdata.jpg')}}" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                                <p style="color:rgb(33, 117, 185);"><span class="lnr lnr-users"></span> 6 membre(s) </p>
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
                                Mr Tadlaoui Mohammed										
                            </p>
                        </div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>	
                                <img class="img-fluid" src="{{asset('uploads/projets/erp.jpg')}}" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                                <p style="color:rgb(33, 117, 185);"><span class="lnr lnr-users"></span> 4 membre(s) </p>
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