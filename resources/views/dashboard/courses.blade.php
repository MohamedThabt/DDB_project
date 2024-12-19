@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">All Courses</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('course.index') }}">HOME</a></span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!--Row-->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Courses TABLE</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>

							</div>
							<div class="card-body">
								<div class="table-responsive border-top userlist-table">
									<table class="table card-table table-striped table-vcenter text-nowrap mb-0">
										{{-- Table Header --}}
										<thead>
											<tr>
												<th class="wd-lg-8p"><span></span></th>
												<th class="wd-lg-20p"><span>Name</span></th>
												<th class="wd-lg-20p"><span>created at</span></th>
												<th class="wd-lg-20p"><span>Instructor</span></th>
												<th class="wd-lg-20p"><span>Duration</span></th>
												<th class="wd-lg-20p">Action</th>
											</tr>
										</thead>

										{{-- every Course  --}}
										<tbody>
											@foreach ($courses as $course )
											<tr>
												{{-- Course image  --}}
												<td>
													<img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{URL::asset('assets/img/course/social.png')}}">
												</td>
												<td>{{ $course->name }}</td>
												{{-- Created at  --}}
												<td>
													<div class="text-sm">
														{{ $course->created_at->format('M d, Y h:i A') }}
														<div class="text-muted">
															{{ $course->created_at->diffForHumans() }}
														</div>
													</div>
												</td>
												{{-- instructor name --}}
												<td class="text-center">
													<span class="label d-flex">
														<div class="dot-label ml-1 bg-success"></div>
														@if ($courses->hasPages())
															<ul class="pagination mt-4 mb-0 float-left">
																{{-- Previous Page --}}
																<li class="page-item page-prev {{ $courses->onFirstPage() ? 'disabled' : '' }}">
																	<a class="page-link" href="{{ $courses->previousPageUrl() }}">Prev</a>
																</li>
																
																{{-- Pagination Elements --}}
																@foreach ($courses->getUrlRange(1, $courses->lastPage()) as $page => $url)
																	<li class="page-item {{ $courses->currentPage() == $page ? 'active' : '' }}">
																		<a class="page-link" href="{{ $url }}">{{ $page }}</a>
																	</li>
																@endforeach

																{{-- Next Page --}}
																<li class="page-item page-next {{ !$courses->hasMorePages() ? 'disabled' : '' }}">
																	<a class="page-link" href="{{ $courses->nextPageUrl() }}">Next</a>
																</li>
															</ul>
														@endif
</div>
														<span class="text-success">
															{{ $course->instructor->first_name ?? 'No instructor assigned' }}
														</span>
													</span>
												</td>
												{{-- duration --}}
												<td>
													{{ $course->duration }} hours
												</td>
												{{-- course actions  --}}
												<td>
													<a href="{{ route('course.show', $course->id) }}" class="btn btn-sm btn-primary">
														<i class="las la-search"></i>
													</a>
													<a href="{{ route('course.edit', $course->id) }}" class="btn btn-sm btn-info">
														<i class="las la-pen"></i>
													</a>
													{{-- Delete Button --}}
													<form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline">
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
															<i class="fas fa-trash"></i> 
														</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>

							{{-- pagination --}}
								
							</div>
						</div>
					</div><!-- COL END -->
				</div>
				<!-- row closed  -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endsection