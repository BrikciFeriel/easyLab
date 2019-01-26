@extends('layouts.frontOffice')	
			  
			@section('banner')
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								
							</h1>	
							<p class="text-white link-nav"></p>
						</div>	
					</div>
				</div>
			</section>
			@endsection	
@section('content')
 <div class=" container">
          <div style="padding-top: 30px">
              <h2  style="text-align:center;">Le résultat de la rechereche</h2>
              <br>
          </div>
            <!-- /.box-header -->
        <div class="box-body container">
              
          @if(count($equipes) > 0)
            @if(isset($equipes))
            <br><h3>Equipes:</h3><br><br>				
                  <div class="row">
                    @foreach($equipes as $equipe)
                    <div class="col-12 col-md-2 thumb">
                    @if($equipe->photo)
                      <img class="img-fluid"  src="{{asset($equipe->photo)}}" alt="">	
                    @else
                      <img class="img-fluid" src="{{asset('uploads/specialite/aboutus.jpg')}}" alt="">
                    @endif
                    </div>
                    <div class="detials col-12 col-md-4">
                    
                    <a href="{{url('/frontOffice/equipe/'.$equipe->id.'/details')}}"><h2>{{$equipe->achronymes}}</h2></a>
                    <p><h4>{{$equipe->intitule}}</h4></p>
                    </div>
                    @endforeach
                  </div>
            @endif
          @endif

          @if(count($membres) > 0)
            @if(isset($membres))

            <br><h3>Membres:</h3><br><br>
            <div class="row">
            @foreach($membres as $membre)
            <div class="col-md-3 " style="padding-bottom: 30px">
              <div class="widget-wrap" >
    
    
                <div class="single-sidebar-widget user-info-widget">
                  <div class="text-center">
            
                    <img class="rounded-circle" src="{{asset($membre->photo)}}" alt="" style="width: 150px; ">
                    <a href="{{url('frontOffice/'.$membre->id.'/details')}}"><h4>{{$membre->name}} {{$membre->prenom}}</h4></a>
                    <ul class="social-links">
                      <li><a href="{{$membre->lien_linkedin}}"><i class="fab fa-linkedin"></i></a></li>
                      <li><a href="https://github.com/"><i class="fab fa-github"></i></a></li>
                      <li><a href="{{$membre->lien_rg}}"><i class="fab fa-researchgate"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>	
            @endforeach	
            </div>
            @endif
            @endif

            @if(count($theses) > 0)
              @if(isset($theses))
              <br><h3>Theses:</h3><br><br>
              <ul style="list-style-type: square;">
              @foreach($theses as $these)
              <li>
                  <div class="comment-list">
                      <div class="single-comment single-reviews justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                              <div class="desc">
                                  <h5>
                                      <h4>{{$these->titre}}</h4>      
                                  </h5>
                                  <p class="comment">
                                      {{$these->sujet}} <br>
                                      {{$these->date_soutenance}} <br>
                                      {{$these->encadreur_int}},
                                      {{$these->encadreur_ext}} 
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div> 
              </li>
              <hr>
            @endforeach
          </ul>
              @endif
            @endif

            @if(count($articles) > 0)
              @if(isset($articles))
              <br><h3>Articles:</h3><br>
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
              @endif
            @endif

            @if(count($projets) > 0)
              @if(isset($projets))
              <br><h3>Projets:</h3><br><br>
              <div class="row">
              @foreach($projets as $projet)
							<div class="single-popular-carusel col-lg-4 col-md-6">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>
												
										@if($projet->photo)
										
											<img class="img-fluid"  src="{{asset($projet->photo)}}" alt="">	
											
										@else
										<img class="img-fluid" src="{{asset('uploads/projets/projet.jpg')}}" alt="">
										@endif
									</div>									
								</div>
								<div class="details" style="height:50px;">
									<a href="{{url('frontOffice/projet/'.$projet->id.'/details')}}">
										<h4>
											{{ $projet->intitule }}
										</h4>
									</a>
								</div>
								<hr>
								<div>
									<a href="{{url('frontOffice/'.$projet->chef_id.'/details')}}">
										<h6><i class="fas fa-user-tie"></i> {{ $projet->chef->name}} {{ $projet->chef->prenom}} </h6> 										
									</a>
								</div>
								
							</div>		
            @endforeach
              </div>
              @endif
              
            @endif

            @if(count($actualites) > 0)
            @if(isset($actualites))

            <br><h3>Actualites:</h3><br><br>
            <div class="row">
                    @foreach($actualites as $actualite)
                    <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            @if($actualite->photo)
                                <img class="img-fluid"  src="{{asset($actualite->photo)}}" alt="">	
                            @else
                            <img class="img-fluid" src="{{asset('uploads/actualite.jpg')}}" alt="">
                            @endif								</div>
                        <div class="detials col-12 col-md-6">
                            <!--  -->
                            <p>{{$actualite->date}}</p>
                            <a href="{{url('/frontOffice/actualite/'.$actualite->id.'/details')}}">
                                <h4>{{$actualite->titre}}</h4></a>
                            <p>
                                {{$actualite->detail}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach	
            </div>

            @endif
            @endif


            </div>
            <br>
            <!-- /.box-body -->
            @if((count($equipes) == 0)&&(count($membres) == 0) && (count($theses) == 0) && (count($articles)== 0) && (count($projets) == 0) && (count($actualites) == 0) )
              <p style="text-align:center; margin-bottom: 50px">Aucune information trouvée</p>
            @endif
          </div>        
      </div>     
    </div>
@endsection