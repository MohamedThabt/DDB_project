<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			{{-- LOGO --}}
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ route('course.index')}}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="main-logo" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{  route('course.index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ route('course.index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				{{-- USER_INFO --}}
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/user.png')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->first_name }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user()->type }}</span>
						</div>
					</div>
				</div>

				{{-- Admin options --}}
				<div>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#">
							<i class="side-menu__icon fe fe-grid"></i>
							<span class="side-menu__label">Dashboard</span>
							<i class="angle fe fe-chevron-down"></i>
						</a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ route('analytics') }}">Analytics</a></li>
							<li><a class="slide-item" href="{{ route('user.index') }}">Users</a></li>
							<li><a class="slide-item" href="{{ route('courses.analytics') }}">Courses</a></li>
							<li><a class="slide-item" href="{{ route('user.create') }}">Add user</a></li>
						</ul>
					</li>
				</div>
				<div>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#">
							<i class="side-menu__icon fe fe-grid"></i>
							<span class="side-menu__label">Courses</span>
							<i class="angle fe fe-chevron-down"></i>
						</a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="#">Analytics</a></li>
							<li><a class="slide-item" href="#">Users</a></li>
							<li><a class="slide-item" href="#">Courses</a></li>
							<li><a class="slide-item" href="#">Add user</a></li>
						</ul>
					</li>
				</div>


			</div>
		</aside>
<!-- main-sidebar -->
