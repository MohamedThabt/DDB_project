@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Pricing</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<h4 class="card-title mt-4">Column pricing table</h4>
				<div class="row">
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center pricing">
								<div class="card-category">Basic</div>
								<div class="display-4 my-4">$10</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>2 </strong> FreeDomain Name</li>
									<li><strong>2</strong> One-Click Apps</li>
									<li><strong>1</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-primary btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center pricing ">
								<div class="card-category">Premium</div>
								<div class="display-4 my-4">$49</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>3 </strong> FreeDomain Name</li>
									<li><strong>5</strong> One-Click Apps</li>
									<li><strong>3</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-pink btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center pricing">
								<div class="card-category">Enterprise</div>
								<div class="display-4 my-4">$99</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>10 </strong> FreeDomain Name</li>
									<li><strong>10</strong> One-Click Apps</li>
									<li><strong>8</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-warning btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body text-center  pricing">
								<div class="card-category">Unlimited</div>
								<div class="display-4 my-4">$139</div>
								<ul class="list-unstyled leading-loose">
									<li><strong>12 </strong> FreeDomain Name</li>
									<li><strong>10</strong> One-Click Apps</li>
									<li><strong>6</strong>  Databases</li>
									<li><strong>Money</strong> BackGuarantee</li>
									<li><strong>24/7</strong> Support</li>
								</ul>
								<div class="text-center mt-4">
									<a href="#" class="btn btn-danger btn-block">Buy Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endsection