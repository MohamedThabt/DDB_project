@extends('layouts.master')
@section('css')
<!--Internal  Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">course-details</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('course.index') }}">/Courses</a></span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
		{{--  the course details  --}}
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body h-100">
								<div class="row row-sm ">
									<div class=" col-xl-5 col-lg-12 col-md-12">
										<div class="preview-pic tab-content">
										  <div class="tab-pane active" id="pic-1"><img src="{{URL::asset('assets/img/course/social.png')}}" alt="image"/></div>
										</div>
									</div>
									<div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
										<h4 class="product-title mb-1">{{ $course->name }}</h4>
										<div class="rating mb-1">
											{{-- stars (review) --}}
											<div class="stars">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star text-muted"></span>
												<span class="fa fa-star text-muted"></span>
											</div>
											{{-- duration --}}
											<div class="d-flex align-items-center">
												<span class="badge bg-light text-dark d-flex align-items-center">
													<i class="far fa-clock me-2"></i>
													{{ $course->duration }} hours
												</span>
											</div>
											{{-- reviews --}}
											<span class="review-no">{{ $course->reviews->count() }} reviews</span>
										</div>
										{{-- price --}}
										<h6 class="price">current price: <span class="h3 ml-2">{{ $course->price }}</span></h6>
										{{-- description --}}
										<p class="text-muted tx-13 mb-1">{{ $course->description }}</p>
										<div class="action">
											<a href="{{ route('coming-soon') }}" class="btn btn-primary add-to-cart">
												Buy Now
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				{{-- Related courses --}}
				<!-- row -->
				{{-- <div class="row">
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100">
								<div class="text-center">
									<img src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<span>Items</span>
										<a>Sport shoes</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<span>$799</span>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 pl-2 pr-2 ">
								<a href="#" class="btn btn-primary"> View More</a>
								<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100">
								<div class="text-center">
									<img src="{{URL::asset('assets/img/ecommerce/04.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<span>Fashion</span>
										<a>Mens Shoes</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<span>$799</span>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 pl-2 pr-2 ">
								<a href="#" class="btn btn-primary"> View More</a>
								<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100">
								<div class="text-center">
									<img src="{{URL::asset('assets/img/ecommerce/07.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative ">
									<div class="cardtitle">
										<span>Accessories</span>
										<a>Metal Watch</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<span>$799</span>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 pl-2 pr-2 ">
								<a href="#" class="btn btn-primary"> View More</a>
								<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card item-card">
							<div class="card-body pb-0 h-100">
								<div class="text-center">
									<img src="{{URL::asset('assets/img/ecommerce/08.jpg')}}" alt="img" class="img-fluid">
								</div>
								<div class="card-body cardbody relative">
									<div class="cardtitle">
										<span>Accessories</span>
										<a>Metal Watch</a>
									</div>
									<div class="cardprice">
										<span class="type--strikethrough">$999</span>
										<span>$799</span>
									</div>
								</div>
							</div>
							<div class="text-center border-top pt-3 pb-3 pl-2 pr-2 ">
								<a href="#" class="btn btn-primary"> View More</a>
								<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row --> --}}

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
@endsection