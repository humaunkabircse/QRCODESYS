	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
		<!-- Topbar -->
		<div class="topbar bg-light">
			<div class="container">
				<div class="row">
					<div class="top-aside top-left clearfix">
						<ul class="top-contact clearfix">
							<li class="t-email t-email1">
								<em class="fa fa-envelope-o" aria-hidden="true"></em>
								<span><a href="mailto:info@reokhotrade.com">info@reokhotrade.com</a></span>
							</li>
							<li class="t-phone t-phone1">
								<i class="fa fa-mobile" aria-hidden="true"></i>
								<span>+880 1886613121</span>
							</li>
						</ul>
					</div>
					
					<div class="top-aside top-right clearfix">
						<ul class="social clearfix">
							<span>Change Language</span>
							
								@if(session()->get('lang') == 'japan')
								<li><a class="btn btn-sm btn-success" href="{{route('lang.english')}}">ENG</a></li>
								@else
								<li><a class="btn btn-sm btn-success" href="{{route('lang.japan')}}">JPN</a></li>
								@endif	

								{{-- <select class="btn-sm color-dark-navy">
									<option value="{{route('lang.english')}}">ENG</option>
									<option value="{{route('lang.japan')}}" selected>JPN</option>
								</select> --}}

						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<!-- #end Topbar -->
		<!-- Navbar -->
		<div class="navbar navbar-primary">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="{{url('/')}}">
					<img class="logo logo-dark" alt="" src="{{asset('public/frontend')}}/image/logo.png" srcset="{{asset('public/frontend')}}/image/logo2x.png 2x">
					<img class="logo logo-light" alt="" src="{{asset('public/frontend')}}/image/logo.png" srcset="{{asset('public/frontend')}}/image/logo_white2x.png 2x">
				</a>
				<!-- #end Logo -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- MainNav -->

				<nav class="navbar-collapse collapse" id="mainnav">
					<ul class="nav navbar-nav no-expanded">

						@if(session()->get('lang') == 'japan')
							
							<li class="dropdown"><a href="{{url('/')}}">家</a></li>
							<li><a href="{{url('/about')}}">私たちに関しては</a></li>
							<li class="dropdown">
								<a href="#">留学する</a>
								@php
								   $subcate = App\Models\Studysubcategory::where('menu_status','1')->get();
								@endphp
								<ul class="dropdown-menu">
							@foreach ($subcate as $item)
								<li><a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}"> {{ $item->studysubcategory_name_jpn }}</a></li>
							@endforeach
								</ul>
							</li>
							<li><a href="{{url('/service')}}">私たちのサービス</a></li>
							<li><a href="{{url('/course')}}">コース</a></li>
							<li><a href="{{url('/gallery')}}">ギャラリー</a></li>
							<li><a href="{{url('/contact')}}">コンタクト</a></li>
							<li><a href="{{url('/blog')}}">ブログ</a></li>
							<li><a href="{{ url('/apply') }}">申し込み</a></li>
							@else
							<li class="dropdown"><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/about')}}">About Us</a></li>
							
							<li class="dropdown">
								<a href="#">Study Abroad</a>
								@php
								   $subcate = App\Models\Studysubcategory::where('menu_status','1')->get();
								@endphp
								<ul class="dropdown-menu">
									 @foreach ($subcate as $item)
										<li><a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}"> {{ $item->studysubcategory_name }}</a></li>
									 @endforeach
								</ul>
							</li>

							{{-- <li><a href="{{url('/service')}}">Our Services</a></li> --}}
							<li><a href="{{url('/course')}}">Course</a></li>
							<li><a href="{{url('/gallery')}}">Gallery</a></li>
							<li><a href="{{url('/contact')}}">Contact</a></li>
							<li><a href="{{url('/blog')}}">Blog</a></li>
							<li><a href="{{ url('/apply') }}">Apply</a></li>

							
						@endif	
						<li>
							@if(Auth::Check())
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								Logout
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
							@else
							
							@endif
						</li>					
					</ul>

				</nav>
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->

	</header>
	<!-- End Header -->

