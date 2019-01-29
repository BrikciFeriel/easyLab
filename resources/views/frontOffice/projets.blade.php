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
                    <p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="fas fa-angle-right"></span>  <a href="courses.html"> Projets</a></p>
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
						</div>
						
					</div>
									
					<div class="row">
				<table id="datatable" class="table table-bordered dt-responsive nowrap">
					<tbody>
						<tr>
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
									@foreach($nbr as $nbrs)
                       					 @if($nbrs->projet_id == $projet->id)
									<div class="meta d-flex justify-content-between">
										<p style="color:rgb(33, 117, 185);"><i class="fas fa-users"></i> {{$nbrs->total}} membre(s) </p>
									</div>	
									@endif
									@endforeach									
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
						</tr>
					</tbody>
				</table>								
					</div>
					<small>	<div class="row d-flex align-items-center justify-content-center"> {{$projets->links()}} </div>
					</small>
				</div>	
			</section>
			<!-- End popular-courses Area -->	
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        // Default Datatable
        $('#datatable').DataTable({
            keys: true
        });
        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'print']
        });
        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });
        table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );
</script>
<!-- Datatable js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Key Tables -->
<script src="{{asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<!-- Selection table -->
<script src="{{asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
@endsection