{{-- @extends('layouts.master') --}}
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				@extends('layouts.master2')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')

@endsection
@section('content')

				{{-- top rated courses --}}
				<div class="container py-5">
					<!-- Main row wrapper with bottom margin -->
					<div class="row mb-5">
						@foreach ($courses as $course)
						<!-- Card column wrapper with bottom margin -->
						<div class="col-12 col-md-6 col-lg-4 mb-5">
							<!-- Card wrapper for max-width control -->
							<div class="mx-auto" style="max-width: 380px;">
								<div class="card h-100 border-0 shadow-sm rounded-4">
									<!-- Image wrapper -->
									<div class="position-relative">
										@if($course->image)
										<img 
											src="{{ asset('storage/'.$course->image) }}"
											class="card-img-top rounded-top-4"
											style="height: 200px; object-fit: cover;"
											alt="{{ $course->name }}"
										>
										@else
										<img 
											src="{{URL::asset('assets/img/course/social.png')}}"
											class="card-img-top rounded-top-4"
											style="height: 200px; object-fit: cover;"
											alt="Default course image"
										>
										@endif
									</div>
				
									<!-- Card content wrapper -->
									<div class="card-body p-4">
										<!-- Title and price wrapper -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<!-- Title wrapper for width control -->
											<div class="pe-3" style="max-width: 65%;">
												<h5 class="card-title fw-bold text-dark mb-0 text-truncate" 
													data-bs-toggle="tooltip" 
													title="{{ $course->name }}">
													{{ $course->name }}
												</h5>
											</div>
											<!-- Price wrapper -->
											<div>
												<span class="badge bg-primary rounded-pill px-3 py-2 fs-6">
													${{ number_format($course->price, 2) }}
												</span>
											</div>
										</div>
				
										<!-- Meta info wrapper -->
										<div class="d-flex flex-wrap gap-2 mb-3">
											<span class="badge bg-light text-dark d-flex align-items-center">
												<i class="far fa-clock me-2"></i>
												{{ $course->duration }} hours
											</span>
											@if($course->category)
											<span class="badge bg-light text-dark d-flex align-items-center">
												<i class="fas fa-tag me-2"></i>
												{{ $course->category }}
											</span>
											@endif
										</div>
				
										<!-- Description wrapper -->
										<div class="mb-4">
											<p class="card-text text-muted mb-0">
												{{ Str::limit($course->description, 80) }}
											</p>
										</div>
				
										<!-- Button wrapper -->
										<div class="d-grid">

										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
@endsection

@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection
				<!-- /breadcrumb -->
