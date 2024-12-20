@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Add User</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"><a href="{{ route('course.index') }}">HOME</a></span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

<div class="container">
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div id="wizard1">
                        <h3>Edit User</h3>
                        <section>
                            <form method="POST" action="{{ route('user.update', $user->id) }}">
                                @csrf
                                @method('PATCH') <!-- Use PATCH to match the route -->

                                <div class="control-group form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name" 
                                           class="form-control required @error('first_name') is-invalid @enderror" 
                                           placeholder="First Name" 
                                           value="{{ old('first_name', $user->first_name) }}">
                                    @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="control-group form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name" 
                                           class="form-control required @error('last_name') is-invalid @enderror" 
                                           placeholder="Last Name" 
                                           value="{{ old('last_name', $user->last_name) }}">
                                    @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="control-group form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" 
                                           class="form-control required @error('email') is-invalid @enderror" 
                                           placeholder="Email Address" 
                                           value="{{ old('email', $user->email) }}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="control-group form-group">
                                    <label class="form-label">Phone Number (Optional)</label>
                                    <input type="text" name="phone" 
                                           class="form-control @error('phone') is-invalid @enderror" 
                                           placeholder="Phone Number" 
                                           value="{{ old('phone', $user->phone) }}">
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="control-group form-group">
                                    <label class="form-label">Type</label>
                                    <select name="type" 
                                            class="form-control required @error('type') is-invalid @enderror">
                                        <option value="" disabled>Select User Type</option>
                                        <option value="instructor" {{ old('type', $user->type) == 'instructor' ? 'selected' : '' }}>Instructor</option>
                                        <option value="student" {{ old('type', $user->type) == 'student' ? 'selected' : '' }}>Student</option>
                                        <option value="admin" {{ old('type', $user->type) == 'admin' ? 'selected' : '' }}>Admin</option>
                                    </select>
                                    @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="control-group form-group mb-0">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
</div>



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
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!--Internal Fancy uploader js-->
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!--Internal Sumoselect js-->
<script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Internal TelephoneInput js-->
<script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
<script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
@endsection