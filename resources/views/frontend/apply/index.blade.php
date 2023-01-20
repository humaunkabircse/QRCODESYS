@extends('layouts.frontend')

@section('title', "Contact Details")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')

	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row text-center">

                <div class="text-center">
					<a href="https://www.drsangjuktasaha.com/">
						<img src="{{ asset('public/frontend/image/logo-wide.png') }}" class="rounded mx-auto d-block" style="height: 150px" alt="HUMAUN KABIR" />
					</a>
				</div>



				<div class="contact-content row ">
                    <a href="{{ url('/scanner') }}">
                        <i class="fa fa-camera" aria-hidden="true" style="    font-size: 100px;color: black;margin: 50px;"></i>
                    </a>

				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

@endsection


